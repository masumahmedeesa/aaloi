<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

      return view('userPanel.home');
    }

    public function mainPage(){
        return view('homes.index');
    }

    public function aboutPage(){
        return view('homes.about');
    }

    public function servicesPage(){
        return view('homes.services');
    }

    public function projectsPage(){
        return view('homes.projects');
    }

    // public function farmsList(){
    //     return view('farms.farmsList');
    // }

    // public function farm(){
    //     return view('farms.farm');
    // }
}
