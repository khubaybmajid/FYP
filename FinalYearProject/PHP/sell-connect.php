<?php
session_start();
/*  When the form is submitted, it starts a PHP session, 
and checks if the user is logged in. If the user is logged in,
 it connects to the database and retrieves the user's information. */
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {

    $mysqli = require __DIR__ . "/database.php";   
    $sql = "SELECT * FROM users
            WHERE user_id = {$_SESSION["user_id"]}";         
    $result = $mysqli->query($sql); 
    $user = $result->fetch_assoc();

}

$product_title = $_POST['product_title'];
$product_category = $_POST['product_category'];
$product_description = $_POST['product_description'];
$product_price = $_POST['product_price'];
$product_image = $_POST['product_image'];
// Check if the file was uploaded via POST
if (isset($_FILES["product_image"]) && $_FILES["product_image"]["error"] === UPLOAD_ERR_OK) {
    // File was uploaded via POST, so retrieve the information
    $file_name = $_FILES["product_image"]["name"];
    $file_type = $_FILES["product_image"]["type"];
    $file_size = $_FILES["product_image"]["size"];
    $file_tmp_name = $_FILES["product_image"]["tmp_name"];
    $file_error = $_FILES["product_image"]["error"];

    // Check if the file type is valid
    $allowed_file_types = ["image/jpeg", "image/png", "image/gif"];
    if (!in_array($file_type, $allowed_file_types)) {
        die("Invalid file type. Only JPEG, PNG and GIF are allowed.");
    }

    // Check if the file size is within the limit
    $max_file_size = 2 * 1024 * 1024; // 2MB
    if ($file_size > $max_file_size) {
        die("File size too large. Maximum allowed file size is 2MB.");
    }

    // Generate a unique file name
    $file_name = uniqid() . "-" . $file_name;

if ($file_error === UPLOAD_ERR_OK) {
    echo "File uploaded successfully";
} else {
    echo "File upload failed with error code: " . $file_error;
}

    // Move the file to a permanent location
   if(file_exists(__DIR__ . '/images/')){
    if (is_writable(__DIR__ . '/images/')) {
        $upload_dir = __DIR__. "/FinalYearProject/images/";
        if (!move_uploaded_file($file_tmp_name, $upload_dir . $file_name)) {
            $product_image = $file_name;
            die("Failed to move the file to a permanent location.");
        }
    }
}
}
/* prepared statements to insert the data into the products table in the database, 
with the user_id, product_title, product_category,
 product_description, product_image, and product_price. */
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    $sql = "INSERT INTO products (user_id, product_title, product_category, product_description, product_image, product_price)
        VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("issssi",
$_SESSION['user_id'],
$product_title,
$product_category,
$product_description,
$product_image,
$product_price);

if ($stmt->execute()) {
header("Location: sell.php");
} else { if ($mysqli->errno === 1048) { die("Login to list an item!");
	} else {
die($mysqli->error . " " . $mysqli->errno);
}
}
}
?>