<?php
session_start();

include 'inc/dbConnection.php';
$dbConn = startConnection("Final_project");
// include 'functions.php';
//  validateSession();
// 
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
///////////////////////////////////////////////////// update product ////////////////////////
if (isset($_GET['updateProduct'])) { //checks whether the form was submitted
    
    $productName = $_GET['name'];
    $description =  $_GET['description'];
    $price =  $_GET['price'];
    $catId =  $_GET['genre'];
    $image = $_GET['productImage'];
    $productId= $_GET['productId'];
    
    
    // $sql = "INSERT INTO movies (name, description, image ,price, genre) 
            // VALUES (:name, :genre, :price, :Description, :image);";
            
    $sql = "UPDATE movies SET price =:price  WHERE id = $productId";
            // UPDATE `movies` SET `name`=[value-1],`genre`=[value-2],`id`=[value-3],`price`
            // =[value-4],`description`=[value-5],`image`=[value-6] WHERE 1
            // INSERT INTO `movies`(`name`, `genre`, `id`, `price`, `description`, `image`) 
            // VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
    $np = array();
    // $np[":name"] = $productName;
    // $np[":description"] = $description;
    // $np[":image"] = $image;
    $np[":price"] = $price;
    // $np[":genre"] = $catId;
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);
    echo "New Product was added!";
    
}

//////////////////////////////////////////////////////////// 

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
    
    <h1> Update a product </h1>
    
    
    <form >
        <input type="hidden" name="productId" value="<?=$productInfo['id']?>"/>
      Product name: <input type="text" name="productName" value="<?=$productInfo['name']?>"><br><br>
      Description:<br> 
      <textarea name="description" cols="50" rows="4"><?=$productInfo['description']?></textarea><br>
      Price: <input type="text" name="price" value="<?=$productInfo['price']?>"><br><br>
      Genre:
      <select name="genre">
               <option value=""> Select one </option> 
               <?php
               $moviesCategories=displayGenre();
               foreach($genre as $name ){
                   echo"<option ";
                   echo($genre['genres']==$productInfo['genres'])?"selected":"";
                   echo "value='".$genre['genres']."'>" .$genre['name']."</option>";
               }
               
               ?>
            </select> <br><br>
            Set Image Url:<input type="text" name="productImage" value="<?=$productInfo['image']?>"><br><br>
            
            <input type="submit" name="updateProduct" value="Updata Product">
      
     <!--<img src='' height='75' width='75'/>-->
    </form>
    
    <!--Going to use Ajex call-->
    <div>
         <form>
            <input type="submit" name="button" value="Admin page!">
        </form>
    
    </div>
   
 
    </body>
    </center>
</html>