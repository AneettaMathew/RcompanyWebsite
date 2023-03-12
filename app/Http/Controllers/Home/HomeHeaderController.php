<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Careers;
class HomeHeaderController extends Controller
{
    public function home(){
        return view('frontend.index');
    }
    public function homeaboutus(){
        return view('frontend.homeheader.aboutus');
    }
    public function homeportfolio(){
        return view('frontend.homeheader.portfolio');
    }
    public function homeservices(){
        return view('frontend.homeheader.services');
    }
    public function homeclients(){
        return view('frontend.homeheader.clients');
    }
    public function homecareers(){
        return view('frontend.homeheader.careers');
    }
    public function homecontactus(){
        return view('frontend.homeheader.contactus');
    }
    public function homerequestquotes(){
        return view('frontend.homeheader.requestquotes');
    }
    public function careerdetails($id){
        $careerslist =Careers::where('id',$id)->get();
        return view('frontend.homeheader.careerdetails',["careerslist"=>$careerslist]);
    }
    public function applyjob(){
        return view('frontend.homeheader.applyjob');
    }
}
