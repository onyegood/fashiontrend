@extends('layouts.adminlayout')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Edit Product</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{ route('editnow',$prd->id) }}" method="post" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h3 class="box-title">About Product</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('productName') ? ' has-error' : '' }}">
                                            <label class="control-label">Product Name</label>
                                            <input type="text" name="productName" class="form-control"
                                                   value="{{ $prd->productName }}">

                                            @if ($errors->has('productName'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('productName') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('colorName') ? ' has-error' : '' }}">
                                            <label class="control-label">Color</label>
                                            <select class="form-control" name="colorName"
                                                    data-placeholder="Choose a color" tabindex="1">
                                                <option value="">[Select]</option>
                                                <option value="Blue">Blue</option>
                                                <option value="Orange">Orange</option>
                                                <option value="Green">Green</option>
                                                <option value="White">White</option>
                                            </select>
                                            @if ($errors->has('colorName'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('colorName') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('quantity') ? ' has-error' : '' }}">
                                            <label class="control-label">Quantity</label>
                                            <select class="form-control" name="quantity"
                                                    data-placeholder="Choose a Brand" tabindex="1">
                                                <option value="">[Select]</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                            @if ($errors->has('quantity'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('quantity') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('categoryName') ? ' has-error' : '' }}">
                                            <label class="control-label">Category</label>
                                            <select class="form-control" name="categoryName" data-placeholder="Choose a Category" tabindex="1">

                                                <option value="">[Select]</option>

                                                @foreach($cat as $cats)

                                                    <option value="{{ $cats->categoryName }}">{{ $cats->categoryName }}</option>

                                                @endforeach

                                            </select>
                                            @if ($errors->has('categoryName'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('categoryName') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('brandName') ? ' has-error' : '' }}">
                                            <label class="control-label">Brand</label>
                                            <select class="form-control" name="brandName" data-placeholder="Choose a Brand" tabindex="1">

                                                <option value="">[Select]</option>

                                                @foreach($brd as $brds)

                                                    <option value="{{ $brds->brandName }}">{{ $brds->brandName }}</option>

                                                @endforeach

                                            </select>
                                            @if ($errors->has('brandName'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('brandName') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                                            <label class="control-label">Status</label>
                                            <div class="radio-list">
                                                <label class="radio-inline p-0">
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="status" id="radio1" value="Available">
                                                        <label for="radio1">Available</label>
                                                    </div>
                                                </label>
                                                <label class="radio-inline">
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="status" id="radio2" value="Out of Stock">
                                                        <label for="radio2">Out of Stock</label>
                                                    </div>
                                                </label>
                                            </div>
                                            @if ($errors->has('status'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="clearfix"></div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <div class="input-group {{ $errors->has('price') ? ' has-error' : '' }}">
                                                <div class="input-group-addon">
                                                    &#8358;
                                                </div>
                                                <input type="text" name="price" value="{{ $prd->price }}"
                                                       class="form-control">

                                                @if ($errors->has('price'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('price') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('oldPrice') ? ' has-error' : '' }}">
                                            <label>Old Price</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    &#8358;
                                                </div>
                                                <input type="text" name="oldPrice" class="form-control"
                                                       value="{{ $prd->oldPrice }}">

                                                @if ($errors->has('oldPrice'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('oldPrice') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <h3 class="box-title m-t-40">Product Description</h3>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                            <textarea class="form-control" rows="4" name="description">

                                               {{ $prd->description }}

                                            </textarea>

                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('size') ? ' has-error' : '' }} ">
                                            <label>Size</label>
                                            <select class="form-control" name="size" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="">[Select Size]</option>
                                                <option value="S">S</option>
                                                <option value="L">L</option>
                                                <option value="M">M</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                            </select>

                                            @if ($errors->has('size'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('size') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('tag') ? ' has-error' : '' }}">
                                            <label>Tags</label>
                                            <input type="text" name="tag" class="form-control" value="{{ $prd->tag }}">

                                            @if ($errors->has('tag'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('tag') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">

                                        <div class="product-img">
                                            <img src="{{ asset($prd->img1) }} ">
                                            <div class="pro-img-overlay">
                                                <a href="javascript:void(0)" class="bg-info">
                                                    <i class="ti-marker-alt"></i></a>
                                                <a href="javascript:void(0)" class="bg-danger">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </div>
                                            <div class="fileupload btn btn-info waves-effect waves-light">
                                                <span>
                                                    <i class="ion-upload m-r-5"></i>
                                                    Upload Image
                                                </span>
                                                <input type="file" name="img1" class="upload">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                        <div class="product-img">
                                            <img src="{{ asset($prd->img2) }} ">
                                            <div class="pro-img-overlay">
                                                <a href="javascript:void(0)" class="bg-info">
                                                    <i class="ti-marker-alt"></i></a>
                                                <a href="javascript:void(0)" class="bg-danger">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </div>
                                            <div class="fileupload btn btn-info waves-effect waves-light">
                                                <span>
                                                    <i class="ion-upload m-r-5"></i>
                                                    Upload Image
                                                </span>
                                                <input type="file" name="img2" class="upload">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-img">
                                            <img src="{{ asset($prd->img3) }} ">
                                            <div class="pro-img-overlay">
                                                <a href="javascript:void(0)" class="bg-info">
                                                    <i class="ti-marker-alt"></i></a>
                                                <a href="javascript:void(0)" class="bg-danger">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </div>
                                            <div class="fileupload btn btn-info waves-effect waves-light">
                                                <span>
                                                    <i class="ion-upload m-r-5"></i>
                                                    Upload Image
                                                </span>
                                                <input type="file" name="img3" class="upload">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-img">
                                            <img src="{{ asset($prd->img4) }} ">
                                            <div class="pro-img-overlay">
                                                <a href="javascript:void(0)" class="bg-info">
                                                    <i class="ti-marker-alt"></i></a>
                                                <a href="javascript:void(0)" class="bg-danger">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </div>
                                            <div class="fileupload btn btn-info waves-effect waves-light">
                                                <span>
                                                    <i class="ion-upload m-r-5"></i>
                                                    Upload Image
                                                </span>
                                                <input type="file" name="img4" class="upload">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-img">
                                            <img src="{{ asset($prd->img5) }} ">
                                            <div class="pro-img-overlay">
                                                <a href="javascript:void(0)" class="bg-info">
                                                    <i class="ti-marker-alt"></i></a>
                                                <a href="javascript:void(0)" class="bg-danger">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </div>
                                            <div class="fileupload btn btn-info waves-effect waves-light">
                                                <span>
                                                    <i class="ion-upload m-r-5"></i>
                                                    Upload Image
                                                </span>
                                                <input type="file" name="img5" class="upload">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </div>

                            <div class="form-actions m-t-40">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check"></i>
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection