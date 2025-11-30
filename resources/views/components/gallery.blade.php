@extends('layouts.app')

@section('content')
    <!-- breadcrumb start -->
    <div class="roister-breadcrumb-section" data-background="./assets/images/bg/menu-hero-bg.png">
        <div class="container position-relative z-3">
            <h1 class="breadcrumb-title mb-40 wow fadeInUp">Gallery</h1>
            <!--<ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".2s">-->
            <!--    <li><a href="/">Home</a></li>-->
            <!--    <li class="active">Gallery</li>-->
            <!--</ul>-->
        </div>
    </div>
    <!-- breadcrumb end -->

    <div class="container py-5">
        <div class="row g-4">
            @foreach ($allgalleryimage as $image)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="roister-single-gallery">
                        <img src="{{ $image->_image ?? '' }}" alt="Gallery Image">
                        <a class="gallery-trigger" href="{{ $image->_image ?? '' }}" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <div class="column-overlay">
                            <a href="{!! $image->_image ?? '' !!}"></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
