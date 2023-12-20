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
                            <h3>{{\App\Helpers\LanguageHelper::get($product, 'name')}}</h3>


                            <!-- Services Start -->
                            <section id="rs-services-2" class="rs-services services-carousel seo-service sec-spacer">
                                <div class="container">

                                    <div class="clfeatures">
                                        <div class="row common-height clearfix">
                                            <div class="col-lg-7 col-md-12 nopadding-sm mb-md-30 clearfix">
                                                <div class="vertical-middle">
                                                    <div class="col-padding clearfix">
                                                        <div id="item-thumb" class="item-thumb">

                                                            @if($product->files)
                                                                @foreach($product->files as $file)
                                                                    <div class="owl-dot active">
                                                                        <img src="{{Storage::url($file->file)}}" alt=""
                                                                             style="height: 100px;width: 100px">
                                                                        <h5 class="overlay-feature-title">

                                                                        </h5>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-12 nopadding">
                                                <div id="feature-left"
                                                     class="menu-carousel owl-carousel image-carousel feature-left custom-js owl-loaded"
                                                     data-animate-in="fadeIn" data-margin="0" data-nav="false"
                                                     data-pagi="false" data-items="1">

                                                    @if($product->files)
                                                        @foreach($product->files as $file)
                                                            <div class="cl-ft-item">
                                                                <a href="#">
                                                                    <img src="{{Storage::url($file->file)}}" alt=""
                                                                         style="height: 300px;width:300px">
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Services End -->

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12"
                         style="border: 1px solid #e8e8e8;border-radius:12px;text-align: center">
                        <div class="project-img">

                            <h3>{{number_format($product->price)}}</h3>

                            <p>
                                {{__('Етказиб бериш тўғрисида маълумот')}}:
                                <br>
                                <i class="fa fa-car"></i> {{__('Стандарт етказиб бериш')}} <br>
                                {{__('Манзилга қараб 4 соатдан 3 кунгача етказиб берилади')}}
                            </p>
                        </div>
                        <div>
                            <a style="color: white" href="{{route('products.edit',['product' => $product->id])}}">
                                <button style="width: 50%;background-color: #12bf6c;margin: 10px 0"
                                        class="btn btn-success">{{__('Edit')}} </button>
                            </a>

                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this product')">
                                @method('delete')
                                @csrf
                                <button style="width: 50%;margin-bottom: 10px" class="btn btn-danger btn-sm"
                                        title="Delete">Delete
                                </button>
                            </form>
                        </div>
                        <div class="ps-informations mb-md-30" style="background-color: white">
                            <h4 class="info-title">{{__('Product information')}}</h4>
                            <ul style="text-align: left">
                                @if($product->data)
                                    @foreach($product->data as $data)
                                        <li> {{$data->name}} _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ {{$data->value}}t</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-7 col-md-12 mb-md-30">
                        <div class="project-desc">
                            <p>{{\App\Helpers\LanguageHelper::get($product, 'description')}}</p>

                            <!-- Services Start -->
                            <section id="rs-services-2" class="rs-services services-carousel seo-service sec-spacer">
                                <div class="container">

                                </div>
                            </section>
                            <!-- Services End -->

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12"
                         style="border: 1px solid #e8e8e8;border-radius:12px;text-align: center">

                        <h3>{{__('Sharhlar')}}</h3>


                        @if($comments)
                            @foreach($comments as $comment)
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset class="rating" >
                                            <input type="radio"   value="5"  <?= $comment->start ==5 ? 'checked' :""?>/>
                                            <input type="radio"   value="4"  <?= $comment->start ==4 ? 'checked' :""?>/>
                                            <input type="radio"   value="3"  <?= $comment->start ==3 ? 'checked' :""?>/>
                                            <input type="radio"   value="2"  <?= $comment->start ==2 ? 'checked' :""?>/>
                                            <input type="radio"   value="1"  <?= $comment->start ==1 ? 'checked' :""?>/>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6" style="text-align: left">
                                        <p>{{$comment->created_at}}</p>
                                    </div>

                                </div>
                                <h5>{{$comment->message}}</h5>
                                <hr>
                            @endforeach
                        @endif

                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"
                                style="background-color: #da002b"> {{__('Sharh qoldirish')}}</button>
                    </div>
                </div>

                <div class="p-style-wrap">
                    <h3 class="p-style-title">{{__("O'xshash mahsulotlar")}}</h3>
                    <div class="row">

                        @if($similarProducts)
                            @foreach($similarProducts as $similarProduct)
                                <div class="col-md-4 col-sm-12 mb-sm-30">
                                    <div class="item-grid">
                                        <div class="image-icon">
                                            <img src="{{Storage::url($similarProduct->photo)}}" alt="Project Image"
                                                 style="width: 100%;height: 300px">
                                            <a class="image-popup" href="{{Storage::url($similarProduct->photo)}}"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <!-- Project Gallery End -->
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Меннинг шарҳим')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('comments.store')}}">
                    <div class="modal-body">

                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div data-mdb-input-init class="form-outline">
                                    <legend style="display: block">{{__('Baholang')}}</legend>
                                    <fieldset class="rating">
                                        <input type="radio" name="start" title="star5" value="5"/>
                                        <input type="radio" name="start" title="star4" value="4"/>
                                        <input type="radio" name="start" title="star3" value="3"/>
                                        <input type="radio" name="start" title="star2" value="2"/>
                                        <input type="radio" name="start" title="star1" value="1"/>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-12">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="message">{{__('Message')}}</label>
                                    <textarea type="text" name="message" id="message" class="form-control"></textarea>'
                                    <input type="hidden" name="able_type" value="{{\App\Models\Products::class}}">
                                    <input type="hidden" name="able_id" value="{{$product->id}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" style="width: 100%"
                                class="btn btn-primary">{{__('Sharh qoldirish')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
