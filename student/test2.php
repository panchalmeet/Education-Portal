<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Educational Portal | Results</title>
  <link rel="icon" type="image/jpg" href="../dist/img/logo1.jpg">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      
    </form>

  </nav>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../dist/img/logo1.jpg"
           alt=""
           class="brand-image img-circle elevation-3"
          >
      <span class="brand-text font-weight-light">Alienware</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Rushabh Narekar</a>
        </div>
      </div>


       <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../index.php" class="nav-link ">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard                
              </p>
            </a>
            </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Courses
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="test.php" class="nav-link">
              <i class="nav-icon fa fa-clipboard"></i>
              <p>
                Online Test
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-code"></i>
              <p>
                Project 
              </p>
              </a>            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-folder"></i>
              <p>
                Assignment                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fa fa-chevron-left"></i>
              <p>
                Sign out                
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Results</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Results</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
<div class="card-body">
              <div class="form-control">
                <div class="card-header">
                <h3><font color="green">Right Answers</font></h3>
              </div>
  
<?php 
if (isset($_POST["submit"])) {

  $que1=$_POST["que1"]."<br>";
  echo $que1;
  $que2=$_POST["que2"]."<br>";;
  echo $que2;
  $que3=$_POST["que3"]."<br>";;
  echo $que3;
  $que4=$_POST["que4"]."<br>";;
  echo $que4;
  $que5=$_POST["que5"]."<br>";;
  echo $que5;
  $que6=$_POST["que6"]."<br>";;
  echo $que6;
  $que7=$_POST["que7"]."<br>";;
  echo $que7;
  $que8=$_POST["que8"]."<br>";;
  echo $que8;
  $que9=$_POST["que9"]."<br>";;
  echo $que9;
  $que10=$_POST["que10"]."<br>";;
  echo $que10;

}
?>
  </div>
</div>
    </div>
  <footer class="main-footer">
        <strong>Copyright &copy; 2018-2019 <a href="http://www.daiict.ac.in/daiict/index.html" target="_blank">Tic Tech Toe Hackathon 2018</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0 Alienware
    </div>
  </footer>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
