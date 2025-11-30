@extends('layouts.app')

@section('content')
    <!-- breadcrumb start -->
    <div class="roister-breadcrumb-section" data-background="./assets/images/bg/menu-hero-bg.png">
        <div class="container position-relative z-3">
            <h1 class="breadcrumb-title mb-40 wow fadeInUp">Faq Page</h1>
            <ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".2s">
                <li><a href="index.html">Home</a></li>
                <li class="active">Faq Page</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- faq section start -->
    <section class="roister-home-faq-section py-120">
        {{-- <img class="faq-shape1 item-bounce" src="./assets/images/faq-shape1.png" alt="img" />
        <img class="faq-shape2" src="./assets/images/faq-shape2.png" alt="img" /> --}}

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
                        <img class="w-100" src="./assets/images/news-img-1.png" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end -->

    <!-- newsletter section start -->
    <div class="roister-newsletter-area">
        {{-- <div class="cta-card">
            <h4 class="mb-20 wow fadeInUp" data-wow-delay=".2s">
                Join the Restaurant
            </h4>
            <a href="contact.html" class="primary-btn border-radius-6 mb-50 wow fadeInUp" data-wow-delay=".3s">Apply Now
                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.34375 5.78125L1.78125 10.4062C1.625 10.5625 1.375 10.5625 1.25 10.4062L0.625 9.78125C0.46875 9.625 0.46875 9.40625 0.625 9.25L4.3125 5.5L0.625 1.78125C0.46875 1.625 0.46875 1.375 0.625 1.25L1.25 0.625C1.375 0.46875 1.625 0.46875 1.78125 0.625L6.34375 5.25C6.5 5.40625 6.5 5.625 6.34375 5.78125Z"
                        fill="white" />
                </svg>
            </a>

            <div class="reveal-img">
                <img class="news-letter-img" src="./assets/images/news-img-1.png" alt="img" />
            </div>
        </div> --}}

        {{-- <div class="cta-calling-card wow fadeIn" data-wow-delay=".2s">
            <h3 class="title mb-30 wow fadeInUp" data-wow-delay=".3s">
                you are one step from life
            </h3>

            <h5 class="subtitle wow fadeInUp" data-wow-delay=".4s">Erin Miller</h5>
        </div> --}}

        <div class="main-news-letter-card wow fadeInUp" data-wow-delay=".3s">
            {{-- <div class="reveal-img">
                <img class="main-img mb-30" src="./assets/images/news-img-2.png" alt="img" />
            </div> --}}

            <div class="btm-area wow fadeInUp" data-wow-delay=".2s">
                <h4 class="title">Subscribe to Our Newsletter</h4>

                <form class="form-wraper">
                    <input type="text" placeholder="Enter Your Email" />
                    <button type="button" class="primary-btn border-radius-6 mb-50">
                        Subscribe
                        <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.34375 5.78125L1.78125 10.4062C1.625 10.5625 1.375 10.5625 1.25 10.4062L0.625 9.78125C0.46875 9.625 0.46875 9.40625 0.625 9.25L4.3125 5.5L0.625 1.78125C0.46875 1.625 0.46875 1.375 0.625 1.25L1.25 0.625C1.375 0.46875 1.625 0.46875 1.78125 0.625L6.34375 5.25C6.5 5.40625 6.5 5.625 6.34375 5.78125Z"
                                fill="white" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- newsletter section end -->
@endsection
