
@extends('frontend.main_master')
@section('main')

@foreach($careerslist as $item)
        <section class="about-text-section pt-5 mb-md-5 mb-4">
        <div class="container">
            <div class="d-flex justify-content-lg-between align-items-lg-center flex-wrap mb-md-4 mb-3">
                <h2 class="hd-typ6 fw-600 fs-25-md fs-20-sm fs-18-m mb-lg-0 mb-3">
                    {{$item->job_position}}
                </h2>
                <span class="fs-14">Posted On: {{$item->posted_date}}</span>
            </div>
            <p class="fs-22 fw-300 fs-18-xl fs-16-md fs-14-m">
            {{$item->job_description}}
            </p>
        </div>
    </section>
    <section class="career-details mb-md-5 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-md-5 mb-4">
                    <h5 class="fs-25 fs-24-xl fs-23-lg fs-20-md fs-18-sm fs-16-m fw-600 mb-4">
                        Requirements:
                    </h5>
                    <ul>
                        {{$item->requirements}}
                    </ul>
                </div>
                <div class="col-12 mb-md-5 mb-4">
                    <h5 class="fs-25 fs-24-xl fs-23-lg fs-20-md fs-18-sm fs-16-m fw-600 mb-xl-4 mb-md-3">
                        Contact Details:
                    </h5>
                    <div class="contact-details">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="mailto:hrd@reubro.com">hrd@reubro.com</a> 
                                <a href="https://goo.gl/maps/h8ipqPqChnG7xYnK8" target="_blank">
                                    <address>
                                        Reubro International <br>
                                        39/3122, Valanjambalam <br>
                                        Cochin - 682 016
                                    </address>
                                </a>
                                <div class="mb-3">
                                    Phone: <a href="tel:9847039733">9847039733</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <strong>Timings</strong> : Monday to Friday 9am and 6pm <br>
                                    <!-- <strong>Mobile</strong> : <a href="tel:9847039733">9847039733</a> <br> -->
                                    <strong>Phone</strong> : <a href="tel:+91-484-2357256">+91-484-2357256</a> <br>
                                    <strong>Fax</strong> : +91-484-2319641
                                </div>
                                <div class="d-flex justify-content-start">
                                    <a href="{{route('applyjob')}}" class="custom-btn btn-1 btn-inner fs-20 fs-18-xl fs-17-lg fs-16-md fs-15-sm fs-14-m fw-400 px-xl-4 px-3 text-decoration-none">Apply for this job online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   @endforeach 
   @endsection