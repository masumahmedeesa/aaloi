<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'projectName' => 'required',
            'estdDate' => 'required',
            'projectPhoto1' => 'image|nullable|max:3999'
        ]);

        if($request->hasFile('projectPhoto1')){
            $filenameWithExt = $request->file('projectPhoto1')->getClientOriginalName ();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $fileExt = $request->file('projectPhoto1')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$fileExt;
            $prothom = $request->input('farmId');
            $ektaname = $request->input('projectName');
            $path = $request->file('projectPhoto1')->storeAs("public/project_images/$prothom/$ektaname",$fileNameToStore);
        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        $project = new Projects;
        $project->farmId = $request->input('farmId');
        $project->projectName = $request->input('projectName');
        $project->estdDate = $request->input('estdDate');
        $project->location = $request->input('location');
        $project->description = $request->input('description');
        $project->projectPhoto1 = $fileNameToStore;

        $routingMan = $request->input('farmId');
        // dd($routingMan);
        // dd($farm);
        $project->save();

        return redirect("/farms/$routingMan")->with('success','Successfully Uploaded Project!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show($projectId)
    {
        $project = Projects::find($projectId);
        return view('farms.projects')->with('project',$project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($projectId)
    {
        $project = Projects::find($projectId);
        if(! auth()->guard('admin')->check()){
            return redirect('/projects');
        }
        return view('adminPanel.editProject')->with('project',$project);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'projectName' => 'required',
            'estdDate' => 'required',
            'projectPhoto1' => 'image|nullable|mimes:jpeg,jpg,png|max:5999',
            'projectPhoto2' => 'image|nullable|mimes:jpeg,jpg,png|max:5999',
            'projectPhoto3' => 'image|nullable|mimes:jpeg,jpg,png|max:5999',
            'projectPhoto4' => 'image|nullable|mimes:jpeg,jpg,png|max:5999'
        ]);
        // $kk="nai";

        $project = Projects::find($id);

                if($request->hasFile('projectPhoto1')){
                    $filenameWithExt = $request->file('projectPhoto1')->getClientOriginalName ();
                    $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                    $fileExt = $request->file('projectPhoto1')->getClientOriginalExtension();
                    $fileNameToStore = $filename.'_'.time().'.'.$fileExt;
                    // $kk = $filename;
                    $path = $request->file('projectPhoto1')->storeAs("public/project_images/$project->farmId/$project->projectName",$fileNameToStore);
                }

                if($request->hasFile('projectPhoto2')){
                    $filenameWithExt2 = $request->file('projectPhoto2')->getClientOriginalName ();
                    $filename2 = pathinfo($filenameWithExt2,PATHINFO_FILENAME);
                    $fileExt2 = $request->file('projectPhoto2')->getClientOriginalExtension();
                    $fileNameToStore2 = $filename2.'_'.time().'.'.$fileExt2;
                    // $kk = $filename;
                    $path = $request->file('projectPhoto2')->storeAs("public/project_images/$project->farmId/$project->projectName",$fileNameToStore2);
                }

                if($request->hasFile('projectPhoto3')){
                    $filenameWithExt3 = $request->file('projectPhoto3')->getClientOriginalName ();
                    $filename3 = pathinfo($filenameWithExt3,PATHINFO_FILENAME);
                    $fileExt3 = $request->file('projectPhoto3')->getClientOriginalExtension();
                    $fileNameToStore3 = $filename3.'_'.time().'.'.$fileExt3;
                    // $kk = $filename;
                    $path = $request->file('projectPhoto3')->storeAs("public/project_images/$project->farmId/$project->projectName",$fileNameToStore3);
                }

                if($request->hasFile('projectPhoto4')){
                    $filenameWithExt4 = $request->file('projectPhoto4')->getClientOriginalName ();
                    $filename4 = pathinfo($filenameWithExt4,PATHINFO_FILENAME);
                    $fileExt4 = $request->file('projectPhoto4')->getClientOriginalExtension();
                    $fileNameToStore4 = $filename4.'_'.time().'.'.$fileExt4;
                    // $kk = $filename;
                    $path = $request->file('projectPhoto4')->storeAs("public/project_images/$project->farmId/$project->projectName",$fileNameToStore4);
                }

        
        // dd($kk);
        // $hey = explode(".",$project->projectPhoto1);
        // if($kk !== "nai"){
        //     if($kk !== $hey[0]){
        //         // dd($kk,$hey[0]);
        //         // dd($project->projectPhoto1);
        //         // dd($farm->farmPhoto);
        //         Storage::delete('public/project_images/'.$project->projectPhoto1);
        //     }
        // }

        $project->farmId = $project->farmId;
        $project->projectName = $request->input('projectName');
        $project->estdDate = $request->input('estdDate');
        $project->location = $request->input('location');
        $project->description = $request->input('description');

        $project->photo1Des = $request->input('photo1Des');
        $project->photo2Des = $request->input('photo2Des');
        $project->photo3Des = $request->input('photo3Des');
        $project->photo4Des = $request->input('photo4Des');

        if($request->hasFile('projectPhoto1')){
            $project->projectPhoto1 = $fileNameToStore;
        }
        if($request->hasFile('projectPhoto2')){
            $project->projectPhoto2 = $fileNameToStore2;
            // dd($fileNameToStore3);
        }
        if($request->hasFile('projectPhoto3')){
            $project->projectPhoto3 = $fileNameToStore3;
            // dd($fileNameToStore3);
        }
        if($request->hasFile('projectPhoto4')){
            $project->projectPhoto4 = $fileNameToStore4;
            // dd($fileNameToStore3);
        }
        $project->save();
        $no = $project->projectId;
        
        return redirect("/projects/$no")->with('success','Project Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Projects::find($id);
        if(! auth()->guard('admin')->check()){
            return redirect('/farms')-> with('error','Unauthorized Page');
        }

        Storage::deleteDirectory("public/project_images/$project->farmId".$project->projectName);

        $no = $project->farmId;
        $project->delete();
        return redirect("/farms/$no")->with('success','Project Deleted!');
    }
}
