@extends('layout.master')
@section('main-container')





<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- shop -->
            <div class="col-md-12 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="{{ asset('logo/Acakes.jpg') }}" style="height: 300px;" alt="">
                    </div>
                    <div class="shop-body">
                    </div>
                </div>
                <!-- /shop -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->



    <!-- NEW PRODUCT -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title" style="text-align:center !important">Sản Phẩm Mới</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <!-- product -->
                                    @foreach($products as $product)
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{ $product -> image}}" alt="" style="">
                                            <div class="product-label">
                                                <!-- <span class="sale">-30%</span> -->
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">

                                            <h3 class="product-name"><a
                                                    href="{{ route('products.show', ['id' => $product->id]) }}">{{$product -> pro_name}}</a>
                                            </h3>
                                            <h4 class="product-price">{{number_format($product -> price)}} VNĐ</h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                            <form method="POST" action="{{ route('wish.add') }}">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button class="add-to-wishlist" style="background-color: red"><i class="fa fa-heart-o" style="color: white"></i></button>
                                            </form>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span
                                                        class="tooltipp">quick view</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to cart</button>
                                            </form>

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
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->











    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-12 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="{{ asset('logo/bannertopsale.png') }}" style="height: 300px;" alt="">
                        </div>
                        <div class="shop-body">
                        </div>
                    </div>
                    <!-- /shop -->

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->


        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title" style="text-align:center !important">Sản Phẩm Bán Chạy</h3>

                        </div>
                    </div>
                    <!-- /section title -->

                    <!-- Products tab & slick -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="products-tabs">
                                <!-- tab -->
                                <div id="tab1" class="tab-pane active">
                                    <div class="products-slick" data-nav="#slick-nav-1">
                                        <!-- product -->
                                        @foreach($productsale as $pr)
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{ $pr -> image}}" alt="" style="">
                                                <div class="product-label">
                                                    <!-- <span class="sale">-30%</span> -->
                                                    <!-- <span class="new">NEW</span> -->
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a
                                                        href="{{ route('products.show', ['id' => $pr->id]) }}">{{$pr -> pro_name}}</a>
                                                </h3>
                                                <h4 class="product-price">{{number_format($pr -> price)}} VNĐ</h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                <form method="POST" action="{{ route('wish.add') }}">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button class="add-to-wishlist" style="background-color: red"><i class="fa fa-heart-o" style="color: white"></i></button>
                                            </form>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                            class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to cart</button>
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
                    <!-- Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">Top selling</h4>
                            <div class="section-nav">
                                <div id="slick-nav-3" class="products-slick-nav"></div>
                            </div>
                        </div>

                        <div class="products-widget-slick" data-nav="#slick-nav-3">
                            <div>
                                @foreach($productsale as $pr)
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="{{ $pr -> image}}" alt="">
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a
                                                href="{{ route('products.show', ['id' => $pr->id]) }}">{{ $pr -> pro_name}}</a>
                                        </h3>
                                        <h4 class="product-price">{{number_format($pr -> price)}} VNĐ</h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
                                @endforeach

                            </div>

                            <div>

                                @foreach($productsale as $pr)
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="{{ $pr -> image}}" alt="">
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a
                                                href="{{ route('products.show', ['id' => $pr->id]) }}">{{$pr -> pro_name}}</a>
                                        </h3>
                                        <h4 class="product-price">{{number_format($pr -> price)}}</h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">NEW PRODUCT</h4>
                            <div class="section-nav">
                                <div id="slick-nav-4" class="products-slick-nav"></div>
                            </div>
                        </div>

                        <div class="products-widget-slick" data-nav="#slick-nav-4">
                            <div>
                                @foreach($newProduct as $pr)
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="{{$pr -> image}}" alt="">
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a
                                                href="{{ route('products.show', ['id' => $pr->id]) }}">{{$pr -> pro_name}}</a>
                                        </h3>
                                        <h4 class="product-price">{{number_format($pr -> price)}} VND</h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
                                @endforeach

                            </div>

                            <div>
                                @foreach($newProduct2 as $pr)
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="{{$pr -> image}}" alt="">
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a
                                                href="{{ route('products.show', ['id' => $pr->id]) }}">{{$pr -> pro_name}}</a>
                                        </h3>
                                        <h4 class="product-price">{{number_format($pr -> price)}}</h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
                                @endforeach


                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-sm visible-xs"></div>
                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">BEST SALES</h4>
                            <div class="section-nav">
                                <div id="slick-nav-4" class="products-slick-nav"></div>
                            </div>
                        </div>

                        <div class="products-widget-slick" data-nav="#slick-nav-4">
                            <div>
                                @foreach($productbest as $pr)
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="{{$pr -> image}}" alt="">
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a
                                                href="{{ route('products.show', ['id' => $pr->id]) }}">{{$pr -> pro_name}}</a>
                                        </h3>
                                        <h4 class="product-price">{{number_format($pr -> price)}} VND</h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
                                @endforeach

                            </div>

                            <div>
                                @foreach($productbest as $pr)
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="{{$pr -> image}}" alt="">
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a
                                                href="{{ route('products.show', ['id' => $pr->id]) }}">{{$pr -> pro_name}}</a>
                                        </h3>
                                        <h4 class="product-price">{{number_format($pr -> price)}}</h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
                                @endforeach


                            </div>
                        </div>
                    </div>

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->


        @endsection