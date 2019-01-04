<?php 
    session_start();
    include 'Common/Admin/header.php';
    include 'Controller/Admin_Controller.php';
 ?>
   <!-- Left side column. contains the logo and sidebar -->

 <!-- Left side column. contains the logo and sidebar -->
 
  <?php include 'Common/Admin/sidebar.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
         <?php 
          $controller = new Admin_Controller();
          $controller->handleRequest();
        ?>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




























<?php include 'Common/Admin/fooder.php'; ?>
