<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>

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

  <div class="uppernav">

    <div class="uppernav-middle">
      <a href="HomePage.php" class="active"><img src="Pingpong panda logo v3.2.png" width="150" height="150"></a>
    </div>
  
    <a href="register.php"><img src="account.png" width="50" height="50"> <b>Register</b></a>
  
    <div class="uppernav-right">
      <a href="login.php"><b>Login</b> <img src="login logo.png" width="50" height="50"></a>
    </div>
  
  </div>

    <!--------------------------- About us Cover photo ------------------------------------------>

    <div class="Banner">
      <a href="" class="active"><img src="about ppp page cover.png" alt="banner" style="width: 100%" height="400"></a>
      <div class="centered">
      </div>
    </div>
  
    <br>
  
   <!---------------------------------- Divider ---------------------------------->
  
      <hr class="rounded">
  
      <br>
  
  <!------------------------------About us info------------------------------------------>
  
  <h1 style="color:black"><strong><b>Company Info</b></strong></h1>
  
  <br>

  <p style="color:white; font-size: 35px;">PingPong Panda, a wholly-owned subsidiary of 
    King Kong Fu, is one of the world's most prominent E-commerce entertainment 
    companies, built on a proven library of more than 8,000 Magazines, Comics and Mangas 
    featured in a variety of media over five years. King Kong Fu. utilizes its Products 
    in entertainment and publishing.</p>

    <br>
  
    <!---------------------------------- Divider ---------------------------------->
   
       <hr class="rounded">
   
       <br>

    <!--------------------------------------------Location---------------------------------------->

    <h1 style="color:black"><strong><b>Corporate Headquarters</b></strong></h1>

    <br>
   
    <p style="color:white; font-size: 35px;">De Havilland Campus, Mosquito Way,</p>
    <p style="color: white; font-size: 35px;">Hatfield AL10 9EU, United Kingdom</p>
    
  
    <br>
  
    <!---------------------------------- Divider ---------------------------------->
   
       <hr class="rounded">

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