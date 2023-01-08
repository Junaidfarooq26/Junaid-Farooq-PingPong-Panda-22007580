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

  <!--------------------------- Homepage Cover video ------------------------------------------>

<video autoplay muted loop id="myVideo" style="width: 100%;">
  <source src="homepage video.mp4" type="video/mp4">
</video>

<script>
  var video = document.getElementById("myVideo");
</script>

  <br>

  <!---------------------------------- Divider ---------------------------------->

  <hr class="rounded">

  <!----------------------------------- New Releases card section ------------------------------>

  <br>

  <h1 style="color:white"><b><strong>New Releases</strong></b></h1>

  <br>

  <div class="rack">
    
    <div class="new">
    <a href="Comic Page.php#marvel"><img src="avengers.jpg" alt="avengers" style="width:90%" height="79%" border: 5px solid #555;></a>
    <a href="Comic Page.php#marvel"><strong><div class="card" style="width: 90%"><b>Avengers Forever #12</b> Aaron,Kuder</div></strong></a>
    </div>

    <div class="new">
      <a href="Comic Page.php#dc"><img src="BMandcw.jpg" alt="batman and catwoman" style="width:90%; float: right;" height="79%" border: 5px solid #555;></a>
      <a href="Comic Page.php#dc"><strong><div class="card" style="width: 90%; float: right;"><b>BatMan/CatWoman</b>  Ram,Tom King</div></strong></a>
    </div>

  </div>

  <div class="rack">
    <div class="new">
    <a href="Magazine Page.php#vogue"><img src="vogue.png" alt="Vogue" style="width:90%" height="78%" border: 5px solid #555;></a>
    <a href="Magazine Page.php#vogue"><strong><div class="card" style="width: 90%"><b>Vogue Dec'22 Issue</b> EUGÉNIE TROCHU</div></strong></a>
    </div>

    <div class="new">
      <a href="Magazine Page.php#empire"><img src="empire.jpg" alt="Empire Magazine" style="width:90%; float: right;" height="78%" border: 5px solid #555;></a>
      <a href="Magazine Page.php#empire"><strong><div class="card" style="width: 90%; float: right;"><b>Empire Feb'23 Issue</b> Emlyen </div></strong></a>
    </div>
    
  </div>

  <div class="rack">
    <div class="new">
    <a href="Manga Page.php"><img src="Boku_no_Hero_Academia_Volume_1.png" alt="My Hero Academia" style="width:90%" height="78%" border: 5px solid #555;></a>
    <a href="Manga Page.php"><strong><div class="card" style="width: 90%"><b>My Hero Academia Vol.1</b> Kohei Horikoshi</div></strong></a>
    </div>

    <div class="new">
      <a href="Manga Page.php"><img src="demon slayer.jfif" alt="batman and catwoman" style="width:90%; float: right;" height="78%" border: 5px solid #555;></a>
      <a href="Manga Page.php"><strong><div class="card" style="width: 90%; float: right;"><b>Demon Slayer Vol.8</b> Koyoharu Gotouge</div></strong></a>
    </div>
    
  </div>

  <!---------------------------------- Divider ---------------------------------->

    <hr class="rounded">

  <!--------------------------------- Features Cards section ------------------------------------->

  <br>

  <h1 style="color:white"><b><strong>Featured</strong></b></h1>

  <br>

  <div class="row">
    
    <div class="column">
      <a href="Manga Page.html"><img src="MANGA.png" alt="Chainsawman mangas" style="width:100%" height="78%" border: 5px solid #555;></a>
      <a href="Manga Page.html"><strong><div class="card" style="width: 100%"><b>After a High Demand ChainSAW Man manga's are Available again so Act Fast Before they Sellout</b></div></strong></a>
    </div>
    
    <div class="column">
      <a href="Magazine Page.html"><img src="Magazines.png" alt="magaziine cover" style="width:100%" height="78%"></a>
      <a href="Magazine Page.html"><strong><div class="card" style="width: 100%"><b>New Vogue and Empire Magazine Available Featuring Harrison Ford Now Available</b></div></strong></a>
    </div>


    <div class="column">
      <a href="Comic Page.html"><img src="comics.png" alt="Comic" style="width:100%" height="78%"></a>
      <a href="Comic Page.html"><strong><div class="card" style="width: 100%"><b>Ant-man and Superman Classic Comics are back in Stock for a Limited Time Only so Get Yours Now</b></div></strong></a>
    </div>

  </div>  

 <!-----------------------------------------Divider---------------------------------------->

  <hr class="rounded">

 <!----------------------------------- Latest News Cards ------------------------------------>

 <br>

 <h1 style="color:white"><b><strong>Latest News</strong></b></h1>

 <br>

 <div class="row">
    
  <div class="column">
    <a href="News Page.html"><img src="maintenance cover.png" alt="Maintenance" style="width:100%" height="71%"></a>
    <a href="News Page.html"><div class="card" style="width: 100%; font-size: 35px;"><span style="font-size: 40px"><b>Application Maintenance </b></span> <br> Did you Know PingPong Panda will be Down for Maintenance...<br> <span style="color: red;"><b><u>Read More</u></b></span></div></a>
  </div>

  <div class="column">
    <a href="News Page.html"><img src="Manga coming soon.png" alt="New manga" style="width:100%" height="70%"></a>
    <a href="News Page.html"><div class="card" style="width: 100%; font-size: 35px;"><span style="font-size: 40px"><b>New Mangas Issues</b></span> <br> New mangas will soon be available...<br> <span style="color: red;"><b><u>Read More</u></b></span></div></a>
  </div>

  <div class="column">
    <a href="News Page.html"><img src="Sale.png" alt="Sale Cover" style="width:100%" height="69%"></a>
    <a href="News Page.html"><div class="card" style="width: 100%; font-size: 35px;"><span style="font-size: 40px"><b>Sale News</b></span> <br> PingPong Panda Will Have it's First Ever Sale on All of it's Items... <br> <span style="color: red;"><b><u>Read More</u></b></span></div></a>
  </div>

  </div>

 <!------------------------------------------Divider-------------------------------------->

  <hr class="rounded">

 <!------------------------------Read For Free Section------------------------------------->

 <br>

 <h1 style="color:white"><b><strong>Read For Free</strong></b></h1>

 <br>

 <div class="rack">
   <div class="new">
   <a href="Comic Page.php#marvel"><img src="the vitals marvel.jpg" alt="The Vitals" style="width:90%" height="79%" border: 5px solid #555;></a>
   <a href="Comic Page.php#marvel"><strong><div class="card" style="width: 90%"><b>The Vitals: True EMS Stories #0</b></div></strong></a>
   </div>

   <div class="new">
     <a href="Comic Page.php#dc"><img src="batmanamdsuperman.jpg" alt="batman and Superman" style="width:90%; float: right;" height="79%" border: 5px solid #555;></a>
     <a href="Comic Page.php#dc"><strong><div class="card" style="width: 90%; float: right;"><b>BatMan/SuperMan: World's Finest #10</b></div></strong></a>
   </div>
 </div>

 <div class="rack">
   <div class="new">
   <a href="Magazine Page.php#time"><img src="person of the year.png" alt="Time's magazine" style="width:90%" height="78%" border: 5px solid #555;></a>
   <a href="Magazine Page.php#time"><strong><div class="card" style="width: 90%"><b>Person of the Year Dec'21 Issue</b></div></strong></a>
   </div>

   <div class="new">
     <a href="Magazine Page.php#empire"><img src="empire summer 22.jpg" alt="Empire Magazine summer 22" style="width:90%; float: right;" height="78%" border: 5px solid #555;></a>
     <a href="Magazine Page.php#empire"><strong><div class="card" style="width: 90%; float: right;"><b>Empire Summmer'22 Issue</b> </div></strong></a>
   </div>
 </div>

 <div class="rack">
   <div class="new">
   <a href="Manga Page.php"><img src="note.jpg" alt="Death Note" style="width:90%" height="78%" border: 5px solid #555;></a>
   <a href="Manga Page.php"><strong><div class="card" style="width: 90%"><b>Death Note Vol.4</b></div></strong></a>
   </div>

   <div class="new">
     <a href="Manga Page.php"><img src="naruto.jpg" alt="Naruto" style="width:90%; float: right;" height="78%" border: 5px solid #555;></a>
     <a href="Manga Page.php"><strong><div class="card" style="width: 90%; float: right;"><b>Naruto Vol.1</b></div></strong></a>
   </div>
 </div>

  <!------------------------------------------Divider-------------------------------------->

  <hr class="rounded">

 <!-------------------------------- Bottom Navbar ------------------------------------------>

  <div class="header" id="myheader">
    <a href="About Us.php" class="active"><img src="information.png" width="50" height="50"> <b>About Us</b></a> 
    <a href="Comic Page.php"><img src="books.png" width="50" height="50"> <b>Comic</b></a>
    <a href="Manga Page.php"><img src="books.png" width="50" height="50"> <b>Manga</b></a>
    <a href="Magazine Page.php"><img src="books.png" width="50" height="50"> <b>Magazines</b></a>
    <a href="News Page.php"><img src="news.png" width="50" height="50"> <b>News</b></a>
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