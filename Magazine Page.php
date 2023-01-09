<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Magazine Page</title>

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
  
    <a href="Account Page.php"><img src="account.png" width="50" height="50"> <b>Account</b></a>
  
    <div class="uppernav-right">
      <a href="login.php"><b>Login</b> <img src="login logo.png" width="50" height="50"></a>
    </div>
  
  </div>

  <br>

  <!--------------------------- Comic Cover photo ------------------------------------------>

  <div class="Banner">
		<a href="" class="active"><img src="magazine page.png" alt="banner" style="width: 100%" height="400"></a>
		<div class="centered">
		</div>
	</div>

  <br>

  <!---------------------------------- Divider ---------------------------------->
 
     <hr class="rounded">

  <!---------------------------------vogue magazine section-------------------------------------->
   
  <br>

  <a id="vogue">
  <h1 style="color:white"><b><strong>Vogue Magaziness</strong></b></h1>
  </a>

  <br>

  <div class="product">
    <img src="vogue.png" alt="Vogue1" style="width:100%">
    <h1>Vogue Dec'22 Issue</h1>
    <hr class="rounded">
    <p class="price">$24.99</p>
    <a href="purchase_product.php">
    <button>Buy Now</button>
    </a>
  </div>

  <div class="product" style="float: right;">
    <img src="vogue2.png" alt="vogue2" style="width:100%">
    <h1>Vogue Oct'22 Issue</h1>
    <hr class="rounded">
    <p class="price">$24.99</p>
    <a href="purchase_product.php">
    <button>Buy Now</button>
    </a>
  </div>

    <!---------------------------------- Divider ---------------------------------->
 
    <hr class="rounded">

    <!---------------------------------Empire magazine section-------------------------------------->
     
    <br>
  
    <a id="empire">
    <h1 style="color:white"><b><strong>Empire Magazines</strong></b></h1>
    </a>

    <br>

  <div class="product">
    <img src="empire jan 23.jpg" alt="emp1" style="width:100%">
    <h1>Empire Feb'23 Issue Feat. Harrison Ford</h1>
    <hr class="rounded">
    <p class="price">$29.99</p>
    <a href="purchase_product.php">
    <button class="button">Buy Now</button>
    </a>
  </div>

  <div class="product" style="float: right;">
    <img src="empire summer 22.jpg" alt="emp2" style="width:100%">
    <h1>Empire Summer'22 Issue</h1>
    <hr class="rounded">
    <p class="price">Free</p>
    <a href="purchase_product.php">
    <button>Buy Now</button>
    </a>
  </div>

  <div class="product">
    <img src="empire.jpg" alt="emp3" style="width:100%;">
    <h1>Empire Jan'23 The Greatest Actor Issue</h1>
    <hr class="rounded">
    <p class="price">$22.99</p>
    <a href="purchase_product.php">
    <button>Buy Now</button>
    </a>
  </div>

  <div class="product" style="float: right;">
    <img src="empire sep 22.jpg" alt="emp4" style="width:100%;">
    <h1>Empire Sep'22 Issue Feat. HOD Cast</h1>
    <hr class="rounded">
    <p class="price">$14.99</p>
    <a href="purchase_product.php">
    <button>Buy Now</button>
    </a>
  </div>

  <br>

  <!---------------------------------- Divider ---------------------------------->
 
     <hr class="rounded">

  <!---------------------------------times magazine section-------------------------------------->
   
  <br>

  <a id="time">
  <h1 style="color:white"><b><strong>Times Magazines</strong></b></h1>
  </a>

  <br>

  <div class="product">
    <img src="person of the year.png" alt="time1" style="width:100%">
    <h1>Times Person of the Year Issue</h1>
    <hr class="rounded">
    <p class="price">Free</p>
    <a href="purchase_product.php">
    <button>Buy Now</button>
    </a>
  </div>

  <div class="product" style="float: right;">
    <img src="time dec 12.jpg" alt="time2" style="width:100%">
    <h1>Times interview with Imran Khan Issue</h1>
    <hr class="rounded">
    <p class="price">$19.99</p>
    <a href="purchase_product.php">
    <button>Buy Now</button>
    </a>
  </div>

  <br>

    <!---------------------------------- Divider ---------------------------------->
 
    <hr class="rounded">

  <!-------------------------------- Bottom Navbar ------------------------------------------>

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