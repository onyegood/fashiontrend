@extends('layouts.adminlayout')

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <div class="">
                    <h2 class="m-b-0 m-t-0">{{ $prd->productName }}</h2>
                    <small class="text-muted db">Reseller Name</small>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="white-box text-center">
                                <img src="{{ asset('adminassets/plugins/images/chair.jpg') }}" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-6">
                            <h4 class="box-title m-t-40">Product description</h4>

                            {{ $prd->description }}

                            <h2 class="m-t-40">{{ $prd->price }} <small class="text-success">(0% off)</small></h2>

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3 class="box-title m-t-40">General Info</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td width="390">Brand</td>
                                        <td> {{ $prd->brandName }} </td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td> {{ $prd->quantity }} </td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td> {{ $prd->categoryName }} </td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>{{ $prd->colorName }} </td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td> {{ $prd->size }} </td>
                                    </tr>
                                    <tr>
                                        <td>Tag</td>
                                        <td> {{ $prd->tag }} </td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td> {{ $prd->created_at }} </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection