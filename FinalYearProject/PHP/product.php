<?php
session_start();

    // Check if the product ID is provided in the query string
    if (isset($_GET['id'])) {
        // Get the product_id from the query parameter
        $product_id = $_GET['id'];

        // Connect to the database
        $mysqli = require __DIR__ . "/database.php"; 

        // Retrieve the product data from the database
        $query = "SELECT * FROM products WHERE product_id = '$product_id'";
        $result = mysqli_query($mysqli, $query);

        // Store the product data in an array
        $product = mysqli_fetch_assoc($result);

        // Convert the array to JSON format
        $product_json = json_encode($product);

    } else {
        // If the product ID is not provided, return an error message
        echo "No product ID provided.";
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Product Page</title>
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

  <div class="product-container">
    <div class="product-image-container">
      <img id="product-image" src="<?php echo $product['product_image'] ?>" alt="Product Image">
    </div>
    <div class="product-info-container">
      <h1 class="product-title" id="product-title"><?php echo $product['product_title'] ?></h1>
      <h2 class="product-price" id="product-price">Price: £<?php echo $product['product_price'] ?></h2>
      <p class="product-description" id="product-description"><?php echo $product['product_description'] ?></p>
    </div>
  </div>
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