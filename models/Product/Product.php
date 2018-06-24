<?php

  namespace App\Models\Product;
  use App\Core\Utility;
  use App\Models\Product\Product;

  class Product
  {

    private $productId;
    private $productName;
    private $productDescription;
    private $productPrice;
    private $productQuantity;
    private $productImportDate;
    private $productFrontImage;
    private $productZoomedImage;
    private $productCategory;
    private $productManufacturer;
    private $productCode;
    private $productRating;
    private $productColor;
    private $productSize;

    private $databaseInstance;
    private $product;

    public function __construct($databaseInstance=NULL)
    {

        $this -> databaseInstance = $databaseInstance;

    }



    /* Product Id  Set & Get  ------------ */
    public function setProductId($id)
    {
        $this -> productId = $id;
    }

    public function getProductId()
    {
        return $this -> productId;
    }
    /* ------------- Product Id Ends */

    /* Product name  Set & Get  ------------ */
    public function setProductName($name)
    {
        $this -> productName = $name;
    }

    public function getProductName()
    {
        return $this -> productName;
    }
    /* ------------- Product name Ends */


    /* Product description  Set & Get  ------------ */
    public function setProductDescription($description)
    {
        $this -> productDescription = $description;
    }

    public function getProductDescription()
    {
        return $this -> productDescription;
    }
    /* ------------- Product description Ends */


    /* Product Price  Set & Get  ------------ */
    public function setProductPrice($price)
    {
        $this -> productPrice = $price;
    }

    public function getProductPrice()
    {
        return $this -> productPrice;
    }
    /* ------------- Product Price Ends */

    /* Product Quantity  Set & Get  ------------ */
    public function setProductQuantity($quantity)
    {
        $this -> productQuantity = $quantity;
    }

    public function getProductQuantity()
    {
        return $this -> productQuantity;
    }
    /* ------------- Product Quantity Ends */

    /* Product Import Date  Set & Get  ------------ */
    public function setProductImportDate($date)
    {
        $this -> productImportDate = $date;
    }

    public function getProductImportDate()
    {
        return $this -> productImportDate;
    }
    /* ------------- Product Import Date Ends */

    /* Product Front Image  Set & Get  ------------ */
    public function setProductFrontmage($pic)
    {
        $this -> productFrontImage = $pic;
    }

    public function getProductFrontImage()
    {
        return $this -> productFrontImage;
    }
    /* ------------- Product Front Image Ends */

    public function setProductZoomedImage($pic)
    {
        $this -> productZoomedImage = $pic;
    }

    public function getProductZoomedImage()
    {
        return $this -> productZoomedImage;
    }

    /* Product Category Set & Get  ------------ */
    public function setProductCategory($productCategory)
    {
        $this -> productCategory = $productCategory;
    }

    public function getProductCategory()
    {
        return $this -> productCategory;
    }
    /* ------------- Product Category Ends */

    /* Product Manfacturer Set & Get  ------------ */
    public function setProductManufacturer($manfacturer)
    {
        $this -> productManufacturer = $manfacturer;
    }

    public function getProductManufacturer()
    {
        return $this -> productManufacturer;
    }
    /* ------------- Product Manfacturer Ends */

    /* ------------- Product Code Set & Get --------------- */
    public function setProductCode($code)
    {
        $this -> productCode = $code;
    }

    public function getProductCode()
    {
        return $this -> productCode;
    }
    /* ------------- Product Code Ends */

    /* ------------- Product Rating Set & Get --------------- */
    public function setProductRating($rateValue)
    {
        $this -> productRating = $rateValue;
    }

    public function getProductRating()
    {
        return $this -> productRating;
    }
    /* ------------- Product Rating Ends*/

    /* ------------- Product Color Set & Get --------------- */
    public function setProductColor($color)
    {
        $this -> productColor = $color;
    }

    public function getProductColor()
    {
        return $this -> productColor;
    }
    /* ------------- Product Color Ends */

    /* ------------- Product Size Set & Get --------------- */
    public function setProductSize($color)
    {
        $this -> productSize = $color;
    }

    public function getProductSize()
    {
        return $this -> productSize;
    }
    /* ------------- Product Size Ends */

    /* ------------------------------------------------------- Getter Setter Ends ------------------------------------------------*/


    /** Fetch and Return All Products */
    public function getProducts()
    {

        $databaseResults = $this -> databaseInstance -> selectAllProductsReverse("products");
        $resultsDecoded= Utility::jsonEncodeThenDecode($databaseResults);

        return $this -> productMapper($resultsDecoded);
    }

    /** Fetch and Return Top Selling Products */
    public function getTopSellingProducts()
    {
        $databaseResults = $this -> databaseInstance -> queryTopSellingProducts("products" , "order");
        $resultsDecoded= Utility::jsonEncodeThenDecode($databaseResults);

        return $this -> productMapper($resultsDecoded);
    }

    /** Fetch and Return Products Based On Queried Product Catagory Name */
    public function getProductByCategory($category_name)
    {
        $databaseResults = $this -> databaseInstance -> getProductByCategory('products',$category_name);
        $resultsDecoded= Utility::jsonEncodeThenDecode($databaseResults);

        return $this -> productMapper($resultsDecoded);
    }

    /** Updates the Product Queried Most Viewed Status By 1 */
    public function updateProductViewCounter($product_code)
    {

          $databaseResults = $this -> databaseInstance -> updateProductViewCounter("mostViewedItems", $product_code);
          $resultsDecoded= Utility::jsonEncodeThenDecode($databaseResults);

          return count($resultsDecoded);
    }

    /** Fetch and Return Single Product Detail */
    public function getProduct($product_code)
    {
          $databaseResults = $this -> databaseInstance -> getProduct("products" , $product_code);
          $resultsDecoded= Utility::jsonEncodeThenDecode($databaseResults);

          return $this -> productMapper($resultsDecoded);
    }

    /** Fetch and Return All Products that are Related [ Same Catagory ]*/
    public function getRelatedProducts($product_code)
    {

        $databaseResults = $this -> databaseInstance -> getRelatedProducts("products" , $product_code);
        $resultsDecoded= Utility::jsonEncodeThenDecode($databaseResults);

        return ($this -> productMapper($resultsDecoded));
    }

    /** Maps and Return Instance of Products */
    public function productMapper($products)
    {
        $productMapped = array_map(function ($product){

              $this -> product = new Product();
              $this -> product -> setProductName($product["productName"]);
              $this -> product -> setProductQuantity($product['productQuantity']);
              $this -> product -> setProductPrice($product['productPrice']);
              $this -> product -> setProductImportDate($product['productImportDate']);
              $this -> product -> setProductDescription($product['productDescription']);
              $this -> product -> setProductCode($product['productCode']);
              $this -> product -> setProductSize($product['productSize']);
              $this -> product -> setProductFrontmage($product['productImage']);
              $this -> product -> setProductZoomedImage($product['productImageZoomed']);
              $this -> product -> setProductRating($product['rating']);
              $this -> product -> setProductManufacturer($product['manfacturedBy']);

              return $this -> product;

        }, $products);

        return $productMapped;
    }

}
