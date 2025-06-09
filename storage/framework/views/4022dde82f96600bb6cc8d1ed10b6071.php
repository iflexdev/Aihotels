<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel Ai 360 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/jqvmap/jqvmap.min.css')); ?>">
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.min.css')); ?>">

  <?php echo $__env->yieldContent('admin_css'); ?>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo e(asset(env('APP_LOGO'))); ?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
        <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right " style="left: inherit; right: 0px;">
         
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(route('admin.logout')); ?>" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i>Logout
            
          </a>
          <div class="dropdown-divider"></div>
          
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('dashboard')); ?>" class="brand-link">
      <img src="<?php echo e(asset(config('app.logo'))); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Hotel Ai 360</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('assets/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(Auth::guard('admin')->name ?? ""); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link <?php echo e(Route::currentRouteNamed('dashboard') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
        
          <li class="nav-item">
            <a href="<?php echo e(route('location.index')); ?>" class="nav-link <?php echo e(Str::startsWith(Route::currentRouteName(), 'location.') ? 'active' : ''); ?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Location
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('hotel.index')); ?>" class="nav-link <?php echo e(Str::startsWith(Route::currentRouteName(), 'hotel.') ? 'active' : ''); ?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Hotel
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('room.index')); ?>" class="nav-link <?php echo e(Str::startsWith(Route::currentRouteName(), 'room.') ? 'active' : ''); ?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Rooms
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('offer.index')); ?>" class="nav-link <?php echo e(Str::startsWith(Route::currentRouteName(), 'offer.') ? 'active' : ''); ?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Offer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('setting.index')); ?>" class="nav-link <?php echo e(Route::currentRouteNamed('setting.index') ? 'active' : ''); ?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                WebSetting & config
              </p>
            </a>
          </li>
         
        
        
         
         
         
        
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <?php echo $__env->yieldContent('content'); ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo e(date('Y')); ?> <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(env('APP_NAME')); ?></a>.</strong>
    All rights reserved.
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('assets/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('assets/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->

<!-- JQVMap -->
<script src="<?php echo e(asset('assets/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('assets/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('assets/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('assets/dist/js/adminlte.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('assets/dist/js/pages/dashboard.js')); ?>"></script>

<?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH /home/nni24/public_html/hotelai360/resources/views/admin/layout/mainlayout.blade.php ENDPATH**/ ?>