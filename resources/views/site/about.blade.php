<x-main>
    <x-slot:title>
        {{__('About')}}
    </x-slot:title>
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs sec-color">
        <div class="breadcrumbs-image">
            <img src="/images/about-slider.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">{{__('About')}}</h1>
                        <ul class="breadcrumbs-subtitle">
                            <li><a href="{{route('home')}}"><i class="fa fa-home"></i> {{__('Home')}}</a></li>
                            <li>{{__('About')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- HOW WE WORK Start -->
    <div id="how-we-work" class="how-we-work defult-style sec-spacer">
        <div class="container">
            <div class="sec-title extra-none">
                <h3>{{\App\Helpers\LanguageHelper::get($about, 'title')}}</h3>
                <p class="width-70">{{\App\Helpers\LanguageHelper::get($about, 'description')}}</p>
            </div>
            <div class="work-sec-gallery">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="work-column">
                            <div class="common-box">
                                <img src="{{Storage::url($post->photo)}}" alt="Work Section Image" style="width: 100%;height: 250px">
                            </div>
                            <div class="work-gallery-caption">
                                <h4><a href="#">{{\App\Helpers\LanguageHelper::get($post,'title')}}</a></h4>
                                <p>    {{mb_strimwidth(\App\Helpers\LanguageHelper::get($post,'description'), 0, 150, '...')}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- HOW WE WORK END -->

    <!-- Expertise Area satar -->
    <div class="why-choose-us rs-skills corporate-skills right-skills-bar" style="background-image: url('../images/youtube_back.jpg')">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-md-30 padding-0 hidden-md" >
                <div class="video-section-area">
                    <div class="image-here">
                        <div class="video-icon-here">
                            <a class="popup-videos animated pulse" href="{{$about->youtube_url}}" title="Video Icon">
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="overly-border"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 corporate-skills-inner" >
                <div class="sec-title extra-none">
                    <h3>Our Skill & Reputation</h3>
                </div>

                @foreach($skills as $skill)
                    <div class="skill-area mb-25">
                        <span class="skill-title">{{$skill->name . " ". $skill->percent}}%</span>
                        <div class="progress">
                            <div class="progress-bar style-13 progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$skill->percent}}% !important;" aria-valuenow="{{$skill->percent}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                @endforeach
                <!-- Counter Up Section Start Here-->
                <div class="counter-top-area corporate-style pt-70 pb-70">
                    <div class="row">
                        <!-- COUNTER-LIST START -->
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
                            <div class="rs-counter-list">
                                <i data-icon="W" class="icon"></i>
                                <h3 class="rs-counter">{{$users_count}}</h3>
                                <h4>{{__('Users')}}</h4>
                            </div>
                        </div>
                        <!-- COUNTER-LIST END -->

                        <!-- COUNTER-LIST START -->
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="300ms">
                            <div class="rs-counter-list">
                                <i data-icon="C" class="icon"></i>
                                <h3 class="rs-counter">{{$products_count}}</h3>
                                <h4>{{__('Products')}}</h4>
                            </div>
                        </div>
                        <!-- COUNTER-LIST END -->

                        <!-- COUNTER-LIST START -->
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration=".9s" data-wow-delay="300ms">
                            <div class="rs-counter-list">
                                <i data-icon="P" class="icon"></i>
                                <h3 class="rs-counter">{{$feedback_count}}</h3>
                                <h4>{{__('Feedbacks')}}</h4>
                            </div>
                        </div>
                        <!-- COUNTER-LIST END -->
                    </div>
                </div>
                <!-- Counter Down Section End Here-->
            </div>
        </div>
    </div>
    <!-- Expertise Area end -->


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
