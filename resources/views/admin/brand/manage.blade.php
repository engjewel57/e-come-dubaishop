@extends('admin.master')
@section('title')
    Add Brand Page
@endsection
@section('body')
    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>All Brand Info</h3>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SI NO</th>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                @csrf
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$brand->name}}</td>
                                    <td>{{$brand->description}}</td>
                                    <td><img src="{{asset($brand->image)}}" alt="" height="80" width="90"></td>
                                    <td>{{$brand->stutas == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('brand.edit',['id'=>$brand->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit" ></i>
                                        </a>
                                        <a href="{{route('brand.delete',['id'=>$brand->id])}}" class="btn btn-danger btn-sm">
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
