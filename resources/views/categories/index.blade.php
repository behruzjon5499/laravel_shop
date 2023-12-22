<x-main>
    <x-slot:title>
        {{__('Categories')}}
    </x-slot:title>

<div class="main-content">
    <!-- Breadcrumbs Start -->
{{--    <div class="rs-breadcrumbs sec-color">--}}
{{--        <div class="breadcrumbs-image">--}}
{{--            <img src="../images/breadcrumbs/service.jpg" alt="Breadcrumbs Image">--}}
{{--            <div class="breadcrumbs-inner">--}}
{{--                <div class="container">--}}
{{--                    <div class="breadcrumbs-text">--}}
{{--                        <h1 class="breadcrumbs-title">{{__('Categories')}}</h1>--}}
{{--                        <ul class="breadcrumbs-subtitle">--}}
{{--                            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>  {{__('Home')}}</a></li>--}}
{{--                            <li>{{__('Categories')}}</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Breadcrumbs End -->

    <!-- HOW WE WORK Start -->
    <div id="how-we-work" class="how-we-work defult-style sec-spacer">
        <div class="container">
            <div class="sec-title extra-none">
                <h3>{{__('We Help Your Business!')}}</h3>
            </div>
            <div class="work-sec-gallery">
                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="work-column">
                            <div class="common-box">
                                <a href="{{route('productIndex',['category_id'=>$category->id])}}">  <img src="{{\Illuminate\Support\Facades\Storage::disk('public')->url($category->photo)}}" alt="Work Section Image" style="height: 300px;"></a>
                            </div>
                            <div class="work-gallery-caption">
                                <h4><a href="#">{{\App\Helpers\LanguageHelper::get($category, 'title')}}</a></h4>
                                <p>{{mb_strimwidth(\App\Helpers\LanguageHelper::get($category, 'description'), 0, 150, '...')}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div style="">
                        {{ $categories->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>



</div>
</x-main>
