@extends('pages.layout.app')
@section('content')


    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Info</h2>

                <ul>
                    <li>
                        <a href="{{ route('index') }}">
                            Home
                        </a>
                    </li>

                    <li class="active">
                        Contact Us
                    </li>
                </ul>

                <img src="assets/images/choose-shape.png" alt="Image" class="shape shape-3" data-speed="0.09" data-revert="true">
            </div>
        </div>

        <img src="assets/images/subscribe-shape-1.png" alt="Image" class="shape shape-1" data-speed="0.04" data-revert="true">
        <img src="assets/images/subscribe-shape-2.png.pagespeed.ce.99AunP_ELP.png" alt="Image" class="shape shape-2" data-speed="0.04" data-revert="true">
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="flaticon-placeholder"></i>
                        <h3>Our Location</h3>
                        <p>
                            Baarerstrasse 53, 6300 Zug, Switzerland
                        </p>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="flaticon-email"></i>
                        <h3>our Email</h3>
                        <a href="#">support@assistfinances.com</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="flaticon-internet"></i>
                        <h3>Website</h3>
                        <a href="#">www.assistfinances.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <span class="top-title">GET IN TOUCH</span>
                <h2>Let’s Connect Fill The Contact From</h2>
            </div>

            <div class="contact-form">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone No">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>

                                        <label class="form-check-label" for="gridCheck">
                                            I agree to the <a href="terms-conditions.html">Terms & conditions</a>
                                        </label>
                                        <div class="help-block with-errors gridCheck-error"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 text-center">
                            <button type="submit" class="default-btn">
                                <i class="ri-arrow-right-s-line"></i>
                                Send Message
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->


@endsection
