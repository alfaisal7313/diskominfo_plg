<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | <?php echo $title ?></title>
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="<?php echo base_url(); ?>assets/img/logo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/skin-blue.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style media="screen">
  .small-box h3 {
      font-size: 30px !important;
      margin: 0 0 0px 0 !important;
  }
  </style>
</head>
<body class="hold-transition sidebar-mini skin-blue" style="margin: 0px !important">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin/dashbord/'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>DM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>&nbsp;Diskominfo</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li>
            <div style="color: white;padding: 15px 10px;line-height: 20px;">
              <span class="hidden-xs"><i class="glyphicon glyphicon-time">
              </i>&nbsp;
              <span id="clockDisplay"></span>&nbsp;<?php date_default_timezone_set('Asia/Jakarta');
              echo date('/ D d-m-Y'); ?>
            </span>
            </div>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle mr-5" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/img/admin.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("username"); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/img/admin.png" class="img-circle" alt="User Image">

                <!--  Username -->
                <p><?php echo $this->session->userdata("nama_lengkap"); ?></p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('admin/dashbord/profile/'.$this->session->userdata("id_user")); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/img/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama_lengkap"); ?></p>
          <a ><i class="fa fa-circle" style="color: #FFEB3B;"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('admin/dashbord/'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa  fa-image"></i> <span>SlideShow</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/slide/upload_slide'); ?>"><i class="fa fa-pencil-square-o"></i> Buat Slide</a></li>
            <li><a href="<?php echo base_url('admin/slide/list_slide'); ?>"><i class="fa fa-list" aria-hidden="true"></i> List Slide</a></li>
            </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/berita/form_berita'); ?>"><i class="fa fa-pencil-square-o"></i> Buat Berita</a></li>
            <li><a href="<?php echo base_url('admin/berita/list_berita'); ?>"><i class="fa fa-list" aria-hidden="true"></i> List Berita</a></li>
            </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-o" aria-hidden="true"></i> <span>Galeri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-picture-o"></i> Foto
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('admin/foto/upload_foto'); ?>"><i class="fa fa-file-image-o"></i> Uploud Foto</a></li>
                <li><a href="<?php echo base_url('admin/foto/list_foto'); ?>"><i class="fa fa-list"></i> List Foto</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-video-camera"></i> Video
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('admin/video/upload_video'); ?>"><i class="fa fa-file-video-o"></i> Uploud Video</a></li>
                <li><a href="<?php echo base_url('admin/video/list_video'); ?>"><i class="fa fa-list"></i> List Video</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i> <span>File</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/filedocument/upload_file_document'); ?>"><i class="fa fa-upload"></i> Upload File Document</a></li>
            <li><a href="<?php echo base_url('admin/filedocument/list_file_document'); ?>"><i class="fa fa-list" aria-hidden="true"></i> List File Document</a></li>
            </ul>
        </li>

        <?php if ($this->session->userdata("id_kategori_user") == "1") {
          echo '<style media="screen">
              #admin-list{ display:block;}
          </style>';
        }else {
          echo '<style media="screen">
              #admin-list{ display:none;}
          </style>';
        } ?>

        <li class="treeview" id="admin-list">
          <a href="#">
            <i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/user/add_user'); ?>"><i class="fa fa-user-plus"></i> Tambah User</a></li>
            <li><a href="<?php echo base_url('admin/user/list_user'); ?>"><i class="fa fa-users" aria-hidden="true"></i> List Daftar User</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <script type="text/javascript" language="javascript">
  function renderTime(){
   var currentTime = new Date();
   var h = currentTime.getHours();
   var m = currentTime.getMinutes();
   var s = currentTime.getSeconds();
   var am_pm = currentTime.getHours() >= 12 ? "PM" : "AM";
   if (h == 0){
    h = 24;
     }
     if (h < 10){
      h = "0" + h;
      }
      if (m < 10){
      m = "0" + m;
      }
      if (s < 10){
      s = "0" + s;
      }
   var myClock = document.getElementById('clockDisplay');
   myClock.textContent = h + " : " + m + " : " + s + " " + am_pm;
   setTimeout ('renderTime()',1000);
   }
   renderTime();
  </script>
