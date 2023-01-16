<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Index Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css"> 
</head>

<body>
<!-- navigation bar with links to "Sell", "Buy", "Login", "Signup", "Logout", 
and "My Account" pages. The visibility of the "Logout" and "My Account" links 
is dependent on whether a user is logged in or not, as determined by a session variable. -->
  <div class="navbar">
    <a href="../html/index.php" class="logo">Logo</a>
    <div class="search-container">
      <form action="/search">
        <input type="text" placeholder="Search..." name="search">
        <button type="submit">Search</button>
      </form>
    </div>
    <div class="navbar-links">
      <a href="../php/sell.php">Sell</a>
      <a href="../php/buy.php">Buy</a>
	    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
		<a href="../php/logout.php">Logout</a>
        <a href="../php/account.php">My Account</a>
    <?php else: ?>
        <a href="../php/login.php">Login</a>
        <a href="../php/signup.html">Signup</a>
    <?php endif; ?>
    </div>
  </div>
 <!-- carousel section that contains several rows of columns, each with an image and a text caption. 
 The images and captions link to locations. -->
  <section class="carousel">
<div class="carousel-container">
 
   <div class="carousel-row">
   <div class="carousel-column">
    <a href="#"><img src="../Images/clothing.jpg"></a>
	<div class="text">Title1</div>
   </div>
	
   <div class="carousel-column">
    <a href="#"><img src="../Images/furniture.webp"></a>
	<div class="text">Title2</div>
   </div>
	
   <div class="carousel-column">
    <a href="#"><img src="../Images/cars.jpg"></a>
	<div class="text">Title3</div>
   </div>
	</div>   

 <div class="carousel-row">
   <div class="carousel-column">
    <a href="#"><img src="../Images/test.jpg"></a>
	<div class="text">Title4</div>
   </div>
	
   <div class="carousel-column">
    <a href="#"><img src="../Images/test.jpg"></a>
	<div class="text">Title5</div>
   </div>
	
   <div class="carousel-column">
    <a href="#"><img src="../Images/test.jpg"></a>
	<div class="text">Title6</div>
   </div>
	</div>  
   
   <div class="carousel-row">
   <div class="carousel-column">
    <a href="#"><img src="../Images/test.jpg"></a>
	<div class="text">Title7</div>
   </div>
	
   <div class="carousel-column">
    <a href="#"><img src="../Images/test.jpg"></a>
	<div class="text">Title8</div>
   </div>
	
   <div class="carousel-column">
    <a href="#"><img src="../Images/test.jpg"></a>
	<div class="text">Title9</div>
   </div>
	</div>  
	
	 <div class="carousel-row">
   <div class="carousel-column">
    <a href="#"><img src="../Images/test.jpg"></a>
	<div class="text">Title10</div>
   </div>
	
   <div class="carousel-column">
    <a href="#"><img src="../Images/test.jpg"></a>
	<div class="text">Title11</div>
   </div>
	
   <div class="carousel-column">
    <a href="#"><img src="../Images/test.jpg"></a>
	<div class="text">Title12</div>
   </div>
	</div>  
   
     <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-arrow-circle-left fa-3x"></i></a>
	<a class="next" onclick="plusSlides(1)"><i class="fas fa-arrow-circle-right fa-3x"></i></a>
	  </div>
	  
	  <div class="bottom-dots">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
</section>

<div class="banner">
  <img src="test.jpg">
</div>
<!-- footer with links to various other pages, such as "about us", "our services", 
"privacy policy", "report", and "contact". -->

<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<div class="title-cont"><h4>About</h4></div>
  	 			<ul>
  	 				<li><a href="../php/about.php">about us</a></li>
  	 				<li><a href="../php/about.php #services">our services</a></li>
  	 				<li><a href="../php/privacy.php">privacy policy</a></li>
  	 				<li><a href="../php/contact.php #report">report</a></li>
  	 				<li><a href="../php/contact.php">contact</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<div class="title-cont"><h4>Buy & Sell</h4></div>
  	 			<ul>
  	 				<li><a href="../php/buy-sell.php">how to buy/sell</a></li>
  	 				<li><a href="../php/fees.php">fees</a></li>
					<li><a href="../php/payment.php">payment options</a></li>
					<li><a href="../php/account.php">account management</a></li>
					<li><a href="../php/faq.php">FAQ</a></li>
  	 			</ul>
  	 		</div>
  	 	</div>
  	 </div>
	 <div class="space-footer"></div>
	 <div class="cr-col">
	 <div class="cr-row">
	 <ul>
	 <li>Copyright © 2022 Ecommerse. All Rights Reserved</li>
	 <li><a href="#".>Privacy Notice</a></li>
	 <li><a href="privacy.php #cookie">Cookies</a></li>
	 <li><a href="#".>Conditions of Use and Sale</a></li>
	 </ul>
	 </div>
	 </div>
  </footer>

</body>
<script src="../javascript/script.js"></script>
</html>