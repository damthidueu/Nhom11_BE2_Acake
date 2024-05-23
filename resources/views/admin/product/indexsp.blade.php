
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
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('css/admin/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('css/admin/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('css/admin/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
  
    </ul>
  </nav>
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
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

     
      
             <!-- Sidebar Menu -->
             <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li style="text-align: center" class="nav-item menu-open">
            <a href="{{ route('indexsp') }}" class="nav-link active">
             
              <p >
               Product
               
              </p>
            </a>
            
          </li>
      </nav>
       <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li style="text-align: center" class="nav-item menu-open">
            <a href="{{ route('user') }}" class="nav-link active">
             
              <p >
                USER
               
              </p>
            </a>
            
          </li>
      </nav>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="row">
          <div class="col">
            <h1 class="m-0">Danh sách sản phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
         
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <button class="btn btn-danger" style="background: #5cb85c; border: 5px;border-radius: 5px;" type="submit" class="signup"><a style="color: black" href="{{route('addsp1')}}">Thêm</a></button>

    <table>
      <div class="table">
        <div class="row header">
        <div class="cell">ID</div>
            <div class="cell">Name</div>
            <div class="cell">Type_id</div>
            <div class="cell">Price</div>
            <div class="cell">Image</div>
            <div class="cell">Description</div>
            <div class="cell">Sale</div>
            <div class="cell">Action</div>
        </div>
        @foreach ($indexsp as $indexsp)
        <div class="row">
      
            <div class="cell">{{ $indexsp->id }}</div>
            <div class="cell">{{ $indexsp->pro_name}}</div>
            <div class="cell">{{ $indexsp->type_id}}</div>
            <div class="cell">{{ $indexsp->price}}</div>
            <div class="cell"><img src="{{ asset($indexsp->image) }}" alt="" style="width: 100px"></div>
            <div class="cell">{{ $indexsp->description}}</div>
            <div class="cell">{{ $indexsp->sales}}</div>
            
            <div class="cell"><a href="{{ route('editsp', ['id' => $indexsp->id]) }}"><i class="btn btn-danger" aria-hidden="true">Sửa</i></a>
            
            <span><a href="{{ route('deletesp', ['id' => $indexsp->id]) }}"><i class="btn btn-danger" aria-hidden="true">Xóa</i></a>
            </span>
            </div>
        </div>
        @endforeach

     
        <!-- more rows... -->
    </div>
    </table>
   
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
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
