<?php

function borohat($txt){

    echo "<span style=\"text-transform:uppercase; \">" . $txt .  "</span><hr>";
  
}

function chotohat($txt){
    echo"<span style=\"text-transform:lowercase;\">". $txt. "</span><hr>";
}
borohat('my name is partho');
chotohat('BANGLADESH');





function multihat($txt,$hat='b'){
    
    if($hat =='b'){
        echo"<span style='text-transform:uppercase;'>$txt</span><hr>";

    }else if($hat =='c'){

        echo"<span style='text-transform:lowercase;'>$txt</span><hr>";

    }else{
        echo"::ERROR::";
    }

}

multihat('partho','b');
multihat('Shown','c');
multihat('hasan','f');
