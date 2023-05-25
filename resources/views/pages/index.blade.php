@extends('pages.layout.app')
@section('content')

    <main>
        <!-- Start Banner Area -->
        <div class="banner-area bg-color-f3f9f8 pt-65 pb-100">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1>Take The Worry Out Of Life With <span>Assit</span> Finance</h1>
                            <p>At AssitFinance, we've built our business around understanding what you need and what's important for you to protect. That's why we offer a wide range of investment services to meet your specific needs.</p>

                            <div class="banner-btn">
                                <a href="{{ route('register') }}" class="default-btn">
                                    <i class="ri-arrow-right-s-line"></i>
                                    Get Started
                                </a>
                                <a href="{{ route('login') }}" class="default-btn active">
                                    <i class="ri-send-plane-fill"></i>
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img">
                            <img src="assets/images/banner/banner-img.png" alt="Image">
                            <img src="assets/images/banner/banner-img-shape.png" class="banner-img-shape" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-bottom-shape">
                <img src="assets/images/banner/bottom-shape.png" alt="Image">
            </div>
            <div class="shape shape-1" data-speed="0.04" data-revert="true">
                <img src="assets/images/banner/shape-1.png" alt="Image">
            </div>
            <div class="shape shape-2" data-speed="0.05" data-revert="true">
                <img src="assets/images/banner/shape-2.png" alt="Image">
            </div>
            <div class="shape shape-3" data-speed="0.06" data-revert="true">
                <img src="assets/images/banner/shape-3.png" alt="Image">
            </div>
            <div class="shape shape-4" data-speed="0.07" data-revert="true">
                <img src="assets/images/banner/shape-4.png" alt="Image">
            </div>
            <div class="shape shape-5" data-speed="0.08" data-revert="true">
                <img src="assets/images/banner/shape-5.png" alt="Image">
            </div>
            <div class="shape shape-6" data-speed="0.09" data-revert="true">
                <img src="assets/images/banner/shape-6.png" alt="Image">
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Our Features Area -->
        <div class="our-features-area pt-50 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">OUR FEATURES</span>
                    <h2>Responsible Investing</h2> <br>
                    We believe that as stewards of your investments, investing responsibly is about the careful execution of our investment duties on your behalf.
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-item">
                            <i class="flaticon-money-back"></i>
                            <h3>Legal Company</h3>
                            <p>
                                Our company conducts absolutely legal activities in the legal field. We are certified to operate investment business, we are legal and safe.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-item">
                            <i class="flaticon-claim"></i>
                            <h3>Highly Reliable</h3>
                            <p>We are trusted by a huge number of people. We are working hard constantly to improve the level of our security system and minimize possible risks.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-item">
                            <i class="flaticon-insurance-policy"></i>
                            <h3>Quick Withdrawal</h3>
                            <p>
                                Our all retreats are treated spontaneously once requested. There are high maximum limits. The minimum withdrawal amount is only $10.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-item">
                            <i class="flaticon-mobile-payment"></i>
                            <h3>Referral Program</h3>
                            <p>
                                We are offering a certain level of referral income through our referral program. you can increase your income by simply refer a few people. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Features Area -->

        <!-- Start About Area -->
        <div class="about-area bg-color-f8f8f8 pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content mr-15">
                            <span class="top-title">ABOUT ACL</span>
                            <h2>We Provide Exceptional Products That Allows Us To Maximize Efficiency.</h2>

                            <ul>
                                <li>
                                    <i class="flaticon-insurance-3"></i>
                                    <h3>Trusted By Thousand</h3>
                                    <p></p>
                                </li>
                                <li>
                                    <i class="flaticon-insurance-4"></i>
                                    <h3>Set For Life</h3>
                                    <p></p>
                                </li>
                                <li>
                                    <i class="flaticon-life-insurance"></i>
                                    <h3>Protective</h3>
                                    <p></p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-img ml-15 mb-0">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="about-1">
                                        <img src="assets/images/about/about-1.jpg" alt="Image">
                                    </div>
                                    <div class="about-2">
                                        <img src="assets/images/about/about-2.jpg" alt="Image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="about-3">
                                        <img src="assets/images/about/about-3.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->

        <!-- Start Services Area -->
        <div class="services-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">Our Strategies</span>
                    <h2>WE ARE HERE FOR YOU</h2>
                </div>

                <div class="services-slide owl-carousel owl-theme">
                    <div class="single-services-item bg-7 style-three d-flex align-items-end">
                        <div class="services-contents">

                            <h3>
                                <a href="services.html">Crypto Investment</a>
                            </h3>
                        </div>
                    </div>
                    <div class="single-services-item bg-1 style-three d-flex align-items-end">
                        <div class="services-contents">

                            <h3>
                                <a href="services.html">Forex </a>
                            </h3>
                        </div>
                    </div>
                    <div class="single-services-item bg-2 style-three d-flex align-items-end">
                        <div class="services-contents">

                            <h3>
                                <a href="services.html">Loans</a>
                            </h3>
                        </div>
                    </div>

                    <div class="single-services-item bg-3 style-three d-flex align-items-end">
                        <div class="services-contents">

                            <h3>
                                <a href="services.html">NFP</a>
                            </h3>
                        </div>
                    </div>

                    <div class="single-services-item bg-4 style-three d-flex align-items-end">
                        <div class="services-contents">

                            <h3>
                                <a href="services.html">Hedge Funds</a>
                            </h3>
                        </div>
                    </div>


                </div>

                <div class="view-all">
                    <p>Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service.

                        <a href="services.html">View All</a></p>
                </div>
            </div>
        </div>
        <!-- End Services Area -->

        <!-- Start Why Choose Us Area -->
        <div class="why-choose-us-area bg-color-f8f8f8 pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-us-img mr-15">
                            <img src="assets/images/choose-us-img.jpg" alt="Image">
                            <img src="assets/images/choose-shape.png" class="choose-shape shape" alt="Image" data-speed="0.04" data-revert="true">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-us-content ml-15">
                            <span class="top-title">WHY CHOOSE US</span>
                            <h2>Our Company Has Been Working Very Faithfully</h2>
                            <p>We are an investment firm, managed by a team of financial experts that generate profits through buying and selling cryptocurrencies, stocks, options and commodities as well as real estate investments. We employ a variety of financial techniques to achieve the set goals for our client.
                                <br><br>
                                We deliberately adopt a very focused approach, which allows us to dedicate maximum resources to developing a handful of highly attractive companies. We embrace complex situations, where we can apply our broad range of skills and experience and demonstrate our ability to make informed commercial decisions in difficult circumstances. Our lean decision-making process and our agile corporate structure allow us to make decisions and commitments in real time, as our key decision makers are directly involved in evaluating potential investment opportunities and developing our group holdings.
                                <br><br>
                                We always take a long-term perspective, which goes beyond our own ownership horison. We are prepared to sacrifice short-term profitability for long-term value creation.
                            </p>

                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <ul class="mb-24">
                                        <li>
                                            <i class="ri-check-double-line"></i>
                                            <b>Continous Earning</b><br>
                                            Earning continously on your financial investments developing and growing your portfolio with us.
                                        </li>
                                        <li>
                                            <i class="ri-check-double-line"></i>
                                            <b>		Recurring Interest</b><br>
                                            Your financial interest returns consistently credited on your account everyday for your investment duration.
                                        </li>

                                    </ul>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <ul>
                                        <li>
                                            <i class="ri-check-double-line"></i>
                                            <b>			Safe and Secure</b><br>
                                            We employ state of the art security on investor funds you can be rest assured your funds are safe.
                                        </li>
                                        <li>
                                            <i class="ri-check-double-line"></i>
                                            <b>			Payment Options</b><br>
                                            Anonymity and using cryptocurrency as a payment instrument. In the era of electronic money – this is one of the most convenient ways of cooperation.
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Us Area -->
        <!-- Start Our Quality Area -->
        <div class="quality-area bg-color-497774 ptb-100">
            <div class="container">
                <div class="quality-content">
                    <span class="top-title">READY TO GET STARTED</span>
                    <h2>We Provide Exceptional Products That Allows Us To Maximize Efficiency.</h2>

                    <div class="quality-btn">
                        <a href="pricing-plan.html" class="default-btn">
                            Get Started
                        </a>
                        <a href="contact-us.html" class="default-btn active">
                            Contact Us
                        </a>
                    </div>

                    <img src="assets/images/subscribe-shape-2.png" alt="Image" class="shape shape-1" data-speed="0.04" data-revert="true">
                    <img src="assets/images/subscribe-shape-3.png" alt="Image" class="shape shape-2" data-speed="0.04" data-revert="true">
                </div>
            </div>
        </div>
        <!-- End Our Quality Area -->

        <!-- Start Pricing Area -->
        <div class="pricing-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">PRICING PLANS</span>
                    <h2>Choose From Our Popular Pricing Plan</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-pricing">
                            <div class="price-title">
                                <h3>Plan 1</h3>
                                <h2>$100 - $19,999</h2>
                                <span><b>2% ROI</b> </span>
                            </div>

                            <ul>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Duration - 10 Days
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

                    <div class="col-lg-6 col-sm-6">
                        <div class="single-pricing">
                            <div class="price-title">
                                <h3>Plan 2</h3>
                                <h2>$20,000 - $Unlimited</h2>
                                <span><b>3% ROI</b> </span>
                            </div>

                            <ul>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Duration - 10 Days
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

                    <!--			<div class="col-lg-3 col-sm-6">
                                    <div class="single-pricing">
                                        <div class="price-title">
                                        <h3>Plan 3</h3>
                                            <h2>$15,000 - $29,000</h2>
                                            <span>11.5% ROI </span>
                                        </div>

                                        <ul>
                                            <li>
                                                <i class="ri-check-line"></i>
                                                Duration - 5 Days
                                            </li>
                                            <li>
                                                <i class="ri-check-line"></i>

                                            </li>
                                            <li>
                                                <i class="ri-check-line"></i>
                                        8% Referral Bonus
                                            </li>

                                            <li>
                                                <i class="ri-check-line"></i>
                                                24/7 Support
                                            </li>
                                        </ul>

                                        <a href="{{ route('register') }}" class="default-btn">Choose Plan	</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-pricing">
                                        <div class="price-title">
                                            <h3>Plan 4</h3>
                                            <h2>$30,000 - $Unlimited</h2>
                                            <span>30% ROI </span>
                                        </div>

                                        <ul>
                                            <li>
                                                <i class="ri-check-line"></i>
                                                Duration - 5 Days
                                            </li>
                                            <li>
                                                <i class="ri-check-line"></i>

                                            </li>
                                            <li>
                                                <i class="ri-check-line"></i>
                                        8% Referral Bonus
                                            </li>

                                            <li>
                                                <i class="ri-check-line"></i>
                                                24/7 Support
                                            </li>
                                        </ul>
            <a href="{{ route('register') }}" class="default-btn">Choose Plan	</a>

                                    </div>
                                </div>  -->
                </div>
            </div>
        </div>
        <!-- End Pricing Area -->

        <!-- Start Our Review Area -->
        <div class="our-review-area bg-color-497774 pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="single-review-item">
                                    <div class="review-img">
                                        <img src="assets/images/review/review-1.jpg" alt="Image">
                                        <i class="ri-double-quotes-r"></i>
                                    </div>

                                    <ul>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                    </ul>

                                    <p>We have been with ACL for years now. Always very helpful with any questions or any changes necessary. Even when we have had claims they are always very helpful. Would not change for any other company.</p>

                                    <h3>Jennifer Ajazi</h3>
                                    <span>Marketing Ex.</span>
                                </div>

                                <div class="single-review-item width">
                                    <ul>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                    </ul>

                                    <p>Average 4.6 from 1200+ reviews of our customers.</p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-review-item">
                                    <div class="review-img">
                                        <img src="assets/images/review/review-2.jpg" alt="Image">
                                        <i class="ri-double-quotes-r"></i>
                                    </div>

                                    <ul>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                    </ul>

                                    <p>I had never use another investment company since i started working with Avillion and they have exceeded my expectations.</p>

                                    <h3>David Shanaham</h3>
                                    <span>Home Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="review-content">
                            <span class="top-title">OUR REVIEW</span>
                            <h2>What they say about us honest reviews</h2>
                            <p>Everybody Loves us and you will too, we can't wait to welcome you to our family.</p>

                            <a href="{{ route('register') }}" class="default-btn">
                                <i class="ri-arrow-right-s-line"></i>
                                Join Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <img src="assets/images/review/shape-1.png" alt="Image" class="shape shape-1" data-speed="0.04" data-revert="true">
            <img src="assets/images/review/shape-2.png" alt="Image" class="shape shape-2" data-speed="0.04" data-revert="true">
            <img src="assets/images/review/shape-3.png" alt="Image" class="shape shape-3" data-speed="0.04" data-revert="true">
        </div>
        <!-- End Our Review Area -->

        <!-- Start Blog Area -->
        <div class="blog-area bg-color-f3f9f8 pt-100 pb-150">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">LATEST NEWS</span>
                    <h2></h2>
                </div>

                <div class="blog-slide owl-carousel owl-theme">
                    <div class="single-blog-item">
                        <a href="#">
                            <img src="https://www.insurancejournal.com/app/uploads/2016/08/florida-based-homeowners-choice-secures-reinsurance-768x576.jpg" alt="Image">
                        </a>

                        <div class="blog-content">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">FINANCE</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="https://www.wsj.com/articles/economy-week-ahead-u-s-trade-and-supplier-prices-in-focus-11670043629?mod=economy_more_pos1">Economy Week Ahead: U.S. Trade and Supplier Prices in Focus</a>
                            </h3>

                            <a href="https://www.wsj.com/articles/economy-week-ahead-u-s-trade-and-supplier-prices-in-focus-11670043629?mod=economy_more_pos1" class="default-btn">
                                <i class="ri-arrow-right-s-line"></i>
                                Read More
                            </a>
                        </div>
                    </div>

                    <div class="single-blog-item">
                        <a href="#">
                            <img src="https://static.news.bitcoin.com/wp-content/uploads/2022/06/image-2022-06-25-094648.jpg" alt="Image">
                        </a>

                        <div class="blog-content">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">BITCOIN</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="https://news.bitcoin.com/">String of 200 ‘Sleeping Bitcoins’ From 2010 Worth $4.27 Million Awakens</a>
                            </h3>

                            <a href="https://news.bitcoin.com/" class="default-btn">
                                <i class="ri-arrow-right-s-line"></i>
                                Read More
                            </a>
                        </div>
                    </div>

                    <div class="single-blog-item">
                        <a href="#">
                            <img src="https://www.insurancejournal.com/app/uploads/2020/12/bigstock-mergers-and-acquisitions-397217783-768x512.jpg" alt="Image">
                        </a>

                        <div class="blog-content">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.wsj.com/articles/feds-top-banking-regulator-signals-tougher-bank-capital-rules-11669924884?mod=economy_more_pos6">BANKING</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="https://www.wsj.com/articles/feds-top-banking-regulator-signals-tougher-bank-capital-rules-11669924884?mod=economy_more_pos6">Fed’s Top Banking Regulator Signals Tougher Bank-Capital Rules</a>
                            </h3>

                            <a href="https://www.wsj.com/articles/feds-top-banking-regulator-signals-tougher-bank-capital-rules-11669924884?mod=economy_more_pos6" class="default-btn">
                                <i class="ri-arrow-right-s-line"></i>
                                Read More
                            </a>
                        </div>
                    </div>

                    <div class="single-blog-item">
                        <a href="#">
                            <img src="https://static.news.bitcoin.com/wp-content/uploads/2022/06/zuckerberg1.jpg" alt="Image">
                        </a>

                        <div class="blog-content">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">CRYPTO CURRENCY</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="https://news.bitcoin.com/">Mark Zuckerberg Expects Billions of People to Use the Metaverse Generating Massive Revenue for Meta</a>
                            </h3>

                            <a href="https://news.bitcoin.com/" class="default-btn">
                                <i class="ri-arrow-right-s-line"></i>
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <img src="assets/images/subscribe-bottom-shape.png" alt="Image" class="subscribe-bottom-shape">
        </div>
        <!-- End Blog Area -->

        <!-- Start Counter Area -->
        <div class="counter-area bg-color-497774 pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter-item style-icon">
                            <i class="flaticon-home-insurance-2"></i>
                            <h2>
                                <span class="odometer" data-count="1">.6</span>
                                <span class="target">B</span>
                            </h2>
                            <h4>
                                assets under management</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter-item style-icon">
                            <i class="flaticon-shield"></i>
                            <h2>
                                <span class="odometer" data-count="120">00</span>
                                <span class="target">K</span>
                            </h2>
                            <h4>People Saved</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter-item style-icon">
                            <i class="flaticon-policy"></i>
                            <h2>
                                <span class="odometer" data-count="1.2">00</span>
                                <span class="target">M</span>
                            </h2>
                            <h4>Contract Signed</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter-item style-icon">
                            <i class="flaticon-family-insurance"></i>
                            <h2>
                                <span class="odometer" data-count="600">00</span>
                                <span class="target">M</span>
                            </h2>
                            <h4>Active Flow</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter Area -->



    </main>

@endsection
