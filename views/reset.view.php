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
														<div class="col-md-9 center-column" id="content">



      <p>If you already have an account with us, please login at the <a href="/emazon/login">login page</a>.</p>
      <form action="/emazon/reset" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend>New Password: </legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="text" name="email" value="<?php echo $email;?>" autocomplete="off"  id="input-password" class="form-control" hidden/>
              <input type="text" name="password" value="" placeholder="New Password Here" id="input-password" class="form-control" />
                          </div>
          </div>
        </fieldset>

      	<div class="buttons">
          <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a>                        <input type="checkbox" name="agree" value="1" />
                        &nbsp;
            <input type="submit" name="submit" value="Continue" class="btn btn-primary" />
          </div>
        </div>
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
