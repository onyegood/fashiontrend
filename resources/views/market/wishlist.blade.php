@extends('layouts.app')

@section('content')

    <div class="pages wishlist-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart-page-container wishlist-page-container fix">
                        <div class="cart-page-title wishlist-page-title text-center">
                            <h1>Wishlist</h1>
                        </div>

                        <form action="#" id="cart-form">
                            <div class="table-responsive">
                                <fieldset>
                                    <table class="table-cart table-wishlist data-table table" id="shopping-cart-table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Items</th>
                                            <th>Price</th>
                                            <th>Stock Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="cart-remove">
                                                    <i class="mo-cross-rounde"></i>
                                                </a>
                                            </td>
                                            <td><div class="cart-items fix">
                                                    <a href="#" class="cart-image">
                                                        <img src="{{ asset('img/cart-product/2.jpg') }}" alt="" />
                                                    </a>
                                                    <div class="cart-item-content fix">
                                                        <h3 class="title"><a href="#">Popline Tops</a></h3>
                                                        <span>Size : <strong>M</strong></span>
                                                        <span>Color : <strong>Dark Blue</strong></span>
                                                    </div>
                                                </div></td>
                                            <td><span class="cart-price">$ 238</span></td>
                                            <td ><span class="stock-status">In Stock</span></td>
                                            <td><div class="add-cart"><button class="add-cart-btn">Add to Cart</button></div></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection