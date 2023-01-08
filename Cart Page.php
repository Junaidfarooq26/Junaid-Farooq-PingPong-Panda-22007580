<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cart page</title>

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

  <!---------------------------------------Uppernav Bar-------------------------------->

  <div class="uppernav">

    <div class="uppernav-middle">
      <a href="HomePage.html" class="active"><img src="Pingpong panda logo v3.2.png" width="150" height="150"></a>
    </div>
  
    <a href="Account Page.html"><img src="account.png" width="50" height="50"> <b>Account</b></a>
  
    <div class="uppernav-right">
      <a href="Cart Page.html"><b>Cart</b> <img src="cart.png" width="50" height="50"></a>
    </div>
  
  </div>

  <!----Cart HTML code was taken from W3school website (https://www.w3schools.com/howto/howto_css_checkout_form.asp)------------------------------------>
  
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="/action_page.php">
  
          <div class="row">
            <div class="col-50">
              <br>
              <h3><u><strong>Billing Address</strong></u></h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Name....">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="Name@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="Address....">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="London">
  
              <div class="row">
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>
  
            <div class="col-50">
              <br>
              <h3><u><strong>Payment</strong></u></h3>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John More Doe">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
  
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">C.V.V</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>
  
          </div>
          <label>
            <input type="checkbox" name="sameadr"> Shipping address same as billing
          </label>
          <input style="margin-left: auto; border-radius: 40px;" type="submit" value="PURCHASE" class="btn">
        </form>
      </div>
    </div>
  
    <div class="col-25">
      <div class="container price">
        <h4 style="font-size: 130%;">Cart
          <span class="price" style="color:black">
            <i class="fa fa-shopping-cart"></i>
            <b>0</b>
          </span>
        </h4>
        <br>
        <p><a href="#">Product 1</a> <span class="price">$0</span></p>
        <p><a href="#">Product 2</a> <span class="price">$0</span></p>
        <p><a href="#">Product 3</a> <span class="price">$0</span></p>
        <p><a href="#">Product 4</a> <span class="price">$0</span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>$0</b></span></p>
      </div>
    </div>
  </div>

<br>

<!---------------------------------- Divider ---------------------------------->

   <hr class="rounded">

<!---------------------------------Lower Navbar--------------------------------->

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