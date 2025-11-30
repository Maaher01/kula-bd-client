<!-- footer -->
<footer class="roister-footer-1" data-background="{{ asset('./assets/images/bg/footer-bg.png') }}">
    <!-- shapes -->
    {{-- <img class="footer-img1" src="./assets/images/logos/Kula-logo-v.2[1].png" alt="img" /> --}}
    <img class="footer-img2" src="{{ asset('./assets/images/logos/Kula-logo-v.2[1].png') }}" alt="img" />
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 left-side border-right">
                <div class="download-app-widget">
                    <h3 class="title mb-12">
                        We’re Now Available On
                    </h3>
                    {{-- <p class="des mb-40">
                        No credit card requirement it’s full free for all
                    </p> --}}

                    <div class="btn-wraper d-flex">
                <a target="_blank">
                <img src="{{ asset('assets/images/logos/foodpanda-logo-RGB-horizontal.jpg') }}" style="width:275px;" />
                        </a>
                <a href="https://foodibd.com/restaurants?id=9897&type=delivery&search=Kula" target="_blank">
                        <img src="{{ asset('assets/images/logos/foodi.png') }}"
                            style="height: 105px; width: 125px; object-fit: contain;" />
                            </a>
                            <a href="https://food.pathao.com/restaurants" target="_blank">
                        <img src="{{ asset('assets/images/logos/pathao_food_logo.webp') }}"
                            style="height: 105px; width: 155px; object-fit: contain;" />
                            </a>
                        {{-- <a href="#" class="primary-btn border-radius-6">Play Store
                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.81146 7.17578L10.4521 5.53516L2.76849 1.10547L8.81146 7.17578ZM1.2099 0.75L8.2099 7.75L1.2099 14.75C0.854431 14.5859 0.608337 14.2305 0.608337 13.793L0.608337 1.73438C0.608337 1.29688 0.854431 0.941406 1.2099 0.75ZM12.831 6.92969C13.3505 7.3125 13.3505 8.21484 12.8583 8.59766L11.2177 9.52734L9.41302 7.75L11.2177 6L12.831 6.92969ZM2.76849 14.3945L8.81146 8.35156L10.4521 9.99219L2.76849 14.3945Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="#" class="outline-white-btn border-radius-6">Apple Store
                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.49512 7.10547C9.49512 7.16016 9.41309 8.77344 11.1904 9.62109C10.8623 10.6328 9.71387 12.875 8.37402 12.875C7.6084 12.875 7.1709 12.3828 6.2959 12.3828C5.39355 12.3828 4.90137 12.875 4.21777 12.875C2.90527 12.9297 1.64746 10.4688 1.29199 9.45703C1.01855 8.69141 0.90918 7.95312 0.90918 7.24219C0.90918 4.80859 2.52246 3.63281 4.05371 3.60547C4.79199 3.60547 5.72168 4.125 6.13184 4.125C6.51465 4.125 7.58105 3.49609 8.56543 3.57813C9.57715 3.66016 10.3428 4.04297 10.8623 4.78125C9.95996 5.35547 9.49512 6.09375 9.49512 7.10547ZM7.96387 2.62109C7.41699 3.25 6.76074 3.60547 6.0498 3.55078C5.99512 2.8125 6.26855 2.12891 6.76074 1.58203C7.19824 1.08984 7.96387 0.679688 8.62012 0.625C8.62012 0.925781 8.70215 1.74609 7.96387 2.62109Z"
                                    fill="white" />
                            </svg>
                        </a> --}}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 right-side">
                <div class="row gy-4 justify-content-center">
                    {{-- <div class="col-sm-6 col-md-5 col-lg-4">
                        <div class="footer-widget">
                            <h4 class="widget-title mb-24">Resources</h4>
                            <ul>
                                <li><a href="#">Potato</a></li>
                                <li><a href="#">Organic</a></li>
                                <li><a href="#">Juice</a></li>
                                <li><a href="#">Lemon Juice</a></li>
                                <li><a href="#">Mutton Tikka</a></li>
                                <li><a href="#">Seafoods</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-sm-6 col-md-5 col-lg-4">
                        <div class="footer-widget">
                            <h4 class="widget-title mb-24">Quick Links</h4>
                            <ul>
                                @foreach (mainmenu() as $menu)
                                    <li><a href={!! $menu->_url ?? '' !!}>{!! $menu->_title ?? '' !!}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area -->
        <div class="copyright-area">
            <div class="row align-items-center gy-4">
                {{-- <div class="col-12 col-sm-4">
                    <a href="index.html">
                        <img class="footer-logo" src="./assets/images/logos/white-logo.png" alt="logo" />
                    </a>
                </div> --}}
                <div class="col-12 col-sm-8">
                    <p class="text-sm-end">
                        © 2025 <a href="#">Softin Technology Ltd.</a> . All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
