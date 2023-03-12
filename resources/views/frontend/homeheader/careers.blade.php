@extends('frontend.main_master')
@section('main')
@php 
$careerslist = App\Models\Careers::all();
@endphp
<section class="work-section pt-5 mt-xxl-5 mt-xl-4 mb-5">
        <div class="container">
            <h3 class="hd-typ7 fs-25-md fs-20-sm fs-18-m text-center mx-auto mb-lg-5 mb-md-4 mb-3">
                Careers with us
            </h3>
            <div class="fs-20 fs-17-xl fs-16-md fs-14-m fw-300 mb-5 text-center px-lg-5">
                If you are interested in a job in Reubro International, have talent and ready to face challenges and want to pursue a career in web development then we have golden offers for you.
            </div>
        </div>
    </section>
    @foreach($careerslist as $item)
    <section class="get-in-touch-section mt-md-5 mt-4 pt-xxl-4 pt-lg-3">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 mb-3 career-list">
                    <div class="career-post">
                        <h4> {{$item->job_position}}</h4>
                        <div class="career-info-text">
                            <p>
                            {{$item->job_description}}
                         </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="/career/careerdetails/{{$item->id}}" class="d-flex align-items-center btn">
                                Apply Now
                                <span class="material-symbols-outlined">
                                    keyboard_double_arrow_right
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </section>
@endsection