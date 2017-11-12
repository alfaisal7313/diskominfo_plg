<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <title><?php if ($title !='') { echo $title. " | ";}else{echo " Beranda| ";}?> Dinas Komunikasi dan Informatika Kota Palembang</title>
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="<?php echo base_url(); ?>assets/img/logo.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"></link>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!-- config slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>

<!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/magnific-popup/dist/magnific-popup/.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow">
      <div class="container-fluid margin-header" style="margin:auto 20px;">
          <a class="navbar-brand " href="<?php echo base_url(); ?>"><img class="container-fluid " src="<?php echo base_url(); ?>assets/img/logo_2.png"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li>
                <form action="<?php echo site_url('search');?>" method = "get" autocomplete="off" id="searchresponsive">
                  <input id="searchinputres" type="search" placeholder="Search Berita" name = "keyword" auonkeyup="buttonUp();">
                </form>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('beranda'); ?>">Beranda</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profile&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                  <a class="dropdown-item" href="<?php echo base_url('profile/sejarah'); ?>">Sejarah</a>
                  <a class="dropdown-item" href="<?php echo base_url('profile/visi_misi'); ?>">Visi dan Misi</a>
                  <a class="dropdown-item" href="<?php echo base_url('profile/st_organisasi'); ?>">Struktur Organisasi</a>
                  <a class="dropdown-item" href="<?php echo base_url('profile/tupoksi'); ?>">Tupoksi</a>
                </div>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('berita'); ?>">Berita</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Galeri&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                  <a class="dropdown-item" href="<?php echo base_url('galeri/foto'); ?>">Foto</a>
                  <a class="dropdown-item" href="<?php echo base_url('galeri/video'); ?>">Video</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Informasi&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                  <a class="dropdown-item" href="<?php echo base_url('list_file'); ?>">Dokumen Informasi</a>
                  <a class="dropdown-item" href="<?php echo base_url('agenda'); ?>">Agenda</a>
                  <a class="dropdown-item" href="<?php echo base_url('kategori/pengumuman'); ?>">Pengumuman</a>
                </div>
              </li>
              <li class="nav-item" style="margin-right: 0px !important;">
                <a class="nav-link" href="<?php echo base_url('kontak'); ?>">Kontak</a>
              </li>
            </ul>
          </div>
            <form action="<?php echo site_url('search');?>" method = "get" class="searchbox" autocomplete="off">
                <input type="search" placeholder="Search Berita"  name = "keyword" class="searchbox-input"  auonkeyup="buttonUp();" value="">
                <span class="searchbox-icon" style="display: block;"><i class="fa fa-search"></i></span>
            </form>
      </div>
    </nav>
    <div id='loading'></div>
    </div>
    <script type="text/javascript">
      $(window).load(function() { $("#loading").fadeOut("slow"); })
    </script>
