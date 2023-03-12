<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function storemessage(Request $request){
        $request->validate([
          'name'=> 'required',
          'email'=>'required',
          'phone'=>'required',
          'message'=>'required',
        ]);
        ContactUs::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
            'created_at'=>Carbon::now()
        ]);
        $notification = array(
            'message'=>'Your Message Submitted Successfully',
            'alert-type' => 'success'
        );
        return redirect('/contactus')->with($notification);
      }

      public function listmessage(){
        $listmessage = ContactUs::all();
        return view('admin.Contactus.admincontactus',['listmessage'=>$listmessage]);
       }
       public function messagedelete($id){
        $messagedelete = ContactUs::find($id);
        $messagedelete->delete();
        return redirect('/admin/listmessage');
      }
}
