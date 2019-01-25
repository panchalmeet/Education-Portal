<?php include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Education For All | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Education For All</a>
    
  </div>
  <!-- /.login-logo -->
  <div class="card" >
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

       <!-- select -->  
                   <div class="form-group">
                    <select class="form-control" required="true">
                      <option value="">-- Please select --</option>
                      <option value="teacher" href="pages/examples/index2">Teacher</option>
                      <option value="student">Student</option>
                      <option value="parents">Parents</option>
                    </select>
                  </div>
      <form id="login" method="post">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="Email" required="true" >  
        </div>
        <div class="form-group has-feedback">          
           <span class="input-group-addon">
          <i class="icon ion-md-man"></i>
          <input type="password" class="form-control" name="password" placeholder="Password" required="true">            
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="https://m.facebook.com/" class="btn btn-block btn-primary" target="_blank">
          <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="https://accounts.google.com/" class="btn btn-block btn-danger" target="_blank">
          <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forget.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
