<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>FAQ Page</title>
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
<!-- A section displaying the frequently asked questions -->
<section class="faq-section">
<h1 class="faq-title">Frequently Asked Questions</h1>
  <div class="faq-content">
    <h2>General Questions</h2>
    <ul>
      <li>
        <strong>How can I create an account on your website?</strong>
        <p>You can create an account by clicking on the "Sign Up" button on the top right corner of the homepage. Fill in the required information and submit the form.</p>
      </li>
      <li>
        <strong>What forms of payment do you accept?</strong>
        <p>We accept all major credit cards, PayPal, and bank transfers.</p>
      </li>
      <li>
        <strong>What is your return policy?</strong>
        <p>We accept returns within [return policy time] of the delivery date. Items must be in their original condition and packaging. Please contact our customer service team for more information.</p>
      </li>
    </ul>
    <h2>Shipping Questions</h2>
    <ul>
      <li>
        <strong>When will my order ship?</strong>
        <p>Orders are usually shipped within [shipping time] of the purchase date. You will receive a shipping confirmation email with tracking information.</p>
      </li>
      <li>
        <strong>How much does shipping cost?</strong>
        <p>Shipping cost is calculated based on the weight and destination of your order. You can view the shipping cost for your order before completing the checkout process.</p>
      </li>
    </ul>
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