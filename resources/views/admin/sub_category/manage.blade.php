
@extends('admin.master')
@section('title')
    Manage SubCategory
@endsection
@section('body')
    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>All SubCategory Info</h3>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SI NO</th>
                                <th>Category Name</th>
                                <th>SubCategory Name</th>
                                <th>SubCategory Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subCategories as $sub_Category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$sub_Category->category->name}}</td>
                                    <td>{{$sub_Category->name}}</td>
                                    <td>{{$sub_Category->description}}</td>
                                    <td><img src="{{asset($sub_Category->image)}}" alt="" height="70" width="90"></td>
                                    <td>{{$sub_Category->status == 1 ? 'published' : 'unpublished'}}</td>
                                    <td>
                                        <a href="{{route('sub_category.edit',['id'=>$sub_Category->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit" ></i>
                                        </a>
                                        <a href="{{route('sub_category.delete',['id'=>$sub_Category->id])}}" class="btn btn-danger btn-sm">
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
