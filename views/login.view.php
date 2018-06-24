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



						<div class="row">
														<div class="col-md-12 center-column" id="content">



<div class="row">
  <div class="col-sm-6 col-md-6">
    <div class="well">
      <h2>New Customer</h2>
      <p><strong>Register Account</strong></p>
      <p style="padding-bottom: 10px">By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
      <a href="/emazon/signup" class="btn btn-primary">Continue</a></div>
  </div>
  <div class="col-sm-6 col-md-6">
    <div class="well">
      <h2>Returning Customer</h2>
      <p><strong>I am a returning customer</strong></p>
      <form action="/emazon/login" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label class="control-label" for="input-email">E-Mail Address</label>
          <input type="text" name="username" value="" placeholder="Username " id="input-email" class="form-control" />
        </div>
        <div class="form-group" style="padding-bottom: 10px">
          <label class="control-label" for="input-password">Password</label>
          <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
          <a href="/emazon/resetPassword">Forgotten Password</a></div>
        <input type="submit" value="Login" class="btn btn-primary" />
              </form>
    </div>
  </div>
</div>


													</div>
					</div>

									</div>

				<div class="row">
					<div class="col-sm-12">
											</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Main Section Ends -->

<!-- - - - - - - - - - - - - - - - - Footer Starts - - -  - - - - - - - - - - - - - - - - - - - - - - -->

<?php require('partials/footer.php'); ?>

<!-- - - - - - - - - - - - - - - - - - - - Footer Ends - - - - - - - - - - - - - - - - - - - - - - - - - - -- >
