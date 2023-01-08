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

    <!--------------------------- Comic Cover photo ------------------------------------------>

    <div class="Banner">
		<a href="" class="active"><img src="contact us cover.png" alt="banner" style="width: 100%" height="400"></a>
		<div class="centered">
		</div>
	</div>

  <br>

 <!---------------------------------- Divider ---------------------------------->

    <hr class="rounded">

    <br>

<!------------------------------Contact us info------------------------------------------>

<div class="Banner">
    <a href="" class="active"><img src="contact us info.png" alt="banner" style="width: 100%" height="400"></a>
    <div class="centered">
    </div>
</div>

<br>

<!---------------------------------- Divider ---------------------------------->

   <hr class="rounded">

<br>

<!----------------------------------------Contact us Form---------------------------------------->

<h1 style="color:black"><strong><b>Contact Us Form</b></strong></h1>

<br>

<div class="container">
    <form action="action_page.php">
  
      <label for="fname" style="font-size: 35px;">First Name</label>
      <input style="font-size: 25px;" type="text" id="fname" name="firstname" placeholder="Your name..">
  
      <label for="lname" style="font-size: 35px;">Last Name</label>
      <input style="font-size: 25px;" type="text" id="lname" name="lastname" placeholder="Your last name..">
  
      <label for="country" style="font-size: 35px;">Country</label>
      <select id="country" name="country">
        <option value="1st Country">Argentina</option>
        <option value="2nd Country">Brazil</option>
        <option value="3rd Country">Canada</option>
        <option value="4th Country">Denmark</option>
        <option value="5th Country">Egypt</option>
        <option value="6th Country">France</option>
        <option value="7th Country">Germany</option>
        <option value="8th Country">Hungary</option>
        <option value="9th Country">IceLand</option>
        <option value="10th Country">Japan</option>
        <option value="11th Country">Kenya</option>
        <option value="12th Country">Libya</option>
        <option value="13th Country">Malaysia</option>
        <option value="14th Country">Nepal</option>
        <option value="15th Country">Norway</option>
        <option value="16th Country">Oman</option>
        <option value="17th Country">Pakistan</option>
        <option value="18th Country">Qatar</option>
        <option value="19th Country">Romania</option>
        <option value="20th Country">Singapore</option>
        <option value="21st Country">Turkey</option>
        <option value="22nd Country">USA</option>
        <option value="23rd Country">United Kingdom</option>
        <option value="24th country">Venezuela</option>
        <option value="25th Country">	Zimbabwe</option>
      </select>
  
      <label for="subject" style="font-size: 35px;">Subject</label>
      <textarea style="font-size: 25px; height:200px;" id="subject" name="subject" placeholder="Write something.."></textarea>
      <input style="font-size: 35px; margin-left: 180px; border-radius: 40px;" type="submit" value="Submit">
  
    </form>
  </div>

  <br>

 <!---------------------------------- Divider ---------------------------------->

    <hr class="rounded">

    <br>

 <!------------------------------Business Inquiries---------------------------------------->

 <h1 style="color:black"><strong><b>Business Inquiries</b></strong></h1>

 <br>

 <p style="color:white; font-size: 35px;">General phone number, PingPong Panda,</p>
 <p style="color: white; font-size: 35px;">Phone: +44 1707 284000</p>

 <br>

 <!---------------------------------- Divider ---------------------------------->

    <hr class="rounded">

    <br>

  <!----------------------------Consumer Inquiries------------------------------------>  

  <h1 style="color:black"><strong><b>Consumer Inquiries</b></strong></h1>

  <br>

  <p style="color:white; font-size: 35px;">For any inquiries unresolved by the Help Page, 
    please fill the Contact Form above.</p>

    <br>

  <!---------------------------------- Divider ---------------------------------->
   
    <hr class="rounded">
   
    <br>
   
  <!----------------------------Media Relations------------------------------------> 

  <h1 style="color:black"><strong><b>Media Relations</b></strong></h1>

  <br>

  <p style="color:white; font-size: 35px;">Steve Bennett</p>
  <p style="color: white; font-size: 35px;">Executive Vice President</p>
  <p style="color: white; font-size: 35px;"><b>E-mail:</b> s.j.bennett@herts.ac.uk</p>

  <br>

  <!---------------------------------- Divider ---------------------------------->
   
    <hr class="rounded">
   
    <br>

 <!-------------------------------- Bottom Navbar ------------------------------------------>

  <div class="header" id="myheader">
    <a href="About Us.html" class="active"><img src="information.png" width="50" height="50"> <b>About Us</b></a> 
    <a href="Comic Page.html"><img src="books.png" width="50" height="50"> <b>Comic</b></a>
    <a href="Manga Page.html"><img src="books.png" width="50" height="50"> <b>Manga</b></a>
    <a href="Magazine Page.html"><img src="books.png" width="50" height="50"> <b>Magazines</b></a>
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
    <h1><a style="color:white;text-decoration: none;" href="Contact Us.html">Contact Us</a></h1> 
    <br>
    <h1><a style="color:white;text-decoration: none;" href="Terms of Use.html">Terms of Use</a></h1>
    <br>
    <h1><a style="color:white;text-decoration: none;" href="Privacy Policy.html">Privacy Policy</a></h1>
    <br>
    <hr class="rounded">
    <h3>Copyright 2022-2023 by King Kong Fu. All Right Reserved</h3>
  </footer>
  <br>

</body>
</html>