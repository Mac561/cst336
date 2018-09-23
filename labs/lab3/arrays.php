<?php

function displayarray($my_symbol){
    echo "<hr>";
    print_r($my_sybbol);
    
    for($i=0; i< count($symbol); $i++){
        echo $my_sybbol[i].",";
    }
    
}

$symbol = array("seven");
print_r($symbol); //display array content

array_push($symbol,"orange", "grapes"); // adds element()
print_r($symbol);

$symbol[] = "cherry";
print_r($symbol);

displayarray($symbol);

echo "Radom iyem:".$symbol[rand(0,count($symbol)-1)];

$indexes = array();

for($i=0; $i<3; $i++){
    $indexes[] = $symbol[array_rand($symbol)];
    echo "<img src='../lab2/img/".$symbol[array_rand($symbol)].".png'>";

}
echo "<hr>";
print_r($indexes)

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>