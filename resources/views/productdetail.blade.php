@extends('layout.master')
@section('main-container')

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                    <img src="{{ asset($product->image) }}"> 	
                    </div>

                    <div class="product-preview">
                    <img src="{{ asset($product->image) }}"> 	
                    </div>

                    <div class="product-preview">
                    <img src="{{ asset($product->image) }}"> 	
                    </div>

                    <div class="product-preview">
                    <img src="{{ asset($product->image) }}"> 	
                    </div>
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                    <img src="{{ asset($product->image) }}"> 	
                    </div>

                    <div class="product-preview">
                    <img src="{{ asset($product->image) }}"> 	
                    </div>

                    <div class="product-preview">
                    <img src="{{ asset($product->image) }}"> 	
                    </div>

                    <div class="product-preview">
                    <img src="{{ asset($product->image) }}"> 	
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{$product -> pro_name}}</h2>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <a class="review-link" href="#">10 Review(s) | Add your review</a>
                    </div>
                    <div>
                        <h3 class="product-price">{{$product -> price}} VNĐ</h3>

                    </div>
                    <p>{{$product -> description}}</p>

                    <div class="product-options">
                    </div>

                    <div class="add-to-cart">
                        <div class="qty-label">
                            Qty
                            <form method="POST" action="{{ route('cart.add') }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="number" name="quantity" value="1">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                    to cart</button>
                            </form>
                        </div>


                    </div>


                    <ul class="product-btns">
                        <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                    </ul>

                    <ul class="product-links">
                        <li>Category:</li>
                        <li><a href="#">{{$product -> pro_name}}</a></li>

                    </ul>



                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                        <!-- <li><a data-toggle="tab" href="#tab2">Details</a></li> -->
                        <li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{$product -> description}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->

                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in">
                            <div class="row">


                                <!-- Reviews -->

                                <div class="col-md-6">
                                    <div id="reviews">
                                        <ul class="reviews">
                                            @foreach ($ratings as $rating)
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">{{ $rating->user->name }}</h5>
                                                    <p class="date">{{ $rating->created_at}}</p>
                                                    <div class="review-rating">
                                                        @for ($i = 1; $i <= 5; $i++) @if ($i <=$rating->rating)
                                                            <i class="fa fa-star"></i>
                                                            @else
                                                            <i class="fa fa-star-o "></i>
                                                            @endif
                                                            @endfor
                                                    </div>
                                                </div>
                                                @if ($rating->comment)
                                                <div class="review-body">
                                                    <p>{{ $rating->comment }}</p>
                                                </div>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Reviews -->

                                <!-- Review Form -->
                                <div class="col-md-3">
                                    <div id="review-form">
                                        <form class="review-form" action="{{route('ratings.store', $product->id) }}"
                                            method="POST">
                                            @csrf
                                            <textarea class="input" name="comment" id="comment"
                                                placeholder="Your Review"></textarea>
                                            <div class="input-rating">
                                                <span>Your Rating: </span>
                                                <div class="stars" name="rating" id="rating">
                                                    <input id="star5" name="rating" value="5" type="radio"><label
                                                        for="star5"></label>
                                                    <input id="star4" name="rating" value="4" type="radio"><label
                                                        for="star4"></label>
                                                    <input id="star3" name="rating" value="3" type="radio"><label
                                                        for="star3"></label>
                                                    <input id="star2" name="rating" value="2" type="radio"><label
                                                        for="star2"></label>
                                                    <input id="star1" name="rating" value="1" type="radio"><label
                                                        for="star1"></label>
                                                </div>
                                            </div>
                                            <button class="primary-btn">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /Review Form -->
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Related Products</h3>
                </div>
            </div>
            @foreach ($relatedProducts as $relatedProduct)
            <!-- product -->
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="{{ $relatedProduct-> image }}" alt="">
                        <div class="product-label">
                            <!-- <span class="sale">-30%</span> -->
                        </div>
                    </div>
                    <div class="product-body">

                        <h3 class="product-name"><a
                                href="{{ route('products.show', ['id' => $product->id]) }}">{{ $relatedProduct-> pro_name }}</a>
                        </h3>
                        <h4 class="product-price">{{ $relatedProduct-> price }} VNĐ<del
                                class="product-old-price">$990.00</del></h4>
                        <div class="product-rating">
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
                                    wishlist</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>
                </div>
            </div>
            <!-- /product -->

            @endforeach

            <div class="clearfix visible-sm visible-xs"></div>



        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /Section -->

@endsection