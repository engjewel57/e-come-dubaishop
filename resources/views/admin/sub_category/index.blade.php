@extends('admin.master')
@section('title')
    Add SubCategory
@endsection
@section('body')
    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Add Category Form</h3>
                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <form action="{{route('sub_category.new')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category_id" required>
                                        <option value="" disabled selected>-- Select Category Name -- </option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Sub_Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                                    <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Sub_Category Description</label>
                                <div class="col-md-9">
                                    <textarea type="description" name="description" class="form-control"id="horizontal-firstname-input"></textarea>
                                </div>
                            </div>
                            <div class="form-group row md-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Sub_Category Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image"  id="horizontal-fiestname-input">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="" class="col-sm-3 ">Publication</label>
                                <div class="col-sm-9">
                                    <label class="mr-3"><input type="radio" name="status" value="1" checked />published</label>
                                    <label><input type="radio" name="status" value="0" />unpublished</label>
                                </div>
                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Create New SubCategory</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
