@extends('pages.layout.app')
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Hedge Funds</h2>

                <ul>
                    <li>
                        <a href="{{ route('index') }}">
                            Home
                        </a>
                    </li>

                    <li class="active">
                        Hedge Funds
                    </li>
                </ul>

                <img src="assets/images/choose-shape.png" alt="Image" class="shape shape-3" data-speed="0.09" data-revert="true">
            </div>
        </div>

        <img src="assets/images/subscribe-shape-1.png" alt="Image" class="shape shape-1" data-speed="0.04" data-revert="true">
        <img src="assets/images/subscribe-shape-2.png.pagespeed.ce.99AunP_ELP.png" alt="Image" class="shape shape-2" data-speed="0.04" data-revert="true">
    </div>
    <!-- End Page Title Area -->

    <!-- Start Hedge Funds Area -->
    <section class="car-insurance-area ptb-100">
        <div class="container">
            <div class="car-insurance-content main-content-text">
                <img src="assets/images/car-insurance-img.jpg" alt="Image">
                <div class="content-gap-mb-20"></div>
                Hedge funds Hedge Fund Marketplace. An online version of a traditional Capital Introduction program designed to allow Hedge Funds who use WFS as their principal Investing platform to market their Funds to WFS investors who are Accredited Investors and Qualified Loan holders.
                <br><br>
                This program is provided free of charge to all Hedge Funds who use WFS, have at least $3 million in assets under management and an audited track record of at least one year or have done its investing at least one year.
                <br><br>
                Access the Hedge Fund Marketplace at the Investors' Marketplace, our online forum where you can meet and do business with traders and investors, institutions and other third-party service providers.
                <br><br>
                Contact a personal manager for more information.
            </div></div>
    </section>
    <!-- End Hedge Funds Area -->

@endsection
