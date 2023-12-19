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
                        <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.</p>

                        <p>To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.The European languages are members of the same family. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.</p>

                        <p class="">It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="project-img">
                        <img src="/images/portfolio/5.jpg" alt="Project Image">
                    </div>
                    <div >
                        <button class="btn btn-success"><a style="color: white" href="{{route('products.edit',['product' => 22])}}">{{__('Edit')}}</a>  </button>
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
