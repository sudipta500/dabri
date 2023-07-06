@extends('user.layout')
@section('title')
Contract
@endsection
@section('content')
@section('active-contract')
active
@endsection
<main>
  <!-- Breadcrumb section start -->
    <section class="breadcrumb_sec_1 position-relative">
        <div class="breadcrumb_wrap sec_space_mid_small"
            style="background-image: url(assets/images/breadcrumb/breadcrumb1.png);">
            <div class="breadcrumb_cont text-center">
                <div class="breadcrumb_title">
                    <h2 class="text-white">Contact Us</h2>
                </div>
                <ul
                    class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                    <li><a href="index.html"><i class="fas fa-home active"></i>Home</a></li>
                    <li><i class="fas fa-chevron-right"></i>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->


    <!-- address-section start -->
    <section class="address_sec sec_space_small" data-aos="fade-up" data-aos-duration="2000">
        <div class="address_sec_wrap">
            <div class="container-sm">
                <div class="row g-5 justify-content-center align-items-center">
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-right"
                            data-aos-duration="2000">
                            <div class="address_author bg-white position-absolute">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <span class="text-uppercase px-3">GET TO KNOW</span>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                            </div>
                            <h4 class="address_title">About Organi</h4>
                            <p class="address_desc">Tea is a wake up call for our senses. Just one sip into Dabri’s hot CTC tea feels like an instant spurt of energy.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-up"
                            data-aos-duration="2000">
                            <div class="address_author bg-white position-absolute">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <span class="text-uppercase px-3">visit us</span>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                            </div>
                            <h4 class="address_title">Our Address</h4>
                            <p class="address_desc">382/747, BF Road, Alipurduar, India</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-left"
                            data-aos-duration="2000">
                            <div class="address_author2 bg-white position-absolute">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="address_author3 bg-white position-absolute">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <span class="text-uppercase px-3">Call or write</span>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                            </div>
                            <h4 class="address_title">Phone & Email</h4>
                            <p class="address_desc">+91 9326091213<br> dabritea@themlagroup.in</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- address-section end -->

    <!-- contact-info section start -->

    <section class="contact_us_info position-relative" data-aos="fade-up" data-aos-duration="2000">
        <div class="comment_area_wrap sec_space_small " style="background-image: url(assets/images/backgrounds/bg15.png)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 position-relative">
                        <div class="trend_sub_title d-flex align-items-center pb-3">
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <span class="text-uppercase px-3 text-dark">we love to here from you</span>
                        </div>
                        <h3 class="comment_area_title mb-5">Leave a Comment</h3>
                        <div class="comment_form_area">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_item">
                                            <input class="rounded-pill" type="text" name="name"
                                                placeholder="Your Name*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_item">
                                            <input class="rounded-pill" type="text" name="name"
                                                placeholder="Your Name*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_item">
                                            <input class="rounded-pill" type="email" name="email"
                                                placeholder="Email Address*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_item">
                                            <input class="rounded-pill" type="text" name="name"
                                                placeholder="Website*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_item">
                                    <textarea name="comment" placeholder="your Comment*"></textarea>
                                </div>
                                <button type="submit"
                                    class="btn custom_btn rounded-pill py-3 text-white text-uppercase">Post
                                    Comments <i class="fas fa-long-arrow-alt-right"></i></button>
                            </form>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.925972523825!2d89.52404937610949!3d26.4903282769017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e2573e731b9db5%3A0x699312c7b0f0eba0!2sBF%20Rd%2C%20Alipurduar%2C%20West%20Bengal%20736121!5e0!3m2!1sen!2sin!4v1681808835236!5m2!1sen!2sin" style="width:100%; height:100%; border:0; padding:30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-info-left side thumb -->
        <img class="contact_info_thumb_left position-absolute" src="assets/images/shapes/shape22.png"
            alt="image_not_found">

    </section>
    <!-- contact-info section end -->
</main>
@endsection
