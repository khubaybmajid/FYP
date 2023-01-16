<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Privacy Page</title>
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
<!-- This section talks about the privacy and cookie policies-->
    <section class="policy-container">
      <h1 class="privacy-title">Privacy Policy</h1>
      <p>At our website, we are committed to protecting your privacy. We use the information we collect about you to process orders and to provide a more personalized shopping experience. We do not sell, trade, or rent your personal information to others. The following Privacy Policy explains our data processing practices.</p>
      <h2 class="privacy-sub-header">What information do we collect?</h2>
      <p>We collect information from you when you register on our site, place an order, or subscribe to our newsletter. When ordering or registering on our site, as appropriate, you may be asked to enter your name, e-mail address, mailing address, phone number, or credit card information. You may, however, visit our site anonymously.</p>
      <h2 class="privacy-sub-header">What do we use your information for?</h2>
      <p>Any of the information we collect from you may be used in one of the following ways:</p>
      <ul>
        <li>To personalize your experience (your information helps us to better respond to your individual needs)</li>
        <li>To process transactions</li>
        <li>To send periodic emails (if you have subscribed to our newsletter)</li>
      </ul>
      <h2 class="privacy-sub-header">How do we protect your information?</h2>
      <p>We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information. We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Payment gateway providers database only to be accessible by those authorized with special access rights to such systems, and are required to keep the information confidential.</p>
      <h1 class="privacy-title" #cookie>Cookie Policy</h1>
	  	<p>We use cookies on our website. A cookie is a small text file that is stored on a user's computer for record-keeping purposes. We use both session ID cookies and persistent cookies. We use session cookies to make it easier for you to navigate our website. A session ID cookie expires when you close your browser. A persistent cookie remains on your hard drive for an extended period of time. You can remove persistent cookies by following directions provided in your Internet browser's "help" file. We set a persistent cookie to store your passwords, so you don't have to enter it more than once. Persistent cookies also enable us to track and target the interests of our users to enhance the experience on our site.</p>
	  <h2 class="privacy-sub-header">Do we use cookies?</h2>
      <p>Yes (Cookies are small files that a site or its service provider transfers to your computers hard drive through your Web browser (if you allow) that enables the sites or service providers systems to recognize your browser and capture and remember certain information.</p>
      <p>We use cookies to help us remember and process the items in your shopping cart, understand and save your preferences for future visits, keep track of advertisements and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future. We may contract with third-party service providers to assist us in better understanding our site visitors. These service providers are not permitted to use the information collected on our behalf except to help us conduct and improve our business.</p>
      <h2 class="privacy-sub-header">Do we disclose any information to outside parties?</h2>
      <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>
	<p>If you prefer, you can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies via your browser settings. Like most websites, if you turn your cookies off, some of our services may not function properly. However, you can still place orders by contacting customer service.</p>
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