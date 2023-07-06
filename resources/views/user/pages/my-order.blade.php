@extends('user.layout')
@section('title')
Contract
@endsection
@section('content')
<main>

        <div class="product_layout3_content bg-white position-relative"
            data-aos="fade-right" data-aos-duration="1500">
                <div class="col-md-6 m-auto">
                    @foreach ($OrderItem as $item)
                        <div class="product_layout3_content bg-white row justify-content-arond align-content-center mt-3">
                            <div class="col-lg-4">
                                <div class="store_thumb img_moving_anim1 d-flex justify-content-center">
                                    <img src="{{ asset('images/' . $item->product->one_image) }}" alt="image_not_found"
                                        width="90px" height="90px">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="store_thumb">
                                    <div class="store_content_text ">

                                        <div class="store_title text-effect py-2">
                                            <h4>{{ $item->product->flavour_name }}</h4>
                                            <!-- <h3 style="font-size: 36px;">Discover the tea-lover in you.</h3> -->
                                        </div>
                                        <div class="product_price mb-3">
                                            <span
                                                class="sale_price pe-1">₹{{ $item->price }}</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-primary">{{ $item->payment_type }}</button>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    <!-- contact-info section end -->
</main>
@endsection
