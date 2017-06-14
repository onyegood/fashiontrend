@extends('layouts.app')

@section('content')

    <!-- Shop Page Banner ============================================ -->
    <div class="page-banner text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Sideabr Product Container
    ============================================ -->
    <div class="blog-page pages">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="sin-blog">
                        <div class="blog-image">
                            <img src="{{ asset('img/blog/3.jpg') }}" alt="blog" />
                            <a href="single-blog.html">Continue Reading</a>
                        </div>
                        <div class="blog-details">
                            <div class="top fix">
                                <a href="#" class="blog-cat float-left">Fashion News</a>
                                <span class="top-meta float-right">12 Comments | 10 Shares</span>
                            </div>
                            <h2 class="title"><a href="single-blog.html">Eddie Redmayne shows you how to prep for 2016 New fashion trend for the new year</a></h2>
                            <div class="blog-meta">
                                By <a href="#">Shanon Cold</a> | Dec 31, 2015
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt molestie neque. Integer laoreet ac nisl vel lobortis. Aliquam erat volutpat. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <div class="more-product">
                        <a class="shop-link" href="#"><i class="mo-more"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection