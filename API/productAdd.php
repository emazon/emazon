<?php
    use App\Models\User\Admin;
    use App\Core\Imager;
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

      $image = new Imager();
      $image->load($image_name);
      $image->resize(400, 400);
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

                $productCode = rand();
                $productCode = "emazon_".$productCode;

                $adminInstance = new Admin(App::get('database'));
                $productAddStatus = $adminInstance -> addProduct($_POST['productName'],$_POST['productQuantity'],
                            $_POST['productPrice'], $_POST['productDescription'], $_POST['productSize'], $productCode,
                            "http://localhost/emazonResource/images/product_gallery_images/Stock/".$fileName."_resized.".$fileExtension,
                            "http://localhost/emazonResource/images/product_gallery_images/Stock/".$fileName, $_POST['productManfacturer']);

                header('location:http://localhost:8888/emazon/products');
            } else {

            }
        } else {
            header('location:http://localhost:8888/emazon/productAdd');
        }
    }else{
      header('location:http://localhost:8888/emazon/productAdd');
    }



 ?>
