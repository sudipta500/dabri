@extends('user.layout')
@section('title')
    Shop
@endsection
@section('active-shop')
    active
@endsection
@section('content')
    <main>
        <!-- Breadcrumb section start -->
        <section class="breadcrumb_sec_1 position-relative">
            <div class="breadcrumb_wrap sec_space_mid_small"
                style="background-image: url(user/images/breadcrumb/breadcrumb1.png);">
                <div class="breadcrumb_cont text-center">
                    <div class="breadcrumb_title">
                        <h2 class="text-white">Shop Now</h2>
                    </div>
                    <ul class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                        <li><a href="index.html"><i class="fas fa-home active"></i>Home</a></li>
                        <li><i class="fas fa-chevron-right"></i>Shop</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Breadcrumb section end -->

        <!-- shop list sidebar start -->
        <section class="shop_list_sidebar mt-5 pt-5 mb-5 pb-2">
            <div class="shop_sidebar_wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <form action="{{ route('shop') }}">
                            <div class="shop_sidebar_searchbar position-relative">
                                <input class="rounded-pill" type="search" name="search" placeholder="Search">
                                <button type="submit"><i class="fas fa-search position-absolute" style="margin-top: -10px"></i></button>
                            </div>
                            </form>
                            <!-- blog category start -->
                            <div class="blog_category" data-aos="fade-up" data-aos-duration="2000">
                                <div class="blog_category_wrap">
                                    <h3 class="blog_category_title">Filter By Categories</h3>
                                    <div class="blog_category_item">
                                        <div class="row">
                                            <div class="form-check">
                                                <form action="">
                                                    {{-- <div class="col">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault2" name="all" value="all">
                                                        <label class="form-check-label ms-2" for="flexCheckDefault2">
                                                            All
                                                        </label>
                                                    </div> --}}
                                                    @foreach ($category as $item)
                                                        @php
                                                            $checked = [];
                                                            if (isset($_GET['categoryFilter'])) {
                                                                $checked = $_GET['categoryFilter'];
                                                            }
                                                        @endphp
                                                        <div class="col">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="categoryFilter[]" value={{ $item->id }}
                                                                id="flexCheckDefault1"
                                                                @if (in_array($item->id, $checked)) checked @endif>
                                                            <label class="form-check-label ms-2" for="flexCheckDefault1">
                                                                {{ $item->category_name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                    <div>
                                                        <button
                                                            class="btn custom_btn load_more_1 rounded-pill px-5  text-white">Apply</button>
                                                    </div>
                                                </form>

                                                {{-- <div class="col">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault2">
                                                <label class="form-check-label ms-2" for="flexCheckDefault2">
                                                    Rose Tea
                                                </label>
                                            </div> --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog category end -->

                        </div>
                        <div class="col-lg-9">
                            <!-- shop list section start -->
                            <section class="shop_list_sec" data-aos="fade-up" data-aos-duration="2000">
                                <div class="shop_list_wrap">

                                    <div class="container">
                                        <div class="shop_product_list">
                                            <div class="row">
                                                {{-- <div class="col-12">
                                                    <div class="filter_area float-end mb_30">
                                                        <form action="#">
                                                            <div class="sorting_from d-flex align-items-center">
                                                                <span class="sorting_from_title">Default Sorting:</span>
                                                                <div class=" clearfix">
                                                                    <select>
                                                                        <option hidden>Nothing</option>
                                                                        @foreach ($category as $item)
                                                                            <option value={{ $item->id }}>
                                                                                {{ $item->category_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div> --}}
                                                @foreach ($product as $index =>$item)
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="product_layout3_content bg-white position-relative"
                                                                data-aos="fade-right" data-aos-duration="1500">
                                                                <div class="product_image_wrap1">
                                                                    <a href="{{ url('/single_product', $item->id) }}"
                                                                        class="product_image d-flex justify-content-center align-items-center">
                                                                        <img src={{ asset('images/' . $item->one_image) }}
                                                                            alt="image_not_found">
                                                                    </a>
                                                                </div>
                                                                <div class="product_layout3_inner_content">
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
                                                                    <div class="product_content">
                                                                        <h3 class="product_title">
                                                                            <a
                                                                                href="{{ url('/single_product', $item->id) }}">{{ $item->flavour_name }}</a>
                                                                        </h3>
                                                                        <div class="product_price">
                                                                            <span
                                                                                class="sale_price pe-1">₹{{ $item->offer_mrp }}</span>
                                                                            <del>₹{{ $item->mrp }}</del>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                @endforeach

                                                {{-- <div class="col-md-6 col-lg-4">
                                                <div class="product_layout3_content bg-white position-relative" data-aos="fade-up"
                                                    data-aos-duration="1000">
                                                    <div class="product_image_wrap1">
                                                        <a class="product_image d-flex justify-content-center align-items-center"
                                                            href="shop-details.php">
                                                            <img src="assets/images/product/7.png" alt="image_not_found">
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
                                            </div> --}}
                                                {{-- <div class="col-md-6 col-lg-4">
                                                <div class="product_layout3_content bg-white position-relative" data-aos="fade-left"
                                                    data-aos-duration="1500">
                                                    <div class="product_image_wrap1">
                                                        <a class="product_image d-flex justify-content-center align-items-center"
                                                            href="shop-details.php">
                                                            <img src="assets/images/product/8.png" alt="image_not_found">
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
                                            </div> --}}
                                            </div>

                                            <p class="show_result text-end mt-4">Showing 1–3 of 24 results</p>
                                        </div>
                                        <ul
                                            class="pagination_nav mt-5 list-unstyled d-flex justify-content-center text-uppercase clearfix">
                                            <li class="active"><a href="#!">1</a></li>
                                            <li><a href="#!">2</a></li>
                                            <li><a href="#!">3</a></li>
                                            <li class="active"><a href="#!"><i class="fas fa-arrow-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <!-- shop list section end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop list sidebar end -->
    </main>
@endsection
