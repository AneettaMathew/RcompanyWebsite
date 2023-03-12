<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplyJob;
use Illuminate\Support\Carbon;

class ApplyJobController extends Controller
{
    
    public function jobsubmit(Request $request){
        ApplyJob::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'location'=>$request->location,
            'currentsalary'=>$request->currentsalary,
            'expectedsalary'=>$request->expectedsalary,
            'noticeperiod'=>$request->phone,
            'url'=>$request->url,
            'image'=>$request->image,
            'created_at'=>Carbon::now()
        ]);
        $notification = array(
            'message'=>'Your Message Submitted Successfully',
            'alert-type' => 'success'
        );
        return redirect('/career/applyjob')->with($notification);
      }
      public function listapplicatants(){
        $listapplicatants = ApplyJob::all();
        return view('admin.careers.listapplicatants',['listapplicatants'=>$listapplicatants]);
       }
       public function applicantdelete($id){
        $applicantdelete = ApplyJob::find($id);
        $applicantdelete->delete();
        return redirect('/admin/listapplicatants');
      }
      public function viewapplicant($id)
      {
        $viewapplicant = ApplyJob::find($id);
        return view('admin.ViewDetails.applyapplicant');
      }

}
