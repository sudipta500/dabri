
@extends('user.layout')
@section('title')
About
@endsection
@section('active-about')
active
@endsection
@section('content')

<main>
    <!-- Breadcrumb section start -->
    <section class="breadcrumb_sec_1 position-relative">
        <div class="breadcrumb_wrap sec_space_mid_small" style="background-image: url(user/images/breadcrumb/breadcrumb1.png);">
            <div class="breadcrumb_cont text-center">
                <div class="breadcrumb_title">
                    <h2 class="text-white">About Us</h2>
                    <h3 class="text-white">Tradition and Innovation</h3><br>
                </div>
                <ul class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                    <li><a href="index.php"><i class="fas fa-home active"></i>Home</a></li>
                    <li><i class="fas fa-chevron-right"></i>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- product section-2 start -->
    <section class="product_section_2 sec_space_small" data-aos="fade-up" data-aos-duration="2000">
        <div class="product_section_2_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product_gallery d-flex justify-content-center align-items-center">
                            <img src="{{asset('user/images/sales/sale9.png')}}" alt="image_not_found">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product_section_content">
                            <div class="product_section_title py-2">
                                <h2>The Dabri Story</h2>
                            </div>
                            <div class="product_section_desc">
                                <p>Let us take you back in time to pre-independence India. Though the British had introduced the concept of tea plantations, a group of hard working and adventurous Bengalis from Faridpur (presently in Bangladesh) spearheaded tea estates in the now-legendary hills of Dooars. Known as the Alipurduar Group, they were again led by charismatic Bidubhusan Samaddar, who founded a one-man business conglomerate. The British honoured him with a Rai Bahadur title, the local population admired him, and he was an inspiration for other entrepreneurs. From a sleepy small town, Alipurduar soon boomed into a commercial hub. </p>
                                <p>After Bidhubhusan’s death, his sons, guided by their uncle Makhan Samaddar, continued running the business. Makhan was the Managing Director of Majherdabri Tea Estate as we know it now. </p>
                                <p>In the 1970’s, the ownership of the estate was further transferred to Dayananda Agarwal. The MLA Group took over from Mr. D.N. Agarwal in the year 2003, and continues to strengthen brand Dabri till date. </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section-2 end -->

    <!-- product-9 section start -->
    <section class="product9_sec position-relative" data-aos="fade-up" data-aos-duration="2000">
        <div class="product9_sec_wrap pt-5 pb-5" style="background-image: url(user/images/backgrounds/bg13.png);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row gx-5 justify-content-center align-items-center">
                            <div class="col-lg-6">
                                <div class="product9_gallery img_moving_anim1 overflow-hidden shadow-lg">
                                    <img src="{{asset('user/images/product/product31.png')}}" alt="image_not_found" style="max-width: initial !important;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product9_sec_cont">

                                    <div class="product9_section_title text-effect py-2">
                                        <h2>Blossoming into a New Era </h2>
                                    </div>

                                    <div class="product9_section_desc">
                                        <p>At the MLA Group, we truly prize the legacy we have inherited. To meet the demands of changing times, we have upgraded everything from machinery to packaging, without compromising on the flavour that has made Dabri Tea a much-loved name.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <img class="product9_right_thumb position-absolute" src="assets/images/product/product32.png" alt="image_not_found">
    </section>
    <!-- product-9 section end -->

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
                                <img src="{{asset('user/images/gallery/7.webp')}}" alt="image_not_found">
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
                                <img src="{{asset('user/images/gallery/6.webp')}}" alt="image_not_found">
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
                                <img src="{{asset('user/images/gallery/4.jpg')}}" alt="image_not_found">
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
