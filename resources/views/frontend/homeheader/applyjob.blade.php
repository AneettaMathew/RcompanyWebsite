@extends('frontend.main_master')
@section('main')

<section class="work-section pt-5 mt-xxl-5 mt-xl-4 mb-5">
        <div class="container">
            <h3 class="hd-typ7 fs-25-md fs-20-sm fs-18-m text-center mx-auto mb-lg-5 mb-md-4 mb-3">
                Apply for this Position
            </h3>
        </div>
    </section>
    <section class="get-in-touch-section mt-md-5 mt-4 pt-xxl-4 pt-lg-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex flex-column me-lg-4">
                        <div class="hd-typ5 fw-400 fs-25-xl fs-23-lg fs-18-m mb-3">
                            We love to talk!
                        </div>
                        <div class="fs-20 fs-17-xl fs-16-md fs-14-m fw-300 mb-5">
                            <p class="mb-lg-5 mb-3">
                                Reubro is a company that specializes in web applications and web solutions. Established in 2003, Reubro has demonstrated fast-paced growth.
                            </p>
                            <p class="mb-lg-5 mb-3">
                                We are driven by passion, and the desire to become a world leader in web solutions.
                            </p>
                            <p class="mb-lg-5 mb-3">
                                Reubro offers a progressive work environment and a competitive salary structure to its employees. As part of our expansion plan, we are on the lookout for professionals in the following fields:
                            </p>
                        </div>
                        <div class="location-info">
                            <div class="addres d-flex">
                                <div class="fs-25 fs-23-xl fs-20-md fs-18-m">
                                    Send your resumes to <a href="mailto:hrd@reubro.com" class="text-decoration-none">hrd@reubro.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <form class="row justify-content-between ms-lg-4"method="post" action="{{route('jobsubmit')}}">
                        @csrf
                        <div class="col-12 mb-4">
                            <input type="text" name='name' class="w-100" placeholder="Full name">
                        </div>
                        <div class="col-12 mb-4">
                            <input type="email" name='email' class="w-100" placeholder="Email">
                        </div>
                        <div class="col-12 mb-4">
                            <input type="text" name='phone' class="w-100" placeholder="Phone">
                        </div>
                        <div class="col-12 mb-4">
                            <input type="text" name='location' class="w-100" placeholder="Location">
                        </div>
                        <div class="col-12 mb-4">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <input type="text" name='currentsalary' class="w-100" placeholder="Current Salary">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="text" name='expectedsalary' class="w-100" placeholder="Expected Salary">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="text"name= 'noticeperiod' class="w-100" placeholder="Notice Period">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <input type="url" class="w-100" name='url' placeholder="Website, blog or Portfolio">
                        </div>
                        <div class="col-12">
                            <input type='file'name='image' class="w-100" onchange="readURL(this);" />
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="custom-btn btn-1 btn-inner fs-20 fs-18-xl fs-17-lg fs-16-md fs-15-sm fs-14-m fw-400 px-xl-4 px-3 mt-4 text-decoration-none">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endsection