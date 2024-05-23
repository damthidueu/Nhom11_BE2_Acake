<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-md-4">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
									@foreach ($products as $product)
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('logo/banhbonglan.jpeg') }}" alt="">
												
											</div>
										
											<div class="product-body">
											
												<h3 class="product-name" ><a href="#"style="color : #d1000e45 !important">{{ $product->pro_name }}</a></h3>
												<h4 class="product-price" style="color : #d1000e45 !important">{{ $product->price }}</h4>
												<!-- <div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div> -->
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm Vào Danh Sách Yêu Thích</span></button>
													<!-- <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button> -->
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										@endforeach
	
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->	
							</div>
						</div>
					</div>
</body>
</html>