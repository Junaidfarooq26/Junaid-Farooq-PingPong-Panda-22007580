<?php  
  
include("account_page.php");  
  
if(isset($_POST['login']))  
{
    $uname=$_POST['username'];  
    $pass=$_POST['Password'];  
  
    $check_user="select * from user WHERE username='$username'AND password='$password'";  
  
    $run=mysqli_query($dbcon,$check_user);
  
if(mysqli_num_rows($run) && isset($_POST['Login']))  
    {  
        echo "<script>window.open('HomePage.php','_self')</script>";  
  
        $_SESSION['username']=$username;//here session is used and value of $uname store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?> 