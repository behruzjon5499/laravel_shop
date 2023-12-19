<x-main>
    <x-slot:title>
        Product show
    </x-slot:title>

    <section class="main-content">


    <!-- Project style Start -->
    <div id="rs-project-style" class="rs-project-style pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 mb-md-30">
                    <div class="project-desc">
                        <h3>{{$products->name_ru}}</h3>


                        <!-- Services Start -->
                        <section id="rs-services-2" class="rs-services services-carousel seo-service sec-spacer">
                            <div class="container">

                                <div class="clfeatures">
                                    <div class="row common-height clearfix">
                                        <div class="col-lg-7 col-md-12 nopadding-sm mb-md-30 clearfix">
                                            <div class="vertical-middle">
                                                <div class="col-padding clearfix">
                                                    <div id="item-thumb" class="item-thumb">


                                                        <div class="owl-dot active">
                                                            <img src="/images/service/seo/9.jpg" alt="" >
                                                            <h5 class="overlay-feature-title">
                                                                <a href="#">
                                                                    Web Analytics
                                                                </a>
                                                            </h5>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-md-12 nopadding">
                                            <div id="feature-left" class="menu-carousel owl-carousel image-carousel feature-left custom-js owl-loaded" data-animate-in="fadeIn" data-margin="0" data-nav="false" data-pagi="false" data-items="1">


                                                <div class="cl-ft-item">
                                                    <a href="#">
                                                        <img src="/images/service/seo/9.jpg" alt="" >
                                                    </a>
                                                    <div class="feature-content clearfix">
                                                        <div class="heading-block">
                                                            <h4 class="feature-title">
                                                                <a href="#">
                                                                    Web Analytics
                                                                </a>
                                                            </h4>
                                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque corrupti quos dolores...</p>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Services End -->

                          </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="project-img">
                        <img src="/images/portfolio/5.jpg" alt="Project Image">
                    </div>
                    <div >
                        <button class="btn btn-success"><a style="color: white" href="{{route('products.edit',['product' => $products->id])}}">{{__('Edit')}}</a>  </button>

                        <form action="{{ route('products.destroy', $products->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this product')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm" title="Delete">Delete</button>
                        </form>
                    </div>
                    <div class="ps-informations mb-md-30">
                        <h4 class="info-title">Project Information</h4>
                        <ul>
                            <li><span>Client:  </span>Alex Root</li>
                            <li><span>Completed Date:  </span>03-02-2018</li>
                            <li><span>Architect: </span>James Doe</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="p-style-wrap">
                <h3 class="p-style-title">Project Gallery</h3>
                <div class="row">
                    <div class="col-md-4 col-sm-12 mb-sm-30">
                        <div class="item-grid">
                            <div class="image-icon">
                                <img src="/images/project/project-style/1.jpg" alt="Project Image">
                                <a class="image-popup" href="/images/project/project-style/1.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-sm-30">
                        <div class="item-grid">
                            <div class="image-icon">
                                <img src="/images/project/project-style/2.jpg" alt="Project Image">
                                <a class="image-popup" href="/images/project/project-style/2.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="item-grid">
                            <div class="image-icon">
                                <img src="/images/project/project-style/1.jpg" alt="Project Image">
                                <a class="image-popup" href="/images/project/project-style/1.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-nav">
                <ul>
                    <li class="prev">
                        <a href="#">
                            <i class="fa fa-long-arrow-left"></i>
                            <span>Logo Illustration</span>
                        </a>
                    </li>
                    <li class="next">
                        <a href="#">
                            <span>Digital Computer Table</span>
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Project Gallery End -->
</section>
</x-main>
