<?php
session_start();

include 'inc/dbConnection.php';
$dbConn = startConnection("Final_project");
// include 'functions.php';
// validateSession();
/////////////////////////////////
function displayGenre(){
    global $dbConn;
    
    $sql = "SELECT * FROM Genre ORDER BY name";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='" .$record['name']. "'";
        
        if($_GET['genre'] == $record['name']){
            echo "selected = 'selected'";
        }
        echo ">" .$record['name']. "</option><br />";
    }
}
////////////////////////////

if (isset($_GET['addProduct'])) { //checks whether the form was submitted
    
    $productName = $_GET['productName'];
    $description =  $_GET['description'];
    $price =  $_GET['price'];
    $catId =  $_GET['catId'];
    $image = $_GET['productImage'];
    
    
    $sql = "INSERT INTO movies (name, description, image ,price, genre) 
            VALUES (:name, :genre, :price, :Description, :image);";
    $np = array();
    $np[":name"] = $productName;
    $np[":Description"] = $description;
    $np[":image"] = $image;
    $np[":price"] = $price;
    $np[":genre"] = $catId;
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);
    echo "New Product was added!";
    
}
//////////////////////////////////////////////////////
  
///////////////////////////////////////////////////////
?>
<!DOCTYPE html>
<html>
    <head>
         <!--<meta charset="UTF-8">-->
        <title> Admin Section: Add New Product </title>
        
    </head>
    <center>
    <body>
        
        <h1> Adding New Product </h1>
        
        <form>
           Movies name: <input type="text" name="productName"></br><br>
           Description: <textarea name="description" cols="50" rows="4"></textarea></br><br>
           Price: <input type="text" name="price"></br><br>
           Category: 
           <select name="catId">
              <option value="">Select One</option>
              <?php
              displayGenre();
             /* $categories = getCategories();
              
              foreach ($categories as $category) {
                  
                 echo "<option value='".$category['catId']."'>" . $category['catName'] . "</option>";
                  
                 }
              */
              ?>
           </select></br><br>
           Set Image Url: <input type="text" name="productImage"></br><br>
           <input type="submit" name="addProduct" value="Add Product"><br>
        </form>
        
        <div>
         <form action="admin.php">
            <input type="submit" name="button" value="Admin page!">
        </form>
    
    </div>

    </body>
    </center>
</html>