<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use App\Materials;
use App\MaterialCompany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function createCategory(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ]);
        $object = new Category();
        $object->name = $request->input('name');
        $object->save();
        return redirect('/masquerade-park/showCategory');
    }

    public function createSubCategory(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'categoryId' => 'required'
        ]);
        
        $object = new Subcategory();
        $object->name = $request->input('name');
        $object->categoryId = $request->input('categoryId');
        $object->save();

        return redirect('/masquerade-park/showCategory');
    }

    public function createCompany(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'categories' => 'required',
            'photo1' => 'image|nullable',
        ]);

        if ($request->hasFile('photo1')) {
            $fileExt = $request
                ->file('photo1')
                ->getClientOriginalExtension();
            $fileNameToStore = 'company' . '_' . time() . '.' . $fileExt;
            $path = $request
                ->file('photo1')
                ->storeAs('public/company_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $obejct = new MaterialCompany();
        $obejct->companyId = time();
        $obejct->name = $request->input('name');
        $obejct->categories = $request->input('categories');
        $obejct->subcategories = $request->input('subcategories');
        $obejct->address = $request->input('address');
        $obejct->phone = $request->input('phone');
        $obejct->email = $request->input('email');
        $obejct->website = $request->input('website');
        $obejct->estd = $request->input('estd');
        $obejct->count = $request->input('count');
        
        if($request->input('description')){
            $text = $request->input('description');
            $len = strlen($text);
            $text = substr($text, 3, $len - 7);
            $obejct->description = $text;
        } else {
            $obejct->description = $request->input('description');
        }

        $obejct->photo1 = $fileNameToStore;
        $obejct->save();

        return redirect('/companies')->with('success', 'Company Added Successfully!');
    }

    public function editCompany($companyId){
        $company = MaterialCompany::find($companyId);
        if (
            !auth()
                ->guard('admin')
                ->check()
        ) {
            return redirect('/companies');
        }
        return view('adminPanel.material.editCompany')->with('company', $company);
    }

    public function updateCompany(Request $request, $companyId){
        $this->validate($request,[
            'name' => 'required',
            'categories' => 'required',
            'photo1' => 'image|nullable',
        ]);
        
        $company = MaterialCompany::find($companyId);

        if ($request->hasFile('photo1')) {
            $fileExt = $request
                ->file('photo1')
                ->getClientOriginalExtension();
            $fileNameToStore = 'companyUpdated' . '_' . time() . '.' . $fileExt;
            $path = $request
                ->file('photo1')
                ->storeAs('public/company_images', $fileNameToStore);
            
            if ($company->photo1 && $company->photo1 !== "noimage.jpg"){
                Storage::delete('public/company_images/'.$company->photo1);
            }
        }

        $company->name = $request->input('name');
        $company->categories = $request->input('categories');
        $company->subcategories = $request->input('subcategories');
        $company->address = $request->input('address');
        $company->phone = $request->input('phone');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $company->estd = $request->input('estd');
        $company->count = $request->input('count');
        
        if($request->input('description')){
            $text = $request->input('description');
            $len = strlen($text);
            $text = substr($text, 3, $len - 7);
            $company->description = $text;
        } else {
            $company->description = $request->input('description');
        }

        if ($request->hasFile('photo1')) {
            $company->photo1 = $fileNameToStore;
        }

        $company->save();

        return redirect('/companies')->with('success', 'Company Updated!');
    }

    public function destroyCompany($companyId){
        $company = MaterialCompany::find($companyId);
        if (
            !auth()
                ->guard('admin')
                ->check()
        ) {
            return redirect('/companies')->with('error', 'Unauthorized Page');
        }

        if ($company->photo1 !== 'noimage.jpg') {
            Storage::delete('public/company_images/' . $company->photo1);
        }
        $company->delete();

        return redirect('/companies')->with('success', 'Company Destroyed');
    }

    public function showCategory(){
        $subcategories = Category::with('subcategory')->get();
        $categories = Category::all();
        return view('adminPanel.material.categories')
                ->with('categories', $categories)
                ->with('subcategories', $subcategories);
    }

    public function addProduct($companyId)
    {
        $company = MaterialCompany::find($companyId);
        return view('adminPanel.material.addProducts')->with('company', $company);
    }

    public function createProduct(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'companyId' => 'required',
            'photo1' => 'image|nullable'
        ]);

        if($request->hasFile('photo1')){
            $fileExt = $request->file('photo1')->getClientOriginalExtension();
            $fileNameToStore = 'material'.'_'.time().'.'.$fileExt;
            $prothom = $request->input('companyId');
            $path = $request->file('photo1')->storeAs("public/material_images/$prothom",$fileNameToStore);
        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        $material = new Materials();
        $material->materialId = time();
        $material->companyId = $request->input('companyId');
        $material->name = $request->input('name');
        $material->price = $request->input('price');
        $material->avialable = $request->input('avialable');
        if($request->input('description')){
            $text = $request->input('description');
            $len = strlen($text);
            $text = substr($text, 3, $len - 7);
            $material->description = $text;
        } else {
            $material->description = $request->input('description');
        }
        $material->photo1 = $fileNameToStore;

        $routingMan = $request->input('companyId');
        $material->save();

        return redirect("/companies/$routingMan")->with('success','Successfully Uploaded Material!');
    }

    public function editProduct($productId){
        $material = Materials::find($productId);
        return view('adminPanel.material.editProducts')->with('material', $material);
    }

    public function updateProduct(Request $request,$productId){
        $this->validate($request,[
            'name' => 'required',
            'photo1' => 'image|nullable'
        ]);
        
        $material = Materials::find($productId);

        if ($request->hasFile('photo1')) {
            $fileExt = $request
                ->file('photo1')
                ->getClientOriginalExtension();
            $fileNameToStore = 'materialUpdate' . '_' . time() . '.' . $fileExt;
            
            $prothom = $material->companyId;
            $path = $request->file('photo1')
                ->storeAs("public/material_images/$prothom",$fileNameToStore);
            
            if ($material->photo1 && $material->photo1 !== "noimage.jpg"){
                Storage::delete("public/material_images/$prothom/".$material->photo1);
            }
        }

        $material->name = $request->input('name');
        $material->name = $request->input('name');
        $material->price = $request->input('price');
        $material->avialable = $request->input('avialable');
        if($request->input('description')){
            $text = $request->input('description');
            $len = strlen($text);
            $text = substr($text, 3, $len - 7);
            $material->description = $text;
        } else {
            $material->description = $request->input('description');
        }

        if ($request->hasFile('photo1')) {
            $material->photo1 = $fileNameToStore;
        }
        $routingMan = $material->companyId;
        $material->save();

        return redirect("/companies/$routingMan")->with('success', 'Material is successfully Updated!');
    }

    public function destroyProduct($productId){

        $material = Materials::find($productId);
        if (
            !auth()
                ->guard('admin')
                ->check()
        ) {
            return redirect("/companies/$material->companyId")->with('error', 'Unauthorized Page');
        }

        if ($material->photo1 && $material->photo1 !== 'noimage.jpg') {
            Storage::delete("public/material_images/$material->companyId/" . $material->photo1);
        }
        $routingMan = $material->companyId;
        $material->delete();

        return redirect("/companies/$routingMan")->with('success', 'Material is successfully Destroyed');
    }

}
