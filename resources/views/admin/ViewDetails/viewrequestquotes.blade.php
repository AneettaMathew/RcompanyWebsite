@php 
$viewrequestquotes = App\Models\RequestQuotes::all();
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
                            @foreach($viewrequestquotes as $item)
                            <div class="col-md-8">
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Name</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->name}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Company Name</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->companyname}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Job Title</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->jobtitle}}</div>
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
                                    <div class="col-md-4 col-5">URL</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->url}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5">Interested In</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->interested}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-5"type="url">Message</div>
                                    <div class="col-1">:</div>
                                    <div class="col">{{$item->message}}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="btn btn-primary" href="{{route('listrequest')}}">Go Back</a>
                    </div>
                </div>
            </div>
            <!-- 404 End -->
    @endsection