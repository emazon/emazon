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


			<form action="http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=checkout/cart/edit" method="post" enctype="multipart/form-data">
  <div class="table-responsive cart-info">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td class="text-center hidden-xs">Product Code</td>
          <td class="text-center">Quantity</td>
          <td class="text-right hidden-xs">Unit Price</td>
          <td class="text-right">Total</td>
        </tr>
      </thead>
      <tbody>

							<?php foreach(getCartProducts() as $cartItem): ?>
							<?php echo "<tr>

				<td class='text-center hidden-xs'><a href='http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=product/product&amp;product_id=49'>".$cartItem->getProductCode()."</a>
											<span class='text-danger'></span>
																							<br />

											</td>
				<td class='text-center'>
						<input type='text' value='".$cartItem->getProductQuantity()."'  size='1' />
						&nbsp;

				</td>
				<td class='text-right hidden-xs'>".$cartItem->getProductPrice()."</td>
				<td class='text-right'>".$cartItem->getProductPrice() * $cartItem->getProductQuantity()."</td>
			</tr> "; ?>
							<?php endforeach; ?>

                      </tbody>
    </table>
  </div>
</form>

<h2>What would you like to do next?</h2>
<p style="padding-bottom: 10px">Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
<div class="panel-group" id="accordion">
          <div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title"><a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Use Coupon Code <i class="fa fa-caret-down"></i></a></h4>
  </div>
  <div id="collapse-coupon" class="panel-collapse collapse">
    <div class="panel-body">
      <label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>
      <div class="input-group">
        <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control" />
        <span class="input-group-btn">
        <input type="button" value="Apply Coupon" id="button-coupon" data-loading-text="Loading..."  class="btn btn-primary" />
        </span></div>
      <script type="text/javascript"><!--
$('#button-coupon').on('click', function() {
	$.ajax({
		url: '#',
		type: 'post',
		data: 'coupon=' + encodeURIComponent($('input[name=\'coupon\']').val()),
		dataType: 'json',
		beforeSend: function() {
			$('#button-coupon').button('loading');
		},
		complete: function() {
			$('#button-coupon').button('reset');
		},
		success: function(json) {
			$('.alert').remove();

			if (json['error']) {
				$('.center-column > *:first-child').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

				$('html, body').animate({ scrollTop: 0 }, 'slow');
			}

			if (json['redirect']) {
				location = json['redirect'];
			}
		}
	});
});
//--></script>
    </div>
  </div>
</div>


<div class="cart-total">
    <table>
            <tr>
        <td class="text-right"><strong>Sub-Total:</strong></td>
        <td class="text-right"><?php echo getSubTotal(); ?></td>
      </tr>
            <tr>
        <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
        <td class="text-right">$2.00</td>
      </tr>
            <tr>
        <td class="text-right"><strong>VAT (20%):</strong></td>
        <td class="text-right"><?php echo getTotalTax();?></td>
      </tr>
            <tr>
        <td class="text-right"><strong>Total:</strong></td>
        <td class="text-right"><?php echo getTotalPriceWithTaxIncluded(); ?></td>
      </tr>
          </table>
</div>
<div class="buttons">
  <div class="pull-left"><a href="/emazon" class="btn btn-default">Continue Shopping</a></div>
  <div class="pull-right"><a href="/emazon/checkout" class="btn btn-primary">Checkout</a></div>
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


<!-- Main Body Ends -->

<?php require('partials/footer.php'); ?>
