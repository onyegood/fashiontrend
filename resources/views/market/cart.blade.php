@extends('layouts.app')

@section('content')

    <div class="pages cart-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart-page-container fix">
                        <!-- Cart Page Tab List -->

                        <!-- Cart Page Tab Container -->
                        <div class="tab-content">
                            <!-- Cart Page Tab -->
                            <div class="tab-pane active" id="shopping-cart">
                                <div class="cart-page-title text-center"><h1>Shopping Cart</h1></div>
                                <form action="#" id="cart-form">
                                    <div class="table-responsive">
                                        <fieldset>
                                            <table class="table-cart data-table table" id="shopping-cart-table">
                                                <thead>
                                                <tr>
                                                    <th>Items</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    <th>Remove</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><div class="cart-items fix">
                                                            <a href="#" class="cart-image">
                                                                <img src="{{ asset('img/cart-product/1.jpg') }}" alt="" />
                                                            </a>
                                                            <div class="cart-item-content fix">
                                                                <h3 class="title">
                                                                    <a href="#">Popline Tops</a>
                                                                </h3>
                                                                <span>Size : <strong>M</strong></span>
                                                                <span>Color : <strong>Dark Blue</strong></span>
                                                            </div>
                                                        </div></td>
                                                    <td><span class="cart-price">$ 238</span></td>
                                                    <!-- inclusive price starts here -->
                                                    <td>
                                                        <div class="cart-qty">
                                                            <input maxlength="99" class="input-cart-qty" value="2">
                                                        </div>
                                                    </td>
                                                    <!--Sub total starts here -->
                                                    <td ><span class="cart-total-price">$ 476.00</span></td>
                                                    <td>
                                                        <a href="#" class="cart-remove">
                                                            <i class="mo-cross-rounde"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </fieldset>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 col-xs-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="shipping-cost">
                                                        <h3 class="title">Calculate Shipping Cost</h3>
                                                        <div class="input-wrapper">
                                                            <div class="input-box">
                                                                <select name="country">
                                                                    <option value="united-states">United States</option>
                                                                    <option value="united-states">United States</option>
                                                                    <option value="united-states">United States</option>
                                                                    <option value="united-states">United States</option>
                                                                    <option value="united-states">United States</option>
                                                                    <option value="united-states">United States</option>
                                                                </select>
                                                            </div>
                                                            <div class="input-box">
                                                                <select name="state">
                                                                    <option value="united-states">State / Province</option>
                                                                    <option value="united-states">State / Province</option>
                                                                    <option value="united-states">State / Province</option>
                                                                    <option value="united-states">State / Province</option>
                                                                    <option value="united-states">State / Province</option>
                                                                </select>
                                                            </div>
                                                            <div class="input-box">
                                                                <input type="text" placeholder="State / Province" />
                                                            </div>
                                                            <input type="submit" value="Calculate Shipping" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="coupon-discount">
                                                        <h3 class="title">Coupon Discount</h3>
                                                        <div class="coupon-wrapper">
                                                            <p>Enter your coupon code if you have one</p>
                                                            <div class="input-box">
                                                                <input type="text" placeholder="Enter your code here!" />
                                                            </div>
                                                            <input type="submit" value="Apply Coupon" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-xs-12">
                                            <div class="payment-details">
                                                <h3 class="title">Payment Details</h3>
                                                <div class="payment-wrapper">
                                                    <div class="subtotal fix">
                                                        <p class="float-left">Subtotal</p>
                                                        <span class="float-right">$ 960.00</span>
                                                    </div>
                                                    <div class="shipping fix">
                                                        <p class="float-left">Shipping</p>
                                                        <span class="float-right">Free Shipping</span>
                                                    </div>
                                                    <div class="grandtotal fix">
                                                        <p class="float-left">Grand otal</p>
                                                        <span class="float-right">$ 960.00</span>
                                                    </div>
                                                    <div class="procced-checkout text-center"><button class="checkout-btn">Procced to Checkout</button></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection