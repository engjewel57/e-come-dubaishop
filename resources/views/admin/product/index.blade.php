@extends('admin.master')
@section('title')
    Add Product
@endsection
@section('body')
    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Add Category Form</h3>
                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <form action="{{route('product.new')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category_id" required onchange="getSubCategory(this.value);">
                                        <option value="" disabled selected>-- Select Category Name -- </option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Sub Category Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="subCategory_id" required id="subCategoryId">
                                        <option value="" disabled selected>-- Select SubCategory Name -- </option>
                                         @foreach($subCategories as $sub_Category)
                                            <option value="{{$sub_Category->id}}">{{$sub_Category->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{$errors->has('subCategory_id') ? $errors->first('subCategory_id') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Brand Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="brand_id" required id="brandId">
                                        <option value="" disabled selected>-- Select Brand Name -- </option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{$errors->has('brand_id') ? $errors->first('brand_id') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Unit Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="unit_id" required>
                                        <option value="" disabled selected>-- Select Unit Name -- </option>
                                        @foreach($units as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{$errors->has('unit_id') ? $errors->first('unit_id') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                                    <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Code</label>
                                <div class="col-md-9">
                                    <input type="text" name="code" class="form-control" id="horizontal-firstname-input">
                                    <span class="text-danger">{{$errors->has('code') ? $errors->first('code') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Regular Price</label>
                                <div class="col-md-9">
                                    <input type="number" name="regular_price" class="form-control" id="horizontal-firstname-input">
                                    <span class="text-danger">{{$errors->has('regular_price') ? $errors->firest('regular_price') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Selling Price</label>
                                <div class="col-md-9">
                                    <input type="number" name="selling_price" class="form-control" id="horizontal-firstname-input">
                                    <span class="text-danger">{{$errors->has('selling_price') ? $errors->firest('selling_price') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Stock Price</label>
                                <div class="col-md-9">
                                    <input type="number" name="stock_amount" class="form-control" id="horizontal-firstname-input">
                                    <span class="text-danger">{{$errors->has('stock_amount') ? $errors->firest('stock_amount') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Short Description</label>
                                <div class="col-md-9">
                                    <textarea  name="short_description" class="form-control " id="horizontal-firstname-input"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Long Description</label>
                                <div class="col-md-9">
                                    <textarea name="long_description" class="form-control summernote" id="summernote"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 ">Product Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control-file" id="horizontal-password-input" accept="image/*">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 ">Product Sub Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="sub_image[]" class="form-control-file" id="horizontal-password-input" accept="image/*" multiple>
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
