<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
    public function create(Request $request)
    {
     Category::newCategory($request);
     return redirect('/add-category',)->with('message','Category Create Successfully');
    }
    public function manage()
    {
        $this->category=Category::all();
        return view('admin.category.manage',['categories'=>$this->category]);
    }
    public function edit($id)
    {
        $this->category=Category::find($id);
        return view('admin.sub_category.edit',['category'=>$this->category]);
    }
    public function update(Request$request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('/manage-category')->with('message','Category Update Successfully');
    }
    public function delete($id)
    {
     Category::deleteCategory($id);
     return redirect('manage-category');
    }
}
