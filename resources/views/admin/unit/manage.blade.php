@extends('admin.master')
@section('title')
    Manage Unit
@endsection
@section('body')
    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>All Unit Info</h3>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SI NO</th>
                                <th>Unit Name</th>
                                <th>Unit code</th>
                                <th>Unit Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$unit->name}}</td>
                                    <td>{{$unit->code}}</td>
                                    <td>{{$unit->description}}</td>
                                    <td>{{$unit->status == 1 ? 'published' : 'unpublished'}}</td>
                                    <td>
                                        <a href="{{route('unit.edit',['id'=>$unit->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit" ></i>
                                        </a>
                                        <a href="{{route('unit.delete',['id'=>$unit->id])}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
