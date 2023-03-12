@extends('admin.admin_master')
@section('admin')
 <!-- Product List Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="border-primary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="">
                                    <th scope="col">SlNo.</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email ID</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Resume</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php ($i=1)
                            @foreach($listapplicatants as $cu)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cu['name']}}</td>
                                    <td>{{$cu['email']}}</td>
                                    <td>{{$cu['phone']}}</td>
                                    <td><div class="prdct-img"><img src="/backend/upload/{{$cu->image}}"></div></td>
                                    <td>
                                        <div class="d-flex action">
                                        <a class="btn text-secondary view" href="{{route('viewapplicant',$cu->id)}}">
                                                <i class="fa fa-eye">View</i>
                                            </a>
                                        <a class="btn text-secondary delete" href="{{route('applicantdelete',$cu->id)}}">
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