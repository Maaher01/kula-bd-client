@extends('layouts.app')

@section('content')
<!-- 404 content start -->
<section class="roister-error-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-wraper">

                    <h2 class="title mb-36 wow fadeInUp">404</h2>
                    <h4 class="subtitle mb-24 wow fadeInUp" data-wow-delay=".2s">Oops! page Not Found</h4>
                    <p class="des mb-24 wow fadeInUp" data-wow-delay=".4s">The page you're looking for doesn't exist or
                        may have been moved.</p>

                    <a href="/" class="primary-btn border-radius-6 mb-50 wow fadeInUp" data-wow-delay=".6s">
                        Back to Home
                        <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.34375 5.78125L1.78125 10.4062C1.625 10.5625 1.375 10.5625 1.25 10.4062L0.625 9.78125C0.46875 9.625 0.46875 9.40625 0.625 9.25L4.3125 5.5L0.625 1.78125C0.46875 1.625 0.46875 1.375 0.625 1.25L1.25 0.625C1.375 0.46875 1.625 0.46875 1.78125 0.625L6.34375 5.25C6.5 5.40625 6.5 5.625 6.34375 5.78125Z"
                                fill="white"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 404 content end -->

<!-- newsletter section start -->
<!-- <div class="roister-newsletter-area">
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
    </div> -->
<!-- newsletter section end -->
@endsection