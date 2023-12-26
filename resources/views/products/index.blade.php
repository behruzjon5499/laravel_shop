<x-main>
    <x-slot:title>
        Products
    </x-slot:title>


    <!-- Blog Start -->
    <section id="rs-blog" class="rs-blog sec-spacer">
        <div class="container">
            <div class="sec-title">
                <h3>{{__('Latest products')}}</h3>
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin'))
                <button class="btn btn-success"><a style="color: white;" href="{{route('products.create')}}">{{__('Product create')}}</a></button>
                @endif
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="blog-item   col-lg-4 col-md-6 col-sm-12 mb-sm-30" >
                        <div class="blog-img">
                            <a href="{{route('products.show',['product' => $product])}}">  <img src="{{ Storage::url($product->photo)}}" style="height: 350px" alt="Blog Image"></a>

                        </div>
                        <div class="content-wrapper" >
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="fa fa-calendar"></i><span>{{$product->date}}</span></li>
                                </ul>
                            </div>
                            <div class="blog-desc" style="height: 150px">
                                <a href="{{route('products.show',['product' => $product])}}">{{\App\Helpers\LanguageHelper::get($product, 'name')}}</a>
                                <p> {{mb_strimwidth(\App\Helpers\LanguageHelper::get($product, 'description'), 0, 150, '...')}}</p>
                                <p> {{ number_format($product->price) }}</p>
                            </div>

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
