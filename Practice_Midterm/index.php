<?php
session_start();
function posterrors(){
    if(empty($_GET['Months']) || empty($_GET['Countries']) || empty($_GET['Number'])){
        echo "<h1> ERRORS!!!! you must
        select a Month, Country and Location<h1>";
        return false;
    }
    return true;
}

if(!empty($_GET['Months'])){
    $getMonth =$_GET['Months'];
    echo $getMonth."Itinerary";
}

if(isset($_GET['Number']) && isset($_GET['Countries'])){
    $getnum =$_GET['Number'];
    $getcountry =$_GET['Countries'];
    echo "Visiting"." ".$getnum." "."places in"." ".$getcountry;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Winter Vacation</title>
        <style>
            /*body{*/
            /*    display:center;*/
            /*}*/
        </style>
    </head>
    <body>

<form method="GET">
    
    <div>
         Select Month:
        <select name="Months">
            <!--<option >Select</option>-->
            <option value="November">November</option>
            <option value="December">December</option>
            <option value="January">January</option>
            <option value="February">February</option>
        </select>
    </div>
    <br/>
    <div name="Number">
        Number of location: 
        <input type="radio" name="Number" value="Three"/>Three
         <input type="radio" name="Number" value="Four"/>Four
          <input type="radio" name="Number" value="Five"/>Five
        
    </div>
    <div >
        Select Country:
        <select name="Countries">
            <option value="">select</option>
            <option value="France">France</option>
            <option value="Mexico">Mexico</option>
            <option value="USA">USA</option>
        </select>
    </div>
    <div>
        Visit location in alphabetical order:
        <input type="radio" name="layout" value="A-Z"/>A-Z
        <input type="radio" name="layout" value="Z-A"/>Z-A
    </div>
    <?php posterrors() ?>
    <div>
        <input type="submit" name="button" value="Creat Itinerary"/>
    </div>
    
</form>
    </body>
</html>