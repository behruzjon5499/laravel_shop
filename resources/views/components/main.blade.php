<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>{{ $title ?? 'Herta' }}</title>
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
    <link rel="stylesheet" href="../../css/app.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css">

    <script src="../../js/jquery.min.js"></script>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

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

                            <li><i class="fa fa-phone"></i><a href="{{$contact->phone}}">{{$contact->phone}}</a></li>

                            <li><i class="fa fa-location-arrow"></i>
                                <p>{{$contact->address}}</p></li>
                            <li><i class="fa fa-language"></i>
                                <p> <a href="{{ route('change_locale',['locale' => 'uz']) }}">Uz</a> </p>

                            </li>
                            <li><i class="fa fa-language"></i>
                                <p> <a href="{{ route('change_locale',['locale' => 'ru']) }}">Ru</a> </p>

                            </li>
                            <li><i class="fa fa-language"></i>
                                <p> <a href="{{ route('change_locale',['locale' => 'en']) }}">En</a> </p>

                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="toolbar-sl-share">
                        <ul>
                            <li><a href="https://t.me/bekhruzjon_077"><i class="fa fa-telegram"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
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
                        <a href="{{route('site.index')}}"><img src="../../images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="main-menu">
                        <a class="rs-menu-toggle"><i class="fa fa-bars"></i>{{__('Menu')}}</a>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <!-- Home -->
                                <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class="active"
                                                                                                     href="{{route('home')}}">{{__('index.Home')}} </a>
                                </li>
                                <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class="active"
                                                                                                     href="{{route('categories.index')}}">{{__('index.Categories')}}  </a>
                                </li>

                                <li class="rs-mega-menu  "><a class="active"  href="{{route('products.index')}}">{{__('Products')}} </a></li>

                                <li class="rs-mega-menu  "><a class="active"  href="{{route('site.about')}}">{{__('index.About')}} </a></li>
                                <li class="menu-item-has-children"><a href="{{route('feedbacks.create')}}">{{__('index.Contact')}} </a> </li>
                                @auth
                                    <li class="rs-mega-menu  "><a class="active"  href="{{route('orders.index')}}">
                                            <img src="/images/cart-logo.png" alt="" style="width: 50px; height: 50px">
                                         <span id="orderCartCount" style="color: white;font-size: 16px;background-color: red;border-radius: 50%;padding: 0 6px">{{$order_count}}</span>
                                        </a></li>
                                    <li class="menu-item-has-children"><a href="{{route('logout')}}">{{__('index.Logout')}} </a> </li>
                                @else
                                    <li class="menu-item-has-children"><a href="{{route('login')}}">{{__('index.Login')}} </a> </li>
                                @endauth

                            </ul>
                        </nav>
                    </div>
                    <div class="appointment-cart hidden-md">
                        @auth
                        <ul class="cart">
                            <li><a id="nav-expander" class="nav-expander"><i class="fa fa-bars fa-lg white"></i></a>
                            </li>
                        </ul>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Menu End -->

    <!-- Canvas Menu start -->
    <nav class="right_menu_togle" style="width: 30em;">
        <div class="close-btn"><span id="nav-close" class="text-center"><i class="fa fa-close"></i></span></div>
        <div class="canvas-logo">
            <a href="{{route('site.index')}}"><img src="../../images/white-logo.png" alt="logo"></a>
        </div>
        <ul class="sidebarnav_menu list-unstyled main-menu">
            <form action="{{route('updatePassword')}}" method="post">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="password">{{__('update password')}}</label>
                            <input type="text" name="password" id="password" class="form-control" required/>
                            <input type="hidden" name="user_id" id="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 10px">
                        <button data-mdb-ripple-init type="submit" style="width: 100%"
                                class="btn btn-primary btn-block mb-4">{{__('Update')}}</button>
                    </div>
                </div>
            </form>


            <div class="canvas-contact">
                <h5 class="canvas-contact-title">{{__("Shaxsiy ma'lumotlar")}}</h5>
                <ul class="contact">
                    <li> {{__('Name')}} : {{\Illuminate\Support\Facades\Auth::user()->name}}</li>
                    <li>{{__('Phone')}} : {{\Illuminate\Support\Facades\Auth::user()->phone}}</li>
                    <li> {{__('Email')}} : {{\Illuminate\Support\Facades\Auth::user()->email}} </li>
                </ul>
            </div>


            <form action="{{route('updatePersonalData')}}" method="post">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="Name">{{__('Name')}}</label>
                            <input type="text" name="name" id="Name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" class="form-control" required/>
                            <input type="hidden" name="user_id" id="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="phone">{{__('phone')}}</label>
                            <input type="text" name="phone" id="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="email">{{__('email')}}</label>
                            <input type="text" name="email" id="email" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" required/>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 10px">
                        <button data-mdb-ripple-init type="submit" style="width: 100%"
                                class="btn btn-primary btn-block mb-4">{{__('Update')}}</button>
                    </div>
                </div>

            </form>


        </ul>
    </nav>
    <!-- Canvas Menu end -->
</header>



{{$slot}}

@if(\Illuminate\Support\Facades\Session::has('message'))

    <script>
        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        $(function () {
            toastr.success("{{\Illuminate\Support\Facades\Session::get('message')}}", {timeOut: 5000})
        });

    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('error'))

    <script>
        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        $(function () {
            toastr.error("{{\Illuminate\Support\Facades\Session::get('error')}}", {timeOut: 5000})
        });

    </script>
@endif




<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-md-30">
                    <div class="about-widget">
                        <a href="index.html">
                            <img src="../images/logo-2.png" alt="Footer Logo">
                        </a>
                        <ul class="footer-address">
                            <li><i class="fa fa-map-marker"></i><a href="#">{{$contact->address}}</a></li>
                            <li><i class="fa fa-phone"></i><a href="#">{{$contact->phone}}</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">{{$contact->mail}} </a></li>
                            <li><i class="fa fa-clock-o"></i><p class="mb-0">{{__('Opening Hours')}}: {{$contact->open_hours}} – {{$contact->close_hours}}</p></li>
                        </ul>
                        <ul class="social-links">
                            <li><a href="https://t.me/bekhruzjon_077"><i class="fa fa-telegram"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-md-30">
                    <h5 class="footer-title">RECENT POSTS</h5>
                    <div class="about-widget">

                        <ul class="footer-address">
                            <li class="active"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                            <li><a href="{{route('categories.index')}}">{{__('index.Categories')}}</a></li>
                            <li><a href="{{route('products.index')}}">{{__('Products')}}</a></li>
                            <li><a href="{{route('site.about')}}">{{__('index.About')}}</a></li>
                            <li><a href="{{route('feedbacks.create')}}">{{__('index.Contact')}}</a></li>
                        </ul>


                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="row">
                        <div class="col-md-4"><a href="https://xb.uz/"><img src="/images/partner/xazna.png" alt="" style="width: 100px;height: 70px"></a></div>
                        <div class="col-md-4"><a href="https://payme.uz/home/main"><img src="/images/partner/payme.png" alt="" style="width: 100px;height: 70px"></a></div>
                        <div class="col-md-4"><a href="https://click.uz/ru"><img src="/images/partner/click.png" alt="" style="width: 100px;height: 70px;"></a></div>

                    </div>
                    <div class="row" style="margin-top: 10px">
                        <div class="col-md-4"><a href="https://uzcard.uz/ru"><img src="/images/partner/uzcard.png" alt="" style="width: 100px;height: 70px"></a></div>
                        <div class="col-md-4"><a href="https://humocard.uz/uz/"><img src="/images/partner/humo.jpg" alt="" style="width: 100px;height: 70px"></a></div>
                        <div class="col-md-4"><a href="https://app.paynet.uz/"><img src="/images/partner/paynet.png" alt="" style="width: 100px;height: 70px"></a></div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="ft-bottom-right">
                <div class="footer-bottom-share">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                        <li><a href="{{route('categories.index')}}">{{__('index.Categories')}}</a></li>
                        <li><a href="{{route('products.index')}}">{{__('Products')}}</a></li>
                        <li><a href="{{route('site.about')}}">{{__('index.About')}}</a></li>
                        <li><a href="{{route('feedbacks.create')}}">{{__('index.Contact')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>Developer bekhruzjon</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>

<!-- modernizr js -->
<script src="../../js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<!-- bootstrap js -->
<script src="../../js/bootstrap.min.js"></script>
<!-- Menu js -->
<script src="../../js/rsmenu-main.js"></script>
<!-- op nav js -->
<script src="../../js/jquery.nav.js"></script>
<!-- owl.carousel js -->
<script src="../../js/owl.carousel.min.js"></script>
<script src="../../js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="../../js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="../../js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="../../js/wow.min.js"></script>

<!-- Skill bar js -->
<script src="../../js/skill.bars.jquery.js"></script>
<script src="../../js/jquery.counterup.min.js"></script>
<!-- counter top js -->
<script src="../../js/waypoints.min.js"></script>
<!-- video js -->
<script src="../../js/jquery.mb.YTPlayer.min.js"></script>
<!-- magnific popup -->
<script src="../../js/jquery.magnific-popup.min.js"></script>
<!-- Nivo slider js -->
<script src="../../inc/custom-slider/js/jquery.nivo.slider.js"></script>
<!-- plugins js -->
<script src="../../js/plugins.js"></script>
<!-- contact form js -->
<script src="../../js/contact.form.js"></script>
<!-- main js -->
<script src="../../js/main.js"></script>
<script src="../../js/lara_main.js"></script>
<script src="../../js/input-mask.js"></script>
<script src="../../js/custom.js"></script>
</body>
</html>
