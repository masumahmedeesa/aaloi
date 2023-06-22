<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use App\Materials;
use App\MaterialCompany;
use Illuminate\Http\Request;

class MaterialPublicController extends Controller
{
    public function showCompanies(){
        $companies = MaterialCompany::orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::all();
        return view('materials.companyList')->with('companies', $companies)->with('categories', $categories);
    }

    public function showMaterials($companyId){
        $company = MaterialCompany::with('materials')
            ->where('companyId', $companyId)
            ->get();
        // dd($company[0]);
        return view('materials.singleCompany')->with('company', $company[0]);
    }

    public function showMaterial($companyId, $materialId){
        $material = Materials::find($materialId);
        $company = MaterialCompany::find($companyId);
        return view('materials.singleMaterial')->with('material', $material)->with('company',$company);
    }
}
