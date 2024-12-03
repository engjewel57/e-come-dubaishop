<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $categories;
    private $subCategories;
    public function index()
    {
        $this->categories=Category::all();
        return view('admin.sub_category.index',['categories'=>$this->categories]);
    }
    public function create(Request $request)
    {
     $request->validate([
         'name'=>'required|unique:sub_categories'
     ]);
     SubCategory::newSubCategory($request);
     return redirect()->back()->with('message','SubCategory Create Add Successfully');
    }
    public function manage()
    {
        $this->subCategories=SubCategory::all();
        return view('admin.sub_category.manage',['subcategories'=> $this->subCategories]);
    }
    public function edit($id)
    {
        $this->category=SubCategory::find($id);
        return view('admin.sub_category.edit',['category'=>$this->category]);
    }
    public function update(Request $request,$id)
    {
        SubCategory::updateSubCategory($request,$id);
        return redirect('/manage-sub_category')->with('message','subCategory Info Successfully');
    }
    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('manage-sub_category');
    }
}
