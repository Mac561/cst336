<?php

function displayAllProducts(){
    global $dbConn;
    
    $sql = "SELECT * FROM om_product ORDER BY productName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records

    foreach ($records as $record) {
        
        echo "[<a href='updateProduct.php'>Update</a>]";
        echo "[<a href='deleteProduct.php'>Delete</a>]";
        echo $record['productName'] . "  " . $record[price]   . "<br>";
        
    }
}

?>