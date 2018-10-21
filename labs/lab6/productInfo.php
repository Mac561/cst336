<?php
include '../../inc/dbConnection.php';
$dbConn = startConnection("ottermart");

function displayproductInfo(){
    global $dbConn;
    
    $productId = $_GET['productId'];
    $sql = "SELSECT *
    FROM om_purchase
    NATURE RIGHT JOIN om_product
    WHERE productId = $productId";
    
    $stmt = $dbConn->prepare($sql);
    $stm->execute();
   $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAll returns an Array of Arrays
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Product Purchase History </title>
    </head>
    <body>
        
        <h2>Product Purchase History</h2>
    </body>
</html>