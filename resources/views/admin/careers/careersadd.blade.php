@extends('admin.admin_master')
@section('admin')
 <!-- Account Settings Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row border-primary rounded mx-0 p-3">
                    <div class="col-10">
                        <div class="row" id="editprofile" style="display: flex;">
                            <div class="col-12">
                                <strong class="fs-16 fw-500 light-blue-txt mb-2 d-block">Careers Designation</strong>
                                <form action="{{ route('addcareers') }}" method="POST">
                                    
                                 @csrf
                                  <!-- <form class="row"> -->
                                    <div class="col-md-7 mb-2">
                                        <label for="">Job Position</label>
                                        <input style="width: 560px; height: 50px;" name ="job_position"type="text" class="form-control" value ="">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="">Posted Date</label>
                                        <input style="width: 300px; height: 50px;"  name="posted_date" value="" type="date" class="form-control" >
                                    </div>
                                    <div class="col-md-9 mb-2">
                                        <label for="">Job Description</label>
                                        <textarea style="width: 560px; height: 150px;" name="job_description" value="" type="text" class="form-control"></textarea> 
                                    </div>
                                    <div class="col-md-9 mb-2">
                                        <label for="example-text-input"class="col-sm-2 col-form-label">Requirements</label>
                                        <textarea style="width: 560px; height: 150px;" name="requirements" value="" type="text" class="form-control"></textarea><br></br>
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