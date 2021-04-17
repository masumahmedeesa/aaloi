<?php

namespace App\Http\Controllers;

use App\Materials;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function index()
    {
        return view('materials.materialList');
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($materials)
    {
        return view('materials.singleMaterial');
    }

    public function edit(Materials $materials)
    {
        //
    }

    public function update(Request $request, Materials $materials)
    {
        //
    }

    public function destroy(Materials $materials)
    {
        //
    }
}
