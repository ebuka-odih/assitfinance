@extends('pages.layout.app')
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Pricing Plan</h2>

                <ul>
                    <li>
                        <a href="{{ route('index') }}">
                            Home
                        </a>
                    </li>

                    <li class="active">
                        Pricing
                    </li>
                </ul>

                <img src="assets/images/choose-shape.png" alt="Image" class="shape shape-3" data-speed="0.09" data-revert="true">
            </div>
        </div>

        <img src="assets/images/subscribe-shape-1.png" alt="Image" class="shape shape-1" data-speed="0.04" data-revert="true">
        <img src="assets/images/subscribe-shape-2.png.pagespeed.ce.99AunP_ELP.png" alt="Image" class="shape shape-2" data-speed="0.04" data-revert="true">
    </div>
    <!-- End Page Title Area -->

    <!-- Start Pricing Area -->
    <div class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="top-title">PRICING PLANS</span>
                <h2>Choose From Our Popular Pricing Plan</h2>
            </div>

            <div class="row justify-content-center">
                @foreach($plans as $item)
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-pricing">
                            <div class="price-title">
                                <h3>{{ $item->name }}</h3>
                                <h2>${{ $item->min_deposit }} - ${{ $item->max_deposit() }}</h2>
                                <span><b>{{ $item->daily_interest }}% ROI</b> </span>
                            </div>

                            <ul>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Duration - {{ $item->term_days }} Days
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>

                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    10% Referral Bonus
                                </li>

                                <li>
                                    <i class="ri-check-line"></i>
                                    24/7 Support
                                </li>
                            </ul>

                            <a href="{{ route('register') }}" class="default-btn">Choose Plan	</a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- End Pricing Area -->

    <!-- Start Our Review Area -->
    <div class="our-review-area bg-color-f8f8f8 pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8">
                    <div class="review-slide owl-carousel owl-theme">
                        <div class="single-review-item style-three">
                            <div class="review-img">
                                <img src="assets/images/review/xreview-1.jpg.pagespeed.ic.ZD6ggsxU8n.jpg" alt="Image">
                            </div>

                            <p>We have been with ACL for years now. Always very helpful with any questions or any changes necessary. Even when we have had claims they are always very helpful. Would not change for any other company.</p>

                            <h3>Jennifer Ajazi</h3>
                            <span>Marketing Ex.</span>
                            <i class="ri-double-quotes-r"></i>
                        </div>

                        <div class="single-review-item style-three">
                            <div class="review-img">
                                <img src="assets/images/review/xreview-2.jpg.pagespeed.ic.Q22Pp41wJb.jpg" alt="Image">
                            </div>

                            <p>I had never use another investment company since i started working with AssistFinances and they have exceeded my expectations.</p>

                            <h3>David Shanaham</h3>
                            <span>Home Owner</span>
                            <i class="ri-double-quotes-r"></i>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="review-content style-two style-three">
                        <span class="top-title">OUR REVIEW</span>
                        <h2>What They Say About Us, Honest Reviews</h2>

                    </div>
                </div>
            </div>
        </div>

        <img src="assets/images/review/shape-1.png.pagespeed.ce.w-rsMR8_E2.png" alt="Image" class="shape shape-1" data-speed="0.04" data-revert="true">
        <img src="assets/images/review/shape-2.png.pagespeed.ce.7J_5FHRrq2.png" alt="Image" class="shape shape-2" data-speed="0.04" data-revert="true">
        <img src="assets/images/review/shape-3.png.pagespeed.ce.XSYmXthrXg.png" alt="Image" class="shape shape-3" data-speed="0.04" data-revert="true">
    </div>
    <!-- End Our Review Area -->



@endsection
