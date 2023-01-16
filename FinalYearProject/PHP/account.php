<?php
session_start();
$user_id = $_SESSION['user_id'];

// Connect to the database
$mysqli = require __DIR__ . "/database.php";

// Retrieve the current user's information from the database
$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($mysqli, $query);
$user = mysqli_fetch_assoc($result);

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>

<!-- allows a user to view and update their account information.
 When the page is loaded, the script starts a new session, and it retrieves the ID of the user from the current session. -->

<!DOCTYPE html>
<html>
<head>
  <title>Account Page</title>
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
  
 <!-- Form with user information-->
<form action="account.php" class="account-form" method="post">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" value="<?php if(isset($user)) echo $user['fname']; ?>">
    <br>
    <label for="sname">Last Name:</label>
    <input type="text" id="sname" name="sname" value="<?php if(isset($user)) echo $user['sname']; ?>">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php if(isset($user)) echo $user['email']; ?>">
    <br>
    <label for="password">Current Password:</label>
    <input type="password" id="password" name="password">
    <br>
    <label for="newpassword">New Password:</label>
    <input type="password" id="newpassword" name="newpassword">
    <br><br>
    <input type="submit" value="Save Changes" name="submit">
</form>


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
<script type="text/javascript" src="account-validation.js"></script>
<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
</html>