<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Herta</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="../../apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../images/fav.png">
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="../../css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="../../css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="../../css/off-canvas.css">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="../../fonts/linea-fonts.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="../../inc/custom-slider/css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="../../inc/custom-slider/css/preview.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="../../css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="../../css/rsmenu-main.css">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="../../css/rsmenu-transitions.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="defult-home">
<header id="rs-header" class="rs-header">
<?php $contact = \App\Models\Contact::first();  ?>
    <!-- Toolbar Start -->
    <div class="toolbar-area hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="toolbar-contact">
                        <ul>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@yourwebsite.com">{{$contact->mail}}</a>
                            </li>

                            <li><i class="fa fa-phone"></i><a href="tel:+123456789">{{$contact->phone}}</a></li>

                            <li><i class="fa fa-location-arrow"></i>
                                <p>{{$contact->address}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="toolbar-sl-share">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Toolbar End -->

    <!-- Header Menu Start -->
    <div class="menu-area rs-defult-header menu-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo-area">
                        <a href="{{route('site.index')}}"><img src="../images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="main-menu">
                        <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <!-- Home -->
                                <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class="active"
                                                                                                     href="#">Home </a>

                                </li>
                                <!-- End Home -->
                                <li class="menu-item-has-children"><a href="#">About<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About 1</a></li>
                                        <li><a href="about2.html">About 2</a></li>
                                        <li><a href="about3.html">About 3</a></li>
                                        <li><a href="about-me.html">About Me</a></li>
                                        <li><a href="about-faqs.html">Faqs</a></li>
                                    </ul>
                                </li>
                                <li class="rs-mega-menu menu-item-has-children"><a href="#">Pages<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        <li class="mega-menu-innner">
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li class="megamenu-title">Projects</li>
                                                    <li><a href="project.html">Project 2 Column</a></li>
                                                    <li><a href="project-2.html">Project 3 Column</a></li>
                                                    <li><a href="project-3.html">Project 4 Column</a></li>
                                                    <li><a href="project-4.html">Project Full Width</a></li>
                                                </ul>
                                            </div>
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li class="megamenu-title">Team</li>
                                                    <li><a href="team.html">Team One</a></li>
                                                    <li><a href="team-2.html">Team Two</a></li>
                                                    <li><a href="team-3.html">Team Three</a></li>
                                                    <li><a href="team-4.html">Team Four</a></li>
                                                </ul>
                                            </div>
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li class="megamenu-title">Others</li>
                                                    <li><a href="project-gallery.html">Project Gallery</a></li>
                                                    <li><a href="project-slider.html">Project Slider</a></li>
                                                    <li><a href="project-standard.html">Project Standard</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul> <!-- //.mega-menu -->
                                </li>
                                <li class="menu-item-has-children"><a href="#">Services<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="services.html">Servics 1</a></li>
                                        <li><a href="services2.html">Servics 2</a></li>
                                        <li><a href="services3.html">Servics 3</a></li>
                                        <li><a href="services-single.html">Servics Single</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Projects<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="project.html">Project 2 Column</a></li>
                                        <li><a href="project-2.html">Project 3 Column</a></li>
                                        <li><a href="project-3.html">Project 4 Column</a></li>
                                        <li><a href="project-4.html">Project Full Width</a></li>
                                        <li class="menu-item-has-children"><a href="#">Project Single Style<i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="project-gallery.html">Project Gallery</a></li>
                                                <li><a href="project-slider.html">Project Slider</a></li>
                                                <li><a href="project-standard.html">Project Standard</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="shop.html">Shop<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-single.html">Single Product</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="blog.html">Blog<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="#">Blog Grid<i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-2.html">Blog 2 Column</a></li>
                                                <li><a href="blog-3.html">Blog 3 Column</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Blog Sidebar<i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Single Post </a>

                                        </li>
                                    </ul>
                                </li>
                                <li class="rs-mega-menu  "><a class="active"  href="{{route('site.about')}}">About </a></li>
                                <li class="menu-item-has-children"><a href="{{route('feedbacks.create')}}">Contact </a> </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="appointment-cart hidden-md">
                        <ul class="cart">
                            <li class="search"><i class="fa fa-search"></i></li>
                            <li><a id="nav-expander" class="nav-expander"><i class="fa fa-bars fa-lg white"></i></a>
                            </li>
                        </ul>
                        <div class="search-bar">
                            <input type="search" placeholder="Search...">
                            <button type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Menu End -->

    <!-- Canvas Menu start -->
    <nav class="right_menu_togle">
        <div class="close-btn"><span id="nav-close" class="text-center"><i class="fa fa-close"></i></span></div>
        <div class="canvas-logo">
            <a href="index.html"><img src="../../images/white-logo.png" alt="logo"></a>
        </div>
        <ul class="sidebarnav_menu list-unstyled main-menu">
            <!--Home Menu Start-->
            <li><a href="index.html">Home</a></li>
            <!--Home Menu End-->

            <!--About Menu Start-->
            <li><a href="about.html">About</a></li>
            <!--About Menu End-->

            <!--Services Menu Start-->
            <li><a href="services.html">Services</a></li>
            <!--Services Menu End-->

            <!--Blog Menu Star-->
            <li><a href="blog.html">Blog</a></li>
            <!--Blog Menu End-->

            <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="canvas-contact">
            <h5 class="canvas-contact-title">Contact Info</h5>
            <ul class="contact">
                <li><i class="fa fa-globe"></i>Tikkatuli Road, New York, USA</li>
                <li><i class="fa fa-phone"></i>+123445789</li>
                <li><i class="fa fa-envelope"></i><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
                <li><i class="fa fa-clock-o"></i>10:00 AM - 11:30 PM</li>
            </ul>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Canvas Menu end -->
</header>

@if(\Illuminate\Support\Facades\Session::has('message'))

    <script>
        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        $(function () {
            toastr.success("{{\Illuminate\Support\Facades\Session::get('message')}}", {timeOut: 5000})
        });

    </script>
@endif
