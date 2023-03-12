<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\RequestQuotes;

class RequestQuotesController extends Controller
{
    public function storerequest(Request $request){
      $request->validate([
        'name'=> 'required',
        'companyname'=> 'required',
        'jobtitle'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'interested'=>'required',
        // 'message'=>'required',
      ]);
        RequestQuotes::insert([
            'name'=>$request->name,
            'companyname'=>$request->companyname,
            'jobtitle'=>$request->jobtitle,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'url'=>$request->url,
            'interested'=>$request->interested,
            'message'=>$request->message,
            'created_at'=>Carbon::now()
        ]);
        $notification = array(
            'message'=>'Your Message Submitted Successfully',
            'alert-type' => 'success'
        );
        return redirect('/')->with($notification);
      }
      public function listrequest(){
        $listrequest = RequestQuotes::all();
        return view('admin.RequestQuotes.request',['listrequest'=>$listrequest]);
       }
       
       public function requestdelete($id){
        $requestdelete = RequestQuotes::find($id);
        $requestdelete->delete();
        return redirect('/admin/listrequest');
      }
      public function viewrequestquotes($id)
      {
        $viewrequestquotes = RequestQuotes::find($id);
        return view('admin.ViewDetails.viewrequestquotes');
      }
}
