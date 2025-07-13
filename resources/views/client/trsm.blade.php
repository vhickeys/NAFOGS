@extends('layouts.client')

@section('title', 'Theatre Readiness Support Model')

@section('content')


    <!-- Hero Start -->
    <section class="bg-half border-bottom d-table w-100"
        style="background: url('client/images/coworking/sliders/2.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <h3 class="font-weight-normal text-white title-dark mb-4">Theatre Readiness Support Model (TRSM)
                        </h3>
                        <div class="page-next-level">
                            <ul class="page-next mb-0 px-0">
                                <li class="list-inline-item icon-light me-1"><a href="{{ route('homepage') }}"
                                        class="text-white title-dark pe-2">Home</a></li>
                                <li class="list-inline-item me-1">
                                    <span class="text-primary pe-2">Theatre Readiness Support Model (TRSM)</span>
                                </li>
                            </ul>
                        </div>
                        <p class="text-white text-lead mt-3">This app predicts whether a troop should be recalled or
                            retained based on operational factors. <br>
                            Simply input the details below and click Predict.</p>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->


    <!-- FAQ Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12">
                    <div class="rounded p-4 shadow">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center my-5">Input Parameters</h3>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Months in Theatre <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <input name="months_served" id="months_served" type="number" value="1"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Month Since Last Deployment <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <input name="months_served" id="months_served" type="number"
                                                        value="3.00" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Attacks Repusled <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <input name="months_served" id="months_served" type="number"
                                                        value="2.00" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Casualty Level <span
                                                        class="text-danger">*</span></label>

                                                <select name="" id="" class="form-control">
                                                    <option value="Low">-- Select Casualty Level --</option>
                                                    <option value="Low">Low</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="High">High</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div><!--end row-->
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <input type="submit" id="submit" name="predict" class="btn btn-primary w-100"
                                                value="Predict Deployment Status">
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- FAQ Start -->

@endsection