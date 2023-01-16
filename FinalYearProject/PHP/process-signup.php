<?php
mysqli_report(MYSQLI_REPORT_OFF);

if(empty($_POST["fname"])) {
	die("First name is required");
}

if(empty($_POST["sname"])) {
	die("Surname is required");
}

if( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_conf"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";


$sql = "INSERT INTO users (fname, sname, username, email, password_hash)
        VALUES (?, ?, ?, ?, ?)";
		
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}


$stmt->bind_param("sssss",
                  $_POST["fname"],
                  $_POST["sname"],
                  $_POST["username"],
                  $_POST["email"],
                  $password_hash);
                  
$select = mysqli_query($mysqli, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
if(!$select || mysqli_num_rows($select)==1) {
die('This email address is already used!');
}        				  	  
if ($stmt->execute()) {

    header("Location: signup-success.html");

 } else {
    
    if ($mysqli->errno === 1062) {
        die("username already taken!");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
	   
}
?>


