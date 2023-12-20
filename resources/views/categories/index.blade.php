<x-main>
    <x-slot:title>
        Categories
    </x-slot:title>

<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs sec-color">
        <div class="breadcrumbs-image">
            <img src="../images/breadcrumbs/service.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">Services</h1>
                        <ul class="breadcrumbs-subtitle">
                            <li><a href="index.html"><i class="fa fa-home"></i>  Home</a></li>
                            <li>Services</li>
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
                <h3>We Help Your Business!</h3>
                <p class="width-70">Duis autem vel eum iriure dolor in hendrerit and vulputate velit esse molest esse diten aese eros et acccumsan et iusto velit esse molestie.</p>
            </div>
            <div class="work-sec-gallery">
                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="work-column">
                            <div class="common-box">
                                <a href="{{route('categories.show',['id'=>$category->id])}}">  <img src="{{\Illuminate\Support\Facades\Storage::disk('public')->url($category->photo)}}" alt="Work Section Image" style="height: 300px;"></a>
                            </div>
                            <div class="work-gallery-caption">
                                <h4><a href="#">{{\App\Helpers\LanguageHelper::get($category, 'title')}}</a></h4>
                                <p>{{\App\Helpers\LanguageHelper::get($category, 'description')}}</p>
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
