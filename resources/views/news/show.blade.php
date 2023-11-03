<x-main>

    <x-slot:title>
        Feedback
    </x-slot:title>

    <section class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs sec-color">
        <div class="breadcrumbs-image">
            <img src="../../images/news.jpg" style="width: 100%" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">Project Standard</h1>
                        <ul class="breadcrumbs-subtitle">
                            <li><a href="index.html"><i class="fa fa-home"></i>  Home</a></li>
                            <li>Project Standard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Project style Start -->
    <div id="rs-project-style" class="rs-project-style pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 mb-md-30">
                    <div class="project-desc">
                        <h3 style="display: inline-block">{{$news->title_ru}} / </h3> <h4 style="display: inline-block">{{$news->date}}</h4>
                        <p> {{$news->description_uz}}</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="project-img">
                        <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($news->photo) }}" alt="Project Image">
                    </div>

            </div>

        </div>
    </div>
    <!-- Project Gallery End -->
</section>
</x-main>

