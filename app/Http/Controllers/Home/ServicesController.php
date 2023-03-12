<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    public function services()
    {
        return view('admin.services.addservices');
    }
    public function servicesadd(Request $request)
    {

        $serviceadd = new Services();
        $serviceadd->title=$request->input('title');
        $serviceadd->description=$request->input('description');
        if($request->hasfile('logo'))
        {
            $file = $request->file('logo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('backend/upload/', $filename);
            $serviceadd->logo = $filename;
        }
        $serviceadd->save();
        return view('admin.services.addservices');
    }
    public function serviceslist(){
        $serviceslist = Services::all();
        return view('admin.services.listservices',compact('serviceslist'));
    }
    public function servicesedit($id){
        $servicesedit = Services::find($id);
        return view ('admin.services.serviceedit',compact('servicesedit'));
      }
       public function servicesupdate(Request $request,$id)
  {

    $servicesupdate =  Services::find($id);
    $servicesupdate->title =$request->input('title');
    $servicesupdate->description  =$request->input('description');
    if($request->hasfile('logo'))
    {
        $file = $request->file('logo');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('backend/upload/', $filename);
        $servicesupdate->logo = $filename;
    }

    $servicesupdate->save();
    return redirect('/admin/serviceslist')->with('servicesupdate',$servicesupdate);
  }
  public function servicesdelete($id){
    $servicesdelete = Services::find($id);
    $destination = 'backend/upload/'. $servicesdelete-> logo;
    if(File::exists($destination))
    {
        File::delete($destination);
    }
    $servicesdelete->delete();
    return redirect('/admin/serviceslist');
  }
}
