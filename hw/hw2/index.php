<?php
/// include the 
include'functionsp.php';

?>
<!DOCTYPE html>

<html>
    <head>
        <title> homework 2 </title>
        <style>
            body{
               background-image: url("img/3.gif");
               /*background-color: #cccccc;*/
            }
        </style>
    </head>
    <body>
<h1> Welcome to my page </h1>
<div>
    <?php

    printpic($picture);
   
?>
</div>
///////////////////////////////////////////////////////////
<div>
    <?php
    
     getmusic($mp3music);
     
    ?>
</div>

<div>
    <form>
    <!--<button class="button">Button</button>-->
<input type="submit" class="button" value="press Me">

</form>
</div>
<!--<div>-->
<!--             <footer>-->
<!--            <hr>-->
<!--            &copy; 2018 Mac Cooper <br />-->
<!--            <strong>Disclaimer</strong> The information in this website is fake. It's use for <strong >CST336</strong> only!-->
<!--            <br/>-->
            
<!--            <img src="../../img/CSUMB_logo.png" alt=" this is a image of csumb logo" title="CSUMB LOGO" width="75">-->
<!--             <img src="../../img/buddy_verified.png" alt=" and image that show that your buddy look at your work " title="buddy verified" width="75">-->
<!--        </footer> -->
<!--        </div>-->
    </body>
</html>