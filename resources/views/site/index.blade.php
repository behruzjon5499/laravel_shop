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
                @foreach($sliders as $slider)
                <img style="width: 1920px;height: 800px" src="{{ Storage::disk('public')->url($slider->photo)}}" alt="" title="#slide-1" />
                @endforeach
            </div>
         @foreach($sliders as $slider)
            <div id="slide-1" class="slider-direction">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="slider-des">
                                <h1 class="sl-title" style="color: white">{{\App\Helpers\LanguageHelper::get($slider,'title')}}</h1>
                                <div class="sl-desc margin-0" style="color: white">
                                    {{mb_strimwidth(\App\Helpers\LanguageHelper::get($slider,'description'), 0, 150, '...')}}
                                </div>
                            </div>
                            <div class="slider-bottom">
                                <ul>
                                    <li><a href="#" class="readon">{{__('Buy now')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
    <!-- Slider End -->

    <!-- categories -->
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
    <!--categories END -->


    <!-- products Start -->
    <section id="rs-portfolio2" class="rs-portfolio2 defutl-style sec-spacer">
        <div class="container">
            <div class="sec-title">
                <h3>{{__('Our Latest Project')}}</h3>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="20" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                       @foreach($products as $product)
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="{{Storage::url($product->photo)}}" alt="Portfolio Image" style="width: 100%;height: 300px" />
                            </div>
                            <div class="portfolio-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h4 class="p-title"><a href="{{route('products.show',['product' => $product])}}">{{\App\Helpers\LanguageHelper::get($product,'name')}}</a></h4>
                                        <a href="{{route('products.show',['product' => $product])}}" class="project-btn">{{__('View Details')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- products End -->

    <!-- Portfolio Section Start -->
    <div id="rs-portfolio" class="rs-portfolio sec-spacer">
        <div class="container">
            <div class="sec-title-2">
                <h3>{{__('Our Brands')}}<span>{{__('Brands')}}</span></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                       <div class="gridFilter creative-filter">
                        <button class="active" data-filter="*">{{__('All Products')}}</button>
                           @foreach($brands as $brand)
                        <button data-filter=".{{$brand->id}}">{{$brand->name}}</button>
                           @endforeach
                    </div><!-- .gridFilter end-->
                    <div class="row grid">
                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-30 grid-item {{$product->brand_id}}">
                            <div class="gallery-item popup-inner creative-item">
                                <div class="gallery-content">
                                    <img src="{{Storage::url($product->photo)}}" style="width: 100%;height: 300px" alt="" />
                                    <div class="popup-text">
                                        <div class="contents-here">
                                            <h4 class="title"><a href="{{route('products.show',['product'=>$product->id])}}">{{\App\Helpers\LanguageHelper::get($product,'name')}}</a></h4>

                                        </div>
                                        <div class="filter-icon">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .gallery-item end -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Section End -->


    <!-- News Start -->
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
    <!-- News End -->

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
