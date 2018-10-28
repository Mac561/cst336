<?php

include "../inc/dbConnection.php";
$dbConn = startConnection("midterm");
function getAEQuote(){
    global $dbConn;
    
    $sql = "SELECT * FROM `q_quotes` WHERE author LIKE Albert Einstein ORDER BY Z,A desc";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record){
        echo $record['quote'];
        echo" ";
       
    }
}
////////////////////////////////////////////////////////
function getQuoteLife(){
    global $dbConn;
    
    $sql = "SELECT * FROM `q_quotes` WHERE quote LIKE %life%";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record){
        echo $record['quote'];
        echo" ";
       
    }
}

////////////////////////////////////////////
function getrQuote(){
    global $dbConn;
    
    $sql = "SELECT * FROM `q_quotes` quote ORDER BY RAND() limit 1";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record){
        echo $record['quote'];
        echo" ";
       
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
  <?php getAEQuote() ?>
  <br>
  <br>
   <?php getQuoteLife() ?>
  <br>
  <br>
   <?php getQuoteLife() ?>
  <br>
  <br>
  
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#FFC0C0">
      <td>1</td>
      <td>The report shows all quotes from Albert Einstein in descending order</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:GREEN">
      <td>2</td>
      <td>The report shows all quotes that have the words  "life" in it.</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#GREEN">
      <td>3</td>
      <td>The report all quotes in alphabetical order</td>
      <td width="20" align="center">10</td>
    </tr>     
    <tr style="background-color:#GREEN">
      <td>4</td>
      <td>The report shows the most liked quote in the database.</td>
      <td width="20" align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>Show a random quote from the database</td>
      <td width="20" align="center">10</td>
    </tr>    
    
    <tr style="background-color:#GREEN">
      <td>6</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
     </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>    

    </body>
</html>