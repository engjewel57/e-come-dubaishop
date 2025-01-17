@extends('admin.master')
@section('title')
    Edit Page
@endsection
@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 text-center">Edit Product Form</h4>
                <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                <form action="{{route('product.update',['id' => $product->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row mb-4">
                        <label for="" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id" required onchange="getSubCategory(this.value);">
                                <option value="" disabled selected>-- Select Category Name -- </option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                @endforeach

                            </select>
                            <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="" class="col-sm-3 col-form-label">sub Category Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="subcategory_id" required id="subCategoryId">
                                <option value="" disabled selected>-- Select Sub Category Name -- </option>
                                @foreach($subCategories as $sub_Category)
                                    <option value="{{$sub_Category->id}}" {{$sub_Category->id == $product->sub_category_id ? 'selected' : ''}}>{{$sub_Category->name}}</option>
                                @endforeach

                            </select>
                            <span class="text-danger">{{$errors->has('sub_category_id') ? $errors->first('sub_category_id') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="" class="col-sm-3 col-form-label">Brand Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="brand_id" required>
                                <option value="" disabled selected>-- Select Brand Name -- </option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' : ''}}>{{$brand->name}}</option>
                                @endforeach

                            </select>
                            <span class="text-danger">{{$errors->has('brand_id') ? $errors->first('brand_id') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="" class="col-sm-3 col-form-label">Unit Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="unit_id" required>
                                <option value="" disabled selected>-- Select Unit Name -- </option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}" {{$unit->id == $product->unit_id ? 'selected' : ''}}>{{$unit->name}}</option>
                                @endforeach

                            </select>
                            <span class="text-danger">{{$errors->has('unit_id') ? $errors->first('unit_id') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="{{$product->name}}" class="form-control" id="horizontal-firstname-input">
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product code</label>
                        <div class="col-sm-9">
                            <input type="text" name="code" value="{{$product->code}}" class="form-control" id="horizontal-firstname-input">
                            <span class="text-danger">{{$errors->has('code') ? $errors->first('code') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Regular Price</label>
                        <div class="col-sm-9">
                            <input type="number" name="regular_price" value="{{$product->regular_price}}" class="form-control" id="horizontal-firstname-input">
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Selling Price</label>
                        <div class="col-sm-9">
                            <input type="number" name="selling_price" value="{{$product->selling_price}}" class="form-control" id="horizontal-firstname-input">
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Stock Price</label>
                        <div class="col-sm-9">
                            <input type="number" name="stock_amount" value="{{$product->stock_amount}}" class="form-control" id="horizontal-firstname-input">
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                            <textarea  name="short_description" class="form-control" id="horizontal-email-input">{{$product->short_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Long Description</label>
                        <div class="col-sm-9">
                            <textarea  name="long_description" class="form-control summernote" id="horizontal-email-input">{{$product->long_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 ">Product Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file" id="horizontal-password-input" accept="image/*">
                            <img src="{{asset($product->image)}}" alt="" height="100" width="60"/>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 ">Product Sub Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="sub_image[]" class="form-control-file" id="horizontal-password-input" accept="image/*" multiple>
                            @foreach($product->subImages as $subImage)
                                <img src="{{asset($subImage->image)}}" alt="" height="100" width="60">
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="" class="col-sm-3 ">Publication</label>
                        <div class="col-sm-9">
                            <label class="mr-3"><input type="radio" name="status" {{$product->status == 1 ? 'checked' : ''}} value="1" />published</label>
                            <label><input type="radio" name="status" {{$product->status == 0 ? 'checked' : ''}} value="0" />unpublished</label>
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">


                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update Product Info</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
