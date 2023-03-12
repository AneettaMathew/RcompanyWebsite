<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function Aboutus()
    {
        $aboutus = AboutUs::find(1);
        return view('admin.Aboutus.Aboutus',compact('aboutus'));
    }
    public function updateabout(Request $request)
    {
        $aboutus = AboutUs::find(1);
        $aboutus->title =$request->input('title');
        $aboutus->description  =$request->input('description');
        $aboutus->update();
    return redirect('/admin/Aboutus')->with('aboutus',"Data Updated successfully");
    }



}
