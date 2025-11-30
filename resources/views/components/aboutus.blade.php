@extends('layouts.app')

@section('content')
    <!-- breadcrumb start -->
    <div class="roister-breadcrumb-section" data-background="./assets/images/bg/menu-hero-bg.png">
        <div class="container position-relative z-3">
            <h1 class="breadcrumb-title mb-40 wow fadeInUp">About Us </h1>
            <!--<ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".2s">-->
            <!--    <li><a href="/">Home</a></li>-->
            <!--    <li class="active">About Us</li>-->
            <!--</ul>-->
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- about section start -->
    <section class="roister-about-section py-120" data-background="./assets/images/bg/about-bg.png">
        <!-- shape -->
        <img class="about-shape" src="./assets/images/hero-shape-3.jpg" alt="img" />
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-60 mb-lg-0">
                    <div class="reveal-img">
                        <img class="main-img" src={!! $aboutsection->_image ?? '' !!} alt="img" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contents-wraper">
                        {{-- <h5 class="section-subtitle mb-8 wow fadeInUp" data-wow-delay=".2s">
                            about our food
                        </h5> --}}
                        <h2 class="section-title mb-32 wow fadeInUp" data-wow-delay=".3s">
                            <span>{!! $aboutsection->_title ?? '' !!}</span>
                        </h2>
                        <p class="des mb-40 wow fadeInUp" data-wow-delay=".4s">
                            {!! $aboutsection->_description ?? '' !!}
                        </p>
                        {{-- <a href="about" class="primary-btn border-radius-6 mb-60 wow fadeInUp" data-wow-delay=".5s">Know
                            More
                            <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.34375 5.78125L1.78125 10.4062C1.625 10.5625 1.375 10.5625 1.25 10.4062L0.625 9.78125C0.46875 9.625 0.46875 9.40625 0.625 9.25L4.3125 5.5L0.625 1.78125C0.46875 1.625 0.46875 1.375 0.625 1.25L1.25 0.625C1.375 0.46875 1.625 0.46875 1.78125 0.625L6.34375 5.25C6.5 5.40625 6.5 5.625 6.34375 5.78125Z"
                                    fill="white" />
                            </svg>
                        </a> --}}

                        {{-- <img class="about-img-1" src="./assets/images/hero-shape-3.jpg" alt="img" /> --}}
                        <div class="reveal-img">
                            @foreach ($aboutcomponent as $about_component)
                                <img class="about-img-2" src={{ $about_component->_image ?? '' }} alt="img" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->
    
    <!-- video area start -->
    @php
        $videoUrl = $videocomponent->_videourl ?? '';
        $videoId = '';

        // Extract video ID (works for YouTube links)
        if (preg_match('/(?:v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $videoUrl, $matches)) {
            $videoId = $matches[1];
        }

        // Build thumbnail URL
        $thumbnailUrl = $videoId
            ? "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg"
            : asset('assets/images/bg/about-vdo-bg.png'); // fallback
    @endphp
    <div class="roister-about-vdo-section"
        style="background-image: url('{{ $thumbnailUrl }}'); background-size: cover; background-position: center;">
        <a class="vdo-play-btn" href="{{ $videoUrl }}">
            <img class="circle-btn rotate-center" src="{{ asset('assets/images/circle-btn.png') }}" alt="btn-img">
        </a>
    </div>

    <!-- video area end -->
    
    <!-- team section start -->
    <section class="roister-team-section py-60">
        <!-- shapes -->
        <img class="shape-1" src="./assets/images/hero-shape-3.jpg" alt="img" />
        <img class="shape-2" src="./assets/images/hero-shape-3.jpg" alt="img" />

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    @foreach ($managementsection as $section)
                        <h2 class="section-subtitle mb-8 wow fadeInUp" data-wow-delay=".2s">
                            {!! $section->_title !!}
                        </h2>
                    @endforeach
                </div>
            </div>

            <div class="row gy-4">
                @foreach ($managementcomponent as $member)
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                        <div class="roister-single-team">
                            <div class="img-wraper mb-24">
                                <img src={!! $member->_image !!} alt="img" />
                                {{-- <div class="social-wraper">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div> --}}
                            </div>

                            <div class="content-wraper">
                                <h5 class="name mb-12">
                                    <a>{!! $member->_title !!}</a>
                                </h5>
                                <p class="desig">{!! $member->_subtitle !!}</p>
                                {{-- <button class="show-social-btn" type="button">
                                <i class="fa-solid fa-plus"></i>
                                <i class="fa-solid fa-minus"></i>
                            </button> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- team section end -->
    
    <!-- home 2 testimonial section start -->
    <section class="roister-hm2-testimonial-section py-120">
        <!-- shape -->
        <img class="shape-1" src="./assets/images/hero-shape-3.jpg" alt="img">
        <img class="shape-2" src="./assets/images/hero-shape-3.jpg" alt="img">
        <div class="container">
            <div class="row justify-content-center mb-40">
                <div class="col-lg-7 text-center">
                    {{-- <h6 class="section-subtitle  mb-8 wow fadeInUp" data-wow-delay=".1s">Our Testimonials</h6> --}}
                    <h2 class="section-title mb-18 wow fadeInUp" data-wow-delay=".2s">What Clients Say About Kula</h2>
                </div>
            </div>

            <div class="roister-hm2-testimonial-slider-wraper owl-carousel owl-theme px-2wow fadeInUp"
                data-wow-delay=".3s">
                @foreach ($allreviews as $review)
                    <div class="roister-single-hm2-testimonial">
                        <!-- shape -->
                        <svg class="shape1" xmlns="http://www.w3.org/2000/svg" width="114" height="106"
                            viewBox="0 0 114 106" fill="none">
                            <path opacity="0.1"
                                d="M64.784 101.339L64.784 82.355C64.784 79.7803 66.8711 77.6941 69.4458 77.6941C78.6319 77.6941 83.6287 68.2724 84.3213 49.677L69.4458 49.677C66.8711 49.677 64.784 47.5889 64.784 45.0152L64.784 4.93103C64.784 2.35765 66.8711 0.271175 69.4458 0.271175L109.107 0.271179C111.683 0.271179 113.768 2.35928 113.768 4.93103L113.768 45.0152C113.768 53.9295 112.87 62.1098 111.101 69.3316C109.286 76.7366 106.501 83.2111 102.824 88.5759C99.041 94.0893 94.3088 98.4158 88.7579 101.43C83.1695 104.462 76.6709 106 69.4442 106C66.8711 106 64.784 103.914 64.784 101.339ZM4.66224 77.6938C2.08886 77.6938 0.000116733 79.7819 0.000116508 82.3546L0.000114848 101.339C0.000114623 103.914 2.08853 106 4.66224 106C11.886 106 18.3856 104.461 23.972 101.429C29.5239 98.4154 34.2587 94.089 38.0425 88.5756C41.7178 83.2108 44.5033 76.736 46.3183 69.3294C48.0867 62.1053 48.9843 53.9249 48.9843 45.0149L48.9843 4.9307C48.9843 2.35732 46.8965 0.270845 44.3225 0.270845L4.66258 0.270842C2.0892 0.270841 0.00239706 2.35894 0.00239684 4.93069L0.00239333 45.0152C0.00239311 47.5886 2.08886 49.677 4.66257 49.677L19.3259 49.677C18.6437 68.2721 13.7199 77.6938 4.66224 77.6938Z"
                                fill="#F39C12" />
                        </svg>

                        <div class="top-area mb-30">
                            <div class="user-box">
                                <div class="img-wraper">
                                    <img src={!! $review->_image ?? '' !!} alt="img">
                                </div>
                                <div class="user-content">
                                    <h5 class="name mb-10">{!! $review->_title ?? '' !!}</h5>
                                    <p class="desig">{!! $review->_subtitle ?? '' !!}</p>
                                </div>
                            </div>

                            {{-- <div class="rating-wraper">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div> --}}
                        </div>
                        <div class="btm-area">
                            <p class="mb-14">“{!! $review->_description ?? '' !!}”</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- home 2 testimonial section end -->

    <!-- banner section start -->
    <div class="roister-banner-section wow fadeInUp" data-wow-delay=".6s">
        <a>
            <img class="ratio ratio-16x9" src={!! $mainoffer->_image !!} alt="img" />
        </a>
    </div>
    <!-- banner section end -->


    <!-- team section start -->
    <!--<section class="roister-team-section py-60">-->
        <!-- shapes -->
    <!--    <img class="shape-1" src="./assets/images/hero-shape-3.jpg" alt="img" />-->
    <!--    <img class="shape-2" src="./assets/images/hero-shape-3.jpg" alt="img" />-->

    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-lg-7 text-center">-->
    <!--                @foreach ($chefsection as $section)-->
    <!--                    <h2 class="section-subtitle mb-8 wow fadeInUp" data-wow-delay=".2s">-->
    <!--                        {!! $section->_title !!}-->
    <!--                    </h2>-->
    <!--                @endforeach-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="row gy-4">-->
    <!--            @foreach ($chefcomponent as $chef)-->
    <!--                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">-->
    <!--                    <div class="roister-single-team">-->
    <!--                        <div class="img-wraper mb-24">-->
    <!--                            <img src={!! $chef->_image !!} alt="img" />-->
    <!--                            {{-- <div class="social-wraper">-->
    <!--                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>-->
    <!--                            <a href="#"><i class="fa-brands fa-twitter"></i></a>-->
    <!--                            <a href="#"><i class="fa-brands fa-instagram"></i></a>-->
    <!--                            <a href="#"><i class="fa-brands fa-youtube"></i></a>-->
    <!--                        </div> --}}-->
    <!--                        </div>-->

    <!--                        <div class="content-wraper">-->
    <!--                            <h5 class="name mb-12">-->
    <!--                                <a>{!! $chef->_title !!}</a>-->
    <!--                            </h5>-->
    <!--                            <p class="desig">{!! $chef->_subtitle !!}</p>-->
    <!--                            {{-- <button class="show-social-btn" type="button">-->
    <!--                            <i class="fa-solid fa-plus"></i>-->
    <!--                            <i class="fa-solid fa-minus"></i>-->
    <!--                        </button> --}}-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endforeach-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- team section end -->

    <!-- ticker area start -->
    <div class="roister-ticker-wraper py-100" data-background="./assets/images/bg/tickker-bg.png">
        <div class="ticker-wraper wow fadeInUp" data-wow-delay=".9s">
            <div class="hero-carousel-wraper left-ticker mb-60">
                <span class="title">Kunafa</span>
                <span class="title">Roast</span>
                <span class="title">Shawarma</span>
                <span class="title">Suslick</span>
                <span class="title">Tandoori</span>
                <span class="title">Daqoos</span>
                <span class="title">Saleeg</span>
                <span class="title">Salads</span>
                <span class="title">Custards</span>
                <span class="title">Khubz</span>
            </div>
            <div class="hero-carousel-wraper right-ticker">
                <span class="title-2">Kunafa</span>
                <span class="title-2">Roast</span>
                <span class="title-2">Shawarma</span>
                <span class="title-2">Suslick</span>
                <span class="title-2">Tandoori</span>
                <span class="title-2">Daqoos</span>
                <span class="title-2">Saleeg</span>
                <span class="title-2">Salads</span>
                <span class="title-2">Custards</span>
                <span class="title-2">Khubz</span>
            </div>
        </div>
    </div>
    <!-- ticker area end -->

    <!-- faq section start -->
    <section class="roister-home-faq-section py-120">
        <img class="faq-shape1 item-bounce" src="./assets/images/hero-shape-3.jpg" alt="img" />
        <img class="faq-shape2" src="./assets/images/hero-shape-3.jpg" alt="img" />

        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-40 mb-lg-0">
                    <div class="right-side">
                        <h2 class="mb-60 wow fadeInUp">Frequently Asked Questions</h2>

                        <div class="roister-home1-accordion" id="accordionNsFaq">
                            @foreach ($allfaqs as $index => $faq)
                                <div class="faq-item wow fadeInUp" data-wow-delay=".2s">
                                    <h6 class="title" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $index }}"
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse-{{ $index }}">
                                        {!! $faq->_question ?? '' !!}
                                    </h6>
                                    <div id="collapse-{{ $index }}"
                                        class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                        data-bs-parent="#accordionNsFaq">
                                        <p class="des">
                                            {!! $faq->_answer ?? '' !!}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="reveal-img ps-lg-3 ps-xl-4 ps-xxl-5">
                        <img class="w-100" src="./assets/images/unnamed (9).jpg" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end -->
@endsection
