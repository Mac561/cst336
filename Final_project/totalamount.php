<?php
header('Access-Control-Allow-Origin: *');
session_start();

include 'inc/dbConnection.php';
$dbConn = startConnection("Final_project");
include 'functions.php';
//validateSession();

$sql = "SELECT id  FROM movies";

$stmt = $dbConn->prepare($sql);
$stmt->execute();
$count = $stmt->fetchAll(PDO::FETCH_ASSOC);
$number =0;
foreach($count as $c){
    $number++;
}

echo json_encode($number);
?>