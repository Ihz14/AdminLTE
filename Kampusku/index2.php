<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama']){
  header('Location:../index.php?session=expired');
}
include('header.php');?>
<?php include('../config/config.php');?>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
 <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php');?>
    <!-- Sidebar -->
   <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
     <?php
     if (isset($_GET['page'])){
        if ($_GET['page']=='dashboard'){
     include('dashboard.php');
     }
     else if($_GET['page']=='data-mahasiswa'){
      include('data_mahasiswa.php');
     }
    
     else if($_GET['page']=='edit-data'){
      include('edit.php');
     }
      else if($_GET['page']=='data-dosen'){
      include('data_dosen.php');
     }
     else if($_GET['page']=='hapus-data'){
      include('hapus.php');
     }
      else if($_GET['page']=='data-mk'){
      include('data_mk.php');
     }
     else {
      include('404eror.php');
     }
   }
     else {
      include('dashboard.php');
     }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

</body>
</html>
