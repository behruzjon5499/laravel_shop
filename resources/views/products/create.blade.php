<x-main>

    <x-slot:title>
        Product create
    </x-slot:title>
    <style>
        body {
            padding: 10px;

        }

        #exTab1 .tab-content {
            color: white;
            padding: 5px 15px;
        }

        #exTab2 h3 {
            color: white;
            background-color: #428bca;
            padding: 5px 15px;
        }

        /* remove border radius for the tab */

        #exTab1 .nav-pills > li > a {
            border-radius: 0;
            margin: 0 20px;
        }

        /* change border radius for the tab , apply corners on top*/

        #exTab3 .nav-pills > li > a {
            border-radius: 4px 4px 0 0;
        }

        #exTab3 .tab-content {
            color: white;
            background-color: #428bca;
            padding: 5px 15px;
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">
                    <div id="form-messages"></div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form method="post" action="{{route('products.store')}}"  enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                 @csrf
                        <div id="exTab1" class="container">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#1a" data-toggle="tab">Uz</a>
                                </li>
                                <li><a href="#2a" data-toggle="tab">Ru</a>
                                </li>
                                <li><a href="#3a" data-toggle="tab">En</a>
                                </li>

                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">

                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <label class="form-label" for="name_uz">First name</label>
                                            <input placeholder="Name Uz" name="name_uz" type="text" id="name_uz"
                                                   class="form-control"/>

                                        </div>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="description_uz">Additional information</label>
                                        <textarea placeholder="Description Uz" name="description_uz"
                                                  class="form-control" id="description_uz" rows="4"></textarea>

                                    </div>

                                </div>
                                <div class="tab-pane" id="2a">
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <label class="form-label" for="name_ru">First name</label>
                                            <input placeholder="Name Ru" type="text" name="name_ru" id="name_ru"
                                                   class="form-control"/>

                                        </div>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="description_ru">Additional information</label>
                                        <textarea placeholder="Description Ru" name="description_ru"
                                                  class="form-control" id="description_ru" rows="4"></textarea>

                                    </div>
                                </div>
                                <div class="tab-pane" id="3a">
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <label class="form-label" for="name_en">First name</label>
                                            <input placeholder="Name En" type="text" name="name_en" id="name_en"
                                                   class="form-control"/>

                                        </div>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="title_en">Additional information</label>
                                        <textarea placeholder="Description En" name="description_en"
                                                  class="form-control" id="title_en" rows="4"></textarea>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="price">{{__('Price')}}</label>
                                    <input type="text" name="price" id="price" class="form-control"/>

                                </div>
                            </div>
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">

                                    <div class="container">
                                        <label class="form-label" for="date">{{__('Date')}}</label>
                                        <input type="date" id="date" name="date" class="form-control date"
                                               placeholder="Pick the multiple dates">
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <!-- Text input -->

                            <div class="col">
                                <div class="form-group">
                                    <label for="category_id">{{__('Category')}}</label>
                                    <select name="category_id" class="form-control" id="category_id">
                                        <option value="">{{__('Select')}}</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name_uz}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="type">{{__('Type')}}</label>
                                    <select name="type" class="form-control" id="type">
                                        <option value="">{{__('Select')}}</option>

                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-group">
                                <label class="form-label" for="photo">{{__('File')}}</label>
                                <input type="file" name="photo" class="form-control" id="photo"/>

                            </div>
                            </div>
                            <div class="col"></div>
                        </div>
                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="submit"
                                class="btn btn-primary btn-block mb-4">{{__('Submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-main>

