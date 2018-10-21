<?php
session_start();

function greetingmsg(){
    
    if(isset($_GET["firstName"])){
    $getFirstName["firstName"]=$_GET["firstName"];
    
}

if(isset($_GET['lastName'])){
    $getLastName["lastName"]= $_GET["lastName"];
    
}

echo " Welcome ".$getFirstName["firstName"]. " " .$getLastName["lastName"]  ;

}


?>
<br> <br/>
<!DOCTYPE html>
<html>
    <head>
        <title>pdata</title>
            <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <!--<a href="logout.php">Logout</a>-->
         <hr>
         <br> <br/>
        <div>
        <?php
        session_start();
        function statesimg(){
             if(isset($_GET['state'])){
            echo " I will like to visit:".$_GET["state"]."<br> <br/>";
             if($_GET['state']=="Arizona"){
                 
                 echo '<img src="img/AZ.jpg" alt="Arizona" id="img" <br><br/>';
             }
             
             elseif($_GET['state']=="California"){
                 echo '<img src="img/CA.jpg" alt="California" id="img" <br> <br/> ';
             }
             
              elseif($_GET['state']=="Illinois"){
                 echo '<img src="img/IL.jpg" alt="Illinois" id="img" <br> <br/>';
             }
             
             elseif($_GET['state']=="Liberia"){
                 echo '<img src="img/LIB.jpg" alt="Liberia" id="img" <br> <br/>';
             }
             
             elseif($_GET['state']=="Nigeria"){
                 echo '<img src="img/NIG.jpg" alt="Nigeria" id="img" <br> <br/>';
             }
             
            }
        }
       
        
        ?>
        </div>
        <br><br/>
        <!--////////////////////////////////////////////////////////////////////-->
        <div>
            <?php
            session_start();
            function school(){
                 if(isset($_GET['degreeChoices'])){
                echo "Highest elecation Obtained:" ." ".$_GET["degreeChoices"] ."<br> <br/>" ;
                if($_GET['degreeChoices']=="High School"){
                    // echo------------------;
                    echo " Good job but it's not enouth Try and get your College degree";
                }
                
                elseif($_GET['degreeChoices']=="College"){
                    // echo "-------------------------------------------"
                     echo " Well done!!!!";
                }
            }
        }
           
            ?>
        </div>
        <br><br/>
        <!--////////////////////////////////////////////////////////////////////-->
        <div>
            <?php
            session_start();
            function sports(){
                 if(isset($_GET['sports'])){
                echo "My favorite is : " ." ".$_GET["sports"]."<br> <br/>";
                if($_GET['sports']=="basket"){
                     echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/rvOlvSgxkTk'
                     frameborder='0' allow='autoplay; encrypted-media' 
                     allowfullscreen></iframe>";
                        
                
                }
                
                elseif ($_GET['sports']=="soccer") {
                    // code...
                    echo  "<iframe width='560' height='315' src='https://www.youtube.com/embed/O1FglMjJV_8' 
                    frameborder='0' 
                    allow='autoplay; encrypted-media' allowfullscreen></iframe>";
                            
                    
                }
            }
        }
           
            ?>
        </div>
        
    </body>
</html>