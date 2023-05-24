@extends('pages.layout.app')
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Insurance Services</h2>

                <ul>
                    <li>
                        <a href="index-3.html">
                            Home
                        </a>
                    </li>

                    <li class="active">
                        Services
                    </li>
                </ul>

                <img src="assets/images/choose-shape.png" alt="Image" class="shape shape-3" data-speed="0.09" data-revert="true">
            </div>
        </div>

        <img src="assets/images/subscribe-shape-1.png" alt="Image" class="shape shape-1" data-speed="0.04" data-revert="true">
        <img src="assets/images/subscribe-shape-2.png.pagespeed.ce.99AunP_ELP.png" alt="Image" class="shape shape-2" data-speed="0.04" data-revert="true">
    </div>
    <!-- End Page Title Area -->

    <!-- Start Services Area -->
    <div class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="top-title">SERVICES</span>
                <h2>Take The Worry Out Of Life With Avillion </h2>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-services-item-card d-flex justify-content-start align-items-center">
                        <div class="icon">
                            <i class="flaticon-home-insurance-4"></i>
                        </div>

                        <div>
                            <h3>
                                <a href="{{ route('forex') }}">
                                    FOREX
                                </a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="single-services-item-card d-flex justify-content-start align-items-center">
                        <div class="icon">
                            <i class="flaticon-medical-insurance-3"></i>
                        </div>

                        <div>
                            <h3>
                                <a href="{{ route('hedge') }}">
                                    HEDGE FUNDS
                                </a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="single-services-item-card d-flex justify-content-start align-items-center">
                        <div class="icon">
                            <i class="flaticon-insurance-2"></i>
                        </div>

                        <div>
                            <h3>
                                <a href="{{ route('loans') }}">
                                    LOANS
                                </a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="single-services-item-card d-flex justify-content-start align-items-center">
                        <div class="icon">
                            <i class="flaticon-car-insurance-3"></i>
                        </div>

                        <div>
                            <h3>
                                <a href="{{ route('crypto') }}">
                                    CRYPTO TRADING
                                </a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="single-services-item-card d-flex justify-content-start align-items-center">
                        <div class="icon">
                            <i class="flaticon-baggage-insurance-1"></i>
                        </div>

                        <div>
                            <h3>
                                <a href="{{ route('npf') }}">
                                    NFP
                                </a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="single-services-item-card d-flex justify-content-start align-items-center">
                        <div class="icon">
                            <i class="flaticon-student-hat"></i>
                        </div>

                        <div>
                            <h3>
                                <a href="#">
                                    ESCROW
                                </a>
                            </h3>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Services Area -->



@endsection
