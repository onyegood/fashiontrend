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
                            <div class="tab-pane active" id="order-complete">
                                <div class="order-complete-mgs text-center">
                                    <p>Thank you. Your Order Has been Received.</p>
                                </div>
                                <div class="order-information text-center fix">
                                    <div class="single">
                                        <span>Order No</span>
                                        <h4>K 265798</h4>
                                    </div>
                                    <div class="single">
                                        <span>Date</span>
                                        <h4>Dec 31, 2015</h4>
                                    </div>
                                    <div class="single">
                                        <span>Total</span>
                                        <h4>$ 1104</h4>
                                    </div>
                                    <div class="single">
                                        <span>Payment Method</span>
                                        <h4>Check Payment</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="order-details order-details-complete">
                                            <div class="cart-page-title"><h1>Order Details</h1></div>
                                            <div class="table-responsive">
                                                <fieldset>
                                                    <table class="order-pro-table table" id="order-pro-table-2">
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
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="coustomer-details">
                                            <div class="order-com-title"><h1>Customer Details</h1></div>
                                            <div class="content">
                                                <ul>
                                                    <li><span>Name :</span>Mellisa Wright</li>
                                                    <li><span>Email :</span>mellisa_W80@outlook.com</li>
                                                    <li><span>Telephone :</span>+ 123 456 798</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="billing-address">
                                            <div class="order-com-title"><h1>Billing Address</h1></div>
                                            <div class="content">
                                                <h4>Mellisa Wright</h4>
                                                <p>5722 Sam Houston Cir <br />Austin, TX 78731</p>
                                                <p>Phone : + 123 456 789</p>
                                            </div>
                                        </div>
                                        <div class="billing-address shipping-address">
                                            <div class="order-com-title"><h1>Shipping Address</h1></div>
                                            <div class="content">
                                                <h4>Mellisa Wright</h4>
                                                <p>5722 Sam Houston Cir <br />Austin, TX 78731</p>
                                                <p>Phone : + 123 456 789</p>
                                            </div>
                                        </div>
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