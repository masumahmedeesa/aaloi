<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use DB;
use App\Farm;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminPanel.admin');
    }

    public function addFarms(){
        return view('adminPanel.addFarms');
    }

    // public function postFarms(Request $request){
    //     $this->validate($request,[
    //         'farmName' => 'required',
    //         'farmPhoto' => 'image|nullable|max:3999'
    //     ]);

    //     if($request->hasFile('farmPhoto')){
    //         $filenameWithExt = $request->file('farmPhoto')->getClientOriginalName ();
    //         $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
    //         $fileExt = $request->file('farmPhoto')->getClientOriginalExtension();
    //         $fileNameToStore = $filename.'_'.time().'.'.$fileExt;
    //         $path = $request->file('farmPhoto')->storeAs('public/farm_images',$fileNameToStore);
    //     } else{
    //         $fileNameToStore = 'noimage.jpg';
    //     }

    //     $farm = new Farm;
    //     $farm->farmName = $request->input('farmName');
    //     $farm->farmType = $request->input('farmType');
    //     $farm->farmManager = $request->input('farmManager');
    //     $farm->farmContactInformation = $request->input('farmContactInformation');
    //     $farm->farmPhone = $request->input('farmPhone');
    //     $farm->farmEmail = $request->input('farmEmail');
    //     $farm->farmAwards = $request->input('farmAwards');
    //     $farm->farmTasks = $request->input('farmTasks');
    //     $farm->farmPhoto = $fileNameToStore;

    //     // dd($farm);
    //     $farm->save();

    //     return redirect('/masquerade-park')->with('success','Successfully Created FARM!');
    // }

}
