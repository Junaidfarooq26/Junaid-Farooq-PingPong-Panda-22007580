<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Account page</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	
<link rel="stylesheet" href="PingPong Panda Design.css">

<script>
  function myFunction() {
    var x = document.getElementById("myheader");
    if (x.className === "header") {
      x.className += " responsive";
    } else {
      x.className = "header";
    }
  }

</script>

</head>

<body> 

  <!---------------------------------- Upper navbar Code ---------------------------------------> 

  <div class="uppernav">

    <div class="uppernav-middle">
      <a href="HomePage.php" class="active"><img src="Pingpong panda logo v3.2.png" width="150" height="150"></a>
    </div>
  
    <a href="register.php"><img src="account.png" width="50" height="50"> <b>Register</b></a>
  
    <div class="uppernav-right">
      <a href="Login.php"><b>Login</b> <img src="login logo.png" width="50" height="50"></a>
    </div>
  
  </div>

  <br>

      <!--------------------------- Comic Cover photo ------------------------------------------>

      <div class="Banner">
        <a><img src="account page cover.png" alt="banner" style="width: 100%" height="300"></a>
        <div class="centered">
        </div>
      </div>
    
      <br>

  <!---------------------------------- Divider ---------------------------------->
  
     <hr class="rounded">
  
  <br>

<!--------------------- The login page HTML code ---------------------------------------> 

<div class="container mt-3">
  <h2>Login</h2>
  <form action="Login.php" method="post">
    <div class="mb-3 mt-3">
      <label for="">Username:</label>
      <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
 

<br>

<!---------------------------------- Divider ---------------------------------->
  
<br>

<hr class="rounded">
  
<br>

<!------------------------------------- Bottom navbar Code ----------------------------------------------> 

<div class="header" id="myheader">
    <a href="About Us.php" class="active"><img src="information.png" width="50" height="50"> <b>About Us</b></a> 
    <a href="Comic Page.php"><img src="books.png" width="50" height="50"> <b>Comic</b></a>
    <a href="Manga Page.php"><img src="books.png" width="50" height="50"> <b>Manga</b></a>
    <a href="Magazine Page.php"><img src="books.png" width="50" height="50"> <b>Magazines</b></a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>

    <!--------------------------------------Footer---------------------------------------------->

    <br>
    <br>
  
    <footer>
      <div class="footer-r">
      <h1>Follow PingPong Panda</h1>  
      <br>
      <a href="https://www.instagram.com/pingp0ng.panda/"><img src="instag logo.png" width="50" height="50"></a>
      <a href="https://twitter.com/PingP0ng_Panda"><img style="margin-left: 50px" src="twitter.png" width="50" height="50"></a>
    </div>
    <hr class="rounded"> 
      <br>
      <h1><a style="color:white;text-decoration: none;" href="contact_us.php">Contact Us</a></h1>
      <br>
      <h1><a style="color:white;text-decoration: none;" href="Terms of Use.php">Terms of Use</a></h1>
      <br>
      <h1><a style="color:white;text-decoration: none;" href="Privacy Policy.php">Privacy Policy</a></h1>
      <br>
      <hr class="rounded">
      <h3>Copyright 2022-2023 by King Kong Fu. All Right Reserved</h3>
    </footer>
    <br>
	
</body>
</html>

<!------------------Login php------------------>

<?php

 
$dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"pingpong");    
  
if(isset($_POST['submit']))  
{  

    $username=$_POST['username'];  
    $password=$_POST['pswd'];  
  
    $check_user="select * from user WHERE username='$username' AND password='$password'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
     if(mysqli_num_rows($run) )  
    {  
session_start(); 
        $_SESSION['username']=$username;//here session is used and value of $uname store in $_SESSION.  
        echo "<script>window.open('HomePage.php','_self')</script>";  
			
  
    }  
    else  
    { 
            
      echo "<script>alert('Username or password is incorrect!')</script>";  
    }  
}
else{
	
	  
}	


?>