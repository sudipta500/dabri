@extends('user.layout')
@section('title')
    Home
@endsection
@section('active-home')
    active
@endsection
@section('content')
    <main>
        <!-- banner4 section start -->
        <section class="banner_section_main position-relative banner_2">
            <div class="banner_section_item d-flex justify-content-center align-items-center sec_space_large"
                style="background-image: url(user/images/banner/1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ms-3">
                            <div class="banner_title2">
                                <h1>The charm and warmth of the finest <font class="text-effect">
                                        <span>B</span><span>r</span><span>e</span><span>w</span><span>s</span>
                                    </font>
                                </h1>
                            </div>

                            <div class="banner_btn">
                                <a href="#!"><button type="button"
                                        class="btn custom_btn rounded-pill px-5 py-3 text-white">Buy Now <i
                                            class="fas fa-long-arrow-alt-right"></i></button></a>
                            </div>
                        </div>
                        <div class="col-lg-5"></div>
                    </div>
                </div>
            </div>
            <!-- header side thumb -->
        </section>
        <!-- banner section end -->

        <section class="store_section sec_space_xxs_50 position-relative aos-init aos-animate" data-aos="fade-up"
            data-aos-duration="2000">
            <div class="store_section_wrap sec_space_small position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="store_content_text">

                                <div class="store_title text-effect py-2">
                                    <h2>Crush. Tear. Curl.</h2>
                                </div>
                                <div class="store_desc">
                                    <p>Tea is a wake up call for our senses. Just one sip into Dabri’s hot CTC tea feels
                                        like an instant spurt of energy. <br>
                                        CTC stands for ‘crush, tear, curl’. Plucked tea leaves are passed through cylinders
                                        with hundreds of sharp metallic teeth that crush, tear and curl the leaves into the
                                        hard, shiny, black pellets that we are all so familiar with. CTC tea is rich in
                                        antioxidants and flavonoids. Drinking it is good for our heart, helps in digestion,
                                        it boosts our immune systems and it helps in burning fat.
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="store_right_thumb">
                                <img src="{{ asset('user/images/product/exotic-yoga-tea-6.jpg') }}" alt="images"
                                    style="border-radius: 50%; height: 450px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- category section start -->
        <section class="category_section sec_ptb_100 position-relative overflow-hidden clearfix" data-aos="fade-up"
            data-aos-duration="2000">

            <div class="container-fluid">
                <div class="row">
                    <div class="category_top_content">
                        <div class="category_top_content_text d-flex flex-column justify-content-center align-items-center">
                            <div class="category_title pb-3">
                                <h2>Top Category</h2>
                            </div>
                        </div>
                    </div>
                    <div class="category_slick slideshow1_slider clearfix d-flex justify-content-center align-items-center justify-content-between px-0"
                        data-slick='{"dots": false}'>
                        <div class="col item_content slider_item" data-aos="fade-up" data-aos-duration="300">
                            <a href="shop-details.php" target="_blank">
                                <div class="item_image_content overflow-hidden position-relative">
                                    <img src="{{ asset('user/images/category/tea-black.webp') }}" alt="image_not_found">
                                    <h6 class="item_title position-absolute rounded-pill">Black Tea</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col item_content slider_item" data-aos="fade-up" data-aos-duration="600">
                            <a href="shop-details.php" target="_blank">
                                <div class="item_image_content overflow-hidden position-relative">
                                    <img src="{{ asset('user/images/category/tea-herbal.webp') }}" alt="image_not_found">
                                    <h6 class="item_title position-absolute rounded-pill">Herbal Tea
                                    </h6>
                                </div>
                            </a>
                        </div>
                        <div class="col item_content slider_item" data-aos="fade-up" data-aos-duration="900">
                            <a href="shop-details.php" target="_blank">
                                <div class="item_image_content overflow-hidden position-relative">
                                    <img src="{{ asset('user/images/category/tea-rooibos.webp') }}" alt="image_not_found">
                                    <h6 class="item_title position-absolute rounded-pill">Rooibos Tea</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col item_content slider_item" data-aos="fade-up" data-aos-duration="1200">
                            <a href="shop-details.php" target="_blank">
                                <div class="item_image_content overflow-hidden position-relative">
                                    <img src="{{ asset('user/images/category/tea-white.webp') }}" alt="image_not_found">
                                    <h6 class="item_title position-absolute rounded-pill">White Tea</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col item_content slider_item" data-aos="fade-up" data-aos-duration="1500">
                            <a href="shop-details.php" target="_blank">
                                <div class="item_image_content overflow-hidden position-relative">
                                    <img src="{{ asset('user/images/category/tea-matcha.webp') }}" alt="image_not_found">
                                    <h6 class="item_title position-absolute rounded-pill">Matcha Tea</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col item_content slider_item" data-aos="fade-up" data-aos-duration="1800">
                            <a href="shop-details.php" target="_blank">
                                <div class="item_image_content overflow-hidden position-relative">
                                    <img src="{{ asset('user/images/category/tea-green.webp') }}" alt="image_not_found">
                                    <h6 class="item_title position-absolute rounded-pill">Green Tea</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col item_content slider_item" data-aos="fade-up" data-aos-duration="2100">
                            <a href="shop-details.php" target="_blank">
                                <div class="item_image_content overflow-hidden position-relative">
                                    <img src="{{ asset('user/images/category/tea-oolong.webp') }}" alt="image_not_found">
                                    <h6 class="item_title position-absolute rounded-pill">Oolong Tea</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category section end -->

        <!-- store section start -->
        <section class="store_section sec_space_small position-relative pt-0" data-aos="fade-up"
            data-aos-duration="2000">
            <div class="store_section_wrap position-relative sec_space_small"
                style="background-image: url(assets/images/backgrounds/bg18.png);">
                <div class="store_content">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6">
                            <div class="store_thumb img_moving_anim1 d-flex justify-content-end">
                                <img src="{{ asset('user/images/store/store4.png') }}" alt="image_not_found">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="store_content_text">

                                <div class="store_title text-effect py-2">
                                    <h2>Discover the World of Dabri </h2>
                                    <!-- <h3 style="font-size: 36px;">Discover the tea-lover in you.</h3> -->
                                </div>
                                <div class="store_desc me-2">
                                    <p>As tea growers, we are passionate about our brew.
                                        And that’s why we never fail to surprise our appreciative buyers with new gifts from
                                        the hills. Our platter includes the classic Dabri Royale, transporting tea lovers to
                                        the days of the British Raj. On the other hand, there are new entrants like the
                                        Blue-Pea pod tea, which we launched in May 2022. We are the first to grow and sell
                                        blue tea in India.
                                        Innovation, tradition, continuous R&D and the strictest quality control - this sums
                                        up our mission as well as marketing statements.
                                        Why don’t you browse to see what suits you best? We have enough variety to spoil
                                        you.
                                    </p>
                                </div>

                                <div class="store_btn">
                                    <a href="#!"><button type="button"
                                            class="btn custom_btn load_more_1 rounded-pill px-5 py-3 text-white">Subscribe
                                            <i class="fas fa-long-arrow-alt-right"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- store section end -->

        <div class="container-fluid position-relative">
            <div class="mintu-content-inner position-relative">
                <div class="wrap-img-food-inner flex">
                    <div class="img-food-1">
                        <img src="{{ asset('user/images/imgfood32.png') }}" alt="images">
                    </div>
                    <div class="img-food-2">
                        <img class="img-style-bg" src="{{ asset('user/images/imgfood2.jpg') }}" alt="images">
                    </div>
                    <div class="img-food-3">
                        <img src="{{ asset('user/images/imgfood3.png') }}" alt="images">
                    </div>
                </div>
            </div>
        </div>

        <!-- product-11 section start -->
        <section class="product11_section sec_space_xxs_50" data-aos="fade-up" data-aos-duration="2000">
            <div class="container-fluid">
                <div class="product11_sec_content text-center">
                    <h2 class="product_sec_title pb-3">New Feature Products</h2>
                </div>

                <div class="row product_layout_3 align-items-center overflow-hidden position-relative">
                    @foreach ($product as $item )
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product_layout3_content bg-white position-relative" data-aos="fade-right"
                            data-aos-duration="1500">
                            <div class="product_image_wrap">
                                <a class="product_image d-flex justify-content-center align-items-center"
                                    href="{{route('shop')}}">
                                    <img src="{{ asset('user/images/new-image-product/CALMING TEA Front.png') }}"
                                        alt="image_not_found">
                                </a>
                            </div>
                            <div class="product_layout3_inner_content">
                                <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text">( 4.0 )</span>
                                </div>
                                <div class="product_content">
                                    <h3 class="product_title">
                                        <a href="{{ route('shop') }}">{{ $item->flavour_name }}</a>
                                    </h3>
                                    <div class="product_price">
                                        <span class="sale_price pe-1">₹50.00</span>
                                        <del>₹65.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product_layout3_content bg-white position-relative" data-aos="fade-right"
                            data-aos-duration="1000">
                            <div class="product_image_wrap">
                                <a class="product_image d-flex justify-content-center align-items-center"
                                    href="shop-details.php">
                                    <img src="{{ asset('user/images/new-image-product/CHAMOMILE GREEN TEA Front.png') }}"
                                        alt="image_not_found">
                                </a>
                            </div>
                            <div class="product_layout3_inner_content">
                                <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text">( 4.0 )</span>
                                </div>
                                <div class="product_content">
                                    <h3 class="product_title">
                                        <a href="shop-details.php">Chamomile Green Tea</a>
                                    </h3>
                                    <div class="product_price">
                                        <span class="sale_price pe-1">₹50.00</span>
                                        <del>₹65.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product_layout3_content bg-white position-relative" data-aos="fade-up"
                            data-aos-duration="1000">
                            <div class="product_image_wrap">
                                <a class="product_image d-flex justify-content-center align-items-center"
                                    href="shop-details.php">
                                    <img src="{{ asset('user/images/new-image-product/GINGER CTC TEA Front.png') }}"
                                        alt="image_not_found">
                                </a>
                            </div>
                            <div class="product_layout3_inner_content">
                                <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text">( 4.0 )</span>
                                </div>
                                <div class="product_content">
                                    <h3 class="product_title">
                                        <a href="shop-details.php">Himalayan Green Tea</a>
                                    </h3>
                                    <div class="product_price">
                                        <span class="sale_price pe-1">₹50.00</span>
                                        <del>₹65.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="product_layout3_content bg-white position-relative" data-aos="fade-left"
                data-aos-duration="1000">
                <div class="product_image_wrap">
                    <a class="product_image d-flex justify-content-center align-items-center"
                        href="shop-details.php">
                        <img src="{{asset('user/images/new-image-product/HIMALAYAN GREEN TEA Front.png')}}" alt="image_not_found">
                    </a>
                </div>
                <div class="product_layout3_inner_content">
                    <div class="rating_wrap d-flex">
                        <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <span class="shop_review_text">( 4.0 )</span>
                    </div>
                    <div class="product_content">
                        <h3 class="product_title">
                            <a href="shop-details.php">Masala CTC Tea</a>
                        </h3>
                        <div class="product_price">
                            <span class="sale_price pe-1">₹50.00</span>
                            <del>₹65.00</del>
                        </div>
                    </div>
                </div>
            </div> --}}
                </div>

            </div>
            </div>
        </section>
        <!-- product-11 section end -->

        <!-- sale2 section start -->
        <section class="sale2_section_2 mt-0 pt-0" data-aos="fade-up" data-aos-duration="2000">
            <div class="sale2_section_wrap sec_space_small pb-0 sale2_bg d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-12 text-center">
                            <div class="sale2_content_wrap ps-3">
                                <div class="sale2_title text-effect py-2">
                                    <h2>Say it with Dabri
                                    </h2>
                                </div>
                                <div class="sale2_desc">
                                    <p>Tea is easily one of the most welcomed gifts. Check out our elegant yet attractive
                                        boxes. You can also reach out to us to create your own personalised custom tea. Yes,
                                        you can actually make your own tea blend and gift it to someone who matters. </p>
                                </div>

                                <div class="sale2_btn load_more_1">
                                    <a href="#!"><button type="button"
                                            class="btn custom_btn rounded-pill px-5 py-3  text-white">Buy Gift
                                            <i class="fas fa-long-arrow-alt-right"></i></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sale_pro_thumb">
                                <img src="{{ asset('user/images/product/product42.webp" alt="image_not_found') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sale2 section end -->

        <!-- featured product section start -->
        <section class="featured_sec position-relative sec_space_small" data-aos="fade-up" data-aos-duration="2000">
            <div class="featured_sec_wrap">
                <div class="container">
                    <h2 class="product_sec_title text-center pb-4">Best Selling Products</h2>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="product_layout3_content bg-white position-relative" data-aos="fade-right"
                                data-aos-duration="1500">
                                <div class="product_image_wrap1">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                        href="shop-details.php">
                                        <img src="{{ asset('user/images/product/9.png') }}" alt="image_not_found">
                                    </a>
                                </div>
                                <div class="product_layout3_inner_content">
                                    <div class="rating_wrap d-flex">
                                        <ul class="rating_star ul_li">
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                        <span class="shop_review_text">( 4.0 )</span>
                                    </div>
                                    <div class="product_content">
                                        <h3 class="product_title">
                                            <a href="shop-details.php">Immunity Booster Tea</a>
                                        </h3>
                                        <div class="product_price">
                                            <span class="sale_price pe-1">₹50.00</span>
                                            <del>₹65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="product_layout3_content bg-white position-relative" data-aos="fade-up"
                                data-aos-duration="1000">
                                <div class="product_image_wrap1">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                        href="shop-details.php">
                                        <img src="{{ asset('user/images/product/7.png') }}" alt="image_not_found">
                                    </a>
                                </div>
                                <div class="product_layout3_inner_content">
                                    <div class="rating_wrap d-flex">
                                        <ul class="rating_star ul_li">
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                        <span class="shop_review_text">( 4.0 )</span>
                                    </div>
                                    <div class="product_content">
                                        <h3 class="product_title">
                                            <a href="shop-details.php">Hibiscus Green Tea</a>
                                        </h3>
                                        <div class="product_price">
                                            <span class="sale_price pe-1">₹50.00</span>
                                            <del>₹65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="product_layout3_content bg-white position-relative" data-aos="fade-left"
                                data-aos-duration="1500">
                                <div class="product_image_wrap1">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                        href="shop-details.php">
                                        <img src="{{ asset('user/images/product/8.png') }}" alt="image_not_found">
                                    </a>
                                </div>
                                <div class="product_layout3_inner_content">
                                    <div class="rating_wrap d-flex">
                                        <ul class="rating_star ul_li">
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                        <span class="shop_review_text">( 4.0 )</span>
                                    </div>
                                    <div class="product_content">
                                        <h3 class="product_title">
                                            <a href="shop-details.php">Moringa Turmeric Green Tea</a>
                                        </h3>
                                        <div class="product_price">
                                            <span class="sale_price pe-1">₹50.00</span>
                                            <del>₹65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured product section end -->



        <section class="sale2_section aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000"
            style="background-image: url(user/images/banner/banner5.webp); background-position: center;">
            <div class="sale2_section_wrap sec_space_small d-flex">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sale2_content_wrap ps-3">
                                <div class="sale2_title py-2">
                                    <h2>Orthodox. Classic. Flavourful.</h2>

                                </div>
                                <div class="sale2_desc">
                                    <p>Imagine a misty morning or a dull afternoon, when the only bright colour seems to be
                                        the golden brew that is at once energising and refreshing.<br>
                                        The flavour and aroma of Dabri’s Darjeeling Orthodox Tea can transport one to the
                                        old-world charm of the Queen of Hill Stations in an instant. Carefully hand-plucked,
                                        traditionally processed tea leaves in a delightfully decadent tin is what adds that
                                        touch of class to tea-time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog grid section start -->
        <section class="blog_grid_sec blog_list_sec position-relative blog_sec4" data-aos="fade-up"
            data-aos-duration="2000">
            <div class="blog_grid_wrap blog_list_wrap">
                <div class="container">
                    <div class="product_sec_sub_title d-flex justify-content-center align-items-center pb-2">
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <span class="text-uppercase px-2">latest blog</span>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                    </div>
                    <h2 class="testimonial2_title text-center pb-4">What People Think About</h2>
                    <div class="row g-4">
                        <div class="col-sm-6 col-md-4">
                            <div class="blog_grid_cont blog_list_cont bg-white">
                                <div class="grid_img d-flex blog_list_img">
                                    <img src="{{ asset('user/images/gallery/7.webp') }}" alt="image_not_found">
                                </div>
                                <div class="blog_grid_text">
                                    <a href="blog-details.html">
                                        <h3 class="grid_title">All Natural Italian-Style Chicken Meatballs</h3>
                                    </a>
                                    <div class="grid_author_cont">
                                        <div class="gallery_mid_author_content py-2 d-flex justify-content-between">
                                            <div class="gallery_mid_author_title">
                                                <span><i class="far fa-user pe-1"></i> Jessica Doen</span>
                                            </div>
                                            <div class="gallery_mid_author_time">
                                                <span><i class="far fa-clock pe-1"></i> 6 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="grid_desc">Qui nunc nobis videntur parum clari, sollemnes in futurum
                                        putamus parum claram legere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="blog_grid_cont blog_list_cont bg-white">
                                <div class="grid_img d-flex blog_list_img">
                                    <img src="{{ asset('user/images/gallery/6.webp') }}" alt="image_not_found">
                                </div>
                                <div class="blog_grid_text">
                                    <a href="blog-details.html">
                                        <h3 class="grid_title">All Natural Italian-Style Chicken Meatballs</h3>
                                    </a>
                                    <div class="grid_author_cont">
                                        <div class="gallery_mid_author_content py-2 d-flex justify-content-between">
                                            <div class="gallery_mid_author_title">
                                                <span><i class="far fa-user pe-1"></i> Jessica Doen</span>
                                            </div>
                                            <div class="gallery_mid_author_time">
                                                <span><i class="far fa-clock pe-1"></i> 6 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="grid_desc">Qui nunc nobis videntur parum clari, sollemnes in futurum
                                        putamus parum claram legere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="blog_grid_cont blog_list_cont bg-white">
                                <div class="grid_img d-flex blog_list_img">
                                    <img src="{{ asset('user/images/gallery/4.jpg') }}" alt="image_not_found">
                                </div>
                                <div class="blog_grid_text">
                                    <a href="blog-details.html">
                                        <h3 class="grid_title">All Natural Italian-Style Chicken Meatballs</h3>
                                    </a>
                                    <div class="grid_author_cont">
                                        <div class="gallery_mid_author_content py-2 d-flex justify-content-between">
                                            <div class="gallery_mid_author_title">
                                                <span><i class="far fa-user pe-1"></i> Jessica Doen</span>
                                            </div>
                                            <div class="gallery_mid_author_time">
                                                <span><i class="far fa-clock pe-1"></i> 6 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="grid_desc">Qui nunc nobis videntur parum clari, sollemnes in futurum
                                        putamus parum claram legere.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#!" class="text-center mt-5">
                            <button type="button" class="btn custom_btn rounded-pill px-5 py-3 text-white">Explore
                                More <i class="fas fa-long-arrow-alt-right"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog grid section end -->
    </main>
@endsection
