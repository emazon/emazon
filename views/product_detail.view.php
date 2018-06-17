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


										<div class="col-md-9 pull-right-sm">


						<div class="row">
														<div class="col-md-12 center-column" id="content">



<div itemscope itemtype="http://schema.org/Product">
  <span itemprop="name" class="hidden"></span>
  <div class="product-info">
  	<div class="row">
  	       		<div class="col-sm-12">
  			<div class="row" id="quickview_product">
			    			    <script>
			    	$(document).ready(function(){
			    	     if($(window).width() > 992) {
     			    		     				    		$('#image').elevateZoom({
     								zoomWindowFadeIn: 500,
     								zoomWindowFadeOut: 500,
     								zoomWindowOffetx: 20,
     								zoomWindowOffety: -1,
     								cursor: "pointer",
     								lensFadeIn: 500,
     								lensFadeOut: 500,
     				    		});

     			    		var z_index = 0;

     			    		$(document).on('click', '.open-popup-image', function () {
     			    		  $('.popup-gallery').magnificPopup('open', z_index);
     			    		  return false;
     			    		});

     			    		$('.thumbnails a, .thumbnails-carousel a').click(function() {
     			    			var smallImage = $(this).attr('data-image');
     			    			var largeImage = $(this).attr('data-zoom-image');
     			    			var ez =   $('#image').data('elevateZoom');
     			    			$('#ex1').attr('href', largeImage);
     			    			ez.swaptheimage(smallImage, largeImage);
     			    			z_index = $(this).index('.thumbnails a, .thumbnails-carousel a');
     			    			return false;
     			    		});
			    		} else {
			    			$(document).on('click', '.open-popup-image', function () {
			    			  $('.popup-gallery').magnificPopup('open', 0);
			    			  return false;
			    			});
			    		}
			    	});
			    </script>
			    			    			    <div class="col-sm-6 popup-gallery">

			      <div class="row">

				      <div class="col-sm-12">
				      						      <div class="product-image cloud-zoom">

					     	 <a href="#" title="Teclado Inalambrico Bluetooth Con Air Mouse" id="ex1" class="open-popup-image"><img src=<?php echo $productsContainer[0]->getProductFrontImage(); ?> title=<?php echo $productsContainer[0]->getProductName(); ?>  id='image' itemprop='image' data-zoom-image=<?php echo $productsContainer[0]->getProductFrontImage(); ?> /></a>
					      </div>
					  	 				      </div>

				      				      <div class="col-sm-12">
				           <div class="overflow-thumbnails-carousel">
     					      <div class="thumbnails-carousel owl-carousel">

											<!-- Products Gallery Image Here -->

														  	     <!-- <div class="item"><a href="#" class="popup-image" data-image="http://localhost/emazonResource/images/Product_Images/item-img-1-11-600x600.jpg" data-zoom-image="http://localhost/emazonResource/images/Product_Images/item-img-1-11-1000x1000.jpg"><img src="http://localhost/emazonResource/images/Product_Images/item-img-1-11-150x150.jpg" title="Teclado Inalambrico Bluetooth Con Air Mouse" alt="Teclado Inalambrico Bluetooth Con Air Mouse" /></a></div>
	      	     						          						         <div class="item"><a href="#" class="popup-image" data-image="http://localhost/emazonResource/images/Product_Images/item-img-1-12-1000x1000.jpg" data-zoom-image="http://localhost/emazonResource/images/Product_Images/item-img-1-12-1000x1000.jpg"><img src="http://localhost/emazonResource/images/Product_Images/item-img-1-12-150x150.jpg" title="Teclado Inalambrico Bluetooth Con Air Mouse" alt="Teclado Inalambrico Bluetooth Con Air Mouse" /></a></div>
		          						         <div class="item"><a href="#" class="popup-image" data-image="http://localhost/emazonResource/images/Product_Images/item-img-1-13-1000x1000.jpg" data-zoom-image="http://localhost/emazonResource/images/Product_Images/item-img-1-13-1000x1000.jpg"><img src="http://localhost/emazonResource/images/Product_Images/item-img-1-13-150x150.jpg" title="Teclado Inalambrico Bluetooth Con Air Mouse" alt="Teclado Inalambrico Bluetooth Con Air Mouse" /></a></div> -->
																	<!-- Ends -->
											</div>
					      </div>

					      <script type="text/javascript">
					           $(document).ready(function() {
					             $(".thumbnails-carousel").owlCarousel({
					                 autoPlay: 6000, //Set AutoPlay to 3 seconds
					                 navigation: true,
					                 navigationText: ['', ''],
					                 itemsCustom : [
					                   [0, 3],
					                   [450, 4],
					                   [550, 5],
					                   [768, 2],
					                   [1200, 3]
					                 ],
					             });
					           });
					      </script>
				      </div>
				      			      </div>

			      			    </div>

			    <div class="col-sm-6 product-center clearfix">
			     <div itemprop="offerDetails" itemscope itemtype="http://schema.org/Offer">
			      <h2 class="product-name"><?php echo $productsContainer[0]->getProductName(); ?></h2>
			      			      <div class="description">
			        			        <span>Brand:</span> <a href="#" itemprop="brand"><?php echo $productsContainer[0]->getProductManufacturer(); ?></a><br />
			        			        <span >Product Code :</span> <span id='product-code'> <?php echo $productsContainer[0]->getProductCode(); ?></span><br />
			        			        <span>Availability:</span> In Stock</div>
			      			      <div class="price">
			        			        <span class="price-new">$<span itemprop="price" id="price-old"><?php echo number_format($productsContainer[0]->getProductPrice() , 2)?></span></span>

			        			        			      </div>
			      			     </div>

			     <div id="product">
			      			      			      <div class="options">
			        <h2>Available Options</h2>
			        			        													        			        			        			        			       				       	<div class="form-group required">
			       	  <label class="control-label" for="input-option225">Delivery Date</label>
			       	  <div class="input-group date">
			       	    <input type="text" name="option[225]" value="2011-04-22" data-date-format="YYYY-MM-DD" id="input-option225" class="form-control" />
			       	    <span class="input-group-btn">
			       	    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
			       	    </span></div>
			       	</div>
			       				       				       				        			      </div>


			      <div class="cart">
			        <div class="add-to-cart clearfix">
			               			          <p>Qty</p>
     			          <div class="quantity">
     				          <input type="text" name="quantity" id="quantity_wanted" size="2" value="1" />
     				          <a href="#" id="q_up"><i class="fa fa-plus"></i></a>
     				          <a href="#" id="q_down"><i class="fa fa-minus"></i></a>
     			          </div>
     			          <input type="hidden" name="product_id" size="2" value="47" />
     			          <input type="button" value="Add to Cart" id="button-cart" rel="47" data-loading-text="Loading..." class="button" />

     			          			          			        </div>

			        <div class="links">
			        	<a onclick="wishlist.add('47');">Add to Wish List</a>
			        	<!-- <a onclick="compare.add('47');">Compare this Product</a> -->
			        </div>

			        			      </div>
			     </div><!-- End #product -->
			      			      <div class="review">
			      				        <div class="rating">
			        	<i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
			        	&nbsp;&nbsp;&nbsp;<a onclick="$('a[href=\'#tab-review\']').trigger('click'); $('html, body').animate({scrollTop:$('#tab-review').offset().top}, '500', 'swing');">0 reviews</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a onclick="$('a[href=\'#tab-review\']').trigger('click'); $('html, body').animate({scrollTop:$('#tab-review').offset().top}, '500', 'swing');">Write a review</a>
			        </div>
			        			      </div>

			      		    	</div>
		    </div>
    	</div>

    	    </div>
  </div>


    <div id="tabs" class="htabs">
  	<a href="#tab-description">Description</a><a href="#tab-attribute">Specification</a><a href="#tab-review">Reviews (0)</a>  </div>
    <div id="tab-description" class="tab-content" itemprop="description"><p>
					<p><?php echo $productsContainer[0]->getProductDescription(); ?></p>
</div>
    <div id="tab-attribute" class="tab-content">
    <table class="attribute" cellspacing="0">
            <thead>
        <tr>
          <td colspan="2">Memory</td>
        </tr>
      </thead>
      <tbody>
                <tr>
          <td>test 1</td>
          <td>16GB</td>
        </tr>
              </tbody>
            <thead>
        <tr>
          <td colspan="2">Processor</td>
        </tr>
      </thead>
      <tbody>
                <tr>
          <td>No. of Cores</td>
          <td>4</td>
        </tr>
              </tbody>
          </table>
  </div>
      <div id="tab-review" class="tab-content">
	<form class="form-horizontal" id="form-review">
	  <div id="review"></div>
	  <h2>Write a review</h2>
	  	  <div class="form-group required">
	    <div class="col-sm-12">
	      <label class="control-label" for="input-name">Your Name</label>
	      <input type="text" name="name" value="" id="input-name" class="form-control" />
	    </div>
	  </div>
	  <div class="form-group required">
	    <div class="col-sm-12">
	      <label class="control-label" for="input-review">Your Review</label>
	      <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
	      <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
	    </div>
	  </div>
	  <div class="form-group required">
	    <div class="col-sm-12">
	      <label class="control-label">Rating</label>
	      &nbsp;&nbsp;&nbsp; Bad&nbsp;
	      <input type="radio" name="rating" value="1" />
	      &nbsp;
	      <input type="radio" name="rating" value="2" />
	      &nbsp;
	      <input type="radio" name="rating" value="3" />
	      &nbsp;
	      <input type="radio" name="rating" value="4" />
	      &nbsp;
	      <input type="radio" name="rating" value="5" />
	      &nbsp;Good</div>
	  </div>
	  	  <div class="buttons clearfix" style="margin-bottom: 0px">
	    <div class="pull-right">
	      <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
	    </div>
	  </div>
	  	</form>
  </div>

      <div class="box clearfix">
        <!-- Carousel nav -->
    <a class="next" href="#myCarousel9937785" id="myCarousel9937785_next"><span></span></a>
    <a class="prev" href="#myCarousel9937785" id="myCarousel9937785_prev"><span></span></a>

    <div class="box-heading">Related Products</div>
    <div class="strip-line"></div>
    <div class="box-content products related-products">
      <div class="box-product">
      	<div id="myCarousel9937785" class="carousel slide">
      		<!-- Carousel items -->
      		<div class="carousel-inner">
      			  	    			<div class="active item">
														<div class="product-grid">
															<div class="row">
																<!-- Yabbb Modification -->

																<?php foreach (array_slice(getRelatedProducts(), 0, 3) as $product): ?>

																	 <?php  echo "<div class='col-sm-3 col-xs-6'>

																								<!-- Product -->
																								<div class='product clearfix product-hover'>
																										<div class='left'>

																												<div class='image'>

																														<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."'>

																																<img src='http://localhost/emazonResource/images/blank.gif' data-echo=".$product->getProductFrontImage()."
																																		alt=".$product->getProductName()."
																																		class='' />
																														</a>
																												</div>
																										</div>
																										<div class='right'>
																												<div class='name'>
																														<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."'>".$product->getProductName()."</a>
																												</div>

																												<div class='right-side'>
																														<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."' class='add-to-cart'>
																																<i class='icon-basket-loaded'></i>
																														</a>
																												</div>

																												<div class='left-side'>
																														<div class='rating'>
																																<i class='fa fa-star-o'></i>
																																<i class='fa fa-star-o'></i>
																																<i class='fa fa-star-o'></i>
																																<i class='fa fa-star-o'></i>
																																<i class='fa fa-star-o'></i>
																														</div>

																														<div class='price'>
																																$".number_format($product->getProductPrice(),2)."</div>
																												</div>
																										</div>
																								</div>
																						</div>";
																					 ?>
																<?php endforeach; ?>

																<!-- Yabbb Modification Ends Here -->

      			  	    			  	    			</div>
																		</div>
															</div>

															<div class="item">
																<div class="product-grid">
																	<div class="row">
																		<!-- Yabbb Modification -->

																		<?php foreach (array_slice(getRelatedProducts(), 3) as $product): ?>

																			 <?php  echo "<div class='col-sm-3 col-xs-6'>

																										<!-- Product -->
																										<div class='product clearfix product-hover'>
																												<div class='left'>

																														<div class='image'>

																																<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."'>

																																		<img src='http://localhost/emazonResource/images/blank.gif' data-echo=".$product->getProductFrontImage()."
																																				alt=".$product->getProductName()."
																																				class='' />
																																</a>
																														</div>
																												</div>
																												<div class='right'>
																														<div class='name'>
																																<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."'>".$product->getProductName()."</a>
																														</div>

																														<div class='right-side'>
																																<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."' class='add-to-cart'>
																																		<i class='icon-basket-loaded'></i>
																																</a>
																														</div>

																														<div class='left-side'>
																																<div class='rating'>
																																		<i class='fa fa-star-o'></i>
																																		<i class='fa fa-star-o'></i>
																																		<i class='fa fa-star-o'></i>
																																		<i class='fa fa-star-o'></i>
																																		<i class='fa fa-star-o'></i>
																																</div>

																																<div class='price'>
																																		$".number_format($product->getProductPrice(),2)."</div>
																														</div>
																												</div>
																										</div>
																								</div>";
																							 ?>
																		<?php endforeach; ?>

																		<!-- Yabbb Modification Ends Here -->

		      			  	    			  	    			</div>
																				</div>
																	</div>



						</div>
  	  </div>
      </div>
    </div>
  </div>



    <script type="text/javascript">
  $(document).ready(function() {
    var owl9937785 = $(".box #myCarousel9937785 .carousel-inner");

    $("#myCarousel9937785_next").click(function(){
        owl9937785.trigger('owl.next');
        return false;
      })
    $("#myCarousel9937785_prev").click(function(){
        owl9937785.trigger('owl.prev');
        return false;
    });

    owl9937785.owlCarousel({
    	  slideSpeed : 500,
        singleItem:true
     });
  });
  </script>

</div>
<script type="text/javascript"><!--
$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
	$.ajax({
		url: '/emazon/search',
		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
		dataType: 'json',
		beforeSend: function() {
			$('#recurring-description').html('');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['success']) {
				$('#recurring-description').html(json['success']);
			}
		}
	});
});
//--></script>

<!-- <script type="text/javascript">

	function addtoCart(para)
	{
		$.ajax({
			url : '/emazon/addtoCart?productCode=' + para,
			beforeSend : function()
			{
				$('#button-cart').button('loading');
			}, complete: function()
			{
				$('#button-cart').button('reset');
			},
			success: function(json)
			{
				$('.alert, .text-danger').remove();
				$('.form-group').removeClass('has-error');

				if (json['error']) {
					if (json['error']['option']) {
						for (i in json['error']['option']) {
							var element = $('#input-option' + i.replace('_', '-'));

							if (element.parent().hasClass('input-group')) {
								element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
							} else {
								element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
							}
						}
					}

					if (json['error']['recurring']) {
						$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
					}

					// Highlight any found errors
					$('.text-danger').parent().addClass('has-error');
				}

				if (json) {
					$.notify({
						message: json['success'],
						target: '_blank'
					},{
						// settings
						element: 'body',
						position: null,
						type: "info",
						allow_dismiss: true,
						newest_on_top: false,
						placement: {
							from: "top",
							align: "right"
						},
						offset: 20,
						spacing: 10,
						z_index: 2031,
						delay: 5000,
						timer: 1000,
						url_target: '_blank',
						mouse_over: null,
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
						onShow: null,
						onShown: null,
						onClose: null,
						onClosed: null,
						icon_type: 'class',
						template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
							'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
							'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +
							'<div class="progress" data-notify="progressbar">' +
								'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
							'</div>' +
							'<a href="{3}" target="{4}" data-notify="url"></a>' +
						'</div>'
					});



					$('#cart_block .cart-count').load('1');
				}
			},
	        error: function(xhr, ajaxOptions, thrownError) {
	            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
	        }
		});
	}

</script> -->

<!-- url: 'index.php?route=checkout/cart/add' -->
	<script type="text/javascript"><!--
$('#button-cart').on('click', function() {


	$.ajax({
		url: '/emazon/addtoCart?productCode=' + $('#product-code').text() + "&price=" + $('#price-old').text() + "&quantity=" +  $('#quantity_wanted').val(),
		beforeSend: function() {
			$('#button-cart').button('loading');
		},
		complete: function() {
			$('#button-cart').button('reset');
		},
		success: function(json) {
			//alert(JSON.parse(json)[0].message);
			$('.alert, .text-danger').remove();
			$('.form-group').removeClass('has-error');

			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						var element = $('#input-option' + i.replace('_', '-'));

						if (element.parent().hasClass('input-group')) {
							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						} else {
							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						}
					}
				}

				if (json['error']['recurring']) {
					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
				}

				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
			}

			if (json) {
				$.notify({
					message: JSON.parse(json)[0].message,
					target: '_blank'
				},{
					// settings
					element: 'body',
					position: null,
					type: "info",
					allow_dismiss: true,
					newest_on_top: false,
					placement: {
						from: "top",
						align: "right"
					},
					offset: 20,
					spacing: 10,
					z_index: 2031,
					delay: 5000,
					timer: 100,
					url_target: '_blank',
					mouse_over: null,
					animate: {
						enter: 'animated fadeInDown',
						exit: 'animated fadeOutUp'
					},
					onShow: null,
					onShown: null,
					onClose: null,
					onClosed: null,
					icon_type: 'class',
					template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
						'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
						'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +
						'<div class="progress" data-notify="progressbar">' +
							'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
						'</div>' +
						'<a href="{3}" target="{4}" data-notify="url"></a>' +
					'</div>'
				});

			}
		},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
	});
});
//--></script>
<script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});

$('.datetime').datetimepicker({
	pickDate: true,
	pickTime: true
});

$('.time').datetimepicker({
	pickDate: false
});

$('button[id^=\'button-upload\']').on('click', function() {
	var node = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(node).parent().find('input').attr('value', json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script>
<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
	e.preventDefault();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$('#review').load('index027f.php?route=product/product/review&amp;product_id=47');

$('#button-review').on('click', function() {
    $.ajax({
        url: 'index.php?route=product/product/write&product_id=47',
        type: 'post',
        dataType: 'json',
        data: $("#form-review").serialize(),
        beforeSend: function() {
            $('#button-review').button('loading');
        },
        complete: function() {
            $('#button-review').button('reset');
        },
        success: function(json) {
			$('.alert-success, .alert-danger').remove();

			if (json['error']) {
                $('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
            }

            if (json['success']) {
                $('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

                $('input[name=\'name\']').val('');
                $('textarea[name=\'text\']').val('');
                $('input[name=\'rating\']:checked').prop('checked', false);
            }
        }
    });
});
</script>

<script type="text/javascript"><!--
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a.popup-image',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-with-zoom',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		}
	});
});
//--></script>

<script type="text/javascript">
var ajax_price = function() {
	$.ajax({
		type: 'POST',
		url: 'index.php?route=product/liveprice/index',
		data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
		dataType: 'json',
			success: function(json) {
			if (json.success) {
				change_price('#price-special', json.new_price.special);
				change_price('#price-tax', json.new_price.tax);
				change_price('#price-old', json.new_price.price);
			}
		}
	});
}

var change_price = function(id, new_price) {
	$(id).html(new_price);
}

$('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\'], .product-info input[type=\'checkbox\'], .product-info select, .product-info textarea, .product-info input[name=\'quantity\']').on('change', function() {
	ajax_price();
});
</script>

<script type="text/javascript">
$.fn.tabs = function() {
	var selector = this;

	this.each(function() {
		var obj = $(this);

		$(obj.attr('href')).hide();

		$(obj).click(function() {
			$(selector).removeClass('selected');

			$(selector).each(function(i, element) {
				$($(element).attr('href')).hide();
			});

			$(this).addClass('selected');

			$($(this).attr('href')).show();

			return false;
		});
	});

	$(this).show();

	$(this).first().click();
};
</script>

<script type="text/javascript"><!--
$('#tabs a').tabs();
//--></script>

<script type="text/javascript" src="http://localhost/emazonResource/js/jquery.elevateZoom-3.0.3.min.js"></script>
							</div>

													</div>
					</div>

										<div class="col-md-3" id="column-left">



<div class="box mfilter-box mfilter-box-1 mfilter-column_left mfilter-direction-ltr" id="mfilter-box-1">
			<h3 class="box-heading">Mega Filter PRO</h3>
		<div class="box-content mfilter-content">
				<ul>
																				<li
						data-type="cat_checkbox"
						data-base-type="categories"
						data-id=""
						data-group-key=""
						data-seo-name="path"
						data-inline-horizontal="0"
												data-display-live-filter="0"
												data-display-list-of-items="scroll"
						class="mfilter-filter-item mfilter-cat_checkbox mfilter-categories"
						>

													<div class="mfilter-heading">
								<div class="mfilter-heading-content">
									<div class="mfilter-heading-text">
										<span>Categories</span>

																			</div>
									<i class="mfilter-head-icon"></i>
								</div>
							</div>

						<div class="mfilter-content-opts">
							<div class="mfilter-opts-container">
								<div class="mfilter-content-wrapper mfilter-iscroll scroll-content scroll-wrapper" data-max-height="33333" style="max-height:33333px">
									<div class="mfilter-options">
																					<div class="mfilter-category mfilter-category-cat_checkbox">
																									<div class="mfilter-tb">
																																																										<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-65"
																		type="checkbox"
																																				value="65" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-65">
																	Bluetooth &amp; Wireless Speakers																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-61"
																		type="checkbox"
																																				value="61" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-61">
																	Camera, Photo &amp; Video																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-62"
																		type="checkbox"
																																				value="62" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-62">
																	Cell Phones &amp; Accessories																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-67"
																		type="checkbox"
																																				value="67" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-67">
																	Computers &amp; Tablets																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-66"
																		type="checkbox"
																																				value="66" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-66">
																	Gaming Console																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-63"
																		type="checkbox"
																																				value="63" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-63">
																	Headphones																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-69"
																		type="checkbox"
																																				value="69" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-69">
																	Home Appliances																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-59"
																		type="checkbox"
																																				value="59" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-59">
																	Home Audio &amp; Theater																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-68"
																		type="checkbox"
																																				value="68" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-68">
																	Monitors																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-70"
																		type="checkbox"
																																				value="70" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-70">
																	Office Supplies																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-60"
																		type="checkbox"
																																				value="60" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-60">
																	TV &amp; Video																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																																												<div class="mfilter-option mfilter-tb-as-tr">
																<div class="mfilter-tb-as-td mfilter-col-input">
																	<input
																		id="mfilter-cat_checkbox-1-64"
																		type="checkbox"
																																				value="64" />
																</div>
																<label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-64">
																	Video Games																</label>
																<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">1</span></div>
															</div>
																											</div>

																							</div>
																			</div>
								</div>

								<div class="mfilter-clearfix"></div>
							</div>

							<div class="mfilter-clearfix"></div>
						</div>
					</li>
																								<li
						data-type="price"
						data-base-type="price"
						data-id="price"
						data-group-key=""
						data-seo-name="price"
						data-inline-horizontal="0"
												data-display-live-filter="0"
												data-display-list-of-items="-1"
						class="mfilter-filter-item mfilter-price mfilter-price"
						>

            <div class="mfilter-heading">
              <div class="mfilter-heading-content">
                <div class="mfilter-heading-text">
                  <span>Price</span>

                </div>
                <i class="mfilter-head-icon"></i>
              </div>
            </div>

            <div class="mfilter-content-opts">
              <div class="mfilter-opts-container">
                <div class="mfilter-content-wrapper">
                  <div class="mfilter-options">
                    <div class="mfilter-option mfilter-price">
                      <div class="mfilter-price-inputs">
                        $
                        <input id="mfilter-opts-price-min" type="text" class="form-control" value="" /> - $
                        <input id="mfilter-opts-price-max" type="text" class="form-control" value="" />
                      </div>
                      <div class="mfilter-price-slider">
                        <div id="mfilter-price-slider"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mfilter-clearfix"></div>
              </div>

              <div class="mfilter-clearfix"></div>
            </div>

					</li>
																								<li
						data-type="checkbox"
						data-base-type="manufacturers"
						data-id="manufacturers"
						data-group-key=""
						data-seo-name="manufacturers"
						data-inline-horizontal="0"
												data-display-live-filter="0"
												data-display-list-of-items="scroll"
						class="mfilter-filter-item mfilter-checkbox mfilter-manufacturers"
						>

													<div class="mfilter-heading">
								<div class="mfilter-heading-content">
									<div class="mfilter-heading-text">
										<span>Manufacturers</span>

																			</div>
									<i class="mfilter-head-icon"></i>
								</div>
							</div>

						<div class="mfilter-content-opts">
							<div class="mfilter-opts-container">
								<div class="mfilter-content-wrapper mfilter-iscroll scroll-content scroll-wrapper" data-max-height="33333" style="max-height:33333px">
									<div class="mfilter-options">
																																<div class="mfilter-options-container">
												<div class="mfilter-tb">
																																																		<div class="mfilter-option mfilter-tb-as-tr">
														<div class="mfilter-tb-as-td mfilter-col-input">
															<input
																id="mfilter-opts-attribs-1-manufacturers-8"
																name="manufacturers"
																type="checkbox"
																																value="8" />
														</div>
														<label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-8">
																															Apple																													</label>
														<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">0</span></div>
													</div>
																																																			<div class="mfilter-option mfilter-tb-as-tr">
														<div class="mfilter-tb-as-td mfilter-col-input">
															<input
																id="mfilter-opts-attribs-1-manufacturers-9"
																name="manufacturers"
																type="checkbox"
																																value="9" />
														</div>
														<label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-9">
																															Canon																													</label>
														<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">0</span></div>
													</div>
																																																			<div class="mfilter-option mfilter-tb-as-tr">
														<div class="mfilter-tb-as-td mfilter-col-input">
															<input
																id="mfilter-opts-attribs-1-manufacturers-7"
																name="manufacturers"
																type="checkbox"
																																value="7" />
														</div>
														<label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-7">
																															Hewlett-Packard																													</label>
														<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">0</span></div>
													</div>
																																																			<div class="mfilter-option mfilter-tb-as-tr">
														<div class="mfilter-tb-as-td mfilter-col-input">
															<input
																id="mfilter-opts-attribs-1-manufacturers-5"
																name="manufacturers"
																type="checkbox"
																																value="5" />
														</div>
														<label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-5">
																															HTC																													</label>
														<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">0</span></div>
													</div>
																																																			<div class="mfilter-option mfilter-tb-as-tr">
														<div class="mfilter-tb-as-td mfilter-col-input">
															<input
																id="mfilter-opts-attribs-1-manufacturers-6"
																name="manufacturers"
																type="checkbox"
																																value="6" />
														</div>
														<label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-6">
																															Palm																													</label>
														<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">0</span></div>
													</div>
																																																			<div class="mfilter-option mfilter-tb-as-tr">
														<div class="mfilter-tb-as-td mfilter-col-input">
															<input
																id="mfilter-opts-attribs-1-manufacturers-10"
																name="manufacturers"
																type="checkbox"
																																value="10" />
														</div>
														<label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-10">
																															Sony																													</label>
														<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">0</span></div>
													</div>
																																					</div>
											</div>
																			</div>
								</div>

								<div class="mfilter-clearfix"></div>
							</div>

							<div class="mfilter-clearfix"></div>
						</div>
					</li>
																								<li
						data-type="rating"
						data-base-type="rating"
						data-id="rating"
						data-group-key=""
						data-seo-name="rating"
						data-inline-horizontal="0"
												data-display-live-filter="0"
												data-display-list-of-items="scroll"
						class="mfilter-filter-item mfilter-rating mfilter-rating"
						>

            <div class="mfilter-heading">
              <div class="mfilter-heading-content">
                <div class="mfilter-heading-text">
                  <span>Rating</span>

                </div>
                <i class="mfilter-head-icon"></i>
              </div>
            </div>

            <div class="mfilter-content-opts">
              <div class="mfilter-opts-container">
                <div class="mfilter-content-wrapper mfilter-iscroll scroll-content scroll-wrapper" data-max-height="33333" style="max-height:33333px">
                  <div class="mfilter-options">
                    <div class="mfilter-tb">
                      <div class="mfilter-option mfilter-tb-as-tr">
                        <div class="mfilter-tb-as-td mfilter-col-input">
                          <input id="mfilter-opts-rating-1-5" type="checkbox" value="5" />
                        </div>
                        <label class="mfilter-tb-as-td" for="mfilter-opts-rating-1-5">
                          5
                          <img src="http://localhost/emazonResource/css/mf/images/stars-5.png" alt="" />
                        </label>
                        <div class="mfilter-tb-as-td mfilter-col-count">
                          <span class="mfilter-counter">0</span>
                        </div>
                      </div>
                      <div class="mfilter-option mfilter-tb-as-tr">
                        <div class="mfilter-tb-as-td mfilter-col-input">
                          <input id="mfilter-opts-rating-1-4" type="checkbox" value="4" />
                        </div>
                        <label class="mfilter-tb-as-td" for="mfilter-opts-rating-1-4">
                          4
                          <img src="http://localhost/emazonResource/css/mf/images/stars-4.png" alt="" />
                        </label>
                        <div class="mfilter-tb-as-td mfilter-col-count">
                          <span class="mfilter-counter">0</span>
                        </div>
                      </div>
                      <div class="mfilter-option mfilter-tb-as-tr">
                        <div class="mfilter-tb-as-td mfilter-col-input">
                          <input id="mfilter-opts-rating-1-3" type="checkbox" value="3" />
                        </div>
                        <label class="mfilter-tb-as-td" for="mfilter-opts-rating-1-3">
                          3
                          <img src="http://localhost/emazonResource/css/mf/images/stars-3.png" alt="" />
                        </label>
                        <div class="mfilter-tb-as-td mfilter-col-count">
                          <span class="mfilter-counter">0</span>
                        </div>
                      </div>
                      <div class="mfilter-option mfilter-tb-as-tr">
                        <div class="mfilter-tb-as-td mfilter-col-input">
                          <input id="mfilter-opts-rating-1-2" type="checkbox" value="2" />
                        </div>
                        <label class="mfilter-tb-as-td" for="mfilter-opts-rating-1-2">
                          2
                          <img src="http://localhost/emazonResource/css/mf/images/stars-2.png" alt="" />
                        </label>
                        <div class="mfilter-tb-as-td mfilter-col-count">
                          <span class="mfilter-counter">0</span>
                        </div>
                      </div>
                      <div class="mfilter-option mfilter-tb-as-tr">
                        <div class="mfilter-tb-as-td mfilter-col-input">
                          <input id="mfilter-opts-rating-1-1" type="checkbox" value="1" />
                        </div>
                        <label class="mfilter-tb-as-td" for="mfilter-opts-rating-1-1">
                          1
                          <img src="http://localhost/emazonResource/css/mf/images/stars-1.png" alt="" />
                        </label>
                        <div class="mfilter-tb-as-td mfilter-col-count">
                          <span class="mfilter-counter">0</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mfilter-clearfix"></div>
              </div>

              <div class="mfilter-clearfix"></div>
            </div

					</li>
																								<li
						data-type="image"
						data-base-type="option"
						data-id="13"
						data-group-key=""
						data-seo-name="13o-color"
						data-inline-horizontal="0"
												data-display-live-filter="0"
												data-display-list-of-items="scroll"
						class="mfilter-filter-item mfilter-image mfilter-option mfilter-options"
						>

													<div class="mfilter-heading">
								<div class="mfilter-heading-content">
									<div class="mfilter-heading-text">
										<span>Color</span>

																			</div>
									<i class="mfilter-head-icon"></i>
								</div>
							</div>

						<div class="mfilter-content-opts">
							<div class="mfilter-opts-container">
								<div class="mfilter-content-wrapper mfilter-iscroll scroll-content scroll-wrapper" data-max-height="33333" style="max-height:33333px">
									<div class="mfilter-options">
																					<div class="mfilter-tb">
												<ul>
																											<li class="mfilter-option mfilter-image">
															<input
																id="mfilter-opts-attribs-1-13-51"
																name="13o-color"
																type="checkbox"
																style="display:none"
																																value="51" />
															<label for="mfilter-opts-attribs-1-13-51" title="Black">
																<img src="http://localhost/emazonResource/images/black-33x33.png" />															</label>
														</li>
																											<li class="mfilter-option mfilter-image">
															<input
																id="mfilter-opts-attribs-1-13-49"
																name="13o-color"
																type="checkbox"
																style="display:none"
																																value="49" />
															<label for="mfilter-opts-attribs-1-13-49" title="Blue">
																<img src="http://localhost/emazonResource/images/blue-33x33.png" />															</label>
														</li>
																											<li class="mfilter-option mfilter-image">
															<input
																id="mfilter-opts-attribs-1-13-50"
																name="13o-color"
																type="checkbox"
																style="display:none"
																																value="50" />
															<label for="mfilter-opts-attribs-1-13-50" title="Brown">
																<img src="http://localhost/emazonResource/images/brown-33x33.png" />															</label>
														</li>
																									</ul>
											</div>
																			</div>
								</div>

								<div class="mfilter-clearfix"></div>
							</div>

							<div class="mfilter-clearfix"></div>
						</div>
					</li>
																								<li
						data-type="checkbox"
						data-base-type="option"
						data-id="11"
						data-group-key=""
						data-seo-name="11o-size"
						data-inline-horizontal="0"
												data-display-live-filter="0"
												data-display-list-of-items="scroll"
						class="mfilter-filter-item mfilter-checkbox mfilter-option mfilter-options"
						>

													<div class="mfilter-heading">
								<div class="mfilter-heading-content">
									<div class="mfilter-heading-text">
										<span>Size</span>

																			</div>
									<i class="mfilter-head-icon"></i>
								</div>
							</div>

						<div class="mfilter-content-opts">
							<div class="mfilter-opts-container">
								<div class="mfilter-content-wrapper mfilter-iscroll scroll-content scroll-wrapper" data-max-height="33333" style="max-height:33333px">
									<div class="mfilter-options">
																																<div class="mfilter-options-container">
												<div class="mfilter-tb">
																																																		<div class="mfilter-option mfilter-tb-as-tr">
														<div class="mfilter-tb-as-td mfilter-col-input">
															<input
																id="mfilter-opts-attribs-1-11-46"
																name="11o-size"
																type="checkbox"
																																value="46" />
														</div>
														<label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-11-46">
																															Small																													</label>
														<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">0</span></div>
													</div>
																																																			<div class="mfilter-option mfilter-tb-as-tr">
														<div class="mfilter-tb-as-td mfilter-col-input">
															<input
																id="mfilter-opts-attribs-1-11-47"
																name="11o-size"
																type="checkbox"
																																value="47" />
														</div>
														<label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-11-47">
																															Medium																													</label>
														<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">0</span></div>
													</div>
																																																			<div class="mfilter-option mfilter-tb-as-tr">
														<div class="mfilter-tb-as-td mfilter-col-input">
															<input
																id="mfilter-opts-attribs-1-11-48"
																name="11o-size"
																type="checkbox"
																																value="48" />
														</div>
														<label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-11-48">
																															Large																													</label>
														<div class="mfilter-tb-as-td mfilter-col-count"><span class="mfilter-counter">0</span></div>
													</div>
																																					</div>
											</div>
																			</div>
								</div>

								<div class="mfilter-clearfix"></div>
							</div>

							<div class="mfilter-clearfix"></div>
						</div>
					</li>
									</ul>
			</div>
</div>


<script type="text/javascript">
	MegaFilterLang.text_display = 'Display';
	MegaFilterLang.text_list	= 'List';
	MegaFilterLang.text_grid	= 'Grid';
	MegaFilterLang.text_select	= '---';

	if( typeof MegaFilterOverrideFn == 'undefined' ) {
		var MegaFilterOverrideFn = {};
	}

	if( typeof MegaFilterCommonData == 'undefined' ) {
		var MegaFilterCommonData = {};
	}

	MegaFilterCommonData.seo = {
		'currentUrl' : 'http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=product/product&amp;path=20&amp;product_id=47&amp;sort=pd.name&amp;order=ASC',
		'aliases' : []	};

	if( typeof MegaFilterOverrideFn['1'] == 'undefined' ) {
		MegaFilterOverrideFn['1'] = {};
	}

			MegaFilterOverrideFn[1]["beforeRequest"] = function() {
	var self = this;

};

MegaFilterOverrideFn[1]["beforeRender"] = function( htmlResponse, htmlContent, json ) {
	var self = this;
};

MegaFilterOverrideFn[1]["afterRender"] = function( htmlResponse, htmlContent, json ) {
	var self = this;
};

	jQuery().ready(function(){
		jQuery('#mfilter-box-1').each(function(){
			var _t = jQuery(this).addClass('init'),
				_p = { };

			for( var i = 0; i < MegaFilterINSTANCES.length; i++ ) {
				if( _t.attr('id') == MegaFilterINSTANCES[i]._box.attr('id') ) {
					return;
				}
			}

							_p['path'] = '20';
							_p['path_aliases'] = 'desktops';

			var mfpModule = new MegaFilter();

			if( typeof MegaFilterOverrideFn['1'] != 'undefined' ) {
				for( var i in MegaFilterOverrideFn['1'] ) {
					mfpModule[i] = MegaFilterOverrideFn['1'][i];
				}
			}

			MegaFilterINSTANCES.push(mfpModule.init( _t, {
				'idx'					: '1',
				'route'					: 'cHJvZHVjdC9wcm9kdWN0',
				'routeProduct'			: 'cHJvZHVjdC9wcm9kdWN0',
				'routeHome'				: 'Y29tbW9uL2hvbWU=',
				'routeCategory'			: 'cHJvZHVjdC9jYXRlZ29yeQ==',
				'routeInformation'		: 'aW5mb3JtYXRpb24vaW5mb3JtYXRpb24=',
				'contentSelector'		: '#mfilter-content-container',
				'contentSelectorH1'		: '#content h1,#content h2',
				'refreshResults'		: 'immediately',
				'refreshDelay'			: 1000,
				'usingButtonWithCountInfo' : false,
				'autoScroll'			: false,
				'ajaxGetInfoUrl'		: '/emazon/product/mega_filter/getajaxinfo',
				'ajaxResultsUrl'		: '/emazon/product/mega_filter/products',
				'priceMin'				: 98,
				'priceMax'				: 1202,
				'mijoshop'				: false,
				'joo_cart'				: false,
				'showNumberOfProducts'	: true,
				'calculateNumberOfProducts' : true,
				'addPixelsFromTop'		: 0,
				'displayListOfItems'	: {
					'type'				: 'scroll',
					'limit_of_items'	: 4,
					'maxHeight'			: 33333,
					'textMore'			: 'Show more (%s)',
					'textLess'			: 'Show less',
					'standardScroll'	: false				},
				'smp'					: {
					'isInstalled'			: false,
					'disableConvertUrls'	: false				},
				'params'					: _p,
				'inStockDefaultSelected'	: false,
				'inStockDefaultSelectedGlobal' : false,
				'inStockStatus'				: '7',
				'showLoaderOverResults'		: true,
				'showLoaderOverFilter'		: false,
				'hideInactiveValues'		: false,
				'manualInit'				: false,
				'homePageAJAX'				: false,
				'homePageContentSelector'	: '#content',
				'ajaxPagination'			: false,
				'text'						: {
					'loading'		: 'Loading...',
					'go_to_top'		: 'Go to top',
					'init_filter'	: 'Initialize the filter',
					'initializing'	: 'Initializing...'
				},
				'color' : {
					'loader_over_results' : '#ffffff',
					'loader_over_filter' : '#ffffff'
				},
				'direction'				: 'ltr',
				'seo' : {
					'enabled'	: false,
					'aliasesEnabled' : false,
					'alias'		: '',
					'parameter'	: 'mfp',
					'separator'	: 'mfp',
					'valuesAreLinks' : false,
					'valuesLinksAreClickable' : false,
					'usePostAjaxRequests' : false,
					'addSlashAtTheEnd' : false,
					'metaRobots' : false,
					'metaRobotsValue' : 'noindex,follow'
				},
				'displayAlwaysAsWidget'		: false,
				'displaySelectedFilters'	: false,
				'isMobile' : false,
				'widgetWithSwipe' : true,
				'widgetPosition' : '',
				'theme' : '',
				'data' : {
					'category_id' : 20				}
			}));
		});
	});
</script>					</div>
									</div>

				<div class="row">
					<div class="col-sm-12">
													<div class="box clearfix box-with-products with-scroll">
    <!-- Carousel nav -->
  <a class="next" href="#myCarousel112180834" id="myCarousel112180834_next"><span></span></a>
  <a class="prev" href="#myCarousel112180834" id="myCarousel112180834_prev"><span></span></a>

  <script type="text/javascript">
  $(document).ready(function() {
    var owl112180834 = $(".box #myCarousel112180834 .carousel-inner");

    $("#myCarousel112180834_next").click(function(){
        owl112180834.trigger('owl.next');
        return false;
      })
    $("#myCarousel112180834_prev").click(function(){
        owl112180834.trigger('owl.prev');
        return false;
    });

    owl112180834.owlCarousel({
    	  slideSpeed : 500,
        singleItem:true
     });
  });
  </script>

  <div class="box-heading">Most viewed</div>
  <div class="strip-line"></div>
  <div class="box-content products">
    <div class="box-product">
    	<div id="myCarousel112180834" class="carousel slide">
    		<!-- Carousel items -->
    		<div class="carousel-inner">
					<div class="active item"><div class="product-grid">
					<?php foreach (array_slice(getRelatedProducts(),0, 4) as $product): ?>

						 <?php  echo "<div class='col-sm-3 col-xs-6'>

													<!-- Product -->
													<div class='product clearfix product-hover'>
															<div class='left'>

																	<div class='image'>

																			<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."'>

																					<img src='http://localhost/emazonResource/images/blank.gif' data-echo=".$product->getProductFrontImage()."
																							alt=".$product->getProductName()."
																							class='' />
																			</a>
																	</div>
															</div>
															<div class='right'>
																	<div class='name'>
																			<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."'>".$product->getProductName()."</a>
																	</div>

																	<div class='right-side'>
																			<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."' class='add-to-cart'>
																					<i class='icon-basket-loaded'></i>
																			</a>
																	</div>

																	<div class='left-side'>
																			<div class='rating'>
																					<i class='fa fa-star-o'></i>
																					<i class='fa fa-star-o'></i>
																					<i class='fa fa-star-o'></i>
																					<i class='fa fa-star-o'></i>
																					<i class='fa fa-star-o'></i>
																			</div>

																			<div class='price'>
																					$".number_format($product->getProductPrice(),2)."</div>
																	</div>
															</div>
													</div>
											</div>";
										 ?>
					<?php endforeach; ?>
				</div>
			</div>

						<div class="item"><div class="product-grid">
						<?php foreach (array_slice(getRelatedProducts(),4) as $product): ?>

							 <?php  echo "<div class='col-sm-3 col-xs-6'>

														<!-- Product -->
														<div class='product clearfix product-hover'>
																<div class='left'>

																		<div class='image'>

																				<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."'>

																						<img src='http://localhost/emazonResource/images/blank.gif' data-echo=".$product->getProductFrontImage()."
																								alt=".$product->getProductName()."
																								class='' />
																				</a>
																		</div>
																</div>
																<div class='right'>
																		<div class='name'>
																				<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."'>".$product->getProductName()."</a>
																		</div>

																		<div class='right-side'>
																				<a href='/emazon/product?route=product/product_id=".$product->getProductCode()."' class='add-to-cart'>
																						<i class='icon-basket-loaded'></i>
																				</a>
																		</div>

																		<div class='left-side'>
																				<div class='rating'>
																						<i class='fa fa-star-o'></i>
																						<i class='fa fa-star-o'></i>
																						<i class='fa fa-star-o'></i>
																						<i class='fa fa-star-o'></i>
																						<i class='fa fa-star-o'></i>
																				</div>

																				<div class='price'>
																						$".number_format($product->getProductPrice(),2)."</div>
																		</div>
																</div>
														</div>
												</div>";
											 ?>
						<?php endforeach; ?>
					</div>
				</div>
				</div>
		</div>
    </div>
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
