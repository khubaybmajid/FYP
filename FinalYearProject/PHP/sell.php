<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM users
            WHERE user_id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Sell Page</title>
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

<section class="container grey-text">
<h4 class="center">List Your Item</h4>
<form action="sell-connect.php" method="POST" class="sell">
	
<div>
<label for="product_title">Item Name</label>
<input type="text" id="product_title" name="product_title">
</div>

<div>
<label for="product_category">Category</label>
<select name="product_category" id="product_category">
  <option value="">Select..</option>
  <option value="clothing">Clothing</option>
  <option value="electronics">Electronics</option>
  <option value="vehicles">Vehicles</option>
  <option value="other">Other</option>
</select>
</div>

<div>
<label for="product_image">Image</label>
<input type="file" id="product_image" name="product_image">
</div>

<div>
<label for="product_price">Price</label>
<input type="text" id="product_price" name="product_price">
</div>

<div class="description">
<label for="product_description">Description</label>
<textarea id="product_description" name="product_description"></textarea>
</div>

<button type='submit' name='btnSubmit'>Submit</button>	
		</form>
	</section>
	  <?php print_r($_SESSION); ?>
  <?php if (isset($_SESSION["user_id"])); ?>
<p><a href="logout.php">Log out</a></p>
<?php else: ?>
<p><a href="login.php">Log in</a></p> or <a href="signup.html">sign up</a></p>
<?php endif; ?>
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