<!-- - - - - - - - - - - - - - - - - Header Starts - - -  - - - - - - - - - - - - - - - - - - - - - - -->

<?php require('partials/nav.php'); ?>

<!-- - - - - - - - - - - - - - - - - - - - Header Ends - - - - - - - - - - - - - - - - - - - - - - - - - - -- >

<!-- MAIN CONTENT
	================================================== -->
<div class="main-content full-width inner-page">
	<div class="background-content"></div>
	<div class="background">
		<div class="shadow"></div>
		<div class="pattern">
			<div class="container">


				<div class="row">

										<div class="col-md-12 pull-right-sm">


                						<div class="row">
    														<div class="col-md-12 center-column" id="content">

                                  <form  action="/emazon/productAdd" method="post" enctype="multipart/form-data">
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Product Name</label>
                                        <input type="text" class="form-control" name="productName"  id="exampleFormControlInput1" placeholder="Product Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">Product Quantity</label>
                                        <input type="number" class="form-control" name="productQuantity"  id="exampleFormControlInput2" placeholder="Product Quantity">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput3">Product Price</label>
                                        <input type="number" class="form-control" name="productPrice"  id="exampleFormControlInput3" placeholder="Product Price">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Product Category Name</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="productCategory">
                                          <?php foreach(getProductCategories() as $productCategories): ?>
                                          <?php echo "<option value=".$productCategories->getProductCategoryName().">".$productCategories->getProductCategoryName()."</option>";?>
                                          <?php endforeach; ?>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Product Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="productDescription"></textarea>
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleFormControlInput5">Product Size</label>
                                        <input type="text" class="form-control" name="productSize"  id="exampleFormControlInput5" placeholder="Product Size">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput6">Product Image</label>
                                        <input type="file" class="form-control" name="myfile" id="exampleFormControlInput6" placeholder="Product Image">
                                      </div>
                                    	<div class="form-group">
                                        <label for="exampleFormControlInput8">Product Manfacturer</label>
                                        <input type="text" class="form-control" name="productManfacturer"  id="exampleFormControlInput8" placeholder="Product Manfacturer">
                                      </div>
                                      <button type="submit" name="submit" class="btn btn-primary mb-2">Add Product</button>
                                  </form>



                                  </div>

  													</div>
					            </div>

				</div>


			</div>
		</div>
	</div>
</div>

<!-- Main Body Ends -->

<?php require('partials/footer.php'); ?>
