<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <title>PingPong Home page</title>

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
  
 <!------------------------------------- Top Navbar ------------------------------------------>

  <div class="uppernav">

    <div class="uppernav-middle">
      <a href="HomePage.php" class="active"><img src="Pingpong panda logo v3.2.png" width="150" height="150"></a>
    </div>
  
    <a href="register.php"><img src="account.png" width="50" height="50"> <b>Register</b></a>
  
    <div class="uppernav-right">
      <a href="login.php"><b>Login</b> <img src="login logo.png" width="50" height="50"></a>
    </div>
  
  </div>
  
  <br>

  <!--------------------------- Homepage Cover photo ------------------------------------------>
 
  <div class="Banner">
        <a><img src="pay.png" alt="banner" style="width: 100%" height="300"></a>
        <div class="centered">
        </div>
      </div>
    
      <br>

  <br>

  <!---------------------------------- Divider ---------------------------------->

  <hr class="rounded">

  <!----------------------------------- New Releases card section ------------------------------>

  <br>

  <h1 style="color:white"><b><strong>Billing Detail's</strong></b></h1>

  <br>

  <div class="pay">
            <form action="purchase_product.php" method="post" >
              <label for="fname" style="font-size: 35px; color: white;">First Name</label>
              <input style="font-size: 40px; height: 60px; border-radius: 40px;" type="text" id="fname" name="firstname" placeholder="Enter First Name..">
            
              <label for="lname" style="font-size: 35px; color: white;">Last Name</label>
              <input style="font-size: 40px; height: 60px; border-radius: 40px;" type="text" id="lname" name="lastname" placeholder="Enter Last Name..">

              <label for="email" style="font-size: 35px; color: white;">E-mail</label>
              <input style="width: 100%; border-radius: 40px; height: 60px; font-size: 40px;" type="email" placeholder="Enter Email..." name="email" required> 
            <br>
            <br>
              <label for="phone" style="font-size: 35px; color: white;">Phone Number</label>
                <input style="width: 100%; border-radius: 40px; height: 60px; font-size: 40px;" type="tel" id="phone" name="phone" placeholder="Enter Phone Number...">
            <br>
            <br>
              <label for="Address" style="font-size: 35px; color: white;">Address</label>
              <textarea style="font-size: 40px; height:120px;" id="address" name="address" placeholder="Write Your Address..."></textarea>
            
              <input style="font-size: 50px; border-radius: 40px;" type="submit" value="Purchase">
            
            </div>


  <!-------------------------------- Bottom Navbar ------------------------------------------>

  <div class="header" id="myheader">
    <a href="About Us.php" class="active"><img src="information.png" width="50" height="50"> <b>About Us</b></a> 
    <a href="Comic Page.php"><img src="books.png" width="50" height="50"> <b>Comic</b></a>
    <a href="Manga Page.php"><img src="books.png" width="50" height="50"> <b>Manga</b></a>
    <a href="Magazine Page.php"><img src="books.png" width="50" height="50"> <b>Magazines</b></a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>

 <!-----------------------------------------Divider---------------------------------------->

  <hr class="rounded"> 

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

<!------------------Purchase php------------------>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pingpong";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
            
    }

    $sql = "INSERT INTO user_details (firstname, lastname, email, phone, address) VALUES ('$firstname', '$lastname', '$email', '$phone', '$address')";
    if ($conn->query($sql) === TRUE) {
      echo "<script>window.open('HomePage.php','_self')</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }
?>