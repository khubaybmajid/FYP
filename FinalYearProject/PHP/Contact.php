<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact Page</title>
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
  <!-- Contact information displaying information on how to contact the website. -->
<section class="contact-container">
<h1 class="Contact-title">Contact Us</h1>
<p>At our website, we take customer satisfaction very seriously. That's why we have implemented a report section on
 our website where customers can provide feedback on their shopping experience. This report section includes a variety 
 of options for customers to choose from, such as:</p>

<p>Product Feedback: Customers can provide feedback on specific products
 they have purchased, including their overall satisfaction, product quality, 
 and any recommendations they may have.</p>

<p>Website Feedback: Customers can provide feedback on their overall experience using
 our website, including navigation, layout, and ease of use.</p>

<p>Customer Service Feedback: Customers can provide feedback on their interactions 
with our customer service team, including response time, helpfulness, and overall satisfaction.</p>

<p>Shipping Feedback: Customers can provide feedback on their shipping experience, 
including delivery times, packaging, and any issues they may have encountered.</p>

<p>All feedback provided through our report section is reviewed by our team and used to improve our products, 
website, and customer service. We value and appreciate any feedback provided by our customers and strive 
to make this website the best online shopping experience possible.<p>

<p>Contact us at kmajid@bradford.ac.uk</p>
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