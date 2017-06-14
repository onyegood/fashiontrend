<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketProductFrontController extends Controller
{
    public function getShop()
    {
        return view('market.collections');
    }

    public function getSingleProduct(){
        return view('market.singleproduct');
    }

    public function contactUs(){
        return view('market.contact');
    }

    public function getHotSales(){
        return view('market.hotsales');
    }

    public function getBlog(){
        return view('market.blog');
    }

    public function getSingleBlog(){
        return view('market.singleblog');
    }

    public function getCart(){
        return view('market.cart');
    }

    public function getCheckout(){
        return view('market.checkout');
    }

    public function getOrderCompleted(){

        return view('market.ordercompleted');
    }

    public function getCategoryList(){

        return view('market.categorylist');
    }

    public function getWishList(){

        return view('market.wishlist');
    }
}
