<!-- - - - - - - - - - - - - - - - - Header Starts - - -  - - - - - - - - - - - - - - - - - - - - - - -->

<?php require('partials/nav.php'); ?>

<!-- - - - - - - - - - - - - - - - - - - - Header Ends - - - - - - - - - - - - - - - - - - - - - - - - - - -- >

<!-- Main Body Starts -->

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


                <div id="mfilter-content-container">
                  <div class="category-title"><?php echo getProductNameFromUrl(); ?></div>
                  <!-- Filter -->
                  <div class="product-filter clearfix">
                    <div class="options">
                      <div class="product-compare">
                        <a href="index6431.html?route=product/compare" id="compare-total">Product Compare (0)</a>
                      </div>

                      <div class="button-group display" data-toggle="buttons-radio">
                        <button id="grid" class="active" rel="tooltip" title="Grid" onclick="display('grid');">
                          <i class="fa fa-th-large"></i>
                        </button>
                        <button id="list" rel="tooltip" title="List" onclick="display('list');">
                          <i class="fa fa-th-list"></i>
                        </button>
                      </div>
                    </div>

                    <div class="list-options">
                      <div class="sort">
                        Sort By:
                        <select onchange="location = this.value;">
                          <option value="http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=product/category&amp;path=20&amp;sort=p.sort_order&amp;order=ASC"
                           selected="selected">Default</option>
                          <option value="index9a01.html?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                          <option value="index5b66.html?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                          <option value="index6bd7.html?route=product/category&amp;path=20&amp;sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                          <option value="indexa03c.html?route=product/category&amp;path=20&amp;sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                          <option value="index9a4f.html?route=product/category&amp;path=20&amp;sort=rating&amp;order=DESC">Rating (Highest)</option>
                          <option value="indexb953.html?route=product/category&amp;path=20&amp;sort=rating&amp;order=ASC">Rating (Lowest)</option>
                          <option value="indexa5ae.html?route=product/category&amp;path=20&amp;sort=p.model&amp;order=ASC">Model (A - Z)</option>
                          <option value="index8e93.html?route=product/category&amp;path=20&amp;sort=p.model&amp;order=DESC">Model (Z - A)</option>
                        </select>
                      </div>

                      <div class="limit">
                        Show:
                        <select onchange="location = this.value;">
                          <option value="http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=product/category&amp;path=20&amp;limit=12"
                           selected="selected">12</option>
                          <option value="index9c6c.html?route=product/category&amp;path=20&amp;limit=25">25</option>
                          <option value="index0f50.html?route=product/category&amp;path=20&amp;limit=50">50</option>
                          <option value="indexf053.html?route=product/category&amp;path=20&amp;limit=75">75</option>
                          <option value="index545c.html?route=product/category&amp;path=20&amp;limit=100">100</option>
                        </select>
                      </div>
                    </div>
                  </div>


                  <!-- Products grid -->
                  <div class="product-grid" class="active">
                    <div class="row">
                      <!-- Yabbb Modification -->

                      <?php foreach (getProductsByCategory() as $product): ?>

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
                                                  <a href='emazon/product?route=product/".$product->getProductCode()."'>'".$product->getProductName()."</a>
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

                  <div class="row pagination-results">
                    <div class="col-sm-6 text-left">
                      <ul class="pagination">
                        <li class="active">
                          <span>1</span>
                        </li>
                        <li>
                          <a href="indexf341.html?route=product/category&amp;path=20&amp;page=2">2</a>
                        </li>
                        <li>
                          <a href="indexf341.html?route=product/category&amp;path=20&amp;page=2">&gt;</a>
                        </li>
                        <li>
                          <a href="indexf341.html?route=product/category&amp;path=20&amp;page=2">&gt;|</a>
                        </li>
                      </ul>
                    </div>
                    <!-- <div class="col-sm-6 text-right">Showing 1 to 12 of 13 (2 Pages)</div> -->
                  </div>
                  <script type="text/javascript">
                    function display(view) {

                      if (view == 'list') {
                        $('.product-grid').removeClass("active");
                        $('.product-list').addClass("active");

                        $('.display').html('<button id="grid" rel="tooltip" title="Grid" onclick="display(\'grid\');"><i class="fa fa-th-large"></i></button> <button class="active" id="list" rel="tooltip" title="List" onclick="display(\'list\');"><i class="fa fa-th-list"></i></button>');

                        localStorage.setItem('display', 'list');
                      } else {

                        $('.product-grid').addClass("active");
                        $('.product-list').removeClass("active");

                        $('.display').html('<button class="active" id="grid" rel="tooltip" title="Grid" onclick="display(\'grid\');"><i class="fa fa-th-large"></i></button> <button id="list" rel="tooltip" title="List" onclick="display(\'list\');"><i class="fa fa-th-list"></i></button>');

                        localStorage.setItem('display', 'grid');
                      }
                    }

                    if (localStorage.getItem('display') == 'list') {
                      display('list');
                    } else if (localStorage.getItem('display') == 'grid') {
                      display('grid');
                    } else {
                      display('grid');
                    }
//--></script>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-3" id="column-left">



            <div class="box mfilter-box mfilter-box-1 mfilter-column_left mfilter-direction-ltr" id="mfilter-box-1">
              <h3 class="box-heading">Mega Filter PRO</h3>
              <div class="box-content mfilter-content">
                <ul>
                  <li data-type="cat_checkbox" data-base-type="categories" data-id="" data-group-key="" data-seo-name="path" data-inline-horizontal="0"
                   data-display-live-filter="0" data-display-list-of-items="scroll" class="mfilter-filter-item mfilter-cat_checkbox mfilter-categories">

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
                                    <input id="mfilter-cat_checkbox-1-65" type="checkbox" value="65" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-65">
                                    Bluetooth &amp; Wireless Speakers </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-61" type="checkbox" value="61" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-61">
                                    Camera, Photo &amp; Video </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-62" type="checkbox" value="62" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-62">
                                    Cell Phones &amp; Accessories </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-67" type="checkbox" value="67" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-67">
                                    Computers &amp; Tablets </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-66" type="checkbox" value="66" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-66">
                                    Gaming Console </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-63" type="checkbox" value="63" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-63">
                                    Headphones </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-69" type="checkbox" value="69" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-69">
                                    Home Appliances </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-59" type="checkbox" value="59" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-59">
                                    Home Audio &amp; Theater </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-68" type="checkbox" value="68" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-68">
                                    Monitors </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-70" type="checkbox" value="70" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-70">
                                    Office Supplies </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-60" type="checkbox" value="60" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-60">
                                    TV &amp; Video </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-cat_checkbox-1-64" type="checkbox" value="64" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-cat_checkbox-1-64">
                                    Video Games </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">1</span>
                                  </div>
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
                  <li data-type="price" data-base-type="price" data-id="price" data-group-key="" data-seo-name="price" data-inline-horizontal="0"
                   data-display-live-filter="0" data-display-list-of-items="-1" class="mfilter-filter-item mfilter-price mfilter-price">

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
                  <li data-type="checkbox" data-base-type="manufacturers" data-id="manufacturers" data-group-key="" data-seo-name="manufacturers"
                   data-inline-horizontal="0" data-display-live-filter="0" data-display-list-of-items="scroll" class="mfilter-filter-item mfilter-checkbox mfilter-manufacturers">

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
                                    <input id="mfilter-opts-attribs-1-manufacturers-8" name="manufacturers" type="checkbox" value="8" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-8">
                                    Apple </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">0</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-opts-attribs-1-manufacturers-9" name="manufacturers" type="checkbox" value="9" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-9">
                                    Canon </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">0</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-opts-attribs-1-manufacturers-7" name="manufacturers" type="checkbox" value="7" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-7">
                                    Hewlett-Packard </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">0</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-opts-attribs-1-manufacturers-5" name="manufacturers" type="checkbox" value="5" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-5">
                                    HTC </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">0</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-opts-attribs-1-manufacturers-6" name="manufacturers" type="checkbox" value="6" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-6">
                                    Palm </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">0</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-opts-attribs-1-manufacturers-10" name="manufacturers" type="checkbox" value="10" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-manufacturers-10">
                                    Sony </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">0</span>
                                  </div>
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
                  <li data-type="rating" data-base-type="rating" data-id="rating" data-group-key="" data-seo-name="rating" data-inline-horizontal="0"
                   data-display-live-filter="0" data-display-list-of-items="scroll" class="mfilter-filter-item mfilter-rating mfilter-rating">

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
                    </div>
                  </li>
                  <li data-type="image" data-base-type="option" data-id="13" data-group-key="" data-seo-name="13o-color" data-inline-horizontal="0"
                   data-display-live-filter="0" data-display-list-of-items="scroll" class="mfilter-filter-item mfilter-image mfilter-option mfilter-options">

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
                                  <input id="mfilter-opts-attribs-1-13-51" name="13o-color" type="checkbox" style="display:none" value="51" />
                                  <label for="mfilter-opts-attribs-1-13-51" title="Black">
                                    <img src="http://localhost/emazonResource/images/black-33x33.png" /> </label>
                                </li>
                                <li class="mfilter-option mfilter-image">
                                  <input id="mfilter-opts-attribs-1-13-49" name="13o-color" type="checkbox" style="display:none" value="49" />
                                  <label for="mfilter-opts-attribs-1-13-49" title="Blue">
                                    <img src="http://localhost/emazonResource/images/blue-33x33.png" /> </label>
                                </li>
                                <li class="mfilter-option mfilter-image">
                                  <input id="mfilter-opts-attribs-1-13-50" name="13o-color" type="checkbox" style="display:none" value="50" />
                                  <label for="mfilter-opts-attribs-1-13-50" title="Brown">
                                    <img src="http://localhost/emazonResource/images/brown-33x33.png" /> </label>
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
                  <li data-type="checkbox" data-base-type="option" data-id="11" data-group-key="" data-seo-name="11o-size" data-inline-horizontal="0"
                   data-display-live-filter="0" data-display-list-of-items="scroll" class="mfilter-filter-item mfilter-checkbox mfilter-option mfilter-options">

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
                                    <input id="mfilter-opts-attribs-1-11-46" name="11o-size" type="checkbox" value="46" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-11-46">
                                    Small </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">0</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-opts-attribs-1-11-47" name="11o-size" type="checkbox" value="47" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-11-47">
                                    Medium </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">0</span>
                                  </div>
                                </div>
                                <div class="mfilter-option mfilter-tb-as-tr">
                                  <div class="mfilter-tb-as-td mfilter-col-input">
                                    <input id="mfilter-opts-attribs-1-11-48" name="11o-size" type="checkbox" value="48" />
                                  </div>
                                  <label class="mfilter-tb-as-td" for="mfilter-opts-attribs-1-11-48">
                                    Large </label>
                                  <div class="mfilter-tb-as-td mfilter-col-count">
                                    <span class="mfilter-counter">0</span>
                                  </div>
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
              MegaFilterLang.text_list = 'List';
              MegaFilterLang.text_grid = 'Grid';
              MegaFilterLang.text_select = '---';

              if (typeof MegaFilterOverrideFn == 'undefined') {
                var MegaFilterOverrideFn = {};
              }

              if (typeof MegaFilterCommonData == 'undefined') {
                var MegaFilterCommonData = {};
              }

              MegaFilterCommonData.seo = {
                'currentUrl': 'http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=product/category&amp;path=20',
                'aliases': []
              };

              if (typeof MegaFilterOverrideFn['1'] == 'undefined') {
                MegaFilterOverrideFn['1'] = {};
              }

              MegaFilterOverrideFn[1]["beforeRequest"] = function () {
                var self = this;
              };

              MegaFilterOverrideFn[1]["beforeRender"] = function (htmlResponse, htmlContent, json) {
                var self = this;
              };

              MegaFilterOverrideFn[1]["afterRender"] = function (htmlResponse, htmlContent, json) {
                var self = this;
              };

              jQuery().ready(function () {
                jQuery('#mfilter-box-1').each(function () {
                  var _t = jQuery(this).addClass('init'),
                    _p = {};

                  for (var i = 0; i < MegaFilterINSTANCES.length; i++) {
                    if (_t.attr('id') == MegaFilterINSTANCES[i]._box.attr('id')) {
                      return;
                    }
                  }

                  _p['path'] = '20';
                  _p['path_aliases'] = 'desktops';

                  var mfpModule = new MegaFilter();

                  if (typeof MegaFilterOverrideFn['1'] != 'undefined') {
                    for (var i in MegaFilterOverrideFn['1']) {
                      mfpModule[i] = MegaFilterOverrideFn['1'][i];
                    }
                  }

                  MegaFilterINSTANCES.push(mfpModule.init(_t, {
                    'idx': '1',
                    'route': 'cHJvZHVjdC9jYXRlZ29yeQ==',
                    'routeProduct': 'cHJvZHVjdC9wcm9kdWN0',
                    'routeHome': 'Y29tbW9uL2hvbWU=',
                    'routeCategory': 'cHJvZHVjdC9jYXRlZ29yeQ==',
                    'routeInformation': 'aW5mb3JtYXRpb24vaW5mb3JtYXRpb24=',
                    'contentSelector': '#mfilter-content-container',
                    'contentSelectorH1': '#content h1,#content h2',
                    'refreshResults': 'immediately',
                    'refreshDelay': 1000,
                    'usingButtonWithCountInfo': false,
                    'autoScroll': false,
                    'ajaxGetInfoUrl': 'http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=module/mega_filter/getajaxinfo',
                    'ajaxResultsUrl': 'http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=module/mega_filter/results',
                    'ajaxGetCategoryUrl': 'http://demo2.ninethemes.net/cyberwire/opencart/4/index.php?route=module/mega_filter/getcategories',
                    'priceMin': 98,
                    'priceMax': 1202,
                    'mijoshop': false,
                    'joo_cart': false,
                    'showNumberOfProducts': true,
                    'calculateNumberOfProducts': true,
                    'addPixelsFromTop': 0,
                    'displayListOfItems': {
                      'type': 'scroll',
                      'limit_of_items': 4,
                      'maxHeight': 33333,
                      'textMore': 'Show more (%s)',
                      'textLess': 'Show less',
                      'standardScroll': false
                    },
                    'smp': {
                      'isInstalled': false,
                      'disableConvertUrls': false
                    },
                    'params': _p,
                    'inStockDefaultSelected': false,
                    'inStockDefaultSelectedGlobal': false,
                    'inStockStatus': '7',
                    'showLoaderOverResults': true,
                    'showLoaderOverFilter': false,
                    'hideInactiveValues': false,
                    'manualInit': false,
                    'homePageAJAX': false,
                    'homePageContentSelector': '#content',
                    'ajaxPagination': false,
                    'text': {
                      'loading': 'Loading...',
                      'go_to_top': 'Go to top',
                      'init_filter': 'Initialize the filter',
                      'initializing': 'Initializing...'
                    },
                    'color': {
                      'loader_over_results': '#ffffff',
                      'loader_over_filter': '#ffffff'
                    },
                    'direction': 'ltr',
                    'seo': {
                      'enabled': false,
                      'aliasesEnabled': false,
                      'alias': '',
                      'parameter': 'mfp',
                      'separator': 'mfp',
                      'valuesAreLinks': false,
                      'valuesLinksAreClickable': false,
                      'usePostAjaxRequests': false,
                      'addSlashAtTheEnd': false,
                      'metaRobots': false,
                      'metaRobotsValue': 'noindex,follow'
                    },
                    'displayAlwaysAsWidget': false,
                    'displaySelectedFilters': false,
                    'isMobile': false,
                    'widgetWithSwipe': true,
                    'widgetPosition': '',
                    'theme': '',
                    'data': {
                      'category_id': 20
                    }
                  }));
                });
              });
            </script> </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="box clearfix box-with-products with-scroll">
              <!-- Carousel nav -->
              <a class="next" href="#myCarousel231688296" id="myCarousel231688296_next">
                <span></span>
              </a>
              <a class="prev" href="#myCarousel231688296" id="myCarousel231688296_prev">
                <span></span>
              </a>

              <script type="text/javascript">
                $(document).ready(function () {
                  var owl231688296 = $(".box #myCarousel231688296 .carousel-inner");

                  $("#myCarousel231688296_next").click(function () {
                    owl231688296.trigger('owl.next');
                    return false;
                  })
                  $("#myCarousel231688296_prev").click(function () {
                    owl231688296.trigger('owl.prev');
                    return false;
                  });

                  owl231688296.owlCarousel({
                    slideSpeed: 500,
                    singleItem: true
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
            					<?php foreach (array_slice(getProducts(),0, 4) as $product): ?>

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
            						<?php foreach (array_slice(getProducts(),4) as $product): ?>

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
