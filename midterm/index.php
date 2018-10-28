<?php
function errors(){
    ///check for empty size
    if(empty($_POST['teamSize'])){
    echo " You must enter a Team Size!";
    echo"<br>";
    return false;
}


    $size=$_POST['teamSize'];
    if($size<1){
        echo " Team Size Must be between 2 and 10 ";
        echo"<br>";
    }else if($size>5){
        if($_POST['code'] !=="code"){
            echo " Size Must be less than 6 for not Coed Teams";
            echo"<br>";
        }
    }
    
    if(empty($_POST['gender'])){
    echo " You must specify Team Gender!";
}
return true;
}
////////////////////////////////////

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Team Generator</title>
    </head>
    <body>
        
        <h1>Superhero Team Generator </h1>
        
        <form method = "post">
            
            Team Sze: <input type="text" name="teamSize" size="10"/> <br />
         </form>
            
             <form method = "post">
                
                    Team Gender: 
                    <input type="radio" name="gender" value="female"/> Female
                    <input type="radio" name="gender" value="male"/> Male
                    <input type="radio" name="gender" value="code"/> Coed <br>
              </form>
              
              <form method = "post">
            
                   Display team members in alphabetical order: <input type="radio" name="A-Z"/> A-Z
                   <input type="radio" name="Z-A"/> Z-A <br>
              </form>
              
              <form method = "post">
            
             <input type="checkbox" name=" display images" size="10"/> Display Images<br />
         </form>
            
            
            <!--Price: From: <input type="text" name="priceFrom"  /> -->
            <!-- To: <input type="text" name="priceTo"  />-->
            <!--<br>-->
            <!--Order By:-->
            <!--Price <input type="radio" name="orderBy" value="productPrice">-->
            <!--Name <input type="radio"  name="orderBy" value="productName">-->
            <br>
            <input type="submit" name="submit" value="Generate Team"/>
        
        <br>
        /////////////////////////////
        <br>
            <input type="submit" name="submit" value="Team History"/>
        
        <br>
        ///////////////////
        <?= errors() ?>
          
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#FFC0C0">
      <td>1</td>
      <td>The page includes the form elements as the Program Sample: checkbox, radio buttons, etc.</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:GREEN">
      <td>2</td>
      <td>Error is displayed if team gender is not submitted.</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>Error is displayed if team size is less than 1 or left blank </td>
      <td align="center">5</td>
    </tr>    
   <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>Error is displayed if team size is greater than 5 AND gender is not coed, or if size is greater than 10 AND gender is coed </td>
      <td align="center">5</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>Header is displayed with info submitted (team size and gender) </td>
      <td align="center">5</td>
    </tr>    
	<tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>A random NOT coed team is displayed properly when selecting Male or Female as gender </td>
      <td align="center">15</td>
    </tr> 
   	<tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>If selecting "coed" as gender, there is at least one male and one female team member </td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>8</td>
      <td>The names are ordered alphabetically as chosen by the user (asc/desc)</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>9</td>
      <td>Team member's images are displayed if corresponding checkbox is checked</td>
      <td align="center">10</td>
    </tr>       
    <tr style="background-color:#FFC0C0">
      <td>10</td>
      <td>Team members are displayed in a two-column table</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>11</td>
      <td>A second form allows users to see the history of generated teams</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>12</td>
      <td>The web page uses Bootstrap and has a nice look. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="background-color:#99E999">
      <td>13</td>
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