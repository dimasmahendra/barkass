<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?= base_url('assets/images/fav.png') ?>" type="image/gif" sizes="16x16">
  <title>Admin Merchand Smart Location</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
  
  <link href="<?= base_url('assets/css/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/bootstrap/css/bootstrapValidator.css') ?>" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href="<?= base_url('assets/css/tema/css/AdminLTE.min.css') ?>" rel="stylesheet">  
  <link href="<?= base_url('assets/css/tema/css/skins/_all-skins.min.css') ?>" rel="stylesheet">  
  <style type="text/css">
    .user-header p, h5{
      color: white;
    }
  </style>
</head>
<body class="sidebar-mini wysihtml5-supported skin-green-light">
<header class="main-header">
  <!-- Logo -->
  <a href="<?= base_url('')?>Dashboard/index" class="logo">
    <img src="<?= base_url('assets/images/logo.png') ?>" alt="logosmartlocation" style="width:200px; height:30px">
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i>
            <span class="hidden-xs">Welcome, Admin </span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header" style="margin-left: 0px;">
              <img src="<?= base_url('assets/images/nouser.png') ?>" class="img-circle" alt="User Image">
              <p>                    
                <h5><?php echo $email; ?></h5>                                              
              </p>
            </li>              
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo base_url(); ?>Profile/index" class="btn btn-success btn-flat"><i class="fa fa-user"></i></a>
                <a href="<?php echo base_url(); ?>Profile/indexSandi" class="btn btn-success btn-flat"><i class="fa fa-gears"></i></a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url(); ?>Login/logoutAdmin" class="btn btn-success btn-flat"><i class="fa fa-sign-out"></i></a>
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
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MENU</li>

        <li class="<?php echo activate_menu('Admin'); ?>">
          <a href="<?= base_url('Admin/daftarAdminBarkas') ?>">
            <i class="fa fa-user"></i> <span>Admin Barkas</span>            
          </a>
        </li>

        <li class="<?php echo activate_menu('Penitip'); ?>">
          <a href="<?= base_url('Penitip/daftarPenitipBarkas') ?>">
            <i class="fa fa-users"></i> <span>Info Penitip</span>            
          </a>
        </li>

        <li class="<?php echo activate_menu('Produk'); ?>">
          <a href="<?= base_url('Produk/daftarProduk') ?>">
            <i class="fa fa-cubes"></i> <span>Produk Barkas</span>            
          </a>
        </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<script src="<?= base_url('assets/js/jQuery/jQuery-2.2.0.min.js') ?>" rel="stylesheet"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/js/bootstrapValidator/bootstrapValidator.js') ?>" rel="stylesheet"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>