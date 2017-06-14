<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Fashion Trend Nigeria') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fav Icon
    ============================================ -->
    <link id="favicon" rel="icon" type="{{ asset('image/png" href="img/favicon.ico') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700italic,900italic,900,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Style Import CSS
    ============================================ -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom-style.css') }}" />
    <!-- RS-slider CSS
    ============================================ -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/rs-plugin/css/settings.css') }}" media="screen" />

    <!-- modernizr css -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="app">

    <!-- Header Top
============================================ -->
    <div class="header-top">
        <div class="container">
            <div class="row">
            @if (Auth::guest())
                <!-- Header Top Left -->
                <div class="header-top-left col-sm-6">
                    <ul class="header-login-reg float-left">
                        <li><a href="{{ route('login') }}">Log in</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div>
                @else

                    <div class="header-top-left col-sm-6">
                        <ul class="header-login-reg float-left">
                            <li><a href="#">{{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>

                @endif

                <!-- Header Top Right -->
                <div class="header-top-right col-sm-6">
                    <ul class="language-currency float-right">
                        <li><a href="#">ENG <i class="mo-arrow-down"></i></a>
                            <ul>
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                        <li><a href="#">USD <i class="mo-arrow-down"></i></a>
                            <ul>
                                <li><a href="#">Usd</a></li>
                                <li><a href="#">Uro</a></li>
                                <li><a href="#">Gbp</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Bottom ============================================ -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <!-- Header Logo -->
                <div class="logo col-md-2 col-sm-4 col-xs-5">
                    <a href="{{ url('/') }}">
                        <img src="{{asset('img/logo.png')}}" alt="logo" />
                    </a>
                </div>
                <!-- Main Menu -->
                <div class="main-menu col-md-7 hidden-sm hidden-xs">
                    <nav>
                        <ul>
                            <li><a href="{{ route('collections') }}">Collections</a>
                                <!-- Mega Menu -->
                                <div class="mega-menu mega-menu1">
                                    <div class="megamenu-column megamenu-column1">
                                        <ul>
                                            <li><a href="{{url('/')}}">Accessories</a></li>
                                            <li><a href="{{url('/')}}">Leather</a></li>
                                            <li><a href="{{url('/')}}">Sunglasses</a></li>
                                            <li><a href="{{url('/')}}">Belts</a></li>
                                            <li><a href="{{url('/')}}">Rings</a></li>
                                            <li><a href="{{url('/')}}">Sweaters</a></li>
                                            <li><a href="{{url('/')}}">Bags & Persess</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-column megamenu-column1">
                                        <ul>
                                            <li><a href="{{url('/')}}">Men's Wear</a></li>
                                            <li><a href="{{url('/')}}">Shirts & tops</a></li>
                                            <li><a href="{{url('/')}}">Dresses</a></li>
                                            <li><a href="{{url('/')}}">Swimwear</a></li>
                                            <li><a href="{{url('/')}}">Jeans</a></li>
                                            <li><a href="{{url('/')}}">Shoes</a></li>
                                            <li><a href="{{url('/')}}">Sweaters</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-column megamenu-column1">
                                        <ul>
                                            <li><a href="{{url('/')}}">WoMen's Wear</a></li>
                                            <li><a href="{{url('/')}}">Party Dress</a></li>
                                            <li><a href="{{url('/')}}">T-Shirt</a></li>
                                            <li><a href="{{url('/')}}">Jeans & Trousers</a></li>
                                            <li><a href="{{url('/')}}">Jacket & Coats</a></li>
                                            <li><a href="{{url('/')}}">Sweaters</a></li>
                                            <li><a href="{{url('/')}}">Nightwear</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-column megamenu-column2">
                                        <a href="#" class="menu-image">
                                            <img src="{{asset('img/menu-image.png')}}" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ route('singleproduct') }}">Hot Sales</a>
                                <!-- Sub Menu -->
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="order-complete.html">Order Complete</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="product-details-1.html">Product Details</a>
                                        <ul class="sub-menu-2">
                                            <li><a href="product-details-1.html">Style  1</a></li>
                                            <li><a href="product-details-2.html">Style  2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul class="sub-menu-2">
                                            <li><a href="shop.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-without-banner.html">Shop Without Banner</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-two-column.html">Shop 2 Column</a></li>
                                            <li><a href="shop-three-column.html">Shop 3 Column</a></li>
                                            <li><a href="shop-four-column.html">Shop 4 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="single-page.html">Single Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>

                        </ul>
                    </nav>
                </div>
                <!-- Header Search & Cart -->
                <div class="search-cart col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-3 col-xs-7">
                    <!-- Header Cart -->
                    <div class="header-cart float-right">
                        <button class="cart-btn"><i class="mo-cart"></i><span class="cart-number">2</span></button>
                        <div class="headercart-wrapper">
                            <h2>Shopping Cart</h2>
                            <ul class="products">
                                <li>
                                    <a href="#" class="image float-left"><img src="{{asset('img/header-cart/1.jpg')}}" alt="" /></a>
                                    <div class="content fix">
                                        <h3><a href="#">Skinny Jeans</a></h3>
                                        <span>Color: Philipha Wash</span>
                                        <p class="price">$ 99 x 1</p>
                                    </div>
                                    <a href="#" class="remove"><i class="mo-cross-rounde"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="image float-left">
                                        <img src="{{asset('img/header-cart/2.jpg')}}" alt="" />
                                    </a>
                                    <div class="content fix">
                                        <h3><a href="#">Eyewear Sunglasses</a></h3>
                                        <span>Color: Philipha Wash</span>
                                        <p class="price">$ 199 x 5</p>
                                    </div>
                                    <a href="#" class="remove"><i class="mo-cross-rounde"></i></a>
                                </li>
                            </ul>
                            <div class="total-price text-center fix">
                                <p>Total</p>
                                <span>$ 1094.99</span>
                            </div>
                            <div class="view-cart text-center fix"><a href="cart.html">View Cart <i class="mo-arrow-right"></i></a></div>
                            <div class="cart-footer text-center fix"><a href="checkout.html">Proceed to checkout</a></div>
                        </div>
                    </div>
                    <!-- Header Search -->
                    <div class="header-search float-right">
                        <button class="search-btn"><i class="mo-search"></i></button>
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search..." />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu ============================================ -->
    <div class="mobile-menu hidden-lg hidden-md fix">
        <nav>
            <ul>
                <li><a href="{{ route('collections') }}">Collections</a>
                    <!-- Mega Menu -->
                    <div class="mega-menu mega-menu1">
                        <div class="megamenu-column megamenu-column1">
                            <ul>
                                <li><a href="shop.html">Accessories</a></li>
                                <li><a href="shop.html">Leather</a></li>
                                <li><a href="shop.html">Sunglasses</a></li>
                                <li><a href="shop.html">Belts</a></li>
                                <li><a href="shop.html">Rings</a></li>
                                <li><a href="shop.html">Sweaters</a></li>
                                <li><a href="shop.html">Bags & Persess</a></li>
                            </ul>
                        </div>
                        <div class="megamenu-column megamenu-column1">
                            <ul>
                                <li><a href="shop.html">Men's Wear</a></li>
                                <li><a href="shop.html">Shirts & tops</a></li>
                                <li><a href="shop.html">Dresses</a></li>
                                <li><a href="shop.html">Swimwear</a></li>
                                <li><a href="shop.html">Jeans</a></li>
                                <li><a href="shop.html">Shoes</a></li>
                                <li><a href="shop.html">Sweaters</a></li>
                            </ul>
                        </div>
                        <div class="megamenu-column megamenu-column1">
                            <ul>
                                <li><a href="">WoMen's Wear</a></li>
                                <li><a href="shop.html">Party Dress</a></li>
                                <li><a href="shop.html">T-Shirt</a></li>
                                <li><a href="shop.html">Jeans & Trousers</a></li>
                                <li><a href="shop.html">Jacket & Coats</a></li>
                                <li><a href="shop.html">Sweaters</a></li>
                                <li><a href="shop.html">Nightwear</a></li>
                            </ul>
                        </div>
                        <div class="megamenu-column megamenu-column2">
                            <a href="#" class="menu-image">
                                <img src="{{ ('img/menu-image.png') }}" alt="" /></a>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('singleproduct') }}">Hot Sales</a>
                    <!-- Sub Menu -->
                    <ul class="sub-menu">
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="order-complete.html">Order Complete</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="product-details-1.html">Product Details</a>
                            <ul class="sub-menu-2">
                                <li><a href="product-details-1.html">Style  1</a></li>
                                <li><a href="product-details-2.html">Style  2</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shop</a>
                            <ul class="sub-menu-2">
                                <li><a href="shop.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-without-banner.html">Shop Without Banner</a></li>
                                <li><a href="shop-list.html">Shop List</a></li>
                                <li><a href="shop-two-column.html">Shop 2 Column</a></li>
                                <li><a href="shop-three-column.html">Shop 3 Column</a></li>
                                <li><a href="shop-four-column.html">Shop 4 Column</a></li>
                            </ul>
                        </li>
                        <li><a href="single-blog.html">Single Blog</a></li>
                        <li><a href="single-page.html">Single Page</a></li>
                        <li><a href="404.html">404 Page</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('blog') }}">Blog</a></li>

            </ul>
        </nav>
    </div>


    @yield('content')

<!-- Footer Area ============================================ -->
    <div class="footer-area">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget About -->
                    <div class="footer-widget footer-widget-about col-md-3 col-sm-5">
                        <img src="{{ asset('img/footer-logo.png')}}" alt="" />
                        <p>Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod empor incididunt oloremque laudantium,</p>
                        <div class="footer-social">
                            <a href="#"><i class="mo-facebook"></i></a>
                            <a href="#"><i class="mo-twitter"></i></a>
                            <a href="#"><i class="mo-google-plus"></i></a>
                            <a href="#"><i class="mo-pinterest"></i></a>
                        </div>
                    </div>
                    <!-- Footer Widget Address -->
                    <div class="footer-widget footer-widget-address col-md-2 col-md-offset-1 col-sm-5 col-sm-offset-2">
                        <h3>address</h3>
                        <p>1025-1035 Park Ave, <br />New York, <br />NY 10028, USA</p>
                        <p>+1 123-456-7890</p>
                        <p>sales@koolinc.com</p>
                    </div>
                    <!-- Footer Widget Collection -->
                    <div class="footer-widget footer-widget-collection col-md-2 col-md-offset-1 col-sm-5">
                        <h3>collection</h3>
                        <ul>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                            <li><a href="#">Coming Soon</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget Shop -->
                    <div class="footer-widget footer-widget-shop col-md-2 col-md-offset-1 col-sm-5 col-sm-offset-2">
                        <h3>shop</h3>
                        <ul>
                            <li><a href="single-page.html">About Us</a></li>
                            <li><a href="single-page.html">Shipping Methods</a></li>
                            <li><a href="single-page.html">Career</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <!-- Footer Copyright -->
                    <div class="copyright col-sm-6 text-left">
                        <p>&copy; 2016 <a href="#">Fashion Trend</a>. All Rights Reserved</p>
                    </div>
                    <!-- Footer Payment -->
                    <div class="payment col-sm-6 text-right">
                        <img src="{{ asset ('img/payment.png')}}" alt="payment" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<!-- jQuery 1.12.0
============================================ -->
<script src="{{ asset('js/vendor/jquery-1.12.3.min.js') }}"></script>
<!-- Bootstrap JS
============================================ -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MeanMenu JS
============================================ -->
<script type="text/javascript" src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
<!-- Slick Carousel JS
============================================ -->
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
<!-- RS-Plugin JS
============================================ -->
<script type="text/javascript" src="{{ asset('lib/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('lib/rs-plugin/rs.home.js') }}"></script>
<!-- Scrollup JS
============================================ -->
<script type="text/javascript" src="{{ asset('js/jquery.scrollup.min.js') }}"></script>
<!-- jQuery UI JS
============================================ -->
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
<!-- Tree View JS
============================================ -->
<script type="text/javascript" src="{{ asset('js/jquery.treeview.js') }}"></script>
<!-- Nice Scroll JS
============================================ -->
<script type="text/javascript" src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<!-- WOW JS
============================================ -->
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script>
    new WOW().init();
</script>
<!-- Main JS
============================================ -->
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
