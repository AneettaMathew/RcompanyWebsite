@extends('admin.admin_master')
@section('admin')
 <!-- Product List Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="border-primary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="{{route('careers')}}" class="btn btn-primary">Add New</a>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="">
                                    <th scope="col">SlNo.</th>
                                    <th scope="col">Job Position</th>
                                    <th scope="col">Posted Date</th>
                                    <th scope="col">Job Description</th>
                                    <th scope="col">Requirements</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php ($i=1)
                            @foreach($careerslist as $cu)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cu['job_position']}}</td>
                                    <td>{{$cu['posted_date']}}</td>
                                    <td>{{$cu['job_description']}}</td>
                                    <td>{{$cu['requirements']}}</td>
                                    <td>
                                        <div class="d-flex action">
                                            <a class="btn text-secondary edit" href="{{route('career.edit',$cu->id)}}">
                                                <i class="fa fa-pen">Edit</i>
                                            </a>

                                        <a class="btn text-secondary delete" href="{{route('career.delete',$cu->id)}}">
                                                <i class="fa fa-trash">Delete</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                @endforeach   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Product List End -->
@endsection