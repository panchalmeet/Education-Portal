<?php       
session_start();
$err=error_log("Something Is Not Right");
$self='http://localhost/edu/pages/examples/login-in.php';
if (isset($_POST['submit']))
{
    //$_SESSION["user_option"]=$_POST['user_option'];
    $_SESSION["email"]=$_POST['email'];
    $_SESSION["password"]=$_POST['password'];

    $locate='http://localhost/edu/index.php';
    $locate2='http://localhost/edu/pages/examples/404.php';
    $locate3='http://localhost/edu/index2.php';
    $locate4='http://localhost/edu/index3.php';

//DTE ADMIN VALIDATION...

    // For Teachers
    if ( $_POST['email']=="gec1@gmail.com" && $_POST['password']=="1234") 
    {
        header("Location:$locate");
        exit();
    }

    //For Students
    else if ( $_POST['email']=="gec2@gmail.com" && $_POST['password']=="12345") 
    {
        header("Location:$locate3");
        exit();
    }

    //For Parents
    else if ( $_POST['email']=="gec3@gmail.com" && $_POST['password']=="123456") 
    {
        header("Location:$locate4");
        exit();
    }
    else
    {
        echo "Please Enter Valid Username & Password";
    }
}
else
{
    echo "";
}
?>
