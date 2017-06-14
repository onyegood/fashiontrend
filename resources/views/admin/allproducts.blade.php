@extends('layouts.adminlayout')

@section('content')
    @if(Session::has('msg'))
        <div class="alert alert-success">{{ Session::get('msg') }}</div>
    @endif
    <!--===Used chunk(4) to display 4 items in a row====--->
    @foreach($prod->chunk(4) as $products)
    <div class="row">
        <!--===Loop through product table to display all products====--->
        @foreach($products as $item)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="white-box">
                    <div class="product-img">
                        <img src="{{ asset($item->img1) }}"/>
                        <div class="pro-img-overlay">
                            <a href="{{ url('/admin/product/detail',$item->id) }}" class="bg-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ url('/admin/product/edit-product',$item->id) }}" class="bg-info">
                                <i class="ti-marker-alt"></i>
                            </a>
                            <a onclick="return confirm('Are you sure you want to delete this item?')"
                               href="{{ url('/admin/product/delete-product',$item->id) }}" class="bg-danger">
                                <i class="ti-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <span class="pro-price bg-danger">{{ $item->price }}</span>
                        <h3 class="box-title m-b-0">{{ $item->productName }}</h3>


                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        @endforeach
    </div>
    @endforeach


@endsection