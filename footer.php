<?php session_start() ?>
<section class="section-padding footer-mid" style="background-color: white">
    <div class="container pt-15 pb-20">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="widget-about font-md mb-md-5 mb-lg-0">
                    <div class="logo logo-width-1 wow fadeIn animated">
                        <a href="index.html" style="font-family: 'Cascadia Mono'; color: black; font-size: 30px">Book Shop</a>
                    </div>
                    <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                    <p class="wow fadeIn animated">
                        <strong>Address: </strong>404 New Road, Street 123, Kathmandu
                    </p>
                    <p class="wow fadeIn animated">
                        <strong>Phone: </strong>+01 2345 678 /(+977) 983123123
                    </p>
                    <p class="wow fadeIn animated">
                        <strong>Hours: </strong>10:00 - 18:00, Mon - Sat
                    </p>
                    <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                    <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                        <a href="#"><img src="assets/img/theme/icons/icon-facebook.svg" alt=""></a>
                        <a href="#"><img src="assets/img/theme/icons/icon-twitter.svg" alt=""></a>
                        <a href="#"><img src="assets/img/theme/icons/icon-instagram.svg" alt=""></a>
                        <a href="#"><img src="assets/img/theme/icons/icon-pinterest.svg" alt=""></a>
                        <a href="#"><img src="assets/img/theme/icons/icon-youtube.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3">
                <h5 class="widget-title wow fadeIn animated">About</h5>
                <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Support Center</a></li>
                </ul>
            </div>
            <div class="col-lg-2  col-md-3">
                <h5 class="widget-title wow fadeIn animated">My Account</h5>
                <ul class="footer-list wow fadeIn animated">
                    <?php if(!isset($_SESSION['ticket'])){ ?>
                    <li><a href="login.php">Sign In</a></li>
                    <?php } ?>
                    <li><a href="cart.php">View Cart</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Order</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5 class="widget-title wow fadeIn animated">Install App</h5>
                <div class="row">
                    <div class="col-md-8 col-lg-12">
                        <p class="wow fadeIn animated">From App Store or Google Play</p>
                        <div class="download-app wow fadeIn animated">
                            <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="assets/img/theme/app-store.jpg" alt=""></a>
                            <a href="#" class="hover-up"><img src="assets/img/theme/google-play.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                        <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                        <img class="wow fadeIn animated" src="assets/img/theme/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>