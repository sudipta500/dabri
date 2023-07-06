@extends('user.layout')
@section('title')
    Single Product
@endsection
@section('content')

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <section class=" mt-5 sec_space_small position-relative pt-0" data-aos="fade-up" data-aos-duration="2000">
        <div class="store_content mx-5">
            <div class="row d-flex justify-content-between align-content-center">
                <div class="col-md-6">
                    @foreach ($cartProduct as $cart)
                        <div class="product_layout3_content bg-white row justify-content-arond align-content-center mt-3">
                            <div class="col-lg-6">
                                <div class="store_thumb img_moving_anim1 d-flex justify-content-center">
                                    <img src="{{ asset('images/' . $cart->product->one_image) }}" alt="image_not_found"
                                        width="90px" height="90px">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="store_thumb">
                                    <div class="store_content_text ">

                                        <div class="store_title text-effect py-2">
                                            <h4>{{ $cart->product->flavour_name }}</h4>
                                            <!-- <h3 style="font-size: 36px;">Discover the tea-lover in you.</h3> -->
                                        </div>
                                        <div class="rating_wrap d-flex">
                                            <ul class="rating_star ul_li">
                                                <li class="active"><i class="fas fa-star"></i>
                                                </li>
                                                <li class="active"><i class="fas fa-star"></i>
                                                </li>
                                                <li class="active"><i class="fas fa-star"></i>
                                                </li>
                                                <li class="active"><i class="fas fa-star"></i>
                                                </li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span class="shop_review_text">( 4.0 )</span>
                                        </div>
                                        <div class="product_price mb-3">
                                            <span
                                                class="sale_price pe-1">₹{{ $cart->price }}</span>
                                            <del class="mx-5">₹{{ $cart->price }}</del>
                                        </div>

                                        <div class="store_btn">
                                            <div class="d-flex gap-5">
                                                <div class="m-auto">
                                                    <ul class="pagination_nav mt-5 list-unstyled d-flex justify-content-center text-uppercase clearfix">
                                                      <form action="{{ url('cart-update') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $cart->id }}">
                                                        <input type="hidden" name="price" value="{{ $cart->product->offer_mrp }}">
                                                        <input type="hidden" name="action" value="plush">
                                                        <li class="mx-2"><button><a>+</a></button></li>
                                                      </form>
                                                      <li class="active"> <a>{{ $cart->quantity }}</a></li>
                                                      @if ($cart->quantity>1)
                                                      <form action="{{ url('cart-update') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $cart->id }}">
                                                        <input type="hidden" name="price" value="{{ $cart->product->offer_mrp }}">
                                                        <input type="hidden" name="action" value="minus">
                                                        <li class=""><button><a>-</a></button></li>
                                                      </form>
                                                      @endif



                                                    </ul>
                                                </div>
                                                <form action="{{ url('cart-checkout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn custom_btn load_more_1 rounded-pill px-5 py-3 text-white">Remove
                                                        to Cart
                                                    </button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="product_layout3_content bg-white position-relative" data-aos="fade-right"
                        data-aos-duration="1500">
                        <h4 class="text-center">Price Details</h4>
                        <div class="product_layout3_inner_content">
                            <div class="rating_wrap d-flex">
                                <p>price({{ count($cartProduct) }} item) - <span>{{ $price }}</span></p>
                            </div>
                            <div class="product_content">
                                <form action="" method="POST">
                                    @csrf
                                    <input type="hidden" name="checkout" value="{{ $cart->id }}">
                                    <button type='submit'
                                        class="btn custom_btn load_more_1 rounded-pill px-5 py-3 text-white">CheckOut
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <script>
        function addcart(id){
            jQuery.ajax({
                url:{{ url('cart-update') }},
                data:{id:id,data:'plus'},
                type:"post",
                success:function(result){
                    console.log(result);
                }
            })

        }
        function removecart(id){
            alert(id)
        }
    </script> --}}
@endsection
