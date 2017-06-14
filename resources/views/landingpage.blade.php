@extends('layouts.app')
@section('content')

    <!-- Home 1 Slider ============================================ -->

    @include('market.segments.bannerslider')

    <!-- Two Column Promo ============================================ -->
    @include('market.segments.promo')

    <!-- Tab Products ============================================ -->

    <div class="tab-product">
        <div class="container">
            <div class="row">
                <!-- Product Tab List -->
                <div class="col-xs-12 text-center">
                    <ul class="pro-tab-list fix">
                        <li class="active"><a href="#new-arrival" data-toggle="tab">New Arrival</a></li>
                        <li><a href="#best-seller" data-toggle="tab">Best Seller</a></li>
                        <li><a href="#most-wanted" data-toggle="tab">Most Wanted</a></li>
                    </ul>
                </div>
                <!-- Product Tab Content Container -->
                <div class="pro-tab-content-container tab-content col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <!-- Product Tab -->
                    <div class="pro-tab tab-pane active row" id="new-arrival">
                        @include('market.segments.newarrival')

                    </div>
                    <!-- Product Tab -->
                    <div class="pro-tab tab-pane row" id="best-seller">
                        @include('market.segments.bestsaller')
                    </div>
                    <!-- Product Tab -->
                    <div class="pro-tab tab-pane row" id="most-wanted">
                        @include('market.segments.mostwanted')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Offers Area ============================================ -->
    @include('market.segments.offers')


    <!-- Sale Bammer ============================================ -->
    @include('market.segments.sales')

    <!-- Top Rated Product ============================================ -->
    @include('market.segments.toprated')


    <!-- Blog ============================================ -->
    @include('market.segments.blog')


    <!-- Subscribe Area ============================================ -->
    <div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="subscribe-container">
                        <!-- Subscribe Text -->
                        <div class="subscribe-text fix">
                            <h2>Get Notified of any offers!</h2>
                            <p>Subscribe to our Newsletter to be notified about promotions</p>
                        </div>
                        <!-- Subscribe Form -->
                        <div class="subscribe-form fix">
                            <form action="#" id="subscribe-form">
                                <input type="text" placeholder="Your email address" />
                                <input type="submit" value="submit" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area
    ============================================ -->
    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="section-title-2"><h1>Top Brands</h1></div>
                </div>
                <div class="col-md-10 col-sm-9 text-center">
                    <!-- Brands Slider -->
                    <div class="brand-slider">
                        <div class="brand-item"><img src="img/brands/1.png" alt="brand" /></div>
                        <div class="brand-item"><img src="img/brands/2.png" alt="brand" /></div>
                        <div class="brand-item"><img src="img/brands/3.png" alt="brand" /></div>
                        <div class="brand-item"><img src="img/brands/4.png" alt="brand" /></div>
                        <div class="brand-item"><img src="img/brands/1.png" alt="brand" /></div>
                        <div class="brand-item"><img src="img/brands/2.png" alt="brand" /></div>
                        <div class="brand-item"><img src="img/brands/3.png" alt="brand" /></div>
                        <div class="brand-item"><img src="img/brands/4.png" alt="brand" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
