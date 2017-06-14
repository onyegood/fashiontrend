@extends('layouts.app')
@section('content')

    <!-- Page Banner ============================================ -->
    <div class="page-banner text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Product Title</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details 2
    ============================================ -->
    <div class="product-details2 pages">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Product Container -->
                    <div class="row">
                        <!-- Product Image -->
                        <div class="product-image-2 col-md-6 col-xs-12">
                            <!-- Product Image Tab container -->
                            <div class="pro-image-tab-container tab-content fix">
                                <!-- Product Image Tab -->
                                <div class="pro-image-tab tab-pane active" id="image-1">
                                    <img src="{{ asset('img/pro-details-2/big-1.jpg') }}" alt="" />
                                </div>
                                <div class="pro-image-tab tab-pane" id="image-2">
                                    <img src="{{ asset('img/pro-details-2/big-2.jpg') }}" alt="" />
                                </div>
                                <div class="pro-image-tab tab-pane" id="image-3">
                                    <img src="{{ asset('img/pro-details-2/big-3.jpg') }}" alt="" />
                                </div>
                                <div class="pro-image-tab tab-pane" id="image-4">
                                    <img src="{{ asset('img/pro-details-2/big-4.jpg') }}" alt="" />
                                </div>
                            </div>
                            <!-- Product Image Tab List -->
                            <ul class="pro-image-tab-list-2">
                                <li class="active">
                                    <a href="#image-1" data-toggle="tab">
                                        <img src="{{ asset('img/pro-details-2/1.jpg') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#image-2" data-toggle="tab">
                                        <img src="{{ asset('img/pro-details-2/2.jpg') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#image-3" data-toggle="tab">
                                        <img src="{{ asset('img/pro-details-2/3.jpg') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#image-4" data-toggle="tab">
                                        <img src="{{ asset('img/pro-details-2/4.jpg') }}" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Product Info -->
                        <div class="col-md-6 col-xs-12">
                            <div class="product-info-2 fix">
                                <!-- Product Info Cat -->
                                <div class="pro-info-cat-2"><p>Winter collection</p></div>
                                <!-- Product Info Title Ratting -->
                                <div class="pro-info-title-2 fix">
                                    <h2>Dolce Scraf</h2>
                                </div>
                                <div class="fix">
                                    <div class="pro-info-price-2 float-left fix">
                                        <h1 class="new">$ 259.00</h1>
                                        <h3 class="old">$ 380.00</h3>
                                    </div>
                                    <div class="ratting pro-info-ratting pro-info-ratting-2 float-right">
                                        <i class="mo-star star active"></i>
                                        <i class="mo-star star active"></i>
                                        <i class="mo-star star active"></i>
                                        <i class="mo-star star active"></i>
                                        <i class="mo-star star active"></i>
                                    </div>
                                </div>
                                <div class="pro-info-avaibility fix">
                                    <p>Available: <span>In Stock</span></p>
                                    <div class="pro-info-quantity-2 float-right fix">
                                        <h3>Qty</h3>
                                        <div class="cart-plus-minus-2 float-right fix">
                                            <input type="text" value="0" name="qtybutton" class="cart-plus-minus-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-info-des-2">
                                    <p>Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod empor incididunt oloremque laudantium, Eos qui ratione voluptatem sequi. Neque porro quisquam est, et dolore.</p>
                                </div>
                                <div class="pro-color-size pro-color-size-2">
                                    <div class="pro-color pro-color-2">
                                        <h4>Colors:</h4>
                                        <ul>
                                            <li><a href="#">color 1</a></li>
                                            <li><a href="#">color 2</a></li>
                                            <li><a href="#">color 3</a></li>
                                            <li><a href="#">color 4</a></li>
                                            <li><a href="#">color 5</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-size pro-size-2">
                                        <h4>Sizes:</h4>
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-info-actions-2 text-center fix">
                                <button class="pro-info-addcart"><i class="mo-cart"></i>Add to Cart</button>
                                <button class="pro-info-wishlist"><i class="mo-heart"></i>Add to Wishlist</button>
                            </div>
                        </div>
                    </div>
                    <div class="pro-info-tab-container-2 fix">
                        <!-- Product Info Tab List -->
                        <ul class="pro-info-tab-list pro-info-tab-list-2">
                            <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                            <li><a href="#tags" data-toggle="tab">Tags</a></li>
                            <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                        </ul>
                        <!-- Product Info Tab container -->
                        <div class="tab-content fix">
                            <!-- Product Info Tab -->
                            <div class="pro-info-tab pro-info-tab-2 tab-pane active" id="description">
                                <p>Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod empor incididunt oloremque laudantium, Eos qui ratione voluptatem sequi. Neque porro quisquam est, et dolore. </p>
                                <p>34 ½” long down fill parka with box stitch quilting, detachable hood, and knit storm cuffs. Available in black, red, and navy. Imported.</p>
                                <ul>
                                    <li>Strapless dress with wire v-neck bustier</li>
                                    <li>Fitted waistline</li>
                                    <li>Draped front</li>
                                    <li>High-low hem</li>
                                    <li>75% polyester, 25% nylon</li>
                                    <li>Hand wash cold separately</li>
                                </ul>
                            </div>
                            <!-- Product Tag Tab -->
                            <div class="pro-tag-tab tab-pane" id="tags">
                                <div class="pro-tag-wrapper">
                                    <a href="#">Leather Shoe</a>
                                    <a href="#">Shoe</a>
                                    <a href="#">Men</a>
                                </div>
                            </div>
                            <!-- Product Review Tab -->
                            <div class="pro-info-tab pro-info-tab-2 tab-pane" id="reviews">
                                <div class="pro-review-container">
                                    <div class="sin-pro-review">
                                        <div class="rev-image float-left">
                                            <img src="{{ asset('img/comments/1.png') }}" alt="" />
                                        </div>
                                        <div class="rev-content fix">
                                            <div class="rev-head">
                                                <h3>Mingel Hoops</h3>
                                                <span>December 28, 2015 at 3:20 pm</span>
                                                <div class="ratting pro-rev-ratting float-right">
                                                    <i class="mo-star star active"></i>
                                                    <i class="mo-star star active"></i>
                                                    <i class="mo-star star active"></i>
                                                    <i class="mo-star star active"></i>
                                                    <i class="mo-star star active"></i>
                                                </div>
                                            </div>
                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos. Mauris in erat justo.</p>
                                        </div>
                                    </div>
                                    <div class="sin-pro-review">
                                        <div class="rev-image float-left">
                                            <img src="{{ asset('img/comments/2.png') }}" alt="" />
                                        </div>
                                        <div class="rev-content fix">
                                            <div class="rev-head">
                                                <h3>Mingel Hoops</h3>
                                                <span>December 28, 2015 at 3:20 pm</span>
                                                <div class="ratting pro-rev-ratting float-right">
                                                    <i class="mo-star star active"></i>
                                                    <i class="mo-star star active"></i>
                                                    <i class="mo-star star active"></i>
                                                    <i class="mo-star star active"></i>
                                                    <i class="mo-star star active"></i>
                                                </div>
                                            </div>
                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos. Mauris in erat justo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-rev-form fix">
                                    <h2>Add your review</h2>
                                    <form action="#" id="rev-form" class="moon-form">
                                        <div class="input-box input-box-2">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="input-box input-box-2">
                                            <input type="text" placeholder="Email">
                                        </div>
                                        <div class="form-ratting">
                                            <button class="form-sin-ratting float-left">
                                                <i class="mo-star"></i>
                                            </button>
                                            <button class="form-sin-ratting float-left">
                                                <i class="mo-star"></i>
                                                <i class="mo-star"></i>
                                            </button>
                                            <button class="form-sin-ratting float-left">
                                                <i class="mo-star"></i>
                                                <i class="mo-star"></i>
                                                <i class="mo-star"></i>
                                            </button>
                                            <button class="form-sin-ratting float-left">
                                                <i class="mo-star"></i>
                                                <i class="mo-star"></i>
                                                <i class="mo-star"></i>
                                                <i class="mo-star"></i>
                                            </button>
                                            <button class="form-sin-ratting float-left">
                                                <i class="mo-star"></i>
                                                <i class="mo-star"></i>
                                                <i class="mo-star"></i>
                                                <i class="mo-star"></i>
                                                <i class="mo-star"></i>
                                            </button>
                                        </div>
                                        <div class="input-box">
                                            <textarea name="review" id="rev-message" placeholder="Message" rows="5"></textarea>
                                        </div>
                                        <div class="input-box">
                                            <input type="submit" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Related Product -->
                @include('market.segments.relatedproducts')
            </div>
        </div>
    </div>

@endsection
