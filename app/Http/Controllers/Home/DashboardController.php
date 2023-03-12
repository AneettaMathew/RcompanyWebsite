<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\RequestQuotes;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $contact = ContactUs::latest()->get();
        $listrequest = RequestQuotes::latest()->get();
        return view('admin.dashboard.admin_dashboard',compact('contact','listrequest'));
    }
    
}
