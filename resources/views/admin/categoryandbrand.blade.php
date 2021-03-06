@extends('layouts.adminlayout')

@section('content')
    @if(Session::has('msg'))
        <div class="alert alert-success">{{ Session::get('msg') }}</div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0 text-center">Product Category</h3>
                <div class="row">
                    <div class="col-sm-5 col-xs-5">
                        <form action="{{ route('addcategory') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="categoryName">Category Name</label>

                                <div class=" {{ $errors->has('categoryName') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" name="categoryName" placeholder="Category Name">
                                </div>
                                @if ($errors->has('categoryName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoryName') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        </form>
                    </div>

                    <div class="col-sm-7 col-xs-7">
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($cat as $cats)

                                <tr>

                                    <td>{{ $i++ }}</td>
                                    <td>{{ $cats->categoryName }}</td>
                                    <td><a href="{{ route('editcategory', $cats->id) }}">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Are you sure you want to delete this item?')"
                                                href=" {{ route('deletecate', $cats->id) }}">
                                            <i class="fa fa-close"></i>
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
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0 text-center">Product Brand</h3>
                <div class="row">
                    <div class="col-sm-5 col-xs-5">

                        <form action="{{ route('addbrand') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="categoryName">Brand Name</label>

                                <div class=" {{ $errors->has('brandName') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" name="brandName" placeholder="Brand Name">
                                </div>
                                @if ($errors->has('brandName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brandName') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        </form>

                    </div>
                    <div class="col-sm-7 col-xs-7">
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($brd as $brds)
                                    <tr>

                                        <td>{{ $i++ }}</td>
                                        <td>{{ $brds->brandName }}</td>
                                        <td><a href="{{ route('editbrand', $brds->id) }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a onclick="confirm('Are sure you want to delete this item?')"
                                                    href="{{ route('deletebrd', $brds->id) }}">
                                                <i class="fa fa-close"></i>
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
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0 text-center">Product Color</h3>
                <div class="row">
                    <div class="col-sm-5 col-xs-5">
                        <form action="{{ route('addcolor') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="colorName">Color</label>

                                <div class=" {{ $errors->has('colorName') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" name="colorName" placeholder="Color">
                                </div>
                                @if ($errors->has('colorName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('colorName') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        </form>
                    </div>
                    <div class="col-sm-7 col-xs-7">
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($col as $cols)

                                    <tr>

                                        <td>{{ $i++ }}</td>
                                        <td>{{ $cols->colorName }}</td>
                                        <td><a href="{{ route('editcolor', $cols->id) }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a onclick="confirm('Are you sure you want to delete this item?')"
                                                    href="{{ route('deletecolor', $cols->id) }}">
                                                <i class="fa fa-close"></i>
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
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0 text-center">Product Category</h3>
                <div class="row">
                    <div class="col-sm-5 col-xs-5">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="categoryName">Category Name</label>

                                <div class="">
                                    <input type="text" class="form-control" id="categoryName" placeholder="Category Name">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        </form>
                    </div>
                    <div class="col-sm-7 col-xs-7">
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cat Name</td>
                                    <td><a href="#">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                    <td><a href="#">
                                            <i class="fa fa-close"></i></a></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection