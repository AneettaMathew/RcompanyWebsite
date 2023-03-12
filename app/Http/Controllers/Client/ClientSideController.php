<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Multiimage;
// use App\Models\Multiimage;

class ClientSideController extends Controller
{
    public function addclient(Request $request){

        
        $client = new Multiimage();
        if($request->hasfile('multi_image'))
        {
            $file = $request->file('multi_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('backend/upload/', $filename);
            $client->multi_image = $filename;
        }

        $client->save();
        return redirect('/admin/listclient');
    }
    public function clientadd()
    {
        return view("admin.client.addclient");
    }
    
    public function clientlist()
    {   
        $clientlist = Multiimage::all();
        return view('admin.client.listclient',compact('clientlist'));
    }

  public function clientedit($id){
    $clientedit = Multiimage::find($id);
    return view ('admin.client.editclient',compact('clientedit'));
  }
  public function updateclient(Request $request, $id)
  {

    $updateclient =  Multiimage::find($id);
    if($request->hasfile('multi_image'))
    {
        $file = $request->file('multi_image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('backend/upload/', $filename);
        $updateclient->multi_image = $filename;
    }
    $updateclient->save();
    return redirect('/admin/listclient')->with('updateclient',$updateclient);
  }
  
  public function clientdelete($id){
    $clientdelete = Multiimage::find($id);
    $destination = 'backend/upload/'. $clientdelete-> multi_image;
    if(File::exists($destination))
    {
        File::delete($destination);
    }
    $clientdelete->delete();
    return redirect('/admin/listclient');
  }
}
