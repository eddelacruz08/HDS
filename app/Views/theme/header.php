<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?= base_url() ?>/public/img/PUPLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/adminlte.css">
    <link href="<?= base_url() ?>public/plugins/select2/css/select2.min.css"/>
    <link href="<?= base_url() ?>public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"/>
    <!-- <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css">
    <link href="<?= base_url() ?>public/plugins/chart.js/Chart.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>public/DataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
    <script type="text/javascript" src="<?= base_url() ?>public/font-awesome/js/all.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>public/css/ionicons.min.css">
    <script src="<?= base_url() ?>public/js/instascan.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js/adapter.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js/vue.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js/dateScripts.js"></script>
    <link href="<?= base_url() ?>public/css/print.css" rel="stylesheet" media="print"/>

    <style media="screen">
    .buttun {
          background-color: #004A7F;
          -webkit-border-radius: 10px;
          border-radius: 10px;
          border: none;
          color: #FFFFFF;
          cursor: pointer;
          display: inline-block;
          font-family: Arial;
          font-size: 20px;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          -webkit-animation: glowing 1500ms infinite;
          -moz-animation: glowing 1500ms infinite;
          -o-animation: glowing 1500ms infinite;
          animation: glowing 1500ms infinite;
          }
          @-webkit-keyframes glowing {
          0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
          50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
          100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
          }

          @-moz-keyframes glowing {
          0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
          50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
          100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
          }

          @-o-keyframes glowing {
          0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
          50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
          100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
          }

          @keyframes glowing {
          0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
          50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
          100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
          }
    </style>
    <style media="screen">

    .box{
          display: none;
          margin-left: 25px;
      }
  .box label,.box input{
          margin-left: 25px;
      }

      .video{
        width: 200px;
        height: 200px;
        margin-left: 10px;
        margin-right: 10px;
        margin:0;
        padding:0;
      }
      .video1{
        width: 250px;
        height: 200px;
        margin-left: 10px;
        margin-right: 10px;
        margin:0;
        padding:0;
      }
      center{
        margin:0;
        padding:0;
      }
    </style>
    <title><?= SYSTEM_NAME ?></title>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed hidePrint"style="background-color: #d9d9d9;"  onload="renderTime();">
  <div class="wrapper"style="background-color: #d9d9d9;">

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
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Hi <?= ucwords($_SESSION['uname']) ?>!</a>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo base_url() ?>logout">Logout</a>
                </div>
            </li>
        </ul>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary bg-navy" >
      <!-- Brand Logo -->
      <a href="<?= base_url() ?>patients" class="brand-link">
        <img src="http://localhost/HDS/public/img/PUPLogo.png" alt="PUP Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= SYSTEM_TITLE ?></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
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
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <?php user_primary_links_two($_SESSION['userPermmissions']) ?>
            <?php user_primary_links($_SESSION['userPermmissions']) ?>
          </ul>
          <ul class="nav nav-pills nav-sidebar flex-column">
            <br>
            <li class="nav-item">
              <a href="<?= base_url() ?>dashboard" class="nav-link">
                <p>
                  Logged in as:&nbsp
                  <br>
                  <span class="badge badge-danger" style="font-size: 13px;"><?= ucwords($_SESSION['uname']) ?></span>
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
      <div class="content-wrapper"style="background-color: #d9d9d9;">
        <div class="container-fluid" style="background-color: #d9d9d9;">
