@extends('layouts.app')

@section('content')
<!-- hero section start -->
<section class="roister-hero-section">
    @foreach ($herosection as $section)
    <!-- shape -->
    <img class="hero-shape-1 wow fadeIn rounded-end-circle" data-wow-delay=".4s"
        src="./assets/images/items/7de142550f658b99aa5cf470fb1f145b.jpg" alt="img" />
    {{-- <img class="hero-shape-2 wow fadeIn" data-wow-delay=".4s" src="./assets/images/hero-shape-2.jpg"
            alt="img" /> --}}
    <img class="hero-shape-3 item-bounce" src="./assets/images/hero-shape-3.jpg" alt="img" />

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-contents">
                    <h5 class="subtitle mb-16 wow fadeInUp">
                        <svg width="67" height="12" viewBox="0 0 67 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M66.7735 6L61 0.226497L55.2265 6L61 11.7735L66.7735 6ZM61 5L8.74228e-08 4.99999L-8.74228e-08 6.99999L61 7L61 5Z"
                                fill="#F39C12" />
                        </svg>
                        {!! $section->_subtitle ?? '' !!}
                    </h5>
                    <h1 class="title mb-60 wow fadeInUp" data-wow-delay=".2s">
                        {!! $section->_title ?? '' !!}
                    </h1>
                    <div class="btn-wraper wow fadeInUp" data-wow-delay=".3s">
                        {{-- <a href="reservation" class="primary-btn border-radius-6">Book a Table
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.34375 5.78125L1.78125 10.4062C1.625 10.5625 1.375 10.5625 1.25 10.4062L0.625 9.78125C0.46875 9.625 0.46875 9.40625 0.625 9.25L4.3125 5.5L0.625 1.78125C0.46875 1.625 0.46875 1.375 0.625 1.25L1.25 0.625C1.375 0.46875 1.625 0.46875 1.78125 0.625L6.34375 5.25C6.5 5.40625 6.5 5.625 6.34375 5.78125Z"
                                        fill="white" />
                                </svg>
                            </a> --}}

                        <!--    <div class="trip-info-wraper">-->
                        <!--        <div class="icon-wraper">-->
                        <!--            <img src="./assets/images/logos/2205914.png" width="65" height="65" />-->
                        <!--        </div>-->
                        <!--        <div class="content-wraper">-->
                        <!--            <h6 class="trip-title mb-6">FoodPanda Rating</h6>-->
                        <!--            <p class="trip-des">4.5 Stars</p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay=".4s">
                    <img class="hero-main-img rounded" src={!! $section->_image ?? '' !!} alt="img" />
                </div>
            </div>
        </div>

        {{-- <div class="book-table-content">
            <h4 class="title">
                <svg class="left-arrow" xmlns="http://www.w3.org/2000/svg" width="7" height="153"
                    viewBox="0 0 7 153" fill="none">
                    <path d="M3.5 0.113251L0.61325 3L3.5 5.88675L6.38675 3L3.5 0.113251ZM4 153L4 3L3 3L3 153L4 153Z"
                        fill="white" />
                </svg>

                Book a Table

                <svg class="right-arrow" xmlns="http://www.w3.org/2000/svg" width="7" height="153"
                    viewBox="0 0 7 153" fill="none">
                    <path
                        d="M3.49999 152.887L6.38674 150L3.49999 147.113L0.613242 150L3.49999 152.887ZM3 -2.18557e-08L2.99999 150L3.99999 150L4 2.18557e-08L3 -2.18557e-08Z"
                        fill="white" />
                </svg>
            </h4>
        </div> --}}
        @endforeach
</section>
<!-- hero section end -->

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
                    <a href="about" class="primary-btn border-radius-6 mb-60 wow fadeInUp" data-wow-delay=".5s">Know
                        More
                        <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.34375 5.78125L1.78125 10.4062C1.625 10.5625 1.375 10.5625 1.25 10.4062L0.625 9.78125C0.46875 9.625 0.46875 9.40625 0.625 9.25L4.3125 5.5L0.625 1.78125C0.46875 1.625 0.46875 1.375 0.625 1.25L1.25 0.625C1.375 0.46875 1.625 0.46875 1.78125 0.625L6.34375 5.25C6.5 5.40625 6.5 5.625 6.34375 5.78125Z"
                                fill="white" />
                        </svg>
                    </a>

                    <img class="about-img-1" src="./assets/images/hero-shape-3.jpg" alt="img" />
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

<!-- banner section start -->
<div class="roister-banner-section wow fadeInUp mb-5" data-wow-delay=".6s">
    <a>
        <img class="ratio ratio-16x9" src={!! $mainoffer->_image !!} alt="img" />
    </a>
</div>
<!-- banner section end -->

<!-- best dishes section start -->
<!--<section class="roister-best-dishes-section py-120">-->
<!-- shapes -->
<!--    <img class="shape-1" src="./assets/images/hero-shape-3.jpg" alt="img" />-->
<!--    <img class="shape-2" src="./assets/images/hero-shape-3.jpg" alt="img" />-->
<!--    <img class="shape-3 item-bounce" src="./assets/images/hero-shape-3.jpg" alt="img" />-->
<!--    <img class="shape-4" src="./assets/images/hero-shape-3.jpg" alt="img" />-->

<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-lg-7 text-center">-->
<!--                <h2 class="section-title mb-18 wow fadeInUp">-->
<!--                    {{ $specialdishsection->_title ?? '' }}-->
<!--                </h2>-->
<!--                <p class="des mb-50 wow fadeInUp" data-wow-delay=".2s">-->
<!--                    {{ $specialdishsection->_subtitle ?? '' }}-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="row gy-4">-->
<!--            @foreach ($specialdishcomponent as $dish)-->
<!--                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">-->
<!--                    <div class="roister-single-dish">-->
<!--                        <div class="img-wraper">-->
<!--                            <img src="{{ $dish->_image }}" alt="img" />-->
<!--                        </div>-->
<!--                        <div class="content-wraper">-->
<!--                            <div class="top-area mb-24">-->
<!--                                <h5 class="title">-->
<!--                                    <a href="{{ url('item-details') . '/' . $dish->id }}">{{ $dish->_title ?? '' }}</a>-->
<!--                                </h5>-->
<!--                                <h4 class="price">Tk. {{ $dish->_subtitle ?? '' }}</h4>-->
<!--                            </div>-->
<!--                            <div class="btm-area">-->
<!--                                <div class="rating-wraper">-->
<!--                                    <i class="fa-solid fa-star"></i>-->
<!--                                    <i class="fa-solid fa-star"></i>-->
<!--                                    <i class="fa-solid fa-star"></i>-->
<!--                                    <i class="fa-solid fa-star"></i>-->
<!--                                    <i class="fa-solid fa-star"></i>-->
<!--                                </div>-->
<!--                                <h4 class="price">$230</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            @endforeach-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- best dishes section end -->

<!-- team section start -->
<!--<section class="roister-team-section py-60">-->
<!-- shapes -->
<!--    <img class="shape-1" src="./assets/images/hero-shape-3.jpg" alt="img" />-->
<!--    <img class="shape-2" src="./assets/images/hero-shape-3.jpg" alt="img" />-->

<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-lg-7 text-center">-->
<!--                @foreach ($teamsection as $member)-->
<!--                    <h2 class="section-subtitle mb-8 wow fadeInUp" data-wow-delay=".2s">-->
<!--                        {!! $member->_title !!}-->
<!--                    </h2>-->
<!--                @endforeach-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="row gy-4">-->
<!--            @foreach ($teamcomponent as $member)-->
<!--                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">-->
<!--                    <div class="roister-single-team">-->
<!--                        <div class="img-wraper mb-24">-->
<!--                            <img src={!! $member->_image !!} alt="img" />-->
<!--                            {{-- <div class="social-wraper">-->
<!--                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>-->
<!--                            <a href="#"><i class="fa-brands fa-twitter"></i></a>-->
<!--                            <a href="#"><i class="fa-brands fa-instagram"></i></a>-->
<!--                            <a href="#"><i class="fa-brands fa-youtube"></i></a>-->
<!--                        </div> --}}-->
<!--                        </div>-->

<!--                        <div class="content-wraper">-->
<!--                            <h5 class="name mb-12">-->
<!--                                <a>{!! $member->_title !!}</a>-->
<!--                            </h5>-->
<!--                            <p class="desig">{!! $member->_subtitle !!}</p>-->
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

<!-- banner slider start -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
            <h2 class="section-subtitle mb-32 wow fadeInUp" data-wow-delay=".2s">
                Most Popular Offers
            </h2>
        </div>
    </div>
</div>

<div class="roister-banner-slider-wraper owl-carousel owl-theme px-2">

    @foreach ($offers as $offer)
    <div class="img-wraper">
        <img class="banner-img" src={!! $offer->_image !!} alt="img" />
    </div>
    @endforeach
</div>
<!-- banner slider end -->

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

<!-- ticker area start -->
<div class="roister-ticker-wraper py-100" data-background="./assets/images/bg/tickker-bg.png">
    <div class="ticker-wraper wow fadeInUp" data-wow-delay=".9s">
        <div class="hero-carousel-wraper left-ticker mb-8">
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

<!-- testimonial section start -->
<section class="roister-testimonial-section py-120">
    <!-- shapes -->
    <img class="shape-1" src="./assets/images/hero-shape-3.jpg" alt="img" />
    <img class="shape-2" src="./assets/images/hero-shape-3.jpg" alt="img" />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h2 class="section-subtitle mb-32 wow fadeInUp" data-wow-delay=".2s">
                    What Clients Say About Kula
                </h2>
                {{-- <h5 class="section-subtitle mb-8 wow fadeInUp">Find out why diners return to Kula for genuine taste
                        and friendly service—real tales, real flavours.</h5> --}}
            </div>
        </div>

        <div class="roister-testi-slider-wraper owl-carousel owl-theme">
            @foreach ($allreviews as $all_reviews)
            <div class="roister-single-testimonial">
                <div class="img-wraper">
                    <img src={!! $all_reviews->_image ?? '' !!} alt="img" />
                </div>
                <div class="content-wraper">
                    <p class="des mb-40">
                        {!! $all_reviews->_description ?? '' !!}
                    </p>
                    <div class="btm-wraper">
                        <h6 class="feedback-name">
                            <svg class="quote-icon" width="66" height="51" viewBox="0 0 66 51"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.88235 46.4481C2.20588 42.404 0 37.9922 0 30.6392C0 17.7716 9.19118 6.37454 22.0588 0.492188L25.3677 5.2716C13.2353 11.8892 10.6618 20.3451 9.92647 25.8598C11.7647 24.7569 14.3382 24.3892 16.9118 24.7569C23.5294 25.4922 28.6765 30.6392 28.6765 37.6245C28.6765 40.9334 27.2059 44.2422 25 46.8157C22.4265 49.3892 19.4853 50.4922 15.8088 50.4922C11.7647 50.4922 8.08824 48.654 5.88235 46.4481ZM42.6471 46.4481C38.9706 42.404 36.7647 37.9922 36.7647 30.6392C36.7647 17.7716 45.9559 6.37454 58.8235 0.492188L62.1324 5.2716C50 11.8892 47.4265 20.3451 46.6912 25.8598C48.5294 24.7569 51.103 24.3892 53.6765 24.7569C60.2941 25.4922 65.4412 30.6392 65.4412 37.6245C65.4412 40.9334 63.9706 44.2422 61.7647 46.8157C59.5588 49.3892 56.25 50.4922 52.5735 50.4922C48.5294 50.4922 44.853 48.654 42.6471 46.4481Z"
                                    fill="#F39C12" />
                            </svg>

                            {!! $all_reviews->_title ?? '' !!} <span>{!! $all_reviews->_subtitle ?? '' !!}</span>
                        </h6>

                        {{-- <div class="rating-wraper">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- testimonial section end -->

<!-- photo gallery start -->
<section class="roister-photo-gallery-section" data-background="./assets/images/bg/discover-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-60 mb-lg-0">
                <div class="contents-wraper">
                    {{-- <h5 class="mb-8 wow fadeInUp">Instagram</h5> --}}
                    <h2 class="section-title mb-24 wow fadeInUp" data-wow-delay=".2s">
                        Gallery Preview
                    </h2>
                    <p class="des mb-24 wow fadeInUp" data-wow-delay=".4s">
                        Explore the flavors, ambience, and moments that make dining at Kula unforgettable.
                    </p>
                    <a href="gallery" class="primary-btn border-radius-6 wow fadeInUp" data-wow-delay=".6s">View More
                        <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.34375 5.78125L1.78125 10.4062C1.625 10.5625 1.375 10.5625 1.25 10.4062L0.625 9.78125C0.46875 9.625 0.46875 9.40625 0.625 9.25L4.3125 5.5L0.625 1.78125C0.46875 1.625 0.46875 1.375 0.625 1.25L1.25 0.625C1.375 0.46875 1.625 0.46875 1.78125 0.625L6.34375 5.25C6.5 5.40625 6.5 5.625 6.34375 5.78125Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 slider-col">
                <div class="roister-gallery-slider owl-carousel owl-theme">
                    @foreach ($allgalleryimage as $image)
                    <div class="roister-single-gallery">
                        <img src="{!! $image->_image ?? '' !!}" class="rounded-4" alt="img" />
                        <a class="gallery-trigger" href="{!! $image->_image ?? '' !!}">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <div class="column-overlay">
                            <a href="{!! $image->_image ?? '' !!}"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- photo gallery end -->

<!-- blog section start -->
{{-- <section class="roister-blog-section py-120">
        <!-- shapes -->
        <img class="shape-1" src="./assets/images/faq-shape1.png" alt="img" />
        <img class="shape-2" src="./assets/images/testi-shap2.png" alt="img" />

        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-60 mb-lg-0">
                    <div class="left-side-contents">
                        <h5 class="section-subtitle mb-8 wow fadeInUp">
                            Latest News & Blog
                        </h5>
                        <h3 class="section-title mb-32 wow fadeInUp" data-wow-delay=".2s">
                            Get Every Single Updates
                        </h3>
                        <p class="des mb-40 wow fadeInUp" data-wow-delay=".4s">
                            At Startup Name, we understand that every challenge is an
                            opportunity, and we here seize it. With a team of dedicated
                        </p>

                        <ul class="common-cat-list mb-50 wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <span>Professional Team Member</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <span>Awards Winning Restaurant Company</span>
                            </li>
                        </ul>

                        <a href="blog-grid.html" class="primary-btn border-radius-6 wow fadeInUp"
                            data-wow-delay=".6s">View All News
                            <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.34375 5.78125L1.78125 10.4062C1.625 10.5625 1.375 10.5625 1.25 10.4062L0.625 9.78125C0.46875 9.625 0.46875 9.40625 0.625 9.25L4.3125 5.5L0.625 1.78125C0.46875 1.625 0.46875 1.375 0.625 1.25L1.25 0.625C1.375 0.46875 1.625 0.46875 1.78125 0.625L6.34375 5.25C6.5 5.40625 6.5 5.625 6.34375 5.78125Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-60 mb-lg-0">
                    <div class="roister-single-blog-1">
                        <div class="img-wraper">
                            <img class="thumb" src="./assets/images/blog-img1.png" alt="img" />
                        </div>
                        <div class="content-wraper">
                            <h6 class="date mb-12 wow fadeInUp" data-wow-delay=".2s">
                                October 25, 2025
                            </h6>
                            <h5 class="title mb-24 wow fadeInUp" data-wow-delay=".4s">
                                <a href="blog-details.html">From Farm to Fork: Freshness Guaranteed</a>
                            </h5>
                            <a class="link-to wow fadeInUp" data-wow-delay=".6s" href="blog-details.html">
                                Read More <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-list ps-lg-2 ps-xl-4">
                        <div class="roister-single-blog-2 wow fadeInUp" data-wow-delay=".2s">
                            <div class="content-wraper">
                                <h6 class="date mb-6">October 25, 2025</h6>
                                <h5 class="title mb-14">
                                    <a href="#">Best comfort foods to take for a company visit?</a>
                                </h5>
                                <a class="link-to" href="blog-details.html">
                                    Read More <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="roister-single-blog-2 wow fadeInUp" data-wow-delay=".4s">
                            <div class="content-wraper">
                                <h6 class="date mb-6">October 25, 2025</h6>
                                <h5 class="title mb-14">
                                    <a href="#">How to make awesome coffee for a crowd?</a>
                                </h5>
                                <a class="link-to" href="blog-details.html">
                                    Read More <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="roister-single-blog-2 wow fadeInUp" data-wow-delay=".6s">
                            <div class="content-wraper">
                                <h6 class="date mb-6">October 25, 2025</h6>
                                <h5 class="title mb-14">
                                    <a href="#">Bold Bite: Exotic Flavors, Global Adventure</a>
                                </h5>
                                <a class="link-to" href="blog-details.html">
                                    Read More <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<!-- blog section end -->
@endsection