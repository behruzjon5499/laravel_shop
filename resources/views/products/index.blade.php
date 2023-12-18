<x-main>
    <x-slot:title>
        Products
    </x-slot:title>


    <!-- Blog Start -->
    <section id="rs-blog" class="rs-blog sec-spacer">
        <div class="container">
            <div class="sec-title">
                <h3>{{__('Latest products')}}</h3>
                <button class="btn btn-success"><a style="color: white;" href="{{route('products.create')}}">{{__('Product create')}}</a></button>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="blog-item   col-lg-4 col-md-6 col-sm-12 mb-sm-30" >
                        <div class="blog-img">
                            <img src="{{ Storage::url($product->photo)}}" style="height: 350px" alt="Blog Image">
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
                                    <li><i class="fa fa-calendar"></i><span>{{$product->date}}</span></li>
                                </ul>
                            </div>
                            <div class="blog-desc" style="height: 150px">
                                <a href="#">{{$product->name_ru}}</a>
                                <p> {{mb_strimwidth($product->description_uz, 0, 150, '...')}}</p>
                            </div>
                            <a href="{{route('products.show',['product' => $product])}}" class="readon">{{__('Read More')}}</a>
                        </div>
                    </div>
                @endforeach
                    <div style="">
                        {{ $products->links() }}
                    </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->


</x-main>
