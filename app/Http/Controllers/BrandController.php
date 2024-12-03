<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {

        return view('admin.brand.index');
    }
    public function create(Request $request)
    {
    Brand::newBrand($request);
    return redirect('/add-brand')->with('message','Brand Create Successfully');
    }
    public function manage()
    {
        $this->brand=Brand::all();
        return view('admin.brand.manage',['brands'=>$this->brand]);
    }
    public function edit($id)
    {
       $this->brand=Brand::find($id);
       return view('admin.brand.edit',['brand'=>$this->brand]);
    }
    public function update(Request$request,$id)
    {
        Brand::updateBrand($request,$id);
        return redirect('/manage-brand')->with('message','brand Update Successfully');
    }
    public function delete($id)
    {
        Brand::deleteBrand($id);
        return redirect('manage-brand');
    }
}
