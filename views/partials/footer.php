<!-- FOOTER
================================================== -->
<div class="footer full-width">
    <div class="background-footer"></div>
    <div class="background">
        <div class="shadow"></div>
        <div class="pattern">
            <div class="container">


                <div class="advanced-grid advanced-grid-86260036  " style="margin-top: 0px;margin-left: 0px;margin-right: 0px;margin-bottom: 0px;">
                    <div style="">
                        <div class="container">
                            <div style="padding-top: 0px;padding-left: 0px;padding-bottom: 0px;padding-right: 0px;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-newsletter2 clearfix">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h3>
                                                        <i class="fa fa-envelope-o"></i> Subscribe our Newsletter
                                                        <br>
                                                        <small>Get 25% Off first purchase!</small>
                                                    </h3>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="clearfix" style="clear: both" id="newsletter86260036">
                                                        <input type="text" class="email" placeholder="Your email address here..."
                                                        />
                                                        <a class="subscribe">Subscribe!</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3>
                                                        <i class="fa fa-phone"></i>  (+251) 923 94 1078
                                                        <br>
                                                        <small>Call us toll Free 24/7!</small>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                function Unsubscribe() {
                                                    $.post('indexa47f.html?route=extension/module/newsletter/unsubscribe',
                                                        {
                                                            email: $('#newsletter86260036 .email').val()
                                                        }, function (e) {
                                                            $('#newsletter86260036 .email').val('');
                                                            alert(e.message);
                                                        }
                                                        , 'json');
                                                }

                                                function Subscribe() {

                                                  $.ajax({
                                                      url: '/emazon/subscribe?subscriber=' + $('#newsletter86260036 .email').val(),
                                                      type : 'GET',
                                                      dataType: 'json',
                                                      success: function(data){
                                                          alert(data[0].message);
                                                      }
                                                    });



                                                }

                                                $('#newsletter86260036 .subscribe').click(Subscribe);
                                                $('#newsletter86260036 .unsubscribe').click(Unsubscribe);
                                                $('#newsletter86260036 .email').keypress(function (e) {
                                                    if (e.which == 13) {
                                                        Subscribe();
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h4>Contact SmartTech!</h4>
                                        <div class="strip-line"></div>
                                        <div class="clearfix" style="clear:both">
                                            <div class="footer-contact">
                                                <p>Address: AAIT , Addis Ababa Ethiopia
                                                    </p>
                                                <p>Phone:  (+251) 923 94 1078</p>
                                                <p>Email: support@engineersio.com</p>
                                                <div class="social-links">
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
                                                        <i class="fa fa-pinterest"></i>
                                                    </a>
                                                    <a href="#.">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                    <a href="#.">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>Categories</h4>
                                        <div class="strip-line"></div>
                                        <div class="row" style="clear: both">
                                            <div class="col-sm-12">
                                                <ul>
                                                    <li>
                                                        <a href="#">Home Audio &amp; Theater</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">TV &amp; Video</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Camera, Photo &amp; Video</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Cell Phones &amp; Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Headphones</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Video Games</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Bluetooth &amp; Wireless</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>Customer Services</h4>
                                        <div class="strip-line"></div>
                                        <div class="row" style="clear: both">
                                            <div class="col-sm-12">
                                                <ul>
                                                    <li>
                                                        <a href="#">Shipping &amp; Returns</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Secure Shopping</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">International Shipping</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Affiliates</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <h4>Information</h4>
                                        <div class="strip-line"></div>
                                        <div class="row" style="clear: both">
                                            <div class="col-sm-12">
                                                <ul>
                                                    <li>
                                                        <a href="#">Our Blog</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">About Our Shop</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Secure Shopping</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delivery Information</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Store Locations</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">FAQs</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <section class="shipping-info footer-4">
                                            <div class="container">
                                                <ul>

                                                    <!-- Free Shipping -->
                                                    <li>
                                                        <div class="media-left">
                                                            <i class="flaticon-delivery-truck-1"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Free Shipping</h5>
                                                            <span>On order over $99</span>
                                                        </div>
                                                    </li>
                                                    <!-- Money Return -->
                                                    <li>
                                                        <div class="media-left">
                                                            <i class="flaticon-arrows"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Money Return</h5>
                                                            <span>30 Days money return</span>
                                                        </div>
                                                    </li>
                                                    <!-- Support 24/7 -->
                                                    <li>
                                                        <div class="media-left">
                                                            <i class="flaticon-operator"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Support 24/7</h5>
                                                            <span>Hotline: (+251) 923 94 1078</span>
                                                        </div>
                                                    </li>
                                                    <!-- Safe Payment -->
                                                    <li>
                                                        <div class="media-left">
                                                            <i class="flaticon-business"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Safe Payment</h5>
                                                            <span>Protect online payment</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
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

<!-- COPYRIGHT
================================================== -->
<div class="copyright full-width">
    <div class="background-copyright"></div>
    <div class="background">
        <div class="shadow"></div>
        <div class="pattern">
            <div class="container">
                <div class="line"></div>
                <ul>
                    <li>
                        <a href="#">
                            <img src="http://localhost/emazonResource/images/payment_5.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://localhost/emazonResource/images/payment_4.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://localhost/emazonResource/images/payment_3.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://localhost/emazonResource/images/payment_2.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://localhost/emazonResource/images/payment_1.jpg" alt="">
                        </a>
                    </li>
                </ul>

                <p>Copyright © 2018
                    <a href="#." class="ri-li">eMazon</a> All rights reserved</p>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://localhost/emazonResource/js/megamenu.js"></script>
</div>

<a href="#" class="scrollup">
<i class="fa fa-angle-up"></i>
</a>
</div>
</body>

</html>
