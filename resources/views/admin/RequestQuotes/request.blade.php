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
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Interested</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @php ($i=1)
                            @foreach($listrequest as $cu)
                                <tr><td>{{$i++}}</td>
                                    <td>{{$cu['name']}}</td>
                                    <td>{{$cu['companyname']}}</td>
                                    <td>{{$cu['interested']}}</td>
                                    <td>{{$cu['message']}}</td>  
                                    <td>                  
                                    <div class="d-flex action">
                                        <a class="btn text-secondary view" href="{{route('viewrequestquotes',$cu->id)}}">
                                                <i class="fa fa-eye">View</i>
                                            </a>                                       
                                        <a class="btn text-secondary delete" href="{{route('requestdelete',$cu->id)}}">
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