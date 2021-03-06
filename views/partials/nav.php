<?php

// Fetch all Products
function getCartProducts()
{
  $tak = App::get('database')->selectAll("cart");
  $data= json_decode( json_encode($tak), true);

  $cartContainer = array_map(function ($cart){
        //var_dump($product["productId"]);
        return new \App\Models\Product\Cart($cart["cartProductCode"], $cart['quantity'],$cart['price']);
  }, $data);

  return $cartContainer;
}

function getSubTotal()
{
  $instance = new  \App\Models\Product\Cart(NULL, NULL,NULL);
  return $instance -> getCartTotal(getCartProducts());
}

function getTotalTax()
{
  $instance = new  \App\Models\Product\Cart(NULL, NULL,NULL);
  return $instance -> getTaxedProductPrice(getCartProducts());
}

function getTotalPriceWithTaxIncluded()
{
  $instance = new  \App\Models\Product\Cart(NULL, NULL,NULL);
  return $instance -> getCartTotalWithTaxIncluded(getCartProducts());
}
//
// class SimpleImage {
//
//    var $image;
//    var $image_type;
//
//    function load($filename) {
//
//       $image_info = getimagesize($filename);
//       $this->image_type = $image_info[2];
//       if( $this->image_type == IMAGETYPE_JPEG ) {
//
//          $this->image = imagecreatefromjpeg($filename);
//       } elseif( $this->image_type == IMAGETYPE_GIF ) {
//
//          $this->image = imagecreatefromgif($filename);
//       } elseif( $this->image_type == IMAGETYPE_PNG ) {
//
//          $this->image = imagecreatefrompng($filename);
//       }
//    }
//    function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {
//
//       if( $image_type == IMAGETYPE_JPEG ) {
//          imagejpeg($this->image,$filename,$compression);
//       } elseif( $image_type == IMAGETYPE_GIF ) {
//
//          imagegif($this->image,$filename);
//       } elseif( $image_type == IMAGETYPE_PNG ) {
//
//          imagepng($this->image,$filename);
//       }
//       if( $permissions != null) {
//
//          chmod($filename,$permissions);
//       }
//    }
//    function output($image_type=IMAGETYPE_JPEG) {
//
//       if( $image_type == IMAGETYPE_JPEG ) {
//          imagejpeg($this->image);
//       } elseif( $image_type == IMAGETYPE_GIF ) {
//
//          imagegif($this->image);
//       } elseif( $image_type == IMAGETYPE_PNG ) {
//
//          imagepng($this->image);
//       }
//    }
//    function getWidth() {
//
//       return imagesx($this->image);
//    }
//    function getHeight() {
//
//       return imagesy($this->image);
//    }
//    function resizeToHeight($height) {
//
//       $ratio = $height / $this->getHeight();
//       $width = $this->getWidth() * $ratio;
//       $this->resize($width,$height);
//    }
//
//    function resizeToWidth($width) {
//       $ratio = $width / $this->getWidth();
//       $height = $this->getheight() * $ratio;
//       $this->resize($width,$height);
//    }
//
//    function scale($scale) {
//       $width = $this->getWidth() * $scale/100;
//       $height = $this->getheight() * $scale/100;
//       $this->resize($width,$height);
//    }
//
//    function resize($width,$height) {
//       $new_image = imagecreatetruecolor($width, $height);
//       imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
//       $this->image = $new_image;
//    }
//
// }

  function resize($image_name){

    $target_dir = "";
    $image = explode('/', $image_name);
    $image = array_pop($image);
    $target_file = "C:/xampp/htdocs/emazonResource/images/resized/".$image;

    $image = new \App\Core\Imager();
    $image->load($image_name);
    $image->resize(50, 50);
    $image->save($target_file);
    return $image;
  }


?>


<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7 responsive"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8 responsive"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 responsive"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="responsive">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>eMazon</title>
    <base />
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Store" />

    <link href="http://localhost/emazonResource/images/cart.png" rel="icon" />

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lato:800,700,600,500,400,300" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="http://localhost/emazonResource/css/cache_css.css" media="screen" />


    <link rel="stylesheet" type="text/css" href="http://localhost/emazonResource/css/style.css">
    <style type="text/css">
  		a:hover,
  		.blog-latest-posts .readmore,
  		.shipping-info li i,
  		#main .posts .button-more,
  		#main .post .meta>li a,
  		.copyright p .ri-li,
  		.product-filter .options .button-group button:hover,
  		.product-filter .options .button-group .active,
  		.like-bnr h4 {
  			color: #f12a43;
  		}

  		#main .posts .button-more:hover,
  		.tagcloud a:hover {
  			color: #fff;
  		}

  		#main .posts .post .tags a,
  		#main .posts .button-more:hover,
  		.news .media-body .tags a,
  		.tagcloud a,
  		#main .post .tags a,
  		.camera_wrap .owl-controls .owl-pagination .active span,
  		.box-product .owl-pagination>div.active,
  		.tab-content .prev-button:hover,
  		.tab-content .next-button:hover,
  		.box>.prev:hover,
  		.box>.next:hover,
  		.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover,
  		.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
  		div.pagination-results ul li.active,
  		.about-us .progress-bar,
  		.about-us .heading hr:before,
  		.box2 .box-heading:after,
  		.dropdown-menu>li>a:hover,
  		.dropdown-menu>li>a:focus {
  			background: #f12a43;
  		}

  		.box-product .owl-pagination>div.active,
  		.tab-content .prev-button:hover,
  		.tab-content .next-button:hover,
  		.box>.prev:hover,
  		.box>.next:hover,
  		.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover,
  		.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
  		div.pagination-results ul li.active {
  			border-color: #f12a43;
  		}

  		.filter-product2 .filter-tabs ul li.active a,
  		#main .mfilter-slider-slider .ui-slider-handle,
  		#main #mfilter-price-slider .ui-slider-handle {
  			background: #f12a43 !important;
  			border-color: #f12a43 !important;
  		}

  		.filter-product2 .filter-tabs ul li.active a:before {
  			color: #f12a43 !important;
  		}


  		.product-grid .product .name a,
  		.product-list .name-desc .name a {
  			color: #555555;
  		}

  		.product-grid .product .add-to-cart:hover {
  			background: #f12a43;
  		}

  		.sale {
  			background: #f73232;
  		}

  		.box .box-heading:after,
  		.filter-product .filter-tabs ul>li.active>a,
  		.filter-product .filter-tabs ul>li.active>a:hover,
  		.filter-product .filter-tabs ul>li.active>a:focus,
  		.htabs a.selected:before,
  		.filter-product .filter-tabs ul>li>a:hover {
  			background: #f12a43;
  		}

  		.button,
  		.btn {
  			background: #f12a43;
  		}

  		.button:hover,
  		.btn:hover {
  			background: #333;
  		}

  		.buttons .left .button,
  		.buttons .center .button,
  		.btn-default,
  		.input-group-btn .btn-primary {
  			background: #bbb;
  		}

  		.buttons .left .button:hover,
  		.buttons .center .button:hover,
  		.btn-default:hover,
  		.input-group-btn .btn-primary:hover {
  			background: #333;
  		}

  		#top-bar .background {
  			background: #d8263c;
  			border: none;
  		}

  		#top-bar,
  		#top-bar .header-links li a,
  		#top-bar .dropdown>a,
  		#top-bar .social-top a {
  			color: #fff;
  		}

  		#top-bar .dropdown .caret {
  			border-top-color: #fff;
  		}


  		#top-bar .header-links li:before,
  		#top-bar .social-top:before,
  		#top-bar .dropdown:before {
  			background: #da5d6d;
  		}

  		#top .background {
  			background: #f12a43;
  		}

  		#top #cart_block .cart-heading .itm-cont {
  			background: #d41f35;
  		}

  		#top #cart_block .cart-heading .flaticon-shopping-bag {
  			background: #fff;
  		}

  		#top #cart_block .cart-heading p {
  			color: #fff;
  		}

  		.menu-background,
  		.megamenu-wrapper,
  		.fixed-header,
  		.megamenuToogle-wrapper {
  			background: #fff;
  		}

  		ul.megamenu>li>a:hover,
  		ul.megamenu>li.active>a,
  		ul.megamenu>li.home>a,
  		ul.megamenu>li:hover>a {
  			background: #fff;
  		}

  		ul.megamenu>li>a,
  		ul.megamenu>li.with-sub-menu>a:after,
  		.megamenuToogle-wrapper .container {
  			color: #141414;
  		}

  		.megamenuToogle-wrapper .container>div span {
  			background: #141414;
  		}

  		ul.megamenu>li:hover>a,
  		ul.megamenu>li.with-sub-menu:hover>a:after {
  			color: #f12a43;
  		}


  		#slider .background {
  			background-color: #f1f1f1;
  		}

  		.footer .background {
  			background-color: #333333;
  		}

  		.footer .pattern {
  			color: #888888;
  		}

  		.footer .pattern a {
  			color: #888888;
  		}

  		.footer .pattern a:hover {
  			color: #fff;
  		}

  		.footer h4 {
  			color: #fff;
  		}

  		.footer h4 {
  			position: relative;
  		}

  		.footer h4:after {
  			content: '';
  			position: absolute;
  			bottom: 18px;
  			left: 0;
  			width: 70px;
  			height: 2px;
  			background: #f12a43;
  		}

  		.footer-newsletter .subscribe,
  		.footer-newsletter2 .subscribe {
  			background: #cd2036;
  		}

  		.copyright .background,
  		.standard-body .copyright .background {
  			background: #2e2e2e;
  		}

  		.copyright .background,
  		.standard-body .copyright .background {
  			color: #888888;
  		}
  	</style>

    <style type="text/css">
        #slider .background {
            background-image: url(http://localhost/emazonResource//images/version-03/main-bg-slider-wide.jpg);
            background-position: top center;
            background-repeat: no-repeat !important;
            background-attachment: scroll !important;
        }
    </style>

    <link rel="stylesheet" href="http://localhost/emazonResource/css/custom_code.css">


    <link rel="stylesheet" type="text/css" href="http://localhost/emazonResource/js/jquery/magnific/magnific-popup.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="http://localhost/emazonResource/css/jquery-ui.min.css" media="screen" />
  	<link rel="stylesheet" type="text/css" href="http://localhost/emazonResource/css/mega_filter.css" media="screen" />
  	<link rel="stylesheet" type="text/css" href="http://localhost/emazonResource/css/mf/style-24e09.css?v2.0.5.5.1" media="screen" />

    <link rel="stylesheet" type="text/css" href="http://localhost/emazonResource/js/jquery/datetimepicker/bootstrap-datetimepicker.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="http://localhost/emazonResource/css/jquery-ui.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="http://localhost/emazonResource/css/mega_filter.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/mf/style-24e09.css?v2.0.5.5.1" media="screen" />


    <style type="text/css">
        .standard-body .full-width .container {
            max-width: 1290px;
        }

        .standard-body .fixed .background,
        .main-fixed {
            max-width: 1250px;
        }
    </style>

    <script type="text/javascript" src="http://localhost/emazonResource/js/jquery.min.js"></script>
  	<script type="text/javascript" src="http://localhost/emazonResource/js/mf/direction_14e09.js?v2.0.5.5.1"></script>
  	<script type="text/javascript" src="http://localhost/emazonResource/js/mf/jquery-ui.min4e09.js?v2.0.5.5.1"></script>
  	<script type="text/javascript" src="http://localhost/emazonResource/js/mf/jquery-plugins4e09.js?v2.0.5.5.1"></script>
  	<script type="text/javascript" src="http://localhost/emazonResource/js/mf/hammer4e09.js?v2.0.5.5.1"></script>
  	<script type="text/javascript" src="http://localhost/emazonResource/js/mf/iscroll4e09.js?v2.0.5.5.1"></script>
  	<script type="text/javascript" src="http://localhost/emazonResource/js/mf/livefilter4e09.js?v2.0.5.5.1"></script>
  	<script type="text/javascript" src="http://localhost/emazonResource/js/mf/selectpicker4e09.js?v2.0.5.5.1"></script>
  	<script type="text/javascript" src="http://localhost/emazonResource/js/mf/mega_filter4e09.js?v2.0.5.5.1"></script>

    <script type="text/javascript" src="http://localhost/emazonResource/js/cache_js.js"></script>

    <script type="text/javascript" src="http://localhost/emazonResource/js/owl.carousel.min.js"></script>

    <script type="text/javascript" src="http://localhost/emazonResource/js/jquery-ui-1.10.4.custom.min.js"></script>

    <script type="text/javascript" src="http://localhost/emazonResource/js/jquery/magnific/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript">
        var responsive_design = 'yes';
    </script>
    <script type="text/javascript">
  		function display_MFP(view) {

  			if (localStorage.getItem('display') == 'list') {
  				display('list');
  			} else {
  				display('grid');
  			}
  		}
  	</script>

    <style type="text/css">
    #title {
text-align:center;
font-size:40px;
margin-top:40px;
margin-bottom:-40px;
position:relative;
color:#fff;
}

.circles:after {
content:'';
display:inline-block;
width:100%;
height:100px;
background:#fff;
position:absolute;
top:-50px;
left:0;
transform:skewY(-4deg);
-webkit-transform:skewY(-4deg);
}

.circles {
background:#fff;
text-align: center;
position: relative;
margin-top:-60px;
box-shadow:inset -1px -4px 4px rgba(0,0,0,0.2);
}

.circles p {
font-size: 240px;
color: #fff;
padding-top: 60px;
position: relative;
z-index: 9;
line-height: 100%;
}

.circles p small {
font-size: 40px;
line-height: 100%;
vertical-align: top;
}

.circles .circle.small {
width: 140px;
height: 140px;
border-radius: 50%;
background: #48A9E6;
position: absolute;
z-index: 1;
top: 80px;
left: 50%;
animation: 7s smallmove infinite cubic-bezier(1,.22,.71,.98);
-webkit-animation: 7s smallmove infinite cubic-bezier(1,.22,.71,.98);
animation-delay: 1.2s;
-webkit-animation-delay: 1.2s;
}

.circles .circle.med {
width: 200px;
height: 200px;
border-radius: 50%;
background: #48A9E6;
position: absolute;
z-index: 1;
top: 0;
left: 10%;
animation: 7s medmove infinite cubic-bezier(.32,.04,.15,.75);
-webkit-animation: 7s medmove infinite cubic-bezier(.32,.04,.15,.75);
animation-delay: 0.4s;
-webkit-animation-delay: 0.4s;
}

.circles .circle.big {
width: 400px;
height: 400px;
border-radius: 50%;
background: #48A9E6;
position: absolute;
z-index: 1;
top: 200px;
right: 0;
animation: 8s bigmove infinite;
-webkit-animation: 8s bigmove infinite;
animation-delay: 3s;
-webkit-animation-delay: 1s;
}

@-webkit-keyframes smallmove {
0% { top: 10px; left: 45%; opacity: 1; }
25% { top: 300px; left: 40%; opacity:0.7; }
50% { top: 240px; left: 55%; opacity:0.4; }
75% { top: 100px; left: 40%;  opacity:0.6; }
100% { top: 10px; left: 45%; opacity: 1; }
}
@keyframes smallmove {
0% { top: 10px; left: 45%; opacity: 1; }
25% { top: 300px; left: 40%; opacity:0.7; }
50% { top: 240px; left: 55%; opacity:0.4; }
75% { top: 100px; left: 40%;  opacity:0.6; }
100% { top: 10px; left: 45%; opacity: 1; }
}

@-webkit-keyframes medmove {
0% { top: 0px; left: 20%; opacity: 1; }
25% { top: 300px; left: 80%; opacity:0.7; }
50% { top: 240px; left: 55%; opacity:0.4; }
75% { top: 100px; left: 40%;  opacity:0.6; }
100% { top: 0px; left: 20%; opacity: 1; }
}

@keyframes medmove {
0% { top: 0px; left: 20%; opacity: 1; }
25% { top: 300px; left: 80%; opacity:0.7; }
50% { top: 240px; left: 55%; opacity:0.4; }
75% { top: 100px; left: 40%;  opacity:0.6; }
100% { top: 0px; left: 20%; opacity: 1; }
}

@-webkit-keyframes bigmove {
0% { top: 0px; right: 4%; opacity: 0.5; }
25% { top: 100px; right: 40%; opacity:0.4; }
50% { top: 240px; right: 45%; opacity:0.8; }
75% { top: 100px; right: 35%;  opacity:0.6; }
100% { top: 0px; right: 4%; opacity: 0.5; }
}
@keyframes bigmove {
0% { top: 0px; right: 4%; opacity: 0.5; }
25% { top: 100px; right: 40%; opacity:0.4; }
50% { top: 240px; right: 45%; opacity:0.8; }
75% { top: 100px; right: 35%;  opacity:0.6; }
100% { top: 0px; right: 4%; opacity: 0.5; }
}
    </style>

            <script type="text/javascript" src="http://localhost/emazonResource/js/jquery/datetimepicker/moment.js"></script>
            <script type="text/javascript" src="http://localhost/emazonResource/js/jquery/datetimepicker/bootstrap-datetimepicker.min.js"></script>
            <script type="text/javascript" src="http://localhost/emazonResource/js/mf/direction_14e09.js?v2.0.5.5.1"></script>
            <!-- <script type="text/javascript" src="http://localhost/emazonResource/js/jquery-ui.min4e09.js?v2.0.5.5.1"></script>
            <script type="text/javascript" src="http://localhost/emazonResource/js/jquery-plugins4e09.js?v2.0.5.5.1"></script> -->
            <script type="text/javascript" src="http://localhost/emazonResource/js/mf/hammer4e09.js?v2.0.5.5.1"></script>
            <script type="text/javascript" src="http://localhost/emazonResource/js/mf/iscroll4e09.js?v2.0.5.5.1"></script>
            <script type="text/javascript" src="http://localhost/emazonResource/js/mf/livefilter4e09.js?v2.0.5.5.1"></script>
            <script type="text/javascript" src="http://localhost/emazonResource/js/mf/selectpicker4e09.js?v2.0.5.5.1"></script>
            <script type="text/javascript" src="http://localhost/emazonResource/js/mf/mega_filter4e09.js?v2.0.5.5.1"></script>

    <!--[if lt IE 9]>
		<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://localhost/emazonResource/js/respond.min.js"></script>
	<![endif]-->

</head>

<body class="common-home">
    <div class="standard-body">
        <div id="main" class="">
            <div class="standard-body fixed-header header-type-3">
                <div class="full-width">
                    <div class="overflow-megamenu container two-modules">
                        <div class="relative">

                            <div id="megamenu_30244680" class="container-megamenu container horizontal">
                                <div class="megaMenuToggle">
                                    <div class="megamenuToogle-wrapper">
                                        <div class="megamenuToogle-pattern">
                                            <div class="container">
                                                <div>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                Navigation </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="megamenu-wrapper">
                                    <div class="megamenu-pattern">
                                        <div class="container">
                                            <ul class="megamenu shift-up">
                                                <li class='header_catagory'>
                                                    <p class='close-menu'></p>
                                                    <p class='open-menu'></p>
                                                    <a href="#" class='clearfix'>
                                                        <span>
                                                            <strong>
                                                                <img src="http://localhost/emazonResource/images/version-04/menu-01.png" alt="">TV &amp; Audios</strong>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='header_catagory'>
                                                    <p class='close-menu'></p>
                                                    <p class='open-menu'></p>
                                                    <a href='#' class='clearfix'>
                                                        <span>
                                                            <strong>
                                                                <img src="http://localhost/emazonResource/images/version-04/menu-02.png" alt="">Smartphones</strong>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='header_catagory'>
                                                    <p class='close-menu'></p>
                                                    <p class='open-menu'></p>
                                                    <a href='#' class='clearfix'>
                                                        <span>
                                                            <strong>
                                                                <img src="http://localhost/emazonResource/images/version-04/menu-03.png" alt="">Desk &amp; Laptop</strong>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='header_catagory'>
                                                    <p class='close-menu'></p>
                                                    <p class='open-menu'></p>
                                                    <a href='#' class='clearfix'>
                                                        <span>
                                                            <strong>
                                                                <img src="http://localhost/emazonResource/images/version-04/menu-04.png" alt="">Game Console</strong>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='header_catagory'>
                                                    <p class='close-menu'></p>
                                                    <p class='open-menu'></p>
                                                    <a href='#' class='clearfix'>
                                                        <span>
                                                            <strong>
                                                                <img src="http://localhost/emazonResource/images/version-04/menu-05.png" alt="">Watches</strong>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='header_catagory'>
                                                    <p class='close-menu'></p>
                                                    <p class='open-menu'></p>
                                                    <a href='#' class='clearfix'>
                                                        <span>
                                                            <strong>
                                                                <img src="http://localhost/emazonResource/images/version-04/menu-06.png" alt="">Accessories</strong>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script type="text/javascript">
                                $(window).load(function () {
                                    var css_tpl = '<style type="text/css">';
                                    css_tpl += '#megamenu_30244680 ul.megamenu > li > .sub-menu > .content {';
                                    css_tpl += '-webkit-transition: all 200ms ease-out !important;';
                                    css_tpl += '-moz-transition: all 200ms ease-out !important;';
                                    css_tpl += '-o-transition: all 200ms ease-out !important;';
                                    css_tpl += '-ms-transition: all 200ms ease-out !important;';
                                    css_tpl += 'transition: all 200ms ease-out !important;';
                                    css_tpl += '}</style>'
                                    $("head").append(css_tpl);
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>


            <!-- HEADER
	================================================== -->
            <header class="header-type-3">
                <div class="background-header"></div>
                <div class="slider-header">
                    <!-- Top Bar -->
                    <div id="top-bar" class="full-width">
                        <div class="background-top-bar"></div>
                        <div class="background">
                            <div class="shadow"></div>
                            <div class="pattern">
                                <div class="container">
                                    <!-- Top Bar Left -->
                                    <div class="left">
                                        <!-- Welcome text -->
                                        <div class="welcome-text">
                                            Welcome to eMazon Business Center! </div>
                                    </div>

                                    <!-- Top Bar Right -->
                                    <div class="right" id="top-bar-right">
                                        <div class="social-top">
                                            <a href="#.">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#.">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#.">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            <a href="#.">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                            <a href="#.">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </div>
                                        <span class="call-mun">
                                            <i class="fa fa-phone"></i>
                                            <p>
                                                <strong>Hotline:</strong>
                                                <br> (+251) 923 94 1078</p>
                                        </span>
                                        <form action="http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data"
                                            id="currency_form">
                                            <!-- Currency -->
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">US Dollar
                                                    <!-- <b class="caret"></b> -->
                                                </a>
                                                <!-- <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="javascript:;" onclick="$('input[name=\'code\']').attr('value', 'EUR'); $('#currency_form').submit();">Euro</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" onclick="$('input[name=\'code\']').attr('value', 'GBP'); $('#currency_form').submit();">Pound Sterling</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" onclick="$('input[name=\'code\']').attr('value', 'USD'); $('#currency_form').submit();">US Dollar</a>
                                                    </li>
                                                </ul> -->
                                            </div>

                                            <input type="hidden" name="code" value="" />
                                            <input type="hidden" name="redirect" value="index9328.html?route=common/home" />
                                        </form>
                                        <!-- Language -->
                                        <form action="http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=common/language/language" method="post" enctype="multipart/form-data"
                                            id="language_form">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">English
                                                    <!-- <b class="caret"></b> -->
                                                </a>
                                                <!-- <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="javascript:;" onclick="$('input[name=\'code\']').attr('value', 'en-gb'); $('#language_form').submit();">English</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" onclick="$('input[name=\'code\']').attr('value', 'pl'); $('#language_form').submit();">Polish</a>
                                                    </li>
                                                </ul> -->
                                            </div>

                                            <input type="hidden" name="code" value="" />
                                            <input type="hidden" name="redirect" value="index9328.html?route=common/home" />
                                        </form>

                                        <!-- Links -->
                                        <ul class="header-links">
                                            <li>
                                                <a href="/emazon/login">My Account</a>
                                            </li>
                                            <li>
                                                <a href="/emazon/cart">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="/emazon/checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top of pages -->
                    <div id="top" class="full-width">
                        <div class="background-top"></div>
                        <div class="background">
                            <div class="shadow"></div>
                            <div class="pattern">
                                <div class="container">
                                    <!-- Logo -->
                                    <div class="logo">
                                        <a href="/emazon">
                                            <img src="http://localhost/emazonResource/images/emazon_logo_new2.png"  title="Your Store" alt="Your Store"
                                            />
                                        </a>
                                    </div>

                                    <!-- Cart block -->
                                    <div id="cart_block" class="dropdown">
                                        <div class="cart-heading dropdown-toogle clearfix" data-toggle="dropdown" data-hover="dropdown">
                                            <span class="itm-cont cart-count">
                                                <span id="total_count_ajax"><?php echo count(getCartProducts());?></span>

                                            </span>
                                            <i class="flaticon-shopping-bag"></i>
                                            <p>
                                                <strong>My Cart</strong>
                                                <br>
                                                <span id="cart-total"><strong></span></strong>
                                            </p>
                                        </div>

                                        <div class="dropdown-menu" id="cart_content">

                                          <div id="cart_content_ajax">
                                            <?php if(getCartProducts()): ?>
                                              <?php foreach(getCartProducts() as $cartItem):?>
                                                <?php echo "<div class='mini-cart-info'><table><tbody><tr><td class='image'><a href='#'><img src='http://localhost/emazonResource/images/Product_Images/cart_image.jpg' width='47px' height='47px' alt='Funda Para Ebook 7&quot; 128GB full HD'></a></td><td class='name'><a href='#'>".$cartItem->getProductCode()."</a><div></div></td><td class='quantity'>x&nbsp;".$cartItem->getProductQuantity()."</td><td class='total'>".$cartItem->getProductPrice()."</td><td class='remove'></a></td></tr></tbody></table></div>"?>
                                              <?php endforeach; ?>
                                              <?php echo "<div class='mini-cart-total'><table><tbody><tr><td class='right'>Sub-Total:</td><td class='right'>".$cartItem->getCartTotal(getCartProducts())."</td></tr><tr><td class='right'>Eco Tax (-2.00):</td><td class='right'>$2.00</td></tr><tr><td class='right'>VAT (20%):</td><td class='right'>".$cartItem->getTaxedProductPrice(getCartProducts())."</td></tr><tr><td class='right'>Total:</td><td class='right'>".$cartItem->getCartTotalWithTaxIncluded(getCartProducts()) ."</td></tr></tbody></table></div>"?>
                                              <div class='checkout'><a href='/emazon/cart' class='button btn-default'>View Cart</a> &nbsp;<a href='/emazon/checkout' class='button'>Checkout</a></div>
                                            <?php endif;?>
                                            <?php if(!getCartProducts()){
                                              echo "<div class='empty'></div>";
                                            }
                                            ?>
                                          </div>


                                        </div>
                                    </div>

                                    <div class="search_form">
                                        <div class="search-cat">
                                            <select name="category_id" class="form-control">
                                                <option value="0">All categories</option>
                                                <option value="20">Home Audio &amp; Theater</option>
                                                <option value="65">&nbsp;&nbsp;Bluetooth &amp; Wireless Speakers</option>
                                                <option value="61">&nbsp;&nbsp;Camera, Photo &amp; Video</option>
                                                <option value="62">&nbsp;&nbsp;Cell Phones &amp; Accessories</option>
                                                <option value="67">&nbsp;&nbsp;Computers &amp; Tablets</option>
                                                <option value="66">&nbsp;&nbsp;Gaming Console</option>
                                                <option value="63">&nbsp;&nbsp;Headphones</option>
                                                <option value="69">&nbsp;&nbsp;Home Appliances</option>
                                                <option value="59">&nbsp;&nbsp;Home Audio &amp; Theater</option>
                                                <option value="68">&nbsp;&nbsp;Monitors</option>
                                                <option value="70">&nbsp;&nbsp;Office Supplies</option>
                                                <option value="60">&nbsp;&nbsp;TV &amp; Video</option>
                                                <option value="64">&nbsp;&nbsp;Video Games</option>
                                                <option value="18">TV &amp; Video</option>
                                                <option value="46">&nbsp;&nbsp;Macs</option>
                                                <option value="45">&nbsp;&nbsp;Windows</option>
                                                <option value="25">Camera, Photo &amp; Video</option>
                                                <option value="29">&nbsp;&nbsp;Mice and Trackballs</option>
                                                <option value="28">&nbsp;&nbsp;Monitors</option>
                                                <option value="30">&nbsp;&nbsp;Printers</option>
                                                <option value="31">&nbsp;&nbsp;Scanners</option>
                                                <option value="32">&nbsp;&nbsp;Web Cameras</option>
                                                <!-- <option value="57">Cell Phones &amp; Accessories</option>
                                                <option value="17">Headphones</option>
                                                <option value="24">Video Games</option>
                                                <option value="33">Bluetooth &amp; Wireless Speakers</option>
                                                <option value="34">Gaming Console</option> -->
                                            </select>
                                        </div>

                                        <div class="inner">
                                            <input type="text" class="input-block-level search-query" name="search" placeholder="Search..." id="search_query" value=""
                                            />
                                            <div id="autocomplete-results" class="autocomplete-results"></div>

                                            <script type="text/javascript">
                                                $(document).ready(function () {

                                                    $('#search_query').autocomplete({
                                                        delay: 0,
                                                        appendTo: "#autocomplete-results",
                                                        source: function (request, response) {

                                                            var category_filter = $('header select[name=\'category_id\']').val();
                                                            var category_filter_url = '';
                                                            if (category_filter) {
                                                                category_filter_url = '&filter_category_id=' + encodeURIComponent(category_filter);
                                                            }
                                                            $.ajax({
                                                                url: '/emazon/search_autocomplete?route=search/autocomplete&filter_name=' + encodeURIComponent(request.term),
                                                                type : 'GET',
                                                                dataType: 'json',
                                                                success: function (json) {

                                                                  var count = 0;

                                                                  response($.map(json, function (item) {


                                                                          return {
                                                                              label: item.productName,
                                                                              value: item.product_id,
                                                                              href: item.href,
                                                                              thumb: item.productImage,
                                                                              desc: item.productDescription,
                                                                              price: item.productPrice
                                                                          }

                                                                        count++;

                                                                    }));
                                                                }
                                                            });
                                                        },
                                                        select: function (event, ui) {
                                                            document.location.href = ui.item.href;

                                                            return false;
                                                        },
                                                        focus: function (event, ui) {
                                                            return false;
                                                        },
                                                        minLength: 2
                                                    })
                                                        .data("ui-autocomplete")._renderItem = function (ul, item) {


                                                            return $("<li>")
                                                                  .append("<a><img src='" + item.thumb + "' alt=''>" + item.label + "<br><span class='description'>" + item.desc + "</span><br><span class='price'>" + item.price + "</span></a>")
                                                                  .appendTo(ul);

                                                        };
                                                });
                                            </script>
                                        </div>
                                        <div class="button-search"></div>
                                    </div>

                                    <div class="social-top">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </div>
                                    <span class="call-mun">
                                        <i class="fa fa-phone"></i>
                                        <p>
                                            <strong>Hotline:</strong>
                                            <br> (+251) 923 94 1078</p>
                                    </span>
                                </div>
                            </div>

                            <div class="menu-background">
                                <div class="overflow-megamenu container ">
                                    <div class="relative">

                                        <div id="megamenu_10527675" class="container-megamenu container horizontal">
                                            <div class="megaMenuToggle">
                                                <div class="megamenuToogle-wrapper">
                                                    <div class="megamenuToogle-pattern">
                                                        <div class="container">
                                                            <div>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                            Navigation </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="megamenu-wrapper">
                                                <div class="megamenu-pattern">
                                                    <div class="container">
                                                        <ul class="megamenu shift-up">
                                                            <li class=''>
                                                                <p class='close-menu'></p>
                                                                <p class='open-menu'></p>
                                                                <a href='/emazon/product/mega_filter/products?mfp=path[65]'
                                                                    class='clearfix'>
                                                                        <strong>
                                                                            <img src="http://localhost/emazonResource/images/version-04/menu-07.png" alt="">Ethio-Fashion</strong>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class=''>
                                                                <p class='close-menu'></p>
                                                                <p class='open-menu'></p>
                                                                <a href='/emazon/search_product?category=smartphones'
                                                                    class='clearfix'>
                                                                    <span>
                                                                        <strong>
                                                                            <img src="http://localhost/emazonResource/images/version-04/menu-02.png" alt="">Smartphones</strong>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class=''>
                                                                <p class='close-menu'></p>
                                                                <p class='open-menu'></p>
                                                                <a href='/emazon/search_product?category=desk_laptop'
                                                                    class='clearfix'>
                                                                    <span>
                                                                        <strong>
                                                                            <img src="http://localhost/emazonResource/images/version-04/menu-03.png" alt="">Desk &amp; Laptop</strong>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class=''>
                                                                <p class='close-menu'></p>
                                                                <p class='open-menu'></p>
                                                                <a href='/emazon/search_product?category=game_console'
                                                                    class='clearfix'>
                                                                    <span>
                                                                        <strong>
                                                                            <img src="http://localhost/emazonResource/images/version-04/menu-04.png" alt="">Game Console</strong>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class=''>
                                                                <p class='close-menu'></p>
                                                                <p class='open-menu'></p>
                                                                <a href='/emazon/search_product?category=watches'
                                                                    class='clearfix'>
                                                                    <span>
                                                                        <strong>
                                                                            <img src="http://localhost/emazonResource/images/version-04/menu-05.png" alt="">Watches</strong>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class=''>
                                                                <p class='close-menu'></p>
                                                                <p class='open-menu'></p>
                                                                <a href='/emazon/search_product?category=accessories'
                                                                    class='clearfix'>
                                                                    <span>
                                                                        <strong>
                                                                            <img src="http://localhost/emazonResource/images/version-04/menu-06.png" alt="">Accessories</strong>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            $(window).load(function () {
                                                var css_tpl = '<style type="text/css">';
                                                css_tpl += '#megamenu_10527675 ul.megamenu > li > .sub-menu > .content {';
                                                css_tpl += '-webkit-transition: all 200ms ease-out !important;';
                                                css_tpl += '-moz-transition: all 200ms ease-out !important;';
                                                css_tpl += '-o-transition: all 200ms ease-out !important;';
                                                css_tpl += '-ms-transition: all 200ms ease-out !important;';
                                                css_tpl += 'transition: all 200ms ease-out !important;';
                                                css_tpl += '}</style>'
                                                $("head").append(css_tpl);
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
