@extends('layouts.app')

@section('content')

    <div class="shop-page shop-four-column">
	<div class="container">
		<div class="row">
			<!-- Single Product -->
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="sin-product">
					<!-- Product Image -->
					<div class="pro-image">
						<a href="#">
                            <img src="{{ asset('img/shop-four-column/1.jpg') }}" alt="product" />
                        </a>
						<!-- Product Hover Content -->
						<div class="pro-hover fix" style="background-image: url('{{ asset('img/shop-four-column/1.jpg') }}');">
							<!-- Product Hover Action -->
							<div class="pro-hover-action animated text-center">
								<button class="add-cart pro-action"><i class="mo-cart"></i></button>
								<a href="#quick-view" class="quick-view pro-action" data-toggle="modal"><i class="mo-eye"></i></a>
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
							<h3><a href="#">Roka Set</a></h3>
							<p class="price float-right">$ 128</p>
						</div>
						<div class="bottom fix">
							<a href="#" class="pro-cat float-left">Kitchen</a>
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

			<div class="col-xs-12 text-center">
				<div class="more-product">
					<a class="shop-link" href="#">
                        <i class="mo-more"></i>
                    </a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection