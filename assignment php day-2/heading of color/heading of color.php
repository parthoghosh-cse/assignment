<?php
function head($txt,$color){
   $rong='';
   switch($color){
       case'nil':
        $rong='blue';
    break;
   
       case'lal':
        $rong='red';
    break;
   
        case'sobuj':
         $rong='green';
     break;  
    
         case'holud':
          $rong='yellow';
     break;

    default:
    $rong="black";
    break;
   }
   echo"<h1 style='color:".$rong.";'>".$txt."</h1>";
}

head('partho','nil');
head('shown','holud');