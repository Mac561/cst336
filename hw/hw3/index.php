<?php
include "pdata.php";
function posterrores(){
    if(empty($_GET['inputName']) ||empty($_GET['state']) || empty($_GET['degreeChoices'])){
    echo "<h2> You must enter or select an input values <h2>";
    return false;
    }
    // else{
    //      header('Location: '. 'index.php');
    //         exit();
    // }
return true;
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home Work 3</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <h1> Welcome!!!!</h1>
        
        <form mothed="GET">
            Enter First Name:
            <input type="text" name="firstName"  size="25"/>
            <br/>
            Enter Last Name:
            <input type="text" name="lastName"  size="25"/><br/>
            
            Will like to visit:
           <select name="state">
               <option value="">Select one</option>
                <option value="Arizona">Arizona</option>
                <option value="California">California</option>
                <option value="Illinois">Illinois</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Liberia">Liberia</option>
            </select>
            <br/> <br /> Highest Degree Obtained: <br>
            <input type="radio"  id="item1"  name="degreeChoices"  value="High School" >
            <label for="item1">High School Diploma</label> <br>
            <input type="radio"  id="item2"  name="degreeChoices" value="College">
            <label for="item2">College</label>
            
            <br><br> Favorite sports: <br>
            
            <input type="checkbox" id="basket"  name="sports" value="basket">
            <label for="basket"> Basketball </label> <br>
            <input type="checkbox" id="soccer" name="sports" value="soccer">
            <label for="soccer"> Soccer </label>
            
            <br/>
                <?php posterrores() ?>
            <br/>
        
            <input type="submit" value="Submit Data" />
            <br/>
        </form>
         
            <?php greetingmsg() ?>
            <br/>
            <?php statesimg()?>
            <br/>
            <?php school()?>
            <br/>
            <?php sports()?>
            <br/>
         <footer>
            <hr>
            &copy; 2018 Mac Cooper <br />
            <strong>Disclaimer</strong> The information in this website is fake. It's use for <strong >CST336</strong> only!
            <br/>
            
            <img src="../../img/CSUMB_logo.png" alt=" this is a image of csumb logo" title="CSUMB LOGO" width="75">
             <img src="../../img/buddy_verified.png" alt=" and image that show that your buddy look at your work " title="buddy verified" width="75">
        </footer> 

    </body>
</html>