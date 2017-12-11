<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Diskominfo</title>
  <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="<?php echo base_url(); ?>/assets/img/logo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/AdminLTE.min.css">
  <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo" style="margin-bottom: 20px!imiportant;">
    <a href="<?php echo base_url('login'); ?>"><img src="<?php echo base_url(); ?>/assets/img/logo.png" style="max-width:60px; margin-top: 10%;"> <h3><b>Diskominfo Kota Palembang</b></h3></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign In Admin</p>

    <form action="<?php echo base_url('login/login'); ?>" method="post" autocomplete="off">
      <p><b>Username</b></p>
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required
        oninvalid="this.setCustomValidity('Silahkan Masukkan username')"
        oninput="setCustomValidity('')" autocomplete="off">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <p><b>Password</b></p>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required oninvalid="this.setCustomValidity('Silahkan masukkan password')"
        oninput="setCustomValidity('')" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <?php echo $message ?></span>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 pull-right" style="margin-top: 5px;">
          <button type="submit" value="Login" class="btn btn-primary btn-block btn-flat ">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
