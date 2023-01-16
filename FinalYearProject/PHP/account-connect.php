<?php
session_start();
$mysqli = require __DIR__ . "/database.php";

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $user_id = $_SESSION['user_id'];

    // Validate and sanitize form data
    // ...
    if (!empty($newpassword)) {
        $password = password_hash($newpassword, PASSWORD_DEFAULT);
    }
	
    $query = "UPDATE users SET fname='$fname', sname='$sname', email='$email', address='$address', phone='$phone', password='$password' WHERE id=$user_id";
    $result = mysqli_query($mysqli, $query);
    if ($result) {
        header("Location: account.php");
    } else {
        echo "An error occurred while updating your account information. Please try again later.";
    }
}
?>
