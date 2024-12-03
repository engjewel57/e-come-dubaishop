@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('body')
    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>All Category Info</h3>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SI NO</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                @csrf
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td><img src="{{asset($category->image)}}" alt="" height="80" width="90"></td>
                                <td>{{$category->stutas == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit" ></i>
                                    </a>
                                    <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger btn-sm">
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
