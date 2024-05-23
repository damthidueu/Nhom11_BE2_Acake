

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/admin/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('css/admin/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('css/admib/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('css/admin/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/admin/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('css/admin/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('css/admin/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('css/admin/summernote/summernote-bs4.min.css')}}">
  <style>
    .table {
    display: table;
    width: 100%;
    border-collapse: collapse;
}

.row {
    display: table-row;
}

.header {
    font-weight: bold;
}

.cell {
    display: table-cell;
    padding: 10px;
    border: 1px solid #ddd;
}

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('css/admin/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('css/admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('css/admin/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              
              <p>
                USER
               
              </p>
            </a>
           
          </li>
      </nav>
      <!-- /.sidebar-menu -->
      
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h1 class="m-0">ADD USER</h1> <br>
            
            
          </div><!-- /.col -->
          <div class="col">
         <form action="{{ route('adduser1') }}" method="POST">
        @csrf
        <p class="content-item">
            <label >FULL NAME
                <input name="name" type="text" placeholder="Name" id="name" class="form-control" required style="width: 500px !important">
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </label>
        </p>

        <p class="content-item">
            <label>EMAIL
                <input type="text" placeholder="acakes@email.com" class="form-control" name="email" id="email" required style="width: 500px !important">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </label>
        </p>

        <p class="content-item">

            <label>PASSWORD
                <input type="password" placeholder="" name="password" id="password" class="form-control" required style="width: 500px !important">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </label>
        </p>
        <button style="background: #5cb85c; border: 5px;border-radius: 5px;" type="submit" class="signup"> Thêm</button>
    </form>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <form action=""></form>
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('css/admin/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('css/admin/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('css/admin/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{ asset('css/admin/chart.js/Chart.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{ asset('css/admin/sparklines/sparkline.js') }}"></script>

<!-- JQVMap -->
<script src="{{ asset('css/admin/jqvmap/jquery.vmap.min.js') }}"></script>

<script src="{{ asset('css/admin/jqvmap/maps/jquery.vmap.usa.js') }}"> </script>

<!-- jQuery Knob Chart -->
<script src="{{ asset('css/admin/jquery-knob/jquery.knob.min.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ asset('css/admin/moment/moment.min.js') }}"></script>

<script src="{{ asset('css/admin/daterangepicker/daterangepicker.js') }}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('css/admin/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('css/admin/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('css/admin/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/admin/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/admin/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/admin/dashboard.js') }}"></script>
</body>
</html>
