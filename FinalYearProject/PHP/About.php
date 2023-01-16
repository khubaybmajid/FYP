<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>About Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css"> 
</head>

<body>
<!-- Navbar -->
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
<!-- section that contains text and an image that provide information about the website and its mission. -->
<section class="about-section">
    <h1 class="section-title">About Us</h1>
    <div class="about-container">
        <div class="about-img-container">
            <img src="path/to/image" alt="About Us">
        </div>
        <div class="about-content">
            <p>Welcome to our website, an e-commerce website designed for your convenience.

Our mission is to provide a simple and user-friendly online shopping experience for all of our customers.
 We were inspired to create this website as a final year project for University of Bradford, after realizing the 
 difficulties many people face when trying to navigate through cluttered and confusing e-commerce websites.
            </p> 
			<p>Our website is designed to be easy to use, with a clean and minimalistic layout that allows customers to quickly find the
			products they are looking for. We have a wide range of products available, including many product categories, 
			and we are constantly updating our inventory to ensure that we have the latest and greatest products on the market.
            </p>
			<p>
			We understand the importance of customer satisfaction, which is why we offer fast and reliable
			shipping, as well as a hassle-free return policy. 
			We also have a dedicated customer service team that is always ready to assist 
			you with any questions or concerns you may have.
            </p>
        </div>
    </div>
</section>



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