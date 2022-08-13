
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kreativdev.com/transpix/transpix/index-13.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 13:21:10 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transpix - Transport & Logistic HTML Template</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- owl carousel theme css -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- slicknav css -->
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- jquery js -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
</head>



<body>
    <!--   header area start   -->
    <div class="header-area">
        <div class="support-nav-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="logo-wrapper">
                            <!-- <div class="logo-wrapper-inner">
                           <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
                        </div> -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-6 position-lg-relative position-static">
                        <div class="support-bar">
                            <div class="row">
                                <div class="offset-xl-4 col-xl-8 offset-2 col-10">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="support-info">
                                                <div class="left-content"><i class="flaticon-call"></i></div>
                                                <div class="right-content">
                                                    <div class="right-content-inner">
                                                        <h5>Free Call</h5>
                                                        <p>+ 00 12 123 456</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="support-info">
                                                <div class="left-content"><i class="flaticon-email"></i></div>
                                                <div class="right-content">
                                                    <h5>Mail us</h5>
                                                    <p>Support@mail.com </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="/quote" class="boxed-btn"><span>Get a Quote</span></a>
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
    <!--   header area end   -->

    <div >
        <div class="cart-cards">
            <div class="container">
                <div class="row" style ="justify-content: center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <h5>PLEASE ENTER YOUR ORDER ID:</h5>
                            </div>
                            <div class="card-body">
                                <form class="coupon-form" action="" method = 'POST'>
                                    @csrf
                                    <!-- <p>PLEASE ENTER YOUR TRACKING ID:</p> -->
                                    <div class="coupon-input">
                                        <!-- <h3></h3> -->
                                        <input type="text" name="trackingid" placeholder="Enter tracking ID">
                                        <button style = 'flex-basis:30%' type="submit">SHOW STATUS</button>
                                        <!-- <a href = "/track">SHOW STATUS</a> -->
                                    </div>
                                </form>
                                <div style='margin: 0 auto; text-align: center; padding: 1rem;'>
                                    <span style = ' padding: .2rem; color: white;  border: 1px solid blue'>
                                    <a style = "text-decoration: none" href = "/index">Back</a></span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--   footer section start    -->
    <footer>
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="logo-wrapper"><img src="assets/img/footer_logo.png" alt=""></div>
                        <p>Transgo shipping offers a host of logistic management services and supply chain & provide innovative solutions with the best. </p>
                    </div>
                    <div class="offset-xl-1 col-xl-2 col-lg-2">
                        <h4>Useful Links</h4>
                        <ul class="userful-links">
                            <li><a href="/index">Home</a></li>
                            <li><a href="/about_us">About us</a></li>
                            <li><a href="/quote">Quote</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/contact_us">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <h4>Services</h4>
                        <ul class="userful-links">
                            <li><a href="#">Air Freight</a></li>
                            <li><a href="#">OCEAN Freight</a></li>
                            <li><a href="#">WAREHOUSING</a></li>
                            <li><a href="#">STORAGE</a></li>
                            <li><a href="#">ROAD Freight</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <h4>Contact Us</h4>
                        <div class="footer-contact">
                            <div class="contact-info">
                                <div class="icon-wrapper"><i class="flaticon-placeholder"></i></div>
                                <p>143 castle road 517 district, kiyev port south Canada</p>
                            </div>
                            <div class="contact-info">
                                <div class="icon-wrapper"><i class="flaticon-call"></i></div>
                                <p>+00 12 123 4567</p>
                            </div>
                            <div class="contact-info">
                                <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                                <p>Info@yourmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <p class="text-center">© Copyrights 2019 Transpix. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!--   footer section end    -->


    <!-- preloader section start -->
    <div class="loader-container">
        <span class="loader">
            <span class="loader-inner"></span>
        </span>
    </div>
    <!-- preloader section end -->


    <!-- back to top area start -->
    <div class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!-- back to top area end -->



    <!-- popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- isotope js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- slicknav js -->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- ripple js -->
    <script src="assets/js/jquery.ripples-min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from kreativdev.com/transpix/transpix/index-13.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 13:21:11 GMT -->

</html>



<!-- THE SECOND PAGE STARTS HERE -->

