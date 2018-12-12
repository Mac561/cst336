<?php
session_start();

include 'inc/dbConnection.php';
$dbConn = startConnection("Final_project");
// include 'functions.php';
// validateSession();

$sql = "DELETE FROM movies WHERE  id = " . $_GET['productId'];
$stmt=$dbConn->prepare($sql);
$stmt->execute();

header("Location: admin.php");



?>