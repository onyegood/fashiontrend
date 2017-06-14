@extends('layouts.app')
@section('content')
    <div class="shop-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12 shop-sidebar">
                    <!-- Shop Single Sidebar Category -->
                    <div class="sin-shop-sidebar">
                        <div class="title fix">
                            <h4>Categories</h4>
                            <a href="#">all</a>
                        </div>
                        <!-- treeview start -->
                        <div id="cat-treeview" class="product-cat">
                            <ul>
                                <li class="closed"><a href="#">Men</a>
                                    <ul>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">Striped Shirts</a></li>
                                        <li><a href="#">Half Shirts</a></li>
                                        <li><a href="#">Formal Shirts</a></li>
                                        <li><a href="#">Bilazers</a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Jeans</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">WoMen</a>
                                    <ul>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">Striped Shirts</a></li>
                                        <li><a href="#">Half Shirts</a></li>
                                        <li><a href="#">Formal Shirts</a></li>
                                        <li><a href="#">Bilazers</a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Jeans</a></li>
                                    </ul>
                                </li>
                                <li class="open"><a href="#">Accessories</a>
                                    <ul>
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li><a href="#">Utilities</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Jewelry</a>
                                    <ul>
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li><a href="#">Utilities</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Shop Single Sidebar Price -->
                    <div class="sin-shop-sidebar">
                        <div class="title fix">
                            <h4>Price</h4>
                        </div>
                        <!-- Price Range Slide -->
                        <div class="price-range-wrap">
                            <p>You Range<input type="text" id="price-amount" readonly></p>
                            <div id="slider-range"></div>
                        </div>
                    </div>
                    <!-- Shop Single Sidebar Colors -->
                    <div class="sin-shop-sidebar">
                        <div class="title fix">
                            <h4>Colors</h4>
                            <a href="#">all</a>
                        </div>
                        <!-- Product Color -->
                        <div class="product-color">
                            <ul>
                                <li><a href="#"><span class="color color-black"></span> Black</a></li>
                                <li><a href="#"><span class="color color-pink"></span> Pink</a></li>
                                <li><a href="#"><span class="color color-blue"></span> Blue</a></li>
                                <li><a href="#"><span class="color color-gold"></span> Gold</a></li>
                                <li><a href="#"><span class="color color-brown"></span> Brown</a></li>
                                <li><a href="#"><span class="color color-purple"></span> Purple</a></li>
                                <li><a href="#"><span class="color color-green"></span> Green</a></li>
                                <li><a href="#"><span class="color color-red"></span> Red</a></li>
                                <li><a href="#"><span class="color color-orange"></span> Orange</a></li>
                                <li><a href="#"><span class="color color-white"></span> White</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Shop Single Sidebar Size -->
                    <div class="sin-shop-sidebar">
                        <div class="title fix">
                            <h4>Clothing Sizes</h4>
                            <a href="#">all</a>
                        </div>
                        <!-- Product Size -->
                        <div class="product-sizes">
                            <ul>
                                <li><a href="#">s</a></li>
                                <li><a href="#">m</a></li>
                                <li><a href="#">l</a></li>
                                <li><a href="#">xl</a></li>
                                <li><a href="#">xxl</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Shop Single Sidebar Brands -->
                    <div class="sin-shop-sidebar">
                        <div class="title fix">
                            <h4>Brands</h4>
                            <a href="#">all</a>
                        </div>
                        <!-- Product Brands -->
                        <div class="product-brand">
                            <ul>
                                <li><a href="#">Armani Jeans</a></li>
                                <li><a href="#">Ecko Untld.</a></li>
                                <li><a href="#">Custo</a></li>
                                <li><a href="#">Caramell</a></li>
                                <li><a href="#">Addidas</a></li>
                                <li><a href="#">Gucci</a></li>
                                <li><a href="#">Polo</a></li>
                                <li><a href="#">Armani Jeans</a></li>
                                <li><a href="#">Ecko Untld.</a></li>
                                <li><a href="#">Custo</a></li>
                                <li><a href="#">Caramell</a></li>
                                <li><a href="#">Addidas</a></li>
                                <li><a href="#">Gucci</a></li>
                                <li><a href="#">Polo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 shop-products">
                    <div class="row">
                        <!-- Top Tool Bar -->
                        <div class="col-xs-12">
                            <div class="shop-top-toolbar">
                                <ul class="view-mode float-left">
                                    <li class="active"><a href="#grid-view" data-toggle="tab"><i class="mo-grid"></i></a></li>
                                    <li><a href="#list-view" data-toggle="tab"><i class="mo-list"></i></a></li>
                                </ul>
                                <p class="float-right">Showing 1–9 of 17 results</p>
                            </div>
                        </div>
                        <div class="tab-content col-xs-12">
                            <div class="tab-pane row active" id="grid-view">
                                <!-- Single Product -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="sin-product">
                                        <!-- Product Image -->
                                        <div class="pro-image">
                                            <a href="#">
                                                <img src="{{ asset('img/product/6.jpg') }}" alt="product" />
                                            </a>
                                            <!-- Product Hover Content -->
                                            <div class="pro-hover fix" style="background-image: url('img/product/6.jpg');">
                                                <!-- Product Hover Action -->
                                                <div class="pro-hover-action animated text-center">
                                                    <button class="add-cart pro-action">
                                                        <i class="mo-cart"></i>
                                                    </button>
                                                    <a href="#quick-view" class="quick-view pro-action" data-toggle="modal">
                                                        <i class="mo-eye"></i>
                                                    </a>
                                                    <button class="wishlist pro-action"><i class="mo-heart"></i></button>
                                                </div>
                                                <!-- Product Hover Options -->
                                                <div class="pro-hover-option">
                                                    <!-- product Size -->
                                                    <div class="pro-size fix">
                                                        <h4>Sizes:</h4>
                                                        <ul>
                                                            <li>s</li>
                                                            <li>xs</li>
                                                            <li>m</li>
                                                            <li>l</li>
                                                            <li>xl</li>
                                                            <li>xxl</li>
                                                        </ul>
                                                    </div>
                                                    <!-- product Color -->
                                                    <div class="pro-color fix">
                                                        <h4>Colors:</h4>
                                                        <ul>
                                                            <li class="blue">b</li>
                                                            <li class="orange">o</li>
                                                            <li class="green">g</li>
                                                            <li class="purple">p</li>
                                                            <li class="pink">p</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content -->
                                        <div class="pro-content">
                                            <div class="top fix">
                                                <h3><a href="#">Settle Jute Bag</a></h3>
                                                <p class="price float-right">$ 256</p>
                                            </div>
                                            <div class="bottom fix">
                                                <a href="#" class="pro-cat float-left">Utilites</a>
                                                <div class="ratting float-right">
                                                    <i class="mo-star star active"></i>
                                                    <i class="mo-star star active"></i>
                                                    <i class="mo-star star"></i>
                                                    <i class="mo-star star"></i>
                                                    <i class="mo-star star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <div class="more-product">
                                        <a class="shop-link" href="#">
                                            <i class="mo-more"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane row" id="list-view">

                                <div class="sin-product-list fix">
                                    <div class="list-pro-image col-lg-4 col-sm-5 col-xs-12">
                                        <a href="#">
                                            <img src="{{ asset('img/list-product/1.jpg') }}" alt="product" />
                                        </a>
                                        <span class="list-pro-label">sale</span>
                                    </div>
                                    <div class="list-pro-content col-lg-6 col-sm-7 col-xs-12">
                                        <h2><a href="#">Eurostar Hoodie</a></h2>
                                        <div class="ratting fix">
                                            <i class="mo-star star active"></i>
                                            <i class="mo-star star active"></i>
                                            <i class="mo-star star active"></i>
                                            <i class="mo-star star active"></i>
                                            <i class="mo-star star"></i>
                                        </div>
                                        <h3 class="list-pro-price">$ 112</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod aliqua. Ut enim ad minim veniam,</p>
                                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <div class="list-pro-action">
                                            <button class="add-cart list-action"><i class="mo-cart"></i><span>Add to Cart</span></button>
                                            <button class="wishlist list-action"><i class="mo-heart"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <div class="more-product">
                                        <a class="shop-link" href="#">
                                            <i class="mo-more"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
