<x-main>

<x-slot:title>
    Bosh sahifa
</x-slot:title>

<!-- Main content Start -->
<div class="main-content">
    <!-- Slider Start -->
    <div id="rs-slider" class="rs-slider rs-slider-one">
        <div class="bend niceties">
            <div id="nivoSlider" class="slides">
                <img src="../../images/slider/home1.jpg" alt="" title="#slide-1" />
                <img src="../../images/slider/slide_2.jpg" alt="" title="#slide-2" />
            </div>
            <!-- Slide 1 -->
            <div id="slide-1" class="slider-direction">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="slider-des">
                                <h3 class="sl-sub-title">Corporate Solutions</h3>
                                <h1 class="sl-title">Best Business<br>HTML5 Template</h1>
                                <div class="sl-desc margin-0">
                                    Best Multipurpose Creative Business Template 2018
                                </div>
                            </div>
                            <div class="slider-bottom">
                                <ul>
                                    <li><a href="#" class="readon">Buy Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div id="slide-2" class="slider-direction">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="slider-des">
                                <h3 class="sl-sub-title">Business Solutions</h3>
                                <h1 class="sl-title">We Create<br>Nice Template</h1>
                                <div class="sl-desc margin-0">
                                    Best Multipurpose Creative Business Template 2018
                                </div>
                            </div>
                            <div class="slider-bottom">
                                <ul>
                                    <li><a href="#" class="readon">Buy Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- HOW WE WORK Start -->
    <div class="how-we-work defult-style pt-100 pb-100">
        <div class="container">
            <div class="work-sec-gallery">
                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-sm-30">
                        <div class="work-column">
                            <div class="common-box">
                                <img src={{ Storage::disk('public')->url($category->photo)}} alt="" style="height: 300px;">
                            </div>
                            <div class="work-gallery-caption">
                                <h4><a href="{{route('categories.show',['id'=>$category->id])}}">{{$category->name_uz}}</a></h4>
                                <p>
                                    {{mb_strimwidth(\App\Helpers\LanguageHelper::get($category,'description'), 0, 150, '...')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- HOW WE WORK END -->

    <!-- Services Start -->
    <section id="rs-services" class="rs-services-3 rs-service-style1 sec-color pt-100 pb-70">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-4 col-md-12 mb-md-50">
                    <div class="service-title">
                        <h3>25 Years of Experience in Financial & Business Services
                        </h3>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                        <a href="#" class="readon">View Services</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <!-- 1st -->
                        <div class="col-md-6 col-sm-12">
                            <div class="common">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="icon-part">
                                            <i data-icon="&#xe001;" class="icon-part"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="text">
                                            <a href="services-details.html"><h4>Business Consulting</h4></a>
                                            <p>Lorem ipsum dolor sit amet dolore, consectetur adipisicing elit. Nulla, quam dolore nemo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="common">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="icon-part">
                                            <i data-icon="&#xe026;" class="icon-part"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="text">
                                            <a href="services-details.html"><h4>Risk Management</h4></a>
                                            <p>Lorem ipsum dolor sit amet dolore, consectetur adipisicing elit. Nulla, quam dolore nemo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd -->
                        <div class="col-md-6 col-sm-12">
                            <div class="common">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="icon-part">
                                            <i data-icon="%" class="icon-part"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="text">
                                            <a href="services-details.html"><h4>Market Research</h4></a>
                                            <p>Lorem ipsum dolor sit amet dolore, consectetur adipisicing elit. Nulla, quam dolore nemo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="common">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="icon-part">
                                            <i data-icon="/" class="icon-part"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="text">
                                            <a href="services-details.html"><h4>Financial Consulting</h4></a>
                                            <p>Lorem ipsum dolor sit amet dolore, consectetur adipisicing elit. Nulla, quam dolore nemo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4th -->

        </div>
    </section>
    <!-- Services End -->

    <!-- Portfolio Start -->
    <section id="rs-portfolio2" class="rs-portfolio2 defutl-style sec-spacer">
        <div class="container">
            <div class="sec-title">
                <h3>Our Latest Project</h3>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="20" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="../../images/portfolio/home1.jpg" alt="Portfolio Image" />
                            </div>
                            <div class="portfolio-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h4 class="p-title"><a href="portfolio-details.html">International Growth Fund</a></h4>
                                        <a href="portfolio-details.html" class="project-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="../../images/portfolio/home2.jpg" alt="Portfolio Image" />
                            </div>
                            <div class="portfolio-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h4 class="p-title"><a href="portfolio-details.html">Marketing Plan</a></h4>
                                        <a href="portfolio-details.html" class="project-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/portfolio/home3.jpg" alt="Portfolio Image" />
                            </div>
                            <div class="portfolio-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h4 class="p-title"><a href="portfolio-details.html">Speaker Block</a></h4>
                                        <a href="portfolio-details.html" class="project-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/portfolio/home4.jpg" alt="Portfolio Image" />
                            </div>
                            <div class="portfolio-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h4 class="p-title"><a href="portfolio-details.html">Financial Planning</a></h4>
                                        <a href="portfolio-details.html" class="project-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio End -->

    <!-- Expertise Area satar -->
    <div class="why-choose-us defult-style sec-color pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-md-50">
                    <div class="video-section-area">
                        <div class="image-here">
                            <img src="images/video/video.jpg" alt="">
                            <div class="video-icon-here">
                                <a class="popup-videos animated pulse" href="https://www.youtube.com/watch?v=YLN1Argi7ik" title="Video Icon">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="overly-border"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 services-responsibiity">
                    <div class="service-res-inner">
                        <div class="sec-title">
                            <h3>Why Choose Us</h3>
                        </div>
                        <div class="services-item">
                            <div class="service-mid-icon">
                                <a href="#"><span class="service-mid-icon-container"><i data-icon="a" class="icon"></i></span></a>
                            </div>
                            <div class="services-desc">
                                <h3 class="services-title"><a href="service-details.html">First Working Prosses</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="service-mid-icon">
                                <a href="#"><span class="service-mid-icon-container"><i data-icon="6" class="icon"></i></span></a>
                            </div>
                            <div class="services-desc">
                                <h3 class="services-title"><a href="service-details.html">Dedicate Team</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                        <div class="services-item margin-0">
                            <div class="service-mid-icon">
                                <a href="#"><span class="service-mid-icon-container"><i data-icon="&#xe023;" class="icon"></i></span></a>
                            </div>
                            <div class="services-desc">
                                <h3 class="services-title"><a href="service-details.html">24/7 Hours Support</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise Area end -->

    <!-- Team Start -->
    <section id="rs-team" class="rs-defult-team defult-style sec-spacer">
        <!-- Counter Up Section Start Here-->
        <div class="counter-top-area defult-style">
            <div class="container">
                <div class="row rs-count">
                    <!-- COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
                        <div class="rs-counter-list">
                            <i data-icon="W" class="icon"></i>
                            <h3 class="rs-counter">5000</h3>
                            <h4>Happy Client</h4>
                        </div>
                    </div>
                    <!-- COUNTER-LIST END -->

                    <!-- COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6  wow fadeInUp" data-wow-duration=".7s" data-wow-delay="300ms">
                        <div class="rs-counter-list">
                            <i data-icon="C" class="icon"></i>
                            <h3 class="rs-counter">5058</h3>
                            <h4>Project Done </h4>
                        </div>
                    </div>
                    <!-- COUNTER-LIST END -->

                    <!-- COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay="300ms">
                        <div class="rs-counter-list">
                            <i data-icon="P" class="icon"></i>
                            <h3 class="rs-counter">3890</h3>
                            <h4>Awards Won</h4>
                        </div>
                    </div>
                    <!-- COUNTER-LIST END -->

                    <!-- COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="300ms">
                        <div class="rs-counter-list">
                            <i data-icon="&#xe001;" class="icon"></i>
                            <h3 class="rs-counter">0025</h3>
                            <h4 class="last">Experience Year</h4>
                        </div>
                    </div>
                    <!-- COUNTER-LIST END -->
                </div>
            </div>
        </div>
        <!-- Counter Down Section End Here-->
        <div class="container">
            <div class="sec-title">
                <h3>Our Expert Advisor</h3>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                <!--team item start -->
                <div class="team-item">
                    <div class="team-overlay">
                        <div class="team-img">
                            <img src="images/team/1.jpg" alt="team Image" />
                        </div>
                        <div class="team-content">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <a href="team-details.html"><h4 class="title">A.Rashid</h4></a>
                        <span class="post">Founder & CEO</span>
                    </div>
                </div>
                <!--team item end -->

                <!--team item start -->
                <div class="team-item">
                    <div class="team-overlay">
                        <div class="team-img">
                            <img src="images/team/2.jpg" alt="team Image" />
                        </div>
                        <div class="team-content">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <a href="team-details.html"><h4 class="title">Mahabub Alam</h4></a>
                        <span class="post">Founder & ceo</span>
                    </div>
                </div>
                <!--team item end -->

                <!--team item start -->
                <div class="team-item">
                    <div class="team-overlay">
                        <div class="team-img">
                            <img src="images/team/3.jpg" alt="team Image" />
                        </div>
                        <div class="team-content">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <a href="team-details.html"><h4 class="title">Stive Austin</h4></a>
                        <span class="post">Senior Web Developer</span>
                    </div>
                </div>
                <!--team item end -->

                <!--team item start -->
                <div class="team-item">
                    <div class="team-overlay">
                        <div class="team-img">
                            <img src="images/team/4.jpg" alt="team Image" />
                        </div>
                        <div class="team-content">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <a href="team-details.html"><h4 class="title">Peter Parker</h4></a>
                        <span class="post">Manager</span>
                    </div>
                </div>
                <!--team item end -->

                <!--team item start -->
                <div class="team-item">
                    <div class="team-overlay">
                        <div class="team-img">
                            <img src="images/team/5.jpg" alt="team Image" />
                        </div>
                        <div class="team-content">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <a href="team-details.html"><h4 class="title">Justin Bieber</h4></a>
                        <span class="post">Manager</span>
                    </div>
                </div>
                <!--team item end -->
            </div>
        </div>
    </section>
    <!-- Team end -->

    <!-- customer Start -->
    <section id="rs-customer" class="rs-defult-customer rs-customer3 gray-color">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-sm-50">
                    <!-- Contact Start -->
                    <section id="rs-contact" class="rs-contact">
                        <div class="contact-bg">
                            <div class="contact-form">
                                <div class="sec-title">
                                    <h3 class="contact-title">Need a Quick Query</h3>
                                </div>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="mailer.php">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-field">
                                                <input type="text" placeholder="Name" id="name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-field">
                                                <input type="email" placeholder="E-Mail" id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-field">
                                                <input type="text" placeholder="Phone Number" id="phone_number" name="phone_number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-field">
                                        <textarea placeholder="Your Message Here" rows="2" id="message" name="message" required></textarea>
                                    </div>
                                    <div class="form-button text-left">
                                        <button type="submit" class="readon">Submit Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Contact End -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="1" data-md-device-nav="false" data-md-device-dots="true">
                        <!-- Style 1 Start -->
                        <div class="customer-item">
                            <div class="customer-part">
                                <div class="item-img">
                                    <img src="images/testimonial2/1.jpg" alt="">
                                </div>
                                <div class="item-details">
                                    <p>But I must explain to you how all of thismistaken idea of the denoun on pleasure and praising</p>
                                </div>
                                <div class="item-author">
                                    <div class="item-name">
                                        Stive
                                    </div>
                                    <div class="item-designation">Founder Xyzm</div>
                                </div>
                            </div>
                        </div>
                        <!-- Style 1 End -->

                        <!-- Style 2 Start -->
                        <div class="customer-item">
                            <div class="item-img">
                                <img src="images/testimonial2/2.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p>But I must explain to you how all of thismistaken idea of the denoun on pleasure and praising</p>
                            </div>
                            <div class="item-author">
                                <div class="item-name">
                                    Jessi Jully
                                </div>
                                <div class="item-designation">Founder Xyzm</div>
                            </div>
                        </div>
                        <!-- Style 2 End -->

                        <!-- Style 3 Start -->
                        <div class="customer-item">
                            <div class="item-img">
                                <img src="images/testimonial2/3.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p>But I must explain to you how all of thismistaken idea of the denoun on pleasure and praising</p>
                            </div>
                            <div class="item-author">
                                <div class="item-name">
                                    Lisa Broom
                                </div>
                                <div class="item-designation">Founder Xyzm</div>
                            </div>
                        </div>
                        <!-- Style 3 End -->

                        <!-- Style 4 Start -->
                        <div class="customer-item">
                            <div class="item-img">
                                <img src="images/testimonial2/4.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p>But I must explain to you how all of thismistaken idea of the denoun on pleasure and praising</p>
                            </div>
                            <div class="item-author">
                                <div class="item-name">
                                    Lisa Broom
                                </div>
                                <div class="item-designation">Founder Xyzm</div>
                            </div>
                        </div>
                        <!-- Style 4 End -->

                        <!-- Style 5 Start -->
                        <div class="customer-item">
                            <div class="item-img">
                                <img src="images/testimonial2/5.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p>But I must explain to you how all of thismistaken idea of the denoun on pleasure and praising</p>
                            </div>
                            <div class="item-author">
                                <div class="item-name">
                                    Lisa Broom
                                </div>
                                <div class="item-designation">Founder Xyzm</div>
                            </div>
                        </div>
                        <!-- Style 5 End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- customar end -->

    <!-- Blog Start -->
    <section id="rs-blog" class="rs-blog sec-spacer">
        <div class="container">
            <div class="sec-title">
                <h3>Latest News</h3>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
             @foreach($news as $new)
                <div class="blog-item" >
                    <div class="blog-img">
                        <img src="{{ Storage::disk('public')->url($new->photo)}}" style="height: 350px" alt="Blog Image">
                        <div class="blog-img-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <a class="blog-link" href="#" title="Blog Link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-wrapper" >
                        <div class="blog-meta">
                            <ul>
                                <li><i class="fa fa-calendar"></i><span>{{$new->date}}</span></li>
                            </ul>
                        </div>
                        <div class="blog-desc" style="height: 150px">
                            <a href="#">{{$new->title_ru}}</a>
                            <p> {{mb_strimwidth($new->description_uz, 0, 150, '...')}}</p>
                        </div>
                        <a href="{{route('news.show',['id' => $new->id])}}" class="readon">Read More</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Blog End -->

    <!-- Partner Start -->
    <div id="rs-defult-partner" class="rs-defult-partner sec-color pt-100 pb-100">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="true" data-md-device-dots="false">
                @foreach($partners as $partner)
                <div class="partner-item">
                    <a href="#"><img src="{{ Storage::disk('public')->url($partner->logo)}}" alt="Partner Image"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Partner End -->
</div>

</x-main>
