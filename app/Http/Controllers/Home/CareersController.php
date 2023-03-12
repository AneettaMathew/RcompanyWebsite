<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Careers;

class CareersController extends Controller
{
   public function addCareers(Request $request)
   {
    $career = new Careers();
    $career->job_position =$request->input('job_position');
    $career->posted_date  =$request->input('posted_date');
    $career->job_description =$request->input('job_description');
    $career->requirements =$request->input('requirements');
    $career->save();
    return view ('admin.careers.careersadd')->with('career',$career);
   }
   public function Careers(){
    return view ('admin.careers.careersadd');
   }

   public function ListCareers(){
    $careerslist = Careers::all();
    return view('admin.careers.listcareers',['careerslist'=>$careerslist]);
   }
   public function careeredit($id){
    $careeredit = Careers::find($id);
    return view ('admin.careers.careeredit',compact('careeredit'));
  }
  public function updatecareer(Request $request, $id)
  {

    $updatecareer =  Careers::find($id);
    $updatecareer->job_position =$request->input('job_position');
    $updatecareer->posted_date  =$request->input('posted_date');
    $updatecareer->job_description =$request->input('job_description');
    $updatecareer->requirements =$request->input('requirements');
    $updatecareer->update();
    
    return redirect('/admin/ListCareers')->with('updatecareer',"Data Updated successfully");
  }
  public function careerdelete($id){
    $careerdelete = Careers::find($id);
    $careerdelete->delete();
    return redirect('/admin/ListCareers');
  }
}
