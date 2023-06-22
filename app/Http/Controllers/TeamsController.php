<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Farm;
use App\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'memberName' => 'required',
            'memberPhoto' => 'image|nullable|max:3999'
        ]);

        if($request->hasFile('memberPhoto')){
            // $filenameWithExt = $request->file('memberPhoto')->getClientOriginalName ();
            // $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $fileExt = $request->file('memberPhoto')->getClientOriginalExtension();
            $fileNameToStore = 'memberPhoto'.'_'.time().'.'.$fileExt;
            $prothom = $request->input('farmId');
            $path = $request->file('memberPhoto')->storeAs("public/project_images/$prothom/teamPhoto",$fileNameToStore);
        } else{
            $fileNameToStore = '';
        }

        $team = new Teams;
        $team->farmId = $request->input('farmId');
        $team->memberName = $request->input('memberName');
        $team->degree = $request->input('degree');
        $team->position = $request->input('position');
        $team->description = $request->input('description');

        $team->memberPhoto = $fileNameToStore;

        $routingMan = $request->input('farmId');
        // dd($routingMan);
        // dd($farm);
        $team->save();

        return redirect("/farms/$routingMan")->with('success','Successfully Uploaded Member!');
    }

    public function show(Teams $teams)
    {
        //
    }

    public function edit($memberId)
    {
        $team = Teams::find($memberId);
        // $idd = $team->farmId;
        // $farm = Farm::find($idd);
        // dd($team);
        if(! auth()->guard('admin')->check()){
            return redirect('/farms');
        }
        return view('adminPanel.editTeam')->with('team',$team);
    }

    public function update(Request $request,$memberId)
    {
        $this->validate($request,[
            'memberName' => 'required',
            'memberPhoto' => 'image|nullable|max:3999'
        ]);
        $team = Teams::find($memberId);

        if($request->hasFile('memberPhoto')){
            // $filenameWithExt = $request->file('memberPhoto')->getClientOriginalName ();
            // $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $fileExt = $request->file('memberPhoto')->getClientOriginalExtension();
            $fileNameToStore = 'memberPhoto'.'_'.time().'.'.$fileExt;
            $prothom = $team->farmId;
            $path = $request->file('memberPhoto')->storeAs("public/project_images/$prothom/teamPhoto",$fileNameToStore);
        }

        $team->farmId = $team->farmId;
        $team->memberName = $request->input('memberName');
        $team->degree = $request->input('degree');
        $team->position = $request->input('position');
        $team->description = $request->input('description');

        // $team->memberPhoto = $fileNameToStore;

        $routingMan = $team->farmId;

        if($request->hasFile('memberPhoto')){
            $team->memberPhoto = $fileNameToStore;
        }
        $team->save();

        return redirect("/farms/$routingMan")->with('success','Successfully Uploaded Member!');
    }

    public function destroy($memberId)
    {
        $team = Teams::find($memberId);
        if(! auth()->guard('admin')->check()){
            return redirect('/farms')-> with('error','Unauthorized Page');
        }
        if($team->memberPhoto !== 'noimage.jpg'){
            //Delete the image
            $prothom = $team->farmId;
            Storage::delete("public/project_images/$prothom/teamPhoto/".$team->memberPhoto);
        }
        $routingMan = $team->farmId;
        $team->delete();

        return redirect("/farms/$routingMan")->with('success','Deleted Successfully !');
    }
}
