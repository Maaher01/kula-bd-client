@extends('layouts.app')

@section('content')
<!-- breadcrumb start -->
<div class="roister-breadcrumb-section" data-background="./assets/images/bg/menu-hero-bg.png">
    <div class="container position-relative z-3">
        <h1 class="breadcrumb-title mb-40 wow fadeInUp">Our Menu</h1>
    </div>
</div>
<!-- breadcrumb end -->

<!-- food menu start -->
<div class="roister-hm2-best-menus-section py-40">
    <img class="shape-1" src="./assets/images/hero-shape-3.jpg" alt="shape">
    <img class="shape-2" src="./assets/images/hero-shape-3.jpg" alt="shape">

    <div class="container">
        @foreach ($categories as $category)
        <div class="row justify-content-center mb-40">
            <div class="col-lg-7 text-center">
                <h3 class="section-title mb-18 mt-60 wow fadeInUp" data-wow-delay=".2s">{!! $category->name !!}</h2>
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
                            <span class="price">Tk.{{ rtrim(rtrim(number_format($product->price, 2, '.', ''), '0'), '.') }}</span>
                        </div>
                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2">
                            <div class="menu-btn mt-2">
                                <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1" min="1">
                                    <button type="submit" class="btn" style="background: var(--primary-color);">Add To Cart</button>
                                </form>
                            </div>
                            <div class="menu-btn mt-2">
                                <a href="{{ url('item-details/' . $product->id) }}" class="btn btn-primary"> View Details </a>
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
@section('script')
<script>
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