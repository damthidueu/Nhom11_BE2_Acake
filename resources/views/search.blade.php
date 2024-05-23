
@extends('layout.master')
@section('main-container')




		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Loại</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<a href=""></a>
										<small></small>
									</label>
								</div>		
							</div>
						</div>
						<!-- /aside Widget -->
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Giá</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

					

					
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
                        @if(count($products) > 0)
						<div class="row" >
							<!-- product -->
                            @foreach($products as $product)
							<div class="col-md-4 col-xs-6">
                          
								<div class="product">
									<div class="product-img">
										<!-- <img src="{{ asset('logo/banhbonglan.jpeg') }}" alt="">		
																 -->
																 <!-- <img src="https://cdn.tgdd.vn/Products/Images/42/274018/samsung-galaxy-a24-black-thumb-600x600.jpeg"> -->
																<img src="{{ $product -> image }}"> 
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href="{{ route('products.show', ['id' => $product->id]) }}">{{ $product->pro_name }}</a></h3>
										<h4 class="product-price">{{ $product->price }} VNĐ</h4>
										<!-- <div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div> -->
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
                             
							</div>
                            @endforeach
                            @else
    <p>No products found</p>
@endif
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">		
							{!!$products->links('pagination::bootstrap-4')!!}	
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->



@endsection



