@extends('user.layout')
@section('title')
Contract
@endsection
@section('content')
<main>
    <section class="contact_us_info position-relative mb-4 mt-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <h3 class="comment_area_title mb-5 text-center">My Profile</h3>
                        <div class="comment_form_area">
                            <form action="#">
                                <div class="row">
                                    <div >
                                        <div class="form_item">
                                            <input class="rounded-pill" type="text" name="name"
                                                placeholder="Your Name*" required>
                                        </div>
                                    </div>
                                    <div >
                                        <div class="form_item">
                                            <input class="rounded-pill" type="text" name="name"
                                                placeholder="Your Email*" required>
                                        </div>
                                    </div>
                                    <div >
                                        <div class="form_item">
                                            <input class="rounded-pill" type="text" name="name"
                                                placeholder="Your Phone Number*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_item">
                                    <textarea name="comment" placeholder="your Address*"></textarea>
                                </div>
                                <div class="m-auto">
                                    <button type="submit" class="btn custom_btn rounded-pill py-3 text-white text-uppercase ">Update Profile</button>
                                </div>
                            </form>
                        </div>

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
