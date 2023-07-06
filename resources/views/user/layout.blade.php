<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | DABRI</title>
    <link rel="shortcut icon" href="user/images/icons/favicon.ico" type="image/x-icon">
    <!-- Include google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Include bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />


    <link rel="stylesheet" href="{{asset('user/css/aos.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" onload="if(media!='all')media='all'"/>
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
</head>
<body>
<div class="body-wrap overflow-hidden">
    <div class="backtotop">
        <a href="#!" class="scroll">
            <i class="far fa-arrow-up fw-bold"></i>
        </a>
    </div>
    <header class="header_section header_1">
        <!-- top header start -->
        <div class="top_header_main d-none d-sm-block">
            <div class="container">
                <div class="header_top d-flex align-items-center justify-content-between">
                    <div class="header_top_content d-flex pt-2">
                        <div class="mail_text_content d-flex">
                            <p class="mail_icon"><span><i class="far fa-envelope text-white pe-2"></i></span></p>
                            <p class="mail_text">dabritea@themlagroup.in</p>
                        </div>
                        <div class="address_text_content d-flex">
                            <p class="mail_icon"><span><i class="fas fa-map-marker-alt text-white pe-2"></i></span></p>
                            <p class="address_text">382/747, BF Road, Alipurduar, India, West Bengal</p>
                        </div>
                    </div>
                    <div class="header_top_socials pt-2">
                        <ul class="list-unstyled d-flex">
                            <li><a href="#!"><i class="fab fa-facebook-f text-white pe-3"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter text-white pe-3"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram text-white pe-3"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin-in text-white"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top header end -->

        <!-- bottom header start -->
        <div class="header_bottom_main">
            <div class="container">
                <!-- web menubar start-->
                <div class="webMenu d-none d-lg-block position-relative">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand position-relative" href="{{ route('/') }}"><img
                                src="{{ asset('user/images/logo/logo.png')}}" alt="image_not_found"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main_menu_list m-auto after_navbar">
                                <li class="nav-item nav_item_has_child px-2 dropdown">
                                    <a class="nav-link @yield('active-home')" aria-current="page" href={{route('/')}} id="home_submenu"
                                        role="button" aria-expanded="false">Home</a>
                                </li>
                                <li class="nav-item nav_item_has_child px-2 dropdown">
                                    <a class="nav-link @yield('active-about')" aria-current="page" href={{route('about')}} id="home_submenu"
                                        role="button" aria-expanded="false">About Us</a>
                                </li>
                                <li class="nav-item nav_item_has_child px-2 dropdown">
                                    <a class="nav-link @yield('active-shop')" aria-current="page" href={{route('shop')}} id="home_submenu"
                                        role="button" aria-expanded="false">Shop</a>
                                </li>
                                <li class="nav-item nav_item_has_child px-2 dropdown">
                                    <a class="nav-link" aria-current="page" href="#" id="home_submenu" role="button"
                                        aria-expanded="false">Gift</a>
                                </li>
                                <li class="nav-item nav_item_has_child px-2 dropdown">
                                    <a class="nav-link" aria-current="page" href="#" id="home_submenu" role="button"
                                        aria-expanded="false">CSR</a>
                                </li>
                                <li class="nav-item nav_item_has_child px-2 dropdown">
                                    <a class="nav-link @yield('active-contract')" aria-current="page" href={{route('contract')}} id="home_submenu"
                                        role="button" aria-expanded="false">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                        <div class="navbar_user me-2">
                            <div class="navbar_user_icon">
                                <ul class="list-unstyled d-flex mb-0">
                                    <li class="pe-3">
                                        <button class="main_search_btn" data-bs-toggle="collapse"
                                            data-bs-target="#main_search_collapse" aria-expanded="false"
                                            aria-controls="main_search_collapse">
                                            <i class="search_icon fas fa-search"></i>
                                            <i class="search_close fas fa-times"></i>
                                        </button>
                                    </li>
                                    <li class="pe-2 position-relative">
                                        <a href="#collapseExample" data-bs-toggle="collapse" href="#collapseExample"
                                            role="button" aria-expanded="false" aria-controls="collapseExample"><i
                                                class="far fa-user" data-toggle="collapse" role="button"
                                                data-target="#use_deropdown" aria-expanded="false"
                                                aria-controls="use_deropdown"></i>
                                        </a>
                                        <!-- user profile start -->
                                        @if(Session::has('userId'))
                                        <div id="collapseExample" class="collapse_dropdown collapse">
                                            <div class="dropdown_content">
                                                <div class="profile_info clearfix">
                                                    <div class="user_thumbnail">
                                                        <img src="{{asset('user/images/meta/meta1.png')}}" alt="image_not_found">
                                                    </div>
                                                    <div class="user_content">
                                                        <p class="user_name">{{ Session::get('userName') }}</p>
                                                    </div>
                                                </div>
                                                <ul class="settings_options ul_li_block clearfix">
                                                    <li><a href="{{route('my-profile')}}"><i class="fas fa-user-circle"></i> Profile</a></li>
                                                    <li ><a href="{{url('view-order-item/'.Session::get('userId'))  }}"><i class="fas fa-user-cog"></i>  My Order Item</a></li>
                                                    <li><a class="log-out-btn" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>Logout </a></li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                </form>
                                                </ul>
                                            </div>
                                        </div>
                                        @else
                                        <div id="collapseExample" class="collapse_dropdown collapse">
                                            <div class="dropdown_content">
                                                <ul class="settings_options ul_li_block clearfix">
                                                    <li class="mx-3 h4"><a href={{ route('login') }}><i class="fas fa-user-circle mx-2"></i> Log In</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endif

                                    </li>
                                    <li class="pe-2"><a href="#!"><i class="far fa-heart"></i></a></li>
                                    <li>
                                        <a href={{url('/cart')}}>
                                            <i class="fas fa-shopping-bag position-relative" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                @if(Session::has('userId'))
                                                @php
                                                        $cartProduct= App\Models\Admin\Cart::where('user_id',Session::get('userId'))->with('product')->get();
                                                @endphp
                                                @if (count( $cartProduct)>0)
                                                <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ count( $cartProduct) }}</span>
                                                @endif

                                                @endif
                                            </i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- webmenu bottom shape -->

                </div>
                <!-- mobile menubar start -->
                <div class="mobileMenu d-block d-lg-none">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="route('/')"><img src="{{ asset('user/images/logo/logo.png')}}"
                                alt="image_not_found"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false"
                            tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close mobile_menu_close text-reset"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav main_menu_list m-auto">
                                    <li class="nav-item pe-4 dropdown">
                                        <a class="nav-link active" aria-current="page" href="#" id="home_submenu"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                        <div class="dropdown-menu" aria-labelledby="home_submenu">
                                            <div class="sidebar_nav_item">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="index.php">Home V.1</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.php">Home V.2</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-3.html">Home V.3</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.html">Home V.4</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item pe-4 dropdown">
                                        <a class="nav-link" href="#" id="shop_submenu" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                        <div class="dropdown-menu" aria-labelledby="shop_submenu">
                                            <div class="sidebar_nav_item">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="shop-list-sidebar.html">Shop Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list.html" target="_blank">Shop List</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item pe-4 dropdown">
                                        <a class="nav-link" href="#" id="blog_submenu" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                        <div class="dropdown-menu" aria-labelledby="blog_submenu">
                                            <div class="sidebar_nav_item">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="blog-details.html">Blog Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-grid.html">Blog Grid</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list.html">Blog List</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item pe-5">
                                        <a class="nav-link" href="#!">Portfolio</a>
                                    </li>
                                    <li class="nav-item pe-4 dropdown">
                                        <a class="nav-link" href="#" id="page_submenu" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                        <div class="dropdown-menu" aria-labelledby="page_submenu">
                                            <div class="sidebar_nav_item">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="cart.html">Cart Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="faqs.html">Faqs Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="about-us.html">About Us V.1</a>
                                                    </li>
                                                    <li>
                                                        <a href="about-us-2.html">About Us V.2</a>
                                                    </li>
                                                    <li>
                                                        <a href="vendor.html">Vendor Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="vendor-profile.html">Vendor Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="vendor-dashboard.html">Vendor Dashboard</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-detail.html">Product Details V.1</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-detail-2.html">Product Details V.2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item pe-4 dropdown">
                                        <a class="nav-link" href="#" id="contact_submenu" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Contacts</a>
                                        <div class="dropdown-menu" aria-labelledby="contact_submenu">
                                            <div class="sidebar_nav_item">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="contact-us.html">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="navbar_user me-2">
                            <div class="navbar_user_icon">
                                <ul class="list-unstyled d-flex mb-0">
                                    <li class="pe-3">
                                        <button class="main_search_btn" data-bs-toggle="collapse"
                                            data-bs-target="#main_search_collapse" aria-expanded="false"
                                            aria-controls="main_search_collapse">
                                            <i class="search_icon fas fa-search"></i>
                                            <i class="search_close fas fa-times"></i>
                                        </button>
                                    </li>
                                    <li class="pe-2 position-relative">
                                        <a href="#collapseExample" data-bs-toggle="collapse" href="#collapseExample"
                                            role="button" aria-expanded="false" aria-controls="collapseExample"><i
                                                class="far fa-user" data-toggle="collapse" role="button"
                                                data-target="#use_deropdown" aria-expanded="false"
                                                aria-controls="use_deropdown"></i>
                                        </a>
                                        <!-- user profile start -->
                                        <div id="collapseExample" class="collapse_dropdown collapse">
                                            <div class="dropdown_content">
                                                <div class="profile_info clearfix">
                                                    <div class="user_thumbnail">
                                                        <img src="{{asset('user/images/meta/meta1.png')}}" alt="image_not_found">
                                                    </div>
                                                    <div class="user_content">
                                                        <h4 class="user_name">Jone Doe</h4>
                                                        <span class="user_title">Seller</span>
                                                    </div>
                                                </div>
                                                <ul class="settings_options ul_li_block clearfix">
                                                    <li><a href="#!"><i class="fas fa-user-circle"></i> Profile</a></li>
                                                    <li><a href="#!"><i class="fas fa-user-cog"></i> Settings</a></li>
                                                    <li><a href="#!"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pe-2"><a href="#!"><i class="far fa-heart"></i></a></li>
                                    <li>
                                        <a href="#!">
                                            <i class="fas fa-shopping-bag position-relative" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- collapse search - start -->
            <div class="main_search_collapse collapse" id="main_search_collapse">
                <div class="main_search_form position-relative card">
                    <div class="container">
                        <form action="{{ route('shop') }}">
                            <div class="form_item position-relative">
                                <input type="search" class="form-control rounded-pill py-3" name="search"
                                    placeholder="Search Your Product...">
                                <button type="submit" class="submit_btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- collapse search - end -->
        </div>
    </header>


@yield('content')



     <!-- footer section start -->
     <footer class="footer_section position-relative border_top">
        <div class="footer_section_wrap sec_top_space_50"
            style="background-image: url(./user/images/footer/footer.png)">
            <div class="container">
                <div
                    class="footer_top_content d-flex flex-column flex-lg-row justify-content-between align-items-center">
                    <div class="footer_top_logo">
                        <a href="index.php"><img src="{{asset('user/images/logo/logo.png')}}" alt="image_not_found"></a>
                    </div>
                    <div class="footer_top_subs position-relative">
                        <input class="rounded-pill" type="search" name="search" placeholder="Your Phone Number">
                        <a href="#!"><button type="button"
                                class="btn custom_btn rounded-pill text-white position-absolute">Subscribe Now
                                <i class="fas fa-long-arrow-alt-right"></i></button></a>
                    </div>
                    <div class="footer_top_social">
                        <ul class="list-unstyled d-flex justify-content-end">
                            <li class="me-3"><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="me-3"><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li class="me-3"><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li class="me-3"><a href="#!"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer_inner_content sec_space_xs_70">
                    <div class="footer_inner_content_wrap">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="footer_inner_choose_content">
                                    <div class="footer_inner_choose_title">
                                        <h4>
                                            <a href="#!" class="text-white">Why People Like us</a>
                                        </h4>
                                    </div>
                                    <div class="footer_inner_choose_desc pt-2 pe-3">
                                        <p>Plucked tea leaves are passed through cylinders with hundreds of sharp
                                            metallic teeth that crush, tear and curl the leaves into the hard, shiny,
                                            black pellets that we are all so familiar with. CTC tea is rich in
                                            antioxidants and flavonoids. </p>
                                    </div>
                                    <div class="footer_inner_choose">
                                        <a href="about-us.php"><button type="button"
                                                class="btn custom_btn rounded-pill px-4 text-white">View More <i
                                                    class="fas fa-long-arrow-alt-right"></i></button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="footer_inner_info_content">
                                    <div class="footer_inner_info_title">
                                        <h4>
                                            <a href="#!" class="text-white">Information</a>
                                        </h4>
                                    </div>
                                    <div class="footer_inner_info_item pt-2">
                                        <ul class="list-unstyled">
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="#!">Delivery Information</a></li>
                                            <li><a href="#!">Privacy Policy</a></li>
                                            <li><a href="#!">Terms & Conditions</a></li>
                                            <li><a href="#!">Return Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="footer_inner_acct_content">
                                    <div class="footer_inner_acct_title">
                                        <h4>
                                            <a href="#!" class="text-white">My Account</a>
                                        </h4>
                                    </div>
                                    <div class="footer_inner_acct_item pt-2">
                                        <ul class="list-unstyled">
                                            <li><a href="#!">My Account</a></li>
                                            <li><a href="#!">Shopping Cart</a></li>
                                            <li><a href="#!">Wishlist</a></li>
                                            <li><a href="#!">Order History</a></li>
                                            <li><a href="#!">Corporate Orders</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="footer_inner_cotc_content">
                                    <div class="footer_inner_ctc_title">
                                        <h4>
                                            <a href="#!" class="text-white">Contact Us</a>
                                        </h4>
                                    </div>
                                    <div class="footer_inner_ctc_info pt-2 text-white">
                                        <p>Address: <font>382/747, BF Road, Alipurduar, India</font>
                                        </p>
                                        <p>Email: <font>dabritea@themlagroup.in</font>
                                        </p>
                                        <p>Phone: <font>+91 9326091213</font>
                                        </p>
                                        <div class="footer_inner_payment_ctc">
                                            <div class="footer_inner_payment_title">
                                                <h5 class="text-white">Payment Accepted</h5>
                                            </div>
                                            <div class="footer_inner_payment_thumb pt-3">
                                                <a href="#!"><img src="{{asset('user/images/payment/payment.png')}}"
                                                        alt="image_not_found"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bootom_content">
                    <div class="footer_bootom_wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer_bootom_copyright">
                                        <p>© 2023 <font>Dabri Tea</font>. All rights reserved.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div
                                        class="footer_bootom_privicy_cont d-flex justify-content-center align-items-center">
                                        <div class="footer_bootom_privicy pe-5">
                                            <a href="#!">
                                                <p class="priv position-relative">Privacy Policy</p>
                                            </a>
                                        </div>
                                        <div class="footer_bootom_terms pe-5">
                                            <p class="position-relative">Terms of Use</p>
                                        </div>
                                        <div class="footer_bootom_refunds">
                                            <p>Sales and Refunds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>









    <!-- Include jquery js -->
<script src="{{asset('user/js/jquery.min.js')}}"></script>
<!-- Include bootstrap-bundle js -->
<script src="{{asset('user/js/bootstrap.bundle.min.js')}}"></script>
<!-- Include aos js -->
<script src="{{asset('user/js/aos.js')}}"></script>
<!-- Include jquery-magnific-popup js -->
<script src="{{asset('user/js/magnific-popup.min.js')}}"></script>
<!-- Include nice-select js -->
<script src="{{asset('user/js/nice-select.min.js')}}"></script>
<!-- Include jquery-countdown js -->
<script src="{{asset('user/js/countdown.min.js')}}"></script>
<!-- Include slick js -->
<script src="{{asset('user/js/slick.min.js')}}"></script>
<!-- Include custom js -->
<script src="{{asset('user/js/custom.js')}}"></script>

</body>
</html>
