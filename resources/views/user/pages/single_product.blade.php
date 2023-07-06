@extends('user.layout')
@section('title')
Single Product
@endsection
@section('content')

@if(session('errorMessage'))
<p class="h2">{{ session('errorMessage') }}</p>
@endif
<div style="margin-bottom: 10rem;margin-top: 7rem">
    <section class=" mt-5 sec_space_small position-relative pt-0" data-aos="fade-up" data-aos-duration="2000">
        <div class="store_content">
                <div class="row justify-content-aroung align-content-center">
                    <div class="col-lg-6">
                        <div class="store_thumb img_moving_anim1 d-flex justify-content-center" >
                            <img src={{asset('images/'.$product->one_image)}} alt="image_not_found" style="width: 30rem;height: 30rem;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="store_thumb d-flex justify-content-center">
                            <div class="store_content_text ">

                                <div class="store_title text-effect py-2">
                                    <h2>{{$product->flavour_name}}</h2>
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
                                    <p class="h5 mt-2">Special Price</p>
                                    <span class="sale_price pe-1">₹{{$product->offer_mrp}}</span>
                                    <del class="mx-5">₹{{$product->mrp}}</del>
                                </div>
                                <div class="store_desc me-2">
                                    {!!$product->description!!}
                                </div>
                                <div class="my-3 w-full d-flex">
                                    @foreach ($productSize as $size)
                                    <form action='' class="d-flex w-full" method="POST">
                                        @csrf
                                    <input type="hidden" name="packet_size" value="{{$size->id}}">
                                    <input type="hidden" name="flavour_name" value="{{$product->flavour_name}}">
                                    <button class="btn custom_btn" type="submit" style="margin-right: 15px">{{$size->packet_size}}</button>
                                    </form>
                                    @endforeach
                                </div>
                                <div>

                                </div>
                                <div class="store_btn d-flex align-items-center justify-content-between">
                                    {{-- <div class="row"> --}}
                                    <form class="row" action="" method="POST" >
                                        @csrf
                                        <input type="hidden" name="userId" value="{{Session::get('userId')}}">
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <input type="hidden" name="price" value="{{$product->offer_mrp}}">
                                        <button type="submit"
                                        class="btn custom_btn load_more_1 rounded-pill px-5 py-3 text-white">Add To Cart
                                    </button>
                                    {{-- <div id="add_cart_mssg"></div> --}}
                                {{-- </div> --}}
                                </form>

                                    <button type="button"
                                        class="btn custom_btn load_more_1 rounded-pill px-5 py-3 text-white">Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        {{-- @php
          {{ Session::get('userId') }}
        @endphp --}}
        {{-- @endphp
        @if(Session::has('userId'))
        <p class="user_name">{{ Session::get('userId') }}</p>
        @endif --}}
<script>
function submit(data){
jQuery.ajax({
    url:'/single_product',
    type:'post',
    data:{data:data},

})
}
</script>
        {{-- // @if (Session::has('userId'))
        // function add_to_cart(id){
        //     jQuery.ajax({
        //         url:"{{route('/add-cart')}}",
        //         type:'post',
        //         data:{data:id},
        //         dataType: 'JSON',
        //         contentType: false,
        //         cache: false,
        //         processData: false,

        //         success:function(result){
        //             console.log(result);
        //         }
        //     })
        //  }
        //  @else

        // @endif

            // var userId=<%: Session["userId"] %>;
            // console.log(userId);
            // console.log();
            // if(session::has('userId')==null){
            //     console.log("dad");
            //     jQuery('#add_cart_mssg').html('Please select Packet size')
            // }else{
            //     console.log('bal');
            //     jQuery('#add_cart_mssg').html('sucessfull')
            // } --}}


@endsection
