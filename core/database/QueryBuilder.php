<?php

class QueryBuilder
{

  protected $pdo;

  /*  Returns the Current Class Name */
  public static function getClass()
  {
    return __CLASS__;
  }

  /* Receives PDO object and assign to the QueryBuilder class pdo property */
  public function __construct(PDO $pdo)

  {
      $this -> pdo = $pdo;
  }

  /* Returns pdo */
  public function getInstance()
  {
    return $this -> pdo;
  }

  /* --------------- General Queries Starts -------------- */

  /*
      Parameter : Any Table name from the Database
      Result : Return All Rows from the Requested Table
  */
  public function selectAll( $table)

  {
    $statment = $this-> pdo -> prepare("select * from {$table}");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);

  }

  /*
      Parameter : Any Table Name from the Database, Row Entities
      Result : Insert the Every Parameters Passed into the Table Row { Once Called [ One at a Time]}
  */
  public function insert($table , $parameters)

  {
    $sql =  sprintf(
      'insert into %s (%s) values (%s)',
      $table ,
      implode(', ', array_keys($parameters)),
      ':'.implode(', :', array_keys($parameters))
    );

    try

    {
      $statment = $this -> pdo -> prepare($sql);
      $statment -> execute($parameters);
      return true;
    }catch(Exception $e) {
      return $e;
    }
  }
  /* ----------------- General Queries Ends ------------------- */

  /* --------------- User Related Queries Starts -------------- */

  /*
      Parameter : Any Table name from the Database , UserName
      Result : Return the role of the User passed
  */
  public function selectUserRole($table , $username)
  {
    $statment = $this -> pdo -> prepare("select role from {$table} where `username` = '$username' LIMIT 1");
    $statment -> execute();
    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }
  /*
  Parameter :Users Table from the Database, Email, Password
  Result : Update Old password of the Requested Email with the Requested new password
  */
  public function updatePassword($table , $password, $email)
  {
    // code.
    $statment = $this -> pdo -> prepare("update {$table} set `password`= '$password' where `email` = '$email'");
    $statment -> execute();
  }

  /*
  Parameter : Subscription Table from the Database, Subscriber Email
  Result : Fetch & Return a single email from the table , which matches the requested Subscriber Email
  */
  public function checkSubscription($table , $subscriber_email)
  {
    $statment = $this -> pdo -> prepare("select `email` from `$table` where `email`='$subscriber_email' LIMIT 1");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }
  /* --------------- User Related Queries Ends -------------- */

  /* --------------- Product Related Queries Starts -------------- */


  /*
      Parameter : Product Table name from the Database
      Result : Return all Results from the Requested Table, Ordered By Product Id {Descending Order Fetching}
  */
  public function selectAllProductsReverse($table)
  {
    $statment = $this-> pdo -> prepare("select * from {$table} order by `productId` DESC");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  /*
      Parameter : Product Table from the Database, ProductCode
      Result : Return All Rows from the Requested Table that Match the Product Code Given
  */
  public function updateProductViewCounter($table, $productCode)
  {

    $statment = $this -> pdo -> prepare("select * from  {$table} WHERE `productCode` = '$productCode' ");
    $statment->execute();
    return $statment -> fetchAll(PDO::FETCH_CLASS);

  }

  /*
      Parameter : MostViewedItems Table from the Database, Product Code
      Result : Insert Product Code, and Product Counter with Value = 1 , into the Table { Update Viewer Count for Single Product}
  */
  public function updateProductViewByInsert($table, $productCode)
  {
    // code...
    $statment = $this -> pdo -> prepare("insert into {$table}(`productCode`,`Counter`) values('$productCode','1')");
    $statment -> execute();
  }

  /*
      Parameter : MostViewedItems Table from the Database
      Result : Updates Product Counter { Update Viewer Count for Single Product}
  */
  public function updateProductViewByUpdate($table, $productCode)
  {
    // code.
    $statment = $this -> pdo -> prepare("update {$table} set `Counter`= `Counter` + 1 where `productCode` = '$productCode'");
    $statment -> execute();
  }


  /*
      Parameter : Products & Order Table from the Database
      Result : Insert Product Code, and Product Counter with Value = 1 , into the Table { Update Viewer Count for Single Product}
  */
  public function queryTopSellingProducts($productsTable , $orderTable)
  {
    $statment = $this -> pdo -> prepare("select * from `$productsTable` JOIN `$orderTable` ON `payment_status`='paid' AND `productId`=`order_productId`");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  /*
      Parameter : Products Table from the Database, ProductCode
      Result : Fetch & Return  a Single Product that matches the given ProductCode
  */
  public function getProduct($table , $product_code)
  {
    $statment = $this -> pdo -> prepare("select * from `$table` where `productCode`= '$product_code' LIMIT 1");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  /*
      Parameter : GalleryTable Table from the Database, ProductCode
      Result : Fetch & Return all Gallery Photo's of that has ProductCode matching the Requested ProductCode
  */
  public function getProductImages($table , $product_code)
  {
    $statment = $this -> pdo -> prepare("select `galleryPhoto` from `$table` JOIN `products` ON  `productCode`= '$product_code' AND `gallery_product_id`=`productId`");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  /*
      Parameter : Products Table from the Database, ProductCode
      Result : Fetch & Return  all Products that are in the same Product Group with respect to the Requested ProductCode
  */
  public function getRelatedProducts($table , $product_code)
  {
    $statment = $this -> pdo -> prepare("select DISTINCT  D.manfacturedBy ,D.productDescription,D.productSize ,D.productImageZoomed ,D.productName,D.productImportDate,D.productQuantity,D.productPrice, D.productImage, D.productCode, D.rating from `$table` as C  LEFT JOIN `$table` as D ON D.productCategoryId=C.productCategoryId OR D.manfacturedBy = C.manfacturedBy AND C.productCode='$product_code' AND D.productCode != '$product_code'");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }


  /*
      Parameter : Products Table from the Database
      Result : Fetch & Return 3 Products from the Products Table
  */
  public function selectProductsForSearch($table)
  {
    $statment = $this -> pdo -> prepare("select * from `$table`  LIMIT 3");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  /*
      Parameter : Products Table from the Database, Catagory Name
      Result : Fetch & Return all Products that have the same Catagory with respect to the Catagory Requested
  */
  public function getProductByCategory($table, $categoryName)
  {
    $statment = $this -> pdo -> prepare("select * from `$table` as C JOIN `productcategory` as D ON D.productCategoryName = '$categoryName' AND C.productCategoryId = D.productCategoryId ");
    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  /*
      Parameter : ProductCatagory Table from the Database, Product Catagory Name
      Result : Fetch & Return the Product Catagory Id of the Requested Catagory
  */
  public function getProductCategoryName($table , $categoryName)
  {
    $statment = $this -> pdo -> prepare("select `productCategoryId` from `$table` where `productCategoryName`='$categoryName' LIMIT 1");
    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  /*
      Parameter : Cart Table from the Database, ProductCode, Price , Quantity
      Result : Insert ProductCode , Product Price & Product Quantity in 1 row into Cart Table
  */

  public function addProductToCart($table , $productCode , $price, $quantity)
  {
    $statment = $this -> pdo -> prepare("insert into `$table`(cartProductCode , price, quantity) values('$productCode', '$price', '$quantity')");
    $statment -> execute();
  }

  /*
      Parameter : Wishlist Table from the Database, ProductCode, Price , Quantity
      Result : Insert ProductCode , Product Price & Product Quantity in 1 row into Wishlist Table
  */
  public function addProductToWishlist($table , $productCode , $price, $quantity)
  {
    $statment = $this -> pdo -> prepare("insert into `$table`(cartProductCode , price, quantity) values('$productCode', '$price', '$quantity')");
    $statment -> execute();
  }

  /* ---------------------------------Product Related Queries Ends ----------------------------------*/
}

 ?>
