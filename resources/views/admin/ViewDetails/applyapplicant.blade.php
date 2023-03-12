@php 
$listapplicatants = App\Models\ApplyJob::all();
@endphp

@extends('admin.admin_master')
@section('admin') 
 <!-- 404 Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 border-primary rounded mx-0">
                    <div class="col-12 p-4">
                        <div class="row profileinfo">
                            <div class="col-12">
                                <strong class="fs-16 fw-500 light-blue-txt mb-3 d-block">Personal Infomation</strong>
                            </div>
                            @foreach($listapplicatants as $item)
                            <div class="col-md-8">
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Name</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->name}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Email</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->email}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Phone Number</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->phone}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Location</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->location}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Current Salary</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->currentsalary}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Expected Salary</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->expectedsalary}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Notice Period</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->noticeperiod}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5"type="url">website/Blog</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->url}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Resume</div>
                                    <div class="col-1">:</div>
                                    <div class="col"><img src="/backend/upload/{{$item->image}}"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="btn btn-primary" href="{{route('listapplicatants')}}">Go Back</a>
                    </div>
                </div>
            </div>
            <!-- 404 End -->
    @endsection