@extends('layouts.client')

@section('title', 'Automated Force Generation Model')

@section('content')


    <!-- Hero Start -->
    <section class="bg-half border-bottom d-table w-100"
        style="background: url('client/images/coworking/sliders/1.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <h3 class="font-weight-normal text-white title-dark mb-4"> Automated Force
                            Generation Model </h3>
                        <div class="page-next-level">
                            <ul class="page-next mb-0 px-0">
                                <li class="list-inline-item icon-light me-1"><a href="{{ route('homepage') }}"
                                        class="text-white title-dark pe-2">Home</a></li>
                                <li class="list-inline-item me-1">
                                    <span class="text-primary pe-2">Automated Force
                                        Generation Model (AUFOGEM)</span>
                                </li>
                            </ul>
                        </div>
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
                                <h3 class="text-center my-5">Input Sub-unit Parameters</h3>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Months served in rear unit <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <input name="months_served" id="months_served" type="number" value="1"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">In-barrack training duration <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <input name="months_served" id="months_served" type="number"
                                                        value="3.00" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Force/C2 ratio <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <input name="months_served" id="months_served" type="number"
                                                        value="2.00" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Years C2 has rested outside theatre <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <input name="months_served" id="months_served" type="number"
                                                        value="2.00" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div>
                                                <label class="form-label">Has C2 elements in unit? <span
                                                        class="text-danger">*</span></label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" checked="" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                                                    </div>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" checked="" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div>
                                                <label class="form-label">Have C2 served in North East? <span
                                                        class="text-danger">*</span></label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" checked="" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault3">
                                                        <label class="form-check-label" for="flexRadioDefault3">Yes</label>
                                                    </div>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" checked="" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault4">
                                                        <label class="form-check-label" for="flexRadioDefault4">No</label>
                                                    </div>
                                                </div>
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