@extends('layouts.app')

@section('content')
    <!-- breadcrumb start -->
    <div class="roister-breadcrumb-section" data-background="./assets/images/bg/menu-hero-bg.png">
        <div class="container position-relative z-3">
            <h1 class="breadcrumb-title mb-40 wow fadeInUp">Contact Us</h1>
            <!--<ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".2s">-->
            <!--    <li><a href="/">Home</a></li>-->
            <!--    <li class="active">Contact Page</li>-->
            <!--</ul>-->
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact details info start -->
    <div class="roister-contact-pg-info-wraper py-50">
        <div class="container">
            <div class="row gy-4">
                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-conact-details">
                        <div class="icon-wraper mb-24">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="content-wraper">
                            <h6 class="title mb-20">Phone number</h6>
                            <p><a href="tel:{!! companyprofile()->_mobile !!}">{!! companyprofile()->_mobile !!}</a></p>
                            <p><a href="tel:{!! companyprofile()->_phone !!}">{!! companyprofile()->_phone !!}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-conact-details">
                        <div class="icon-wraper mb-24">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="content-wraper">
                            <h6 class="title mb-20">Email address</h6>
                            <p><a href="mailto:{!! companyprofile()->_email !!}">{!! companyprofile()->_email !!}</a></p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-12 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".6s">-->
                <!--    <div class="single-conact-details">-->
                <!--        <div class="icon-wraper mb-24">-->
                <!--            <i class="fa-solid fa-location-dot"></i>-->
                <!--        </div>-->
                <!--        <div class="content-wraper">-->
                <!--            <h6 class="title mb-20">Location</h6>-->
                <!--            <p>{!! companyprofile()->_description !!}-->
                <!--            </p>-->

                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-conact-details">
                        <div class="icon-wraper mb-24">
                            <i class="fa-solid fa-door-open"></i>
                        </div>
                        <div class="content-wraper">
                            <h6 class="title mb-20">Delivery Hours</h6>
                            <p>11:00am-2:00am</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact details info end -->

    <!-- contact form start -->
    <section class="roister-about-section py-120" data-background="./assets/images/bg/about-bg.png">

        <!-- shape -->
        <img class="about-shape" src="./assets/images/hero-shape-3.jpg" alt="img">
        <div class="container">
            <div class="row justify-content-center mb-40">
                <div class="col-12 col-md-7 col-lg-5 col-xxl-4">
                    <h3 class="text-center mb-60 wow fadeInUp" data-wow-delay=".2s">
                        Feel free to contact us
                    </h3>
                </div>
                <!-- main content -->
                <div class="col-12">
                    <!-- comment box -->
                    <div class="blog-comment-form wow fadeInUp" data-wow-delay=".2s">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ url('messagesubmit') }}" method="POST">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <input class="input" type="text" name="name" id="name"
                                        placeholder="Enter your name*">
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <input class="input" type="email" name="email" id="email"
                                        placeholder="Enter your mail*">
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <input class="input" type="text" name="phone" id="phone"
                                        placeholder="Enter your number*">
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <input class="input" type="text" name="subject" id="subject"
                                        placeholder="Subject*">
                                </div>
                                <div class="col-12">
                                    <textarea class="input" rows="5" name="message" id="message" placeholder="Enter your Massage*"></textarea>
                                </div>
                                <div class="col-12 mt-60 d-flex justify-content-center">
                                    <button type="submit" class="primary-btn border-radius-6">Submit Now <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact form end -->

    <!-- google map start -->
    <!--<div class="roister-google-map wow fadeInUp" data-wow-delay=".2s">-->
    <!--    <iframe class="roister-map"-->
    <!--        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0543126522384!2d90.4127977!3d23.781080199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c73bcc534d39%3A0x898bc77b98690d34!2sHR%20Club%20Bangladesh%20Limited!5e0!3m2!1sen!2sbd!4v1760951801513!5m2!1sen!2sbd"-->
    <!--        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"-->
    <!--        referrerpolicy="no-referrer-when-downgrade" style="border:0;"></iframe>-->
    <!--</div>-->
    <!-- google map end -->
@endsection
