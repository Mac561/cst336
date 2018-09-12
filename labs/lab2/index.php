<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    <body>
        <?php
        
        function displaysymbol($random_value){
            
            //  $random_value = rand(0,2); //generate a radom number from 0 to 2
        
      switch($random_value){
          
          case 0: $symbol = "seven";
          break;
          
           case 1: $symbol = "cherry";
          break;
          
           case 2: $symbol = "grapes";
          break;
      }
        
        
        // $symbol="seven";
        
        echo"<img src=\"img/$symbol.png\" alt='$symbol' title='".ucfirst($symbol)."'/>";
        } //displaysymbol()
        
        $random_value1 = rand(0,2);
        displaysymbol($random_value1);
        $random_value2 = rand(0,2);
        displaysymbol($random_value2);
         $random_value3 = rand(0,2);
        displaysymbol($random_value3);
        
        function displayPoints($random_value1,$random_value2,$random_value3){
            
            echo"<div id='output'>";
            if($random_value1 == $random_value2 && $random_value2 == $random_value3){
                switch($random_value1){
                    case 0: $totalPointrs =1000;
                        echo "<h1>Jackpot!</h1>";
                        break;
                    case 1:$totalPointrs=500;
                        break;
                    case 2:$totalPointrs = 250;
                        break;
                    
                }
                echo"<h2>You won $totalPointrs points!</h2>";
            }else{
                echo"<h3> Try Again!</h3>";
            }
            echo"</div>";
        }
        
        echo " <br/>random_value1 :".$random_value1;
        echo "<br/>random_value2 :".$random_value2;
        echo "<br/>random_value3 :".$random_value3;
        

       
        ?>

<!--<img src="img/cherry.png" alt="cherry" title="cherry"/>-->
    </body>
</html>