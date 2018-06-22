<?php

    $currentDir = getcwd();
    $uploadDirectory = "C:/xampp/htdocs/emazonResource/images/product_gallery_images/Stock/";
    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));


    function resize($image_name){

      $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

      $fileName = $_FILES['myfile']['name'];
      $fileExtension = strtolower(end(explode('.',$fileName)));

      $target_dir = "";
      $image = explode('/', $image_name);
      $image = array_pop($image);
      $target_file = "C:/xampp/htdocs/emazonResource/images/product_gallery_images/Stock/".$image."_resized.".$fileExtension;

      $image = new \App\Core\Imager();
      $image->load($image_name);
      $image->resize(500, 500);
      $image->save($target_file);
      return $image;
    }


    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }


        if (empty($errors)) {


            $uploadPath = $uploadDirectory.basename($fileName);

            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
            resize("http://localhost/emazonResource/images/product_gallery_images/Stock/".$fileName);

            $productCategoryId="";

            if ($didUpload || $didUpload2)
            {
                echo "The file " . basename($fileName) . " has been uploaded\n";

                $tak = App::get('database')->selectAll("productcategory");
                $data = json_decode( json_encode($tak), true);

                App::get('database')->insert('products',

                    [
                      'productName' => $_POST['productName'],
                      'productQuantity' =>  $_POST['productQuantity'],
                      'productPrice' => $_POST['productPrice'],
                      'productDescription' =>$_POST['productDescription'],
                      'productSize' => $_POST['productSize'],
                      'productImage' => "http://localhost/emazonResource/images/product_gallery_images/Stock/".$fileName,
                      "productImageZoomed" => "http://localhost/emazonResource/images/product_gallery_images/Stock/".$fileName."_resized.".$fileExtension,
                      'manfacturedBy' => $_POST['productManfacturer']
                    ]
                  );
            } else {
                //echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                //echo $error . "These are the errors" . "\n";
            }
        }
    }


 ?>
