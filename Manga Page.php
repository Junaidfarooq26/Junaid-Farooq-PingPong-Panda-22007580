<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manga Page</title>

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
      <a href="Cart Page.php"><b>Cart</b> <img src="cart.png" width="50" height="50"></a>
    </div>
  
  </div>

  <br>

  <!--------------------------- Comic Cover photo ------------------------------------------>

  <div class="Banner">
		<a href="" class="active"><img src="manga baner.png" alt="banner" style="width: 100%" height="400"></a>
		<div class="centered">
		</div>
	</div>

  <br>

  <!---------------------------------- Divider ---------------------------------->
 
     <hr class="rounded">

  <!---------------------------------mangas  section-------------------------------------->
   
  <br>

  <h1 style="color:white"><b><strong>Mangas</strong></b></h1>

  <br>

  <div class="product">
    <img src="ChainsawMan2.jpg" alt="chman" style="width:100%">
    <h1>ChainSaw Man Volume.20</h1>
    <hr class="rounded">
    <p class="price">$19.99</p>
    <a href="Purchase Product.php">
    <p><button>Buy Now</button></p>
    </a>
  </div>

  <div class="product" style="float: right;">
    <img src="demon slayer.jfif" alt="demon" style="width:100%">
    <h1>Demon Slayer Volume.08</h1>
    <hr class="rounded">
    <p class="price">$22.99</p>
    <a href="Purchase Product.php">
    <p><button>Buy Now</button></p>
    </a>
  </div>

  <div class="product">
    <img src="naruto.jpg" alt="naruto" style="width:100%">
    <h1>Naruto Volume.01 by masashi Kishimoto</h1>
    <hr class="rounded">
    <p class="price">Free</p>
    <a href="Purchase Product.php">
    <p><button>Buy Now</button></p>
    </a>
  </div>

  <div class="product" style="float: right;">
    <img src="note.jpg" alt="note" style="width:100%">
    <h1>Death Note Volume.04 By Tsugumi Ohba</h1>
    <hr class="rounded">
    <p class="price">Free</p>
    <a href="Purchase Product.php">
    <p><button>Buy Now</button></p>
    </a>
  </div>

  <div class="product" style="margin-left: 260px;">
    <img src="hero.jpg" alt="hero" style="width:100%">
    <h1>My Hero Academia Volume.01</h1>
    <hr class="rounded">
    <p class="price">$25.99</p>
    <a href="Purchase Product.php">
    <p><button>Buy Now</button></p>
    </a>
  </div>

  <br>

  <!---------------------------------- Divider ---------------------------------->
 
     <hr class="rounded">


  <!-------------------------------Bottom Navbar------------------------------------------>   

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
    <h1><a style="color:white;text-decoration: none;" href="Contact Us.php">Contact Us</a></h1> 
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