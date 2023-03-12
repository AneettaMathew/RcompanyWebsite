@extends('admin.admin_master')
@section('admin')

 <!-- Product List Start -->
          <div class="container-fluid pt-4 px-4">
                <div class="border-primary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a>Latest Messages </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="">
                                    <th >SlNo.</th>
                                    <th >Full Name</th>
                                    <th >Email ID</th>
                                    <th >Message</th>
                                    <th >Time</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php ($i=1)
                            @foreach($contact as $cu)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cu['name']}}</td>
                                    <td>{{$cu['email']}}</td>
                                    <td>{{$cu['message']}}</td>
                                    <td>{{Carbon\Carbon::Parse($cu->created_at)->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                @endforeach   
                            </tbody>
                        </table>
                    </div>


                    <div class="d-flex align-items-center justify-content-between mb-4"style="margin-top:10px;">
                        <a>Latest Messages </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="">
                                    <th >SlNo.</th>
                                    <th >Full Name</th>
                                    <th >Email ID</th>
                                    <th >Message</th>
                                    <th >Time</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php ($i=1)
                            @foreach($listrequest as $cu)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cu['name']}}</td>
                                    <td>{{$cu['email']}}</td>
                                    <td>{{$cu['message']}}</td>
                                    <td>{{Carbon\Carbon::Parse($cu->created_at)->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                @endforeach   
                            </tbody>
                        </table>
                    </div>  




                    <div class="col-sm-12 col-md-6 col-xl-4" style="margin-top:10px;">
                        <div class="h-100 border-primary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product List End -->



@endsection