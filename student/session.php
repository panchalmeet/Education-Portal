<?php       
session_start();
$err=error_log("Something Is Not Right");
$self='http://localhost/edu/pages/examples/login-in.php';
if (isset($_POST['submit']))
{
    $_SESSION["user-option"]=$_POST['user-option'];
    $_SESSION["email"]=$_POST['email'];
    $_SESSION["password"]=$_POST['password'];

    $locate='http://localhost/edu/index.php';
    $locate2='http://localhost/edu/teacher/index2.php';
    $locate3='http://localhost/edu/parents/index3.php';
   
//DTE ADMIN VALIDATION...

    // For Teachers
    if ($_POST['user-option']=='student' && $_POST['email']=="gec@gmail.com" && $_POST['password']=="1234") 
    {
        header("Location:$locate");
        exit();
    }

    //For Students
    else if ($_POST['user-option']=='teacher' && $_POST['email']=="gec@gmail.com" && $_POST['password']=="1234") 
    {
        header("Location:$locate2");
        exit();
    }

    //For Parents
    else if ($_POST['user-option']=='parents' && $_POST['email']=="gec@gmail.com" && $_POST['password']=="1234") 
    {
        header("Location:$locate3");
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
