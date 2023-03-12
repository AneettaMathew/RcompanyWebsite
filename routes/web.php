<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeHeaderController;
use App\Http\Controllers\Home\ContactUsController;
use App\Http\Controllers\Home\TestimonialController;
use App\Http\Controllers\Home\ApplyJobController;
use App\Http\Controllers\Home\RequestQuotesController;
use App\Http\Controllers\Home\DashboardController;
use App\Http\Controllers\Home\ServicesController;
use App\Http\Controllers\Home\CareersController;
use App\Http\Controllers\Client\ClientSideController;
use App\Http\Controllers\About\MeetTeamController;
use App\Http\Controllers\About\AboutUsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','profile')->name('admin.profile');
    Route::post('/updatepassword','updatepassword')->name('update.password');
    Route::get('/changepassword','changepassword')->name('change.password');
}); 
Route::controller(HomeHeaderController::class)->group(function(){
    Route::get('/aboutus','homeaboutus')->name('home.aboutus');
    Route::get('/','home')->name('home.home');
    Route::get('/portfolio','homeportfolio')->name('home.portfolio');
    Route::get('/services','homeservices')->name('home.services');
    Route::get('/clients','homeclients')->name('home.Clients');
    Route::get('/careers','homecareers')->name('home.Careers');
    Route::get('/contactus','homecontactus')->name('home.ContactUs');
    Route::get('/requestquotes','homerequestquotes')->name('home.Requestquotes');
    Route::get('/career/careerdetails/{id}','careerdetails')->name('careerdetails');
    Route::get('/career/applyjob','applyjob')->name('applyjob');
}); 
Route::controller(ClientSideController::class)->group(function(){
    Route::get('/admin/addclient','clientadd')->name('client.add');
    Route::get('/admin/listclient','clientlist')->name('client.list');
    Route::get('/admin/editclient/{id}','clientedit')->name('client.edit');
    Route::get('/admin/deleteclient/{id}','clientdelete')->name('client.delete');
    Route::post('/addclient','addclient')->name('addclient');
    Route::put('/updateclient/{id}','updateclient')->name('updateclient');
}); 
Route::controller(CareersController::class)->group(function(){
    Route::post('/admin/addCareers','addCareers')->name('addcareers');
    Route::get('/admin/Careers','Careers')->name('careers');
    Route::get('/admin/ListCareers','ListCareers')->name('listcareers');
    Route::get('/admin/editcareer/{id}','careeredit')->name('career.edit');
    Route::put('/updatecareer/{id}','updatecareer')->name('updatecareer');
    Route::get('/admin/deletecareer/{id}','careerdelete')->name('career.delete');
    
}); 

Route::controller(MeetTeamController::class)->group(function(){
    Route::get('/admin/addteams','addteams')->name('add.teams');
    Route::post('/admin/add.meetteam','addmeetteam')->name('add.meetteam');
    Route::get('/admin/listteams','listteams')->name('list.teams');
    Route::get('/admin/editteam/{id}','meetteamedit')->name('meetteam.edit');
    Route::put('/updateteam/{id}','updateteam')->name('updateteam');
    Route::get('/admin/meetteamdelete/{id}','meetteamdelete')->name('meetteam.delete');
}); 
Route::controller(AboutUsController::class)->group(function(){
    Route::get('/admin/Aboutus','Aboutus')->name('Aboutus');
    Route::put('/updateabout','updateabout')->name('updateabout');
});
Route::controller(ServicesController::class)->group(function(){
    Route::get('/admin/services','services')->name('services');
    Route::post('/admin/servicesadd','servicesadd')->name('servicesadd');
    Route::get('/admin/serviceslist','serviceslist')->name('serviceslist');
    Route::get('/admin/servicesedit/{id}','servicesedit')->name('servicesedit');
    Route::put('/servicesupdate/{id}','servicesupdate')->name('servicesupdate');
    Route::get('/admin/servicesdelete/{id}','servicesdelete')->name('servicesdelete');
});
Route::controller(TestimonialController::class)->group(function(){
    Route::get('/admin/Testimonial','Testimonial')->name('Testimonial');
    Route::post('/admin/testimonialadd','testimonialadd')->name('testimonialadd');
    Route::get('/admin/testimoniallist','testimoniallist')->name('testimoniallist');
    Route::get('/admin/testimonialedit/{id}','testimonialedit')->name('testimonialedit');
    Route::put('/testimonialupdate/{id}','testimonialupdate')->name('testimonialupdate');
    Route::get('/admin/testimonialdelete/{id}','testimonialdelete')->name('testimonialdelete');
});
Route::controller(ContactUsController::class)->group(function(){
    Route::post('/storemessage','storemessage')->name('store.message');
    Route::get('/admin/listmessage','listmessage')->name('listmessage');
    Route::get('/admin/messagedelete/{id}','messagedelete')->name('messagedelete');
});
Route::controller(ApplyJobController::class)->group(function(){
    Route::post('/jobsumbit','jobsubmit')->name('jobsubmit');
    Route::get('/admin/listapplicatants','listapplicatants')->name('listapplicatants');
    Route::get('/admin/applicantdelete/{id}','applicantdelete')->name('applicantdelete');
    Route::get('/admin/viewapplicant/{id}','viewapplicant')->name('viewapplicant');
});
Route::controller(RequestQuotesController::class)->group(function(){
    Route::post('/storerequest','storerequest')->name('storerequest');
    // Route::post('/storeHomerequest','storehomerequest')->name('homestorerequest');
    Route::get('/admin/listrequest','listrequest')->name('listrequest');
    Route::get('/admin/requestdelete/{id}','requestdelete')->name('requestdelete');
    Route::get('/admin/viewrequestquotes/{id}','viewrequestquotes')->name('viewrequestquotes');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});
Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard','dashboard')->name('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
