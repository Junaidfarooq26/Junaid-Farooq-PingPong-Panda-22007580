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
  
    <a href="Account Page.php"><img src="account.png" width="50" height="50"> <b>Account</b></a>
  
    <div class="uppernav-right">
      <a href="Contact Us.php"><b>Contact Us</b> <img src="contact us logo.png" width="50" height="50"></a>
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

<center><h1 style="font-size: 60px; color: white; background-color: #E3CD81FF; border-radius: 40px; padding: 20px;">Login</h1></center> 
<br>  
<form>  
    <div class="account">   
        <label>Username : </label>   
        <input type="text" placeholder="Enter Username" name="fname" required>  
        <label>Password : </label>   
        <input type="password" placeholder="Enter Password" name="pwd" required>  
        <button type="submit">Login</button>         
    </div>   
</form>  

<br>

<!---------------------------------- Divider ---------------------------------->
  
<br>

<hr class="rounded">
  
<br>

<!--------------------- The singup page HTML code ---------------------------------------> 

<br>

<center><h1 style="font-size: 60px; color: white; background-color: #E3CD81FF; border-radius: 40px; padding: 20px;">Register</h1></center> 
<br>  
<form>
    <div class="account"> 
        <label>Username : </label>   
        <input type="text" placeholder="Enter Username" name="username" required>  
        <label>E-mail : </label>
        <input style="width: 100%; border-radius: 40px;" type="email" placeholder="Enter Email" name="email" required> 
        <label>Password : </label> 
        <input type="password" placeholder="Enter Password" name="password" required>   
        <button type="submit">Register</button>   
    </div>     
</form>

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
    <a href="News Page.html"><img src="news.png" width="50" height="50"> <b>News</b></a>
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

<!------------------Register php------------------>
<?php
session_start();

// initializing variables
$username = "";
$password    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', ' pingpong_panda');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }

  if (empty($password)) { array_push($errors, "Password is required"); }

  if (empty($email)) { array_push($errors, "email is required");}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (username,password) 
  			  VALUES('$username','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

?>
