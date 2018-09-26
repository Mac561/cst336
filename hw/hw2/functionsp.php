<?php
//creat a jungle page 
$picture = array("Circles-3","giphy (1)","Nested","slllo","giphy");
 
    function printpic($picture){
     $match = false;
        
        for($i =0; $i < 2; $i++){
            
            $randompic = rand(0,(count($picture)-1));
            
              echo "<img width='100' src='img/$picture[$randompic].gif'>"; 
        }
        // echo"<img width= '100' src='img/$randompic[$i].jpg'>"; 
        // echo"$randompic[$i]";
        //  echo '<img src="' . $picture[$randompic] . '">';
          
    }
 ///////////////////////////////////////////////////////////////////
$mp3music = array("30212_little_flower_proud_music_preview","di-evantile_doomed-to-immortality","di-evantile_loneliness","di-evantile_make-me-believe","time_lapse_grooved_120bpm_proud_music_preview");
function getmusic($mp3music){
 
 for($mac = 0; $mac < 1; $mac++){
  
  $randommusic = rand(0,(count($mp3music)-1));
  
   echo "<audio controls autoplay>
         <source src='music/$mp3music[$randommusic].mp3' type='audio/ogg'>
         Your browser does not support the audio element.
                                </audio>";
  
 }
 
}

?>