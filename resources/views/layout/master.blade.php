
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>ACAKES</title>
	
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/header/bootstrap.min.css') }}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/header/slick.css') }}"/>
		<link type="text/css" rel="stylesheet" href=" {{ asset('css/header/slick-theme.css') }}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/header/nouislider.min.css') }}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{ asset('css/header/font-awesome-4.7.0/css/font-awesome.min.css') }}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href=" {{ asset('css/header/style.css') }}"/>
       

        </head>
	<body>

    </head>

    @include('layout/header')
    <!-- header end -->

    
        @yield('main-container')
    

    <!-- footer -->
    @include('layout/footer')


    <script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/slick.min.js') }}"></script>
		<script src="{{ asset('js/nouislider.min.js') }}"></script>
		<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		

</body>
</html>