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
  
    <a href="Account Page.php"><img src="account.png" width="50" height="50"> <b>Account</b></a>
  
    <div class="uppernav-right">
      <a href="Contact Us.php"><b>Contact Us</b> <img src="contact us logo.png" width="50" height="50"></a>
    </div>
  
  </div>
  
  <br>

  <!--------------------------- Homepage Cover photo ------------------------------------------>
 
    

  <br>

  <!---------------------------------- Divider ---------------------------------->

  <hr class="rounded">

  <!----------------------------------- New Releases card section ------------------------------>

  <br>

  <h1 style="color:white"><b><strong>Product Purchase Form</strong></b></h1>

  <br>

  <div class="pay">
            <form action="">
              <label for="fname" style="font-size: 35px; color: white;">First Name</label>
              <input style="font-size: 20px; height: 60px; border-radius: 40px;" type="text" id="fname" name="firstname" placeholder="Enter First Name..">
            
              <label for="lname" style="font-size: 35px; color: white;">Last Name</label>
              <input style="font-size: 20px; height: 60px; border-radius: 40px;" type="text" id="lname" name="lastname" placeholder="Enter Last Name..">

              <label for="email" style="font-size: 35px; color: white;">E-mail</label>
              <input style="width: 100%; border-radius: 40px; height: 60px;" type="email" placeholder="Enter Email..." name="email" required> 
            <br>
            <br>
              <label for="phone" style="font-size: 35px; color: white;">Phone Number</label>
              <input style="width: 100%; border-radius: 40px; height: 60px;" type="tel" id="phone" name="phone" placeholder="Enter Phone Number..." pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            <br>
            <br>
              <label for="Address" style="font-size: 35px; color: white;">Address</label>
              <textarea style="font-size: 20px; height:120px;" id="address" name="address" placeholder="Write Your Address..."></textarea>
            
              <input style="font-size: 50px; border-radius: 40px;" type="submit" value="Purchase">
            
            </form>
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