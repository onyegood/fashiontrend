@extends('layouts.app')

@section('content')

    <div class="pages cart-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart-page-container fix">
                        <!-- Cart Page Tab Container -->
                        <div class="tab-content">
                            <!-- Cart Page Tab -->
                            <!-- Cart Page Tab -->
                            <div class="tab-pane active" id="check-out">
                                <div class="cart-page-title cart-page-title-2 text-center"><h1>Checkout</h1><p>Personal Information and Payment</p></div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="billing-details">
                                            <div class="cart-page-title"><h1>Billing Details</h1></div>
                                            <div class="checkout-form">
                                                <form action="#" id="billing-details" class="moon-form">
                                                    <div class="input-box"><input type="text" placeholder="Frist Name *" /></div>
                                                    <div class="input-box"><input type="text" placeholder="Last Name *" /></div>
                                                    <div class="input-box"><input type="text" placeholder="Company Name" /></div>
                                                    <div class="input-box"><input type="text" placeholder="Email Address *" /></div>
                                                    <div class="input-box"><input type="text" placeholder="Phone *" /></div>
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
                                                    <div class="input-box"><input type="text" placeholder="Postcode *" /></div>
                                                    <div class="input-box"><textarea name="Address" rows="4" placeholder="Address *"></textarea></div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="shipping-details">
                                            <div class="cart-page-title"><h1><a href="#shipping-form" class="collapsed" data-toggle="collapse"><span class="check-box"></span>Ship to Different Addrress?</a></h1></div>
                                            <div class="checkout-form">
                                                <div id="shipping-form" class="collapse moon-form">
                                                    <form action="#" id="shipping-details">
                                                        <div class="input-box">
                                                            <input type="text" placeholder="Frist Name *" />
                                                        </div>
                                                        <div class="input-box">
                                                            <input type="text" placeholder="Last Name *" />
                                                        </div>
                                                        <div class="input-box">
                                                            <input type="text" placeholder="Company Name" />
                                                        </div>
                                                        <div class="input-box">
                                                            <input type="text" placeholder="Email Address *" />
                                                        </div>
                                                        <div class="input-box">
                                                            <input type="text" placeholder="Phone *" />
                                                        </div>
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
                                                            <input type="text" placeholder="Postcode *" />
                                                        </div>
                                                        <div class="input-box">
                                                            <textarea name="Address" rows="4" placeholder="Address *">

                                                            </textarea>
                                                        </div>
                                                        <div class="input-box">
                                                            <textarea name="custom" rows="4" placeholder="Inclue custom Requirements for this order">

                                                            </textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="order-details">
                                            <div class="cart-page-title"><h1>Your Order</h1></div>
                                            <div class="table-responsive">
                                                <fieldset>
                                                    <table class="order-pro-table table" id="order-pro-table">
                                                        <thead>
                                                        <tr>
                                                            <th><p class="product text-left">Product</p></th>
                                                            <th><p class="total text-right">Total</p></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><h3 class="title text-left">Popline Tops x 2</h3></td>
                                                            <td ><span class="total-price text-right">$ 476.00</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><h3 class="title text-left">Shanos Matte Blue x 1</h3></td>
                                                            <td ><span class="total-price text-right">$ 356.00</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><h3 class="title text-left">Minrova Sleep Wear x 1</h3></td>
                                                            <td ><span class="total-price text-right">$ 128.00</span></td>
                                                        </tr>
                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <td><p class="cart-total-title text-left">Cart Subtotal <br />Shipping & Handling</p></td>
                                                            <td><span class="cart-total text-right">$ 960.00</span><p class="shipping-charge text-right">free Shipping</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="vat text-left">Vat</p></td>
                                                            <td><span class="vat-total text-right">$ 144.00</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><h3 class="grand-total-title text-left">Grand Total</h3></td>
                                                            <td><span class="grand-total text-right">$ 1104.00</span></td>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </fieldset>
                                            </div>
                                            <div class="cart-page-title payment-title"><h1>Payment Method</h1></div>
                                            <div class="payment-methods fix">
                                                <div class="single-payment cheque">
                                                    <button class="select-btn active"><span class="check-box"></span>Cheque Payment</button>
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                                <div class="single-payment paypal">
                                                    <button class="select-btn"><span class="check-box"></span>PayPal</button>
                                                    <p>Pay via PayPal you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                                <div class="single-payment other">
                                                    <div class="wrapper">
                                                        <a href="#" class="paypal">
                                                            <img src="{{ asset('img/payment/paypal.png') }}" alt="paypal" />
                                                        </a>
                                                        <a href="#" class="visa">
                                                            <img src="{{ asset('img/payment/visa.png') }}" alt="visa" />
                                                        </a>
                                                        <a href="#" class="mastercard">
                                                            <img src="{{ asset('img/payment/mastercard.png') }}" alt="mastercard" />
                                                        </a>
                                                        <a href="#" class="express">
                                                            <img src="{{ asset('img/payment/express.png') }}" alt="express" />
                                                        </a>
                                                        <a href="#" class="jcb">
                                                            <img src="{{ asset('img/payment/jcb.png') }}" alt="jcb" />
                                                        </a>
                                                    </div>
                                                    <a href="#">What is PayPal?</a>
                                                </div>
                                            </div>
                                            <div class="place-order text-center">
                                                <button class="place-order-btn">Place Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Cart Page Tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection