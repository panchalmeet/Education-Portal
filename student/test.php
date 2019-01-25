<!DOCTYPE html>
<html>
<head>
  <style>
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 350px;
    margin-bottom: 12px;
    margin-left: 40px;
    cursor: pointer;
    font-size: 17px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;

}
.inpu{
  margin-left: 25px;
}

/* Create a custom radio button */
.checkmark {
  margin-left: 0px;
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #D0ECE9  ;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #9B98FF  ;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #D16953;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: auto;
  left: auto;
  width: auto;
  height: auto;
  border-radius: 50%;
  background: white;
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Educational Portal | Courses</title>
  <link rel="icon" type="image/jpg" href="../dist/img/logo1.jpg">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.css">
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
            <a href="course.php" class="nav-link ">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Courses
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
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
            <h1>Online Test</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Online Test</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>




    <!-- Main content -->
    <section class="content">
       <div class="card">
              <div class="card-header">
                <h3><font color="red">Java Online Test</font></h3>
                <h5><font color="green"><b>Integer and Floating Data Types</b></font></h5>
              </div>
              <form action="test2.php" method="post">
  <!-- QUESTION 1-->
  <div class="card-body">
  1. What is the range of short data type in Java?                
  <div class="form-control">
  <label class="container"><div class="inpu">a) -128 to 127</div>
  <input type="radio" checked="checked" value="-128 to 127" name="que1">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">b) -32768 to 32767</div>
  <input type="radio" value="-32768 to 32767" name="que1">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">c) -2147483648 to 2147483647</div>
  <input type="radio" name="que1" value="-2147483648 to 2147483647">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">d) None of the mentioned</div>
  <input type="radio" name="que1" value="None of the mentioned">
  <span class="checkmark"></span>
  </label>
</div>
</div>
<!-- QUESTION 2-->
  <div class="card-body">
  2. What is the range of byte data type in Java?
  <div class="form-control">
  <label class="container"><div class="inpu">a) -128 to 127</div>
  <input type="radio" checked="checked" name="que2" value="-128 to 127">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">b) -32768 to 32767</div>
  <input type="radio" name="que2" value="-32768 to 32767">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">c) -2147483648 to 2147483647</div>
  <input type="radio" name="que2" value="-2147483648 to 2147483647">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">d) None of the mentioned</div>
  <input type="radio" name="que2" value="None of the mentioned">
  <span class="checkmark"></span>
  </label>
</div>
</div>
<!-- QUESTION 3-->
  <div class="card-body">
 3. Which of the following are legal lines of Java code?
  <div style="margin-left: 20px;">
   1. int w = (int)888.8;<br>
   2. byte x = (byte)100L;<br>
   3. long y = (byte)100;<br>
   4. byte z = (byte)100L; 
  </div>
  <div class="form-control">
  <label class="container"><div class="inpu">a) 1 and 2</div>
  <input type="radio" checked="checked" name="que3" value="1 and 2">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">b) 2 and 3</div>
  <input type="radio" name="que3" value="2 and 3">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">c) 3 and 4</div>
  <input type="radio" name="que3" value="3 and 4">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">d) All statements are correct.</div>
  <input type="radio" name="que3" value="All statements are correct.">
  <span class="checkmark"></span>
  </label>
</div>
</div>
<!-- QUESTION 4-->
  <div class="card-body">
    4. An expression involving byte, int, and literal numbers is promoted to which of these?
  <div class="form-control">
  <label class="container"><div class="inpu">a) int</div>
  <input type="radio" checked="checked" name="que4" value="int">
  <span class="checkmark"></span></label>
  <label class="container"><div class="inpu">b) long</div>
  <input type="radio" name="que4" value="long">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">c) byte</div>
  <input type="radio" name="que4" value="byte">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">d) float</div>
  <input type="radio" name="que4" value="float">
  <span class="checkmark"></span>
  </label>
</div>
</div>
<!-- QUESTION 5-->
  <div class="card-body">
    5. Which of these literals can be contained in float data type variable?
  <div class="form-control">
  <label class="container"><div class="inpu">a) -1.7e+308</div>
  <input type="radio" checked="checked" name="que5" value="-1.7e+308">
  <span class="checkmark"></span></label>
  <label class="container"><div class="inpu">b) -3.4e+038</div>
  <input type="radio" name="que5" value="-3.4e+038">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">c) +1.7e+308</div>
  <input type="radio" name="que5" value="+1.7e+308">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">d) -3.4e+050</div>
  <input type="radio" name="que5" value="-3.4e+050">
  <span class="checkmark"></span>
  </label>
</div>
</div>
<!-- QUESTION 6-->
  <div class="card-body">
    6. Which data type value is returned by all transcendental math functions?
  <div class="form-control">
  <label class="container"><div class="inpu">a) int</div>
  <input type="radio" checked="checked" name="que6" value="int">
  <span class="checkmark"></span></label>
  <label class="container"><div class="inpu">b) float</div>
  <input type="radio" name="que6" value="float">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">c) double</div>
  <input type="radio" name="que6" value="double">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">d) long</div>
  <input type="radio" name="que6" value="long">
  <span class="checkmark"></span>
  </label>
</div>
</div>
<!-- QUESTION 7-->
  <div class="card-body">
    7. What is the output of this program?
<div style="margin-left: 20px;"> class increment<br> {<br>
        public static void main(String args[]) <br>
        {       <br> 
             int g = 3;<br>
             System.out.print(++g * 8);<br>
        } <br>
    }</div>
  <div class="form-control">
  <label class="container"><div class="inpu">a) 25</div>
  <input type="radio" checked="checked" name="que7" value="25">
  <span class="checkmark"></span></label>
  <label class="container"><div class="inpu">b) 24</div>
  <input type="radio" name="que7" value="24">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">c) 32</div>
  <input type="radio" name="que7" value="32">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">d) 33</div>
  <input type="radio" name="que7" value="33">
  <span class="checkmark"></span>
  </label>
</div>
</div>
<!-- QUESTION 8-->
  <div class="card-body">
    8. Which of the following is not OOPS concept in Java?
  <div class="form-control">
  <label class="container"><div class="inpu">a) Inheritance</div>
  <input type="radio" checked="checked" name="que8" value="Inheritance">
  <span class="checkmark"></span></label>
  <label class="container"><div class="inpu">b) Encapsulation</div>
  <input type="radio" name="que8" value="Encapsulation">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">c) Polymorphism</div>
  <input type="radio" name="que8" value="Polymorphism">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">d) Compilation</div>
  <input type="radio" name="que8" value="Compilation">
  <span class="checkmark"></span>
  </label>
</div>
</div>
<!-- QUESTION 9-->
  <div class="card-body">
    9. Which of the following is a type of polymorphism in Java?
  <div class="form-control">
  <label class="container"><div class="inpu">a) Compile time polymorphism</div>
  <input type="radio" checked="checked" name="que9" value="Compile time polymorphism">
  <span class="checkmark"></span></label>
  <label class="container"><div class="inpu">b) Execution time polymorphism</div>
  <input type="radio" name="que9" value="Execution time polymorphism">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">c) Multiple polymorphism</div>
  <input type="radio" name="que9" value="Multiple polymorphism">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">d) Multilevel polymorphism</div>
  <input type="radio" name="que9" value="Multilevel polymorphism">
  <span class="checkmark"></span>
  </label>
</div>
</div>

<!-- QUESTION 10-->
  <div class="card-body">
    10. When does method overloading is determined?
  <div class="form-control">
  <label class="container"><div class="inpu">a) At run time</div>
  <input type="radio" checked="checked" name="que10" value="At run time">
  <span class="checkmark"></span></label>
  <label class="container"><div class="inpu">b) At compile time</div>
  <input type="radio" name="que10" value="At compile time">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">c) At coding time</div>
  <input type="radio" name="que10" value="At coding time">
  <span class="checkmark"></span>
  </label>
  <label class="container"><div class="inpu">d) At execution time</div>
  <input type="radio" name="que10" value="At execution time">
  <span class="checkmark"></span>
  </label>
</div>
</div>
<center><button type="submit" name="submit" style="width: 200px;" class="btn btn-block btn-success">OK</button></center>
<br>
</form>
  </div>
</div>

    </div>
    </section>
  </div>
    <!-- /.content -->
    <!-- /.content-wrapper -->

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
