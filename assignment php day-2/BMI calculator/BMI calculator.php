<?php
function bmi($mass,$height){
        $height=$height*0.3048;
    $BMI=$mass/($height*$height);
    echo"BODY MASS INDEX IS=$BMI";

}
bmi('60','5.9');
