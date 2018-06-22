<?php

class QueryBuilder
{

  protected $pdo;

  public function __construct(PDO $pdo)

  {
      $this -> pdo = $pdo;
  }

  public function getInstance()
  {
    return $this -> pdo;
  }


  public function selectAll( $table)

  {
    $statment = $this-> pdo -> prepare("select * from {$table}");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);

  }

  public function selectAllProductsReverse($table)
  {
    $statment = $this-> pdo -> prepare("select * from {$table} order by `productId` DESC");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  public function updateProductViewCounter($table, $productCode)
  {

    $statment = $this -> pdo -> prepare("select * from  {$table} WHERE `productCode` = '$productCode' ");
    $statment->execute();
    return $statment -> fetchAll(PDO::FETCH_CLASS);

  }

  public function updateProductViewByInsert($table, $productCode)
  {


    // code...
    $statment = $this -> pdo -> prepare("insert into {$table}(`productCode`,`Counter`) values('$productCode','1')");
    $statment -> execute();
  }


  public function updateProductViewByUpdate($table, $productCode)
  {
    // code.
    $statment = $this -> pdo -> prepare("update {$table} set `Counter`= `Counter` + 1 where `productCode` = '$productCode'");
    $statment -> execute();
  }


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

      }catch(Exception $e) {
        die("Something went wrong".$e);
      }
  }

  public function queryTopSellingProducts($productsTable , $orderTable)
  {
    $statment = $this -> pdo -> prepare("select * from `$productsTable` JOIN `$orderTable` ON `payment_status`='paid' AND `productId`=`order_productId`");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  public function getProduct($table , $product_code)
  {
    $statment = $this -> pdo -> prepare("select * from `$table` where `productCode`= '$product_code'");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  public function getProductImages($table , $product_code)
  {
    $statment = $this -> pdo -> prepare("select `galleryPhoto` from `$table` JOIN `products` ON  `productCode`= '$product_code' AND `gallery_product_id`=`productId`");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  public function getRelatedProducts($table , $product_code)
  {
    $statment = $this -> pdo -> prepare("select DISTINCT  D.productName,D.productQuantity,D.productPrice, D.productImage, D.productCode, D.rating from `$table` as C  LEFT JOIN `$table` as D ON D.productCategoryId=C.productCategoryId OR D.manfacturedBy = C.manfacturedBy AND C.productCode='$product_code' AND D.productCode != '$product_code'");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  public function checkSubscription($table , $subscriber_email)
  {
    $statment = $this -> pdo -> prepare("select `email` from `$table` where `email`='$subscriber_email' LIMIT 1");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  public function selectProductsForSearch($table)
  {
    $statment = $this -> pdo -> prepare("select * from `$table`  LIMIT 3");

    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  public function getProductByCategory($table, $categoryName)
  {
    $statment = $this -> pdo -> prepare("select * from `$table` as C JOIN `productcategory` as D ON D.productCategoryName = '$categoryName' AND C.productCategoryId = D.productCategoryId ");
    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  public function getProductCategoryName($table , $categoryName)
  {
    $statment = $this -> pdo -> prepare("select `productCategoryId` from `$table` where `productCategoryName`='$categoryName' LIMIT 1");
    $statment -> execute();

    return $statment -> fetchAll(PDO::FETCH_CLASS);
  }

  public function addProductToCart($table , $productCode , $price, $quantity)
  {
    $statment = $this -> pdo -> prepare("insert into `$table`(cartProductCode , price, quantity) values('$productCode', '$price', '$quantity')");
    $statment -> execute();


  }



}

 ?>
