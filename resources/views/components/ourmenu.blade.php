@extends('layouts.app')

@section('content')
<!-- breadcrumb start -->
<div class="roister-breadcrumb-section" data-background="./assets/images/bg/menu-hero-bg.png">
    <div class="container position-relative z-3">
        <h1 class="breadcrumb-title mb-40 wow fadeInUp">Our Menu</h1>
        <!--<ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".2s">-->
        <!--    <li><a href="/">Home</a></li>-->
        <!--    <li class="active">Our Menu</li>-->
        <!--</ul>-->
    </div>
</div>
<!-- breadcrumb end -->

<!-- food menu start -->
<div class="roister-hm2-best-menus-section py-40">
    <img class="shape-1" src="./assets/images/hero-shape-3.jpg" alt="shape">
    <img class="shape-2" src="./assets/images/hero-shape-3.jpg" alt="shape">

    {{-- ==================== FOOD MENU SECTION ==================== --}}
    <div class="container">
        @foreach ($categories as $category)
        <div class="row justify-content-center mb-40">
            <div class="col-lg-7 text-center">
                <h2 class="section-title mb-18 mt-60 wow fadeInUp" data-wow-delay=".2s">{!! $category->name !!}</h2>
            </div>
        </div>
        <div class="row gy-4 gx-lg-5">
            <div class="col-12 col-lg-4 col-xxl-3">
                <div class="left-side">
                    <div class="reveal-img"> <img class="" src="./assets/images/items/2025-10-20 12 57 44.png" alt="img"> </div> {{-- <a class="link wow fadeInUp" data-wow-delay=".2s" href="#">VIEW ALL MENU</a> --}}
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xxl-6">
                <div class="menu-list">
                    @foreach ($category->products as $product)
                    <div class="single-menu-list wow fadeInUp" data-wow-delay=".3s">
                        <h4>{!! $product->name !!}</h4>
                        <p>{!! $product->description !!}</p>
                        <div class="price-wraper">
                            <span class="dotted"></span>
                            <span class="price">Tk.{!! $product->price !!}</span>
                        </div>
                        <!-- View Details Button -->
                        <div class="d-flex justify-content-end gap-2">
                            <div class="menu-btn mt-2">
                                <a href="#" class="btn btn-primary"> View Details </a>
                            </div>
                            <div class="menu-btn mt-2">
                                <a href="#" class="btn btn-warning"> Add To Cart </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xxl-3">
                <div class="right-side">
                    <div class="reveal-img"> <img src="./assets/images/items/2025-10-20 12 58 04.png" alt="img"> </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</div>
<!-- food menu end -->
@endsection