<?php 

session_start();
session_destroy();

header("Location: ../Html/index.php");
exit;