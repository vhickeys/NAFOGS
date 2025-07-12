@extends('layouts.client')

@section('title', 'Unit Login')

@section('content')


    <!-- Hero Start -->
    <section class="vh-100 user-pages d-flex align-items-center" style="
                            background: url('{{ asset('client/images/bg/login.jpg') }}') no-repeat center center fixed;
                            background-size: cover;
                          ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 py-5">
                    <div class="login-page rounded p-5 position-relative"
                        style="background-color: rgba(255, 255, 255, 0.712);">
                        <div class="text-center">
                            <h5 class="mb-4 pb-2">Sign In</h5>
                        </div>
                        <form class="login-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Unit Nomenclature <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="text" required=""
                                            placeholder="Your Your Unit Nomenclature" />
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3 d-inline-block">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                        <p class="forgot-pass mb-0">
                                            <a href="javascript:void(0)" class="text-dark fw-bold">Need Help?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </form>
                        <!--end form-->
                    </div>
                    <!--end login-->
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

@endsection