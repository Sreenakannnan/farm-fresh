<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="/user/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="user/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/user/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/user/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/user/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/user/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="/user/images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="/index">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="/profile">My PROFILE</a></li>
                        <li class="nav-item"><a class="nav-link" href="/viewcart">VIEW CART</a></li>
                        <li class="nav-item"><a class="nav-link" href="/vieworder">VIEW ORDER</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="/logout">LOGOUT</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->


                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                    <li class="cart-box">
                        <ul class="cart-list">
                            <li>
                                <a href="#" class="photo"><img src="/user/images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Delica omtantur </a></h6>
                                <p>1x - <span class="price">$80.00</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="/user/images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Omnes ocurreret</a></h6>
                                <p>1x - <span class="price">$60.00</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="/user/images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Agam facilisis</a></h6>
                                <p>1x - <span class="price">$40.00</span></p>
                            </li>
                            <li class="total">
                                <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                                <span class="float-right"><strong>Total</strong>: $180.00</span>
                            </li>
                        </ul>
                    </li>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
@yield('user-body')
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Business Time</h3>
                            <ul class="list-time">
                                <li>Monday - Friday: 08.00am to 05.00pm</li>
                                <li>Saturday: 10.00am to 08.00pm</li>
                                <li>Sunday: <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Newsletter</h3>
                            <form class="newsletter-box">
                                <div class="form-group">
                                    <input class="" type="email" name="Email" placeholder="Email Address*" />
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <button class="btn hvr-hover" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Social Media</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->


    <!-- ALL JS FILES -->
    <script src="/user/js/jquery-3.2.1.min.js"></script>
    <script src="/user/js/popper.min.js"></script>
    <script src="/user/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="/user/js/jquery.superslides.min.js"></script>
    <script src="/user/js/bootstrap-select.js"></script>
    <script src="/user/js/inewsticker.js"></script>
    <script src="/user/js/bootsnav.js."></script>
    <script src="/user/js/images-loded.min.js"></script>
    <script src="/user/js/isotope.min.js"></script>
    <script src="/user/js/owl.carousel.min.js"></script>
    <script src="/user/js/baguetteBox.min.js"></script>
    <script src="/user/js/form-validator.min.js"></script>
    <script src="/user/js/contact-form-script.js"></script>
    <script src="/user/js/custom.js"></script>
</body>

</html>