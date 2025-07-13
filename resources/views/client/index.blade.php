@extends('layouts.client')

@section('title', 'Homepage')

@section('content')

    <!-- Hero Start -->
    <section class="swiper-slider-hero position-relative d-block vh-100" id="home">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex align-items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center"
                        data-background="{{ asset('client/images/coworking/sliders/1.jpg') }}">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row pt-md-5 mt-lg-0">
                                <div class="col-12">
                                    <div class="title-heading">
                                        <h1 class="heading text-white title-dark fw-bold mb-4">
                                            Welcome to {{ ucfirst(config('app.name')) }}
                                        </h1>
                                        <p class="para-desc text-white">
                                            The Nigerian Army Force Generation System - your strategic partner for automated
                                            troop deployment and theatre readiness assessment.
                                        </p>

                                        <div class="mt-2">
                                            <a href="{{ route('unit.login') }}" class="btn btn-primary mt-2 me-2 ">Automated
                                                Force
                                                Generation Model</a>
                                            <a href="{{ route('unit.login') }}"
                                                class="btn btn-outline-white mt-2 btn-hover-dark">Theatre
                                                Readiness Support Model</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->

                <div class="swiper-slide d-flex align-items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center"
                        data-background="{{ asset('client/images/coworking/sliders/2.jpg') }}">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row pt-md-5 mt-lg-0 justify-content-center">
                                <div class="col-12">
                                    <div class="title-heading text-center">
                                        <h1 class="heading text-white title-dark fw-bold mb-4">
                                            Smarter Troop Deployment Starts Here
                                        </h1>
                                        <p class="para-desc mx-auto text-white">
                                            Use real-time data and intelligent modeling to generate efficient force
                                            formations for any operation type.
                                        </p>

                                        <div class="mt-2">
                                            <a href="{{ route('unit.login') }}" class="btn btn-primary mt-2 me-2">Automated
                                                Force
                                                Generation Model</a>
                                            <a href="{{ route('unit.login') }}"
                                                class="btn btn-outline-white mt-2 btn-hover-dark">Theatre
                                                Readiness Support Model</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->

                <div class="swiper-slide d-flex align-items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center"
                        data-background="{{ asset('client/images/coworking/sliders/3.jpg') }}">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row pt-md-5 mt-lg-0">
                                <div class="col-12">
                                    <div class="title-heading">
                                        <h1 class="heading text-white title-dark fw-bold mb-4">
                                            Optimize Theatre-Level Readiness
                                        </h1>
                                        <p class="para-desc text-white">
                                            Predict and improve troop readiness across all theatres, ensuring continuous
                                            operational capability and sustainability.
                                        </p>

                                        <div class="mt-2">
                                            <a href="{{ route('unit.login') }}" class="btn btn-primary mt-2 me-2">Automated
                                                Force
                                                Generation Model</a>
                                            <a href="{{ route('unit.login') }}"
                                                class="btn btn-outline-white mt-2 btn-hover-dark">Theatre
                                                Readiness Support Model</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next border rounded text-center"></div>
            <div class="swiper-button-prev border rounded text-center"></div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- About Start -->
    <section class="section" style="background: url({{ asset('client/images/coworking/about.png') }}) center center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="section-title">
                        <span class="text-muted h6">About us</span>
                        <h2 class="mt-2 mb-4">
                            {{ config('app.name') }}
                        </h2>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-sm-0">
                    <p class="text-muted para-desc">
                        The Nigerian Army Force Generation System (NAFOGS) is a data-driven decision support platform
                        designed to enhance the operational effectiveness of the Nigerian Army. Developed to meet the
                        evolving challenges of modern warfare and troop management.
                    </p>
                    <div class="mt-4">
                        <a href="javascript:void(0)" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--End row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- About Start -->

    <!-- CTA STart -->
    <section class="section">
        <div class="container">
            <div class="rounded-lg shadow bg-light p-4 p-md-5">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="section-title text-md-start text-center">
                            <h4 class="title mb-3 title-dark">
                                Automated Force Generation Model
                            </h4>
                            <p class="text-muted para-desc mb-0">
                                Determine if a sub unit is ready for deployment based on operational readiness criteria.
                            </p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4 mt-4 mt-sm-0">
                        <div class="text-md-end text-center">
                            <a href="{{ route('unit.login') }})" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end div-->
            <div class="rounded-lg shadow bg-light p-4 p-md-5 mt-4">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="section-title text-md-start text-center">
                            <h4 class="title mb-3 title-dark">
                                Theatre Readiness Support Model
                            </h4>
                            <p class="text-muted para-desc mb-0">
                                This app predicts whether a troop should be recalled or retained based on operational
                                factors. Simply input the details below and click Predict.
                            </p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4 mt-4 mt-sm-0">
                        <div class="text-md-end text-center">
                            <a href="{{ route('unit.login') }}" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end div-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- CTA End -->

@endsection