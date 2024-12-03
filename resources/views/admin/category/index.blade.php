@extends('admin.master')
@section('title')
    Add Page
@endsection
@section('body')
    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Add Category Form</h3>
                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <form action="{{route('category.new')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-md-9">
                                <textarea type="description" name="description" class="form-control"id="horizontal-firstname-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row md-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Image</label>
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
                                    <button type="submit" class="btn btn-primary w-md">Create New Category</button>
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
