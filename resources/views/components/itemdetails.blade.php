@extends('layouts.app')

@section('content')
<!-- breadcrumb start -->
<div class="roister-breadcrumb-section" data-background="{{ asset('./assets/images/bg/menu-hero-bg.png') }}">
    <div class="container position-relative z-3">
        <h1 class="breadcrumb-title mb-40 wow fadeInUp">Item Details</h1>
        <!--<ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".2s">-->
        <!--    <li><a href="/">Home</a></li>-->
        <!--    <li class="active">Item Details</li>-->
        <!--</ul>-->
    </div>
</div>
<!-- breadcrumb end -->

<!-- add to cart wraper -->
<div class="roister-addto-cart-wraper py-100">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 col-lg-6">
                <div class="reveal-img">
                    @if($product->productImages->count())
                    <img src="{{ asset('http://127.0.0.1:8001/uploads/' . $product->productImages->first()->image_path) }}" class="thumbnail" style="height: 440px; object-fit:contain;">
                    @endif
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="roister-addto-cart-content">
                    <h2 class="title mb-20 wow fadeInUp" data-wow-delay=".1s">{!! $product->name !!}</h2>
                    <h6 class="price mb-24 mt-24 wow fadeInUp" data-wow-delay=".2s">
                        Tk. {{ rtrim(rtrim(number_format($product->price, 2, '.', ''), '0'), '.') }}
                        </h5>
                        <div class="divider-wraper mb-24 wow fadeInUp" data-wow-delay=".2s">
                            <hr class="divider">
                        </div>
                        <p class="short-des mb-30 wow fadeInUp" data-wow-delay=".3s">
                            {!! $product->description !!}
                        </p>
                        <ul class="product-list-info wow fadeInUp" data-wow-delay=".5s">
                            <li><span>Quantity:</span> {!! $product->quantity !!}</li>
                            <li>{!! $product->remarks !!}</li>
                        </ul>
                        <div class="add-to-cart-wraper mb-30 mt-30 wow fadeInUp" data-wow-delay=".4s">
                            <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                                @csrf
                                <div class="">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1" min="1">
                                </div>
                                <button class="outline-primary-btn" type="submit">Add to cart</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- add to cart wraper -->


<!-- product description wraper start -->
<div class="main-course-details-container pt-40 pb-120 wow fadeInUp" data-wow-delay=".2s">
    <div class="container position-relative">
        <div class="row gy-4">
            <div class="col-12">
                <ul class="nav cd-tab-nav mb-40" id="cdTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="cd-tab-1" data-bs-toggle="tab"
                            data-bs-target="#cd-tab-1-pane" type="button" role="tab" aria-controls="cd-tab-1-pane"
                            aria-selected="true">Description</button>
                    </li>
                </ul>
                <div class="tab-content cd-tab-content" id="cdTabContent">
                    <!-- text editor content start -->
                    <div class="tab-pane fade show active" id="cd-tab-1-pane" role="tabpanel" aria-labelledby="cd-tab-1"
                        tabindex="0">
                        <div>
                            <p class="mb-24">{!! $product->description !!}
                            </p>
                        </div>
                    </div>
                    <!-- text editor content end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product description wraper end -->
@endsection
@section('script')
<script>
    // Add to Cart
    $('.add-to-cart-form').on('submit', function(e) {
        e.preventDefault();
        let form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: form.serialize(),
            success: function(response) {
                $('#cart-count').text(response.cartCount);
                toastr.success(response.message);
            },
            error: function(xhr) {
                if (xhr.status === 401) {
                    window.location.href = "/login";
                } else {
                    toastr.error('Something went wrong!');
                }
            }
        });
    });
</script>
@endsection