<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.unit.index');
    }
    public function create(Request$request)
    {
        Unit::newUnit($request);
        return redirect('/add-unit')->with('message','Unit Create Successfully');
    }
    public function manage()
    {
        $this->units=Unit::all();
        return view('admin.unit.manage',['units'=>$this->units]);
    }
    public function edit($id)
    {
        $this->unit=Unit::find($id);
       return view('admin.unit.edit',['unit'=>$this->unit]);
    }
    public function update(Request $request,$id)
    {
        Unit::updateUnit($request,$id);
        return redirect('manage-unit')->with('message','Unit update Successfully');
    }
    public function delete($id)
    {
        Unit::deleteUnit($id);
        return redirect('/manage-unit');
    }
}
