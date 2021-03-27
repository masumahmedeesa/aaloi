<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\User;
use App\Farm;
use App\Teams;
use App\Projects;

class FarmsController extends Controller
{
    public function index()
    {
        $farms = Farm::orderBy('created_at', 'desc')->paginate(10);
        return view('farms.farmsList')->with('farms', $farms);
    }

    public function create()
    {
        // return view('adminPanel.addFarms');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'farmName' => 'required',
            'farmPhoto' => 'image|nullable|max:3999',
        ]);

        if ($request->hasFile('farmPhoto')) {
            $filenameWithExt = $request
                ->file('farmPhoto')
                ->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $fileExt = $request
                ->file('farmPhoto')
                ->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $fileExt;
            $path = $request
                ->file('farmPhoto')
                ->storeAs('public/farm_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $farm = new Farm();
        $farm->farmName = $request->input('farmName');
        $farm->farmType = $request->input('farmType');
        $farm->farmManager = $request->input('farmManager');
        $farm->farmConsultant = $request->input('farmConsultant');
        $farm->farmContactInformation = $request->input(
            'farmContactInformation'
        );
        $farm->farmPhone = $request->input('farmPhone');
        $farm->farmEmail = $request->input('farmEmail');
        $farm->farmAwards = $request->input('farmAwards');
        $farm->farmTasks = $request->input('farmTasks');

        $farm->farmTasksOn = $request->input('farmTasksOn');
        $farm->farmWebsite = $request->input('farmWebsite');
        $farm->farmFacebook = $request->input('farmFacebook');
        $farm->farmEstd = $request->input('farmEstd');

        $farm->farmPhoto = $fileNameToStore;

        // dd($farm);
        $farm->save();

        return redirect('/farms')->with(
            'success',
            'Successfully Created FARM!'
        );
    }

    public function show($farmId)
    {
        $farm = Farm::find($farmId);
        
        $projects = DB::table('projects')
            ->Where('farmId', $farmId)
            ->paginate(10);
        $teams = DB::table('teams')
            ->Where('farmId', $farmId)
            ->get();
        // dd($teams);
        return view('farms.farm')
            ->with('farm', $farm)
            ->with('projects', $projects)
            ->with('teams', $teams);
    }

    public function edit($id)
    {
        $farm = Farm::find($id);
        if (
            !auth()
                ->guard('admin')
                ->check()
        ) {
            return redirect('/farms');
        }
        return view('adminPanel.editFarms')->with('farm', $farm);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'farmName' => 'required',
            'farmPhoto' => 'image|nullable|mimes:jpeg,jpg,png|max:5999',
        ]);
        // $ffname;

        //handle the file
        if ($request->hasFile('farmPhoto')) {
            //Get the file with Extension
            $filenameWithExt = $request
                ->file('farmPhoto')
                ->getClientOriginalName();
            //Just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Just Extension
            $fileExt = $request
                ->file('farmPhoto')
                ->getClientOriginalExtension();
            //Filename to Store
            $fileNameToStore = $filename . '_' . time() . '.' . $fileExt;
            // $ffname = $filename;
            //Upload file
            $path = $request
                ->file('farmPhoto')
                ->storeAs('public/farm_images', $fileNameToStore);
        }

        $farm = Farm::find($id);
        // $hey = explode(".",$farm->farmPhoto);
        // if($ffname !== $hey[0]){
        //     // dd($ffname,$hey[0]);
        //     // dd($farm->farmPhoto);
        //     Storage::delete('public/farm_images/'.$farm->farmPhoto);
        // }

        $farm->farmName = $request->input('farmName');
        $farm->farmType = $request->input('farmType');
        $farm->farmManager = $request->input('farmManager');
        $farm->farmConsultant = $request->input('farmConsultant');
        $farm->farmContactInformation = $request->input(
            'farmContactInformation'
        );
        $farm->farmPhone = $request->input('farmPhone');
        $farm->farmEmail = $request->input('farmEmail');
        $farm->farmAwards = $request->input('farmAwards');
        $farm->farmTasks = $request->input('farmTasks');

        $farm->farmTasksOn = $request->input('farmTasksOn');
        $farm->farmWebsite = $request->input('farmWebsite');
        $farm->farmFacebook = $request->input('farmFacebook');
        $farm->farmEstd = $request->input('farmEstd');

        if ($request->hasFile('farmPhoto')) {
            $farm->farmPhoto = $fileNameToStore;
        }
        $farm->save();

        return redirect('/farms')->with('success', 'Farm Updated!');
    }

    public function destroy($id)
    {
        $farm = Farm::find($id);
        if (
            !auth()
                ->guard('admin')
                ->check()
        ) {
            return redirect('/farms')->with('error', 'Unauthorized Page');
        }
        if ($farm->farmPhoto !== 'noimage.jpg') {
            //Delete the image
            Storage::delete('public/farm_images/' . $farm->farmPhoto);
        }
        $farm->delete();
        return redirect('/farms')->with('success', 'Farm Destroyed');
    }

    public function addProject($id)
    {
        $farm = Farm::find($id);
        // dd($farm);
        return view('adminPanel.addProjects')->with('farm', $farm);
    }

    public function addTeams($id)
    {
        $farm = Farm::find($id);
        // dd($farm);
        return view('adminPanel.addTeams')->with('farm', $farm);
    }
}
