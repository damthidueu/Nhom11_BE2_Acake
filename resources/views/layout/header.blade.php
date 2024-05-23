<header>
    <!-- TOP HEADER -->

    <div id="top-header" style="background-color: #a942428c !important">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone" style="color:#d12e00f0 !important"></i> +023-45-67-89</a></li>
                <li><a href="#"><i class="fa fa-envelope-o" style="color:#d12e00f0 !important"></i> acakes@email.com</a>
                </li>
                <li><a href="#"><i class="fa fa-map-marker" style="color:#d12e00f0 !important"></i> Binh Thanh
                        street</a></li>
            </ul>
            <ul class="header-links pull-right">

                @guest
                <li><a href="{{ route('login') }}"><i class="fa fa-user-o"
                            style="color:#d12e00f0 !important"></i>Login</a></li>

                @else
                @if (Auth::check())
                <li style="color:#fff; font-weight:1000">{{ auth()->user()->name }}</li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"
                            style="color:#d12e00f0 !important"></i>Logout</a></li>
                @endif
                @endguest
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">


                <!-- SEARCH BAR -->

                <div class="col-md-6">
                    <div class="header-search">
                        <form action="{{ route('products.search') }}" method="GET">
                            <input class="input" name="keyword" placeholder="Search here...">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <img src="{{ asset('logo/logocakes.png') }}" alt="" style="width:100px">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->
                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="{{route('wish.show')}}">
                                <i class="fa fa-heart-o"></i>
                                <span>Your Wishlist</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->
       <!-- Wishlist -->
	   <div>
                            <a href="{{route('cart.show')}}">
							<i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->
                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{ route('getNewProducts') }}">Trang Chủ</a></li>
                @foreach($protypes as $pr)
                <li><a href="{{ route('products.byType' , ['type_id' => $pr->type_id])}}">{{$pr -> type_name}}</a></li>
                @endforeach
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->

@yield('content')