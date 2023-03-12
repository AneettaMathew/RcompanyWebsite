@extends('admin.admin_master')
@section('admin')
 <!-- Account Settings Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row border-primary rounded mx-0 p-3">
                    <div class="col-10">
                        <div class="row" id="editprofile" style="display: flex;">
                            <div class="col-12">
                                <strong class="fs-16 fw-500 black-txt mb-2 d-block" style="font-size: 26px;"> Update Careers Designation</strong>
                                <form action="/updatecareer/{{$careeredit->id }}" method="POST">
                                <!-- {{csrf_field()}}
                                {{method_field('PUT')}} -->
                                @csrf
                                  <!-- <form class="row"> -->
                                  <input type="hidden" name="id" id ="id" value="{{$careeredit->id}}">
                                    <div class="col-md-7 mb-2">
                                        <label for="">Job Position</label>
                                        <input style="width: 560px; height: 50px;" name ="job_position"type="text" class="form-control" value ="{{$careeredit->job_position}}">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="">Posted Date</label>
                                        <input style="width: 300px; height: 50px;" value="{{$careeredit->posted_date}}" name="posted_date" value="" type="date" class="form-control" >
                                    </div>
                                    <div class="col-md-9 mb-2">
                                        <label for="">Job Description</label>
                                        <textarea style="width: 560px; height: 150px;" name="job_description"  type="text" class="form-control" >
                                        {{$careeredit->job_description}}
                                    </textarea> 
                                    </div>
                                    <div class="col-md-9 mb-2">
                                        <label for="example-text-input"class="col-sm-2 col-form-label">Requirements</label>
                                        <textarea style="width: 560px; height: 150px;" name="requirements"  type="text" class="form-control">
                                        {{$careeredit->requirements}}
                                    </textarea><br></br>
                                        <!-- <textarea name="requirements" id="elm1" type="text" class="form-control"></textarea><br></br> -->
                                    </div>
                                </div>
                                    <div class="col-15 d-flex">
                                       <button type="submit" class="btn btn-primary btn-typ4">Save</button>
                                    </div>
                                 </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Account Settings End -->

@endsection