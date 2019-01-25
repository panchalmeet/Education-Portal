<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Education Portal | Report</title>
  <link rel="icon" type="image/jpg" href="../dist/img/logo1.jpg">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
    <a href="index2.php" class="brand-link">
      <img src="../dist/img/logo1.jpg" alt="" class="brand-image img-circle elevation-3"
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
          <a href="#" class="d-block">Vatshal Panchal</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index2.php" class="nav-link ">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard          
              </p>
            </a>
            </li>
          <li class="nav-item has-treeview">
            <a href="course_set.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Courses
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="test_set.php" class="nav-link">
              <i class="nav-icon fa fa-clipboard"></i>
              <p>
                Online Test
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="project.php" class="nav-link">
              <i class="nav-icon fa fa-code"></i>
              <p>
                Project 
              </p>
              </a>            
          </li>
          <li class="nav-item has-treeview">
            <a href="assignment.php" class="nav-link">
              <i class="nav-icon fa fa-folder"></i>
              <p>
                Assignment                
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Report                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="contact.php" class="nav-link">
              <i class="nav-icon fa fa-phone"></i>
              <p>
                Contact                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="../student/login.php" class="nav-link">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Teacher's Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
               <li class="breadcrumb-item active">Report</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="col-sm-12">
          
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h4><center>Progress Report</center></h4>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" class="form-control" placeholder="Enter Student Name ...">
                  </div>
                  <div class="form-group">
                    <label>Faculty Name</label>
                    <input type="text" class="form-control" placeholder="Enter Faculty Name ...">
                  </div>

                  <div class="form-group">
                    <label>Overall Comments</label>
                    <textarea class="form-control" rows="3" placeholder="Enter Comments ..."></textarea>
                  </div>
                  
                  <!-- input states -->
                  <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"> Skills</label>
                    <input type="text" class="form-control" id="inputSuccess" placeholder="Enter Skills ...">
                  </div>
                  <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"> Behaviour</label>
                    <input type="text" class="form-control" id="inputWarning">
                  </div>
                  <!-- checkbox -->
                  <div class="form-group">
                    <label class="control-label" for="inputWarning">Progress</label>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="excellent">
                      <label class="form-check-label">Excellent</label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="very good">
                      <label class="form-check-label">Very Good</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="good">
                      <label class="form-check-label">Good</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="poor">
                      <label class="form-check-label">Poor</label>
                    </div>
                  </div>

                  <!-- select -->
                  <div class="form-group">
                    <label class="control-label" for="inputWarning">Subjects</label>
                    <select class="form-control">
                      <option>Python</option>
                      <option>Java</option>
                      <option>Android</option>
                      <option>HTML/CSS</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="inputWarning">Grades</label>       <select class="form-control">
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
                      <option>D</option>
                      <option>Fail</option>
                    </select>
                  </div>

                  <center><button type="submit" name="submit" style="width: 200px;" class="btn btn-block btn-success">Generate Report</button></center>

                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-alpha
    </div>
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
