<?php
session_start();

include 'inc/dbConnection.php';
$dbConn = startConnection("Final_project");
// include 'functions.php';
//  validateSession();

function getProductInfo($productId) {
     global $dbConn;
    
    $sql = "SELECT * FROM movies WHERE id = $productId";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting multiple records   
    
    return $record;
     
    
}

if (isset($_GET['productId'])) {

  $productInfo = getProductInfo($_GET['productId']);    
 // print_r($productInfo);
    
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Product Info </title>
    </head>
    <center>
    <body>
    
    <h3><?=$productInfo['name']?></h3>
     <?=$productInfo['description']?><br>
     <img src='<?=$productInfo['image']?>' height='75' width='75'/></br>
     <?=$productInfo['price']?></br>
 
    </body>
    </center>
</html>