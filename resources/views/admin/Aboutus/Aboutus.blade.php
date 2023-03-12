@extends('admin.admin_master')
@section('admin')
 <!-- Account Settings Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row border-primary rounded mx-0 p-3">
                    <div class="col-10">
                        <div class="row" id="editprofile" style="display: flex;">
                            <div class="col-12">
                                <strong class="fs-16 fw-500 black-txt mb-2 d-block" style="font-size: 26px;"> Update About Us</strong>
                                <form action="{{route('updateabout')}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                @csrf
                                  <!-- <form class="row"> -->
                                  <input type="hidden" name="id" id ="id" value="{{$aboutus->id}}">
                                    <div class="col-md-7 mb-2">
                                        <label for="">Title</label>
                                        <input style="width: 560px; height: 50px;" name ="title"type="text" class="form-control" value ="{{$aboutus->title}}">
                                    </div>
                                    <div class="col-md-9 mb-2">
                                        <label for="">About Company</label>
                                        <textarea style="width: 560px; height: 150px;" name="description"  type="text" class="form-control" >
                                        {{$aboutus->description}}
                                    </textarea> 
                                    </div>
                                </div>
                                    <div class="col-15 d-flex">
                                       <button type="submit" class="btn btn-primary btn-typ4">Update</button>
                                    </div>
                                 </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Account Settings End -->

@endsection