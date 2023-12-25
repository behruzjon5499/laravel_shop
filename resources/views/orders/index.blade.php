<x-main>

    <x-slot:title>
        Order
    </x-slot:title>

    <form action="{{route('orderSave')}}" method="post">
        @csrf
        <div class="containerorder">


            <section id="cart">
                @foreach($orders as $key=>$order)
                    <article class="product">
                        <header>
                            <a class="remove">
                                <img src="{{Storage::url($order->product->photo)}}" alt="">

                                <h3>{{__('Remove product')}}</h3>
                            </a>
                        </header>

                        <div class="content">

                            <h1>{{\App\Helpers\LanguageHelper::get($order->product,'name')}}</h1>
                            <input type="hidden" name="Request[{{$key}}][name]" value="{{$order->name}}" id="name"
                                   class="form-control"/>
                            <input type="hidden" name="Request[{{$key}}][count]" value="{{$order->count}}"
                                   id="orderCount">
                            <input type="hidden" name="Request[{{$key}}][price]" value="{{$order->price}}"
                                   id="orderPrice">
                            <input type="hidden" name="Request[{{$key}}][product_id]" value="{{$order->product->id}}">
                            <input type="hidden" name="Request[{{$key}}][order_id]" value="{{$order->id}}">
                            <input type="hidden" name="Request[{{$key}}][status]"
                                   value="{{\App\Models\Orders::TYPE_SALE}}">

                        </div>

                        <footer class="content">
                            <span class="qt-minus">-</span>
                            <span class="qt">{{$order->count}}</span>
                            <span class="qt-plus">+</span>

                            <h2 class="full-price">
                                {{$order->price}}
                            </h2>

                            <h2 class="price">
                                {{$order->product->price}}
                            </h2>
                        </footer>
                    </article>
                @endforeach
            </section>
        </div>

        <footer id="site-footer">
            <div class="container clearfix">

                <div class="left">
                    {{--            <h2 class="subtotal">Subtotal: <span>163.96</span>€</h2>--}}
                    {{--            <h3 class="tax">Taxes (5%): <span>8.2</span>€</h3>--}}
                    {{--            <h3 class="shipping">Shipping: <span>5.00</span>€</h3>--}}
                </div>

                <div class="right">
                    <h1 class="total">Total: <span> </span></h1>
                    <button type="submit" class="btn btn-success"> {{__('Checkout')}} </button>
                </div>

            </div>
        </footer>
    </form>

    <div class="container">
        <h1>{{__('Yetkazib berish usuli')}}</h1>


        <h4>{{$userAddress->district->region->name}}    {{$userAddress->district->name}} {{$userAddress->name}}</h4>
        <div class="delivery" data-toggle="modal" data-target="#addressModal"
             style="text-align: center;border-radius: 5%; border: 2px solid #e8e8e8;margin-bottom: 20px">
            <svg class="svg-circleplus" viewBox="0 0 100 100" style="height: 40px; stroke: red;">
                <line x1="32.5" y1="50" x2="67.5" y2="50" stroke-width="5"></line>
                <line x1="50" y1="32.5" x2="50" y2="67.5" stroke-width="5"></line>
            </svg>
            @if(\Illuminate\Support\Facades\Auth::user()->address)
            <h3 >
                {{__("Manzil o'zgartirish")}}
            </h3>
            @else
                <h3>
                    {{__("Manzil qo'shish")}}
                </h3>
            @endif
        </div>


    </div>



    <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" style="max-width: 900px;height: 800px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__("Manzil qo'shish")}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('userAddress.store')}}">
                    <div class="modal-body">

                        @csrf

                        <div class="row">
                            <div class="col-6">

                                <div class="form-group">
                                    <label for="region_code">{{__('Regions')}}</label>
                                    <select name="region_code" class="form-control" id="region_code" required>
                                        <option value="">{{__('Select')}}</option>
                                        @foreach($regions as $region)
                                            <option value="{{$region->code}}" <?= $userAddress->district->region->code == $region->code ? "selected" :" " ?>>{{$region->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="district_code">{{__('Districts')}}</label>
                                    <select name="district_code" class="form-control" id="district_code"  required>
                                        <option value="">{{__('Select')}}</option>
                                        @foreach($districts as $district)
                                            <option value="{{$district->code}}" <?=$district->code == \Illuminate\Support\Facades\Auth::user()->address->district_code ? 'selected' : "" ?>>{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            </div>
                            <div class="col-12">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="name">{{__('Address')}}</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->address->name}}" required/>
                                    <input type="hidden" name="user_id" id="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}" class="form-control" required/>
                                </div>
                            </div>
                        <div class="col-12" style="margin-top: 10px">
                            <button data-mdb-ripple-init type="submit" style="width: 100%"
                                    class="btn btn-primary btn-block mb-4">{{__('Submit')}}</button>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" style="width: 100%"
                                class="btn btn-primary">{{__("Submit")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        var check = false;


        document.addEventListener("DOMContentLoaded", function (event) {
            changeTotal();
        });

        function changeVal(el) {
            var qt = parseFloat(el.parent().children(".qt").html());
            var price = parseFloat(el.parent().children(".price").html());
            var eq = Math.round(price * qt * 100) / 100;

            el.parent().children(".full-price").html(eq);

            changeTotal();
        }

        function changeTotal() {

            var price = 0;

            $(".full-price").each(function (index) {
                price += parseFloat($(".full-price").eq(index).html());
            });

            price = Math.round(price * 100) / 100;
            var tax = Math.round(price * 0.05 * 100) / 100
            // var shipping = parseFloat($(".shipping span").html());
            // var fullPrice = Math.round((price + tax + shipping) *100) / 100;

            if (price == 0) {
                fullPrice = 0;
            }

            // $(".subtotal span").html(price);
            // $(".tax span").html(tax);
            $(".total span").html(price);
        }

        $(document).ready(function () {

            $(".remove").click(function () {
                var el = $(this);
                el.parent().parent().addClass("removed");
                window.setTimeout(
                    function () {
                        el.parent().parent().slideUp('fast', function () {
                            el.parent().parent().remove();
                            if ($(".product").length == 0) {
                                if (check) {
                                    $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>");
                                } else {
                                    $("#cart").html("<h1>No products!</h1>");
                                }
                            }
                            changeTotal();
                        });
                    }, 200);
            });

            $(".qt-plus").click(function () {
                if ($(this).parent().children(".qt").html() == 5) {
                    return false;
                }
                $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);

                $(this).parent().children(".full-price").addClass("added");
                $('#orderCount').val(parseInt($(this).parent().children(".qt").html()) + 1);
                var el = $(this);
                window.setTimeout(function () {
                    el.parent().children(".full-price").removeClass("added");
                    changeVal(el);
                }, 150);
            });

            $(".qt-minus").click(function () {

                child = $(this).parent().children(".qt");

                if (parseInt(child.html()) > 1) {
                    child.html(parseInt(child.html()) - 1);
                }

                $(this).parent().children(".full-price").addClass("minused");
                $('#orderCount').val(parseInt(child.html()) - 1);

                var el = $(this);
                window.setTimeout(function () {
                    el.parent().children(".full-price").removeClass("minused");
                    changeVal(el);
                }, 150);
            });

            window.setTimeout(function () {
                $(".is-open").removeClass("is-open")
            }, 1200);

            $(".btn").click(function () {
                check = true;
                // $(".remove").click();
            });
        });
    </script>
</x-main>
<script>
        $('#region_code').on('click',function() {
        var region_code = $(this).val();

        $.ajax({
            url:'{{route('districts')}}',
            data:{'region_code':region_code},
            method:'get',
            success:function(res) {
                console.log(res);
                var html = '';
                html += "<option value=''></option>";
                res.forEach(function(item){
                    html += "<option value='"+ item.code+"' >"+item.code+' - '+item.name+'</option>';
                })
                $('#district_code').html(html);
            },
            error:function() {
                alert('error')
            }
        })

    });
</script>



