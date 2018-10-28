<!DOCTYPE html>
<?php
include "../../inc/dbConnection.php";
$dbConn = startConnection("midterm");
// this function will get the town name where the population between 50000 and 80000 
function getTownName(){
    global $dbConn;
    
    $sql = "SELECT * FROM mp_town WHERE population > 50000 AND population < 80000";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record){
        echo $record['town_name'];
        echo" ";
        echo $record['population'];
    }
}
/////////////////
function orderPopulaion(){
    global $dbConn;
    
    $sql = "SELECT * FROM mp_town ORDER BY population desc";
   $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record){
        echo $record['town_name']." ";
        echo $record['population'];
        echo "<br>";
    }
}
////////////////////////////////////
function orderLimit(){
    global $dbConn;
    
    $sql = "SELECT * FROM mp_town ORDER BY population LIMIT 3";
   $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record){
        echo $record['town_name']." ";
        echo $record['population'];
        echo "<br>";
    }
}

/////////////////////////////////////////
function nameStartWithS(){
    global $dbConn;
    
    $sql = "SELECT * FROM mp_county WHERE county_name LIKE ('S%')";
   $stmt = $dbConn->prepare($sql);
   $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record){
        echo $record['county_name']." ";
        // echo $record['population'];
        echo "<br>";
    }
}

?>
<html>
    <head>
        <title> </title>
    </head>
    <body>
<?php getTownName()?>
<br>
<br>
<?php orderPopulaion() ?>
<br>
<br>
<?php orderLimit()?>
<br>
<br>
<?php nameStartWithS()?>
    </body>
</html>