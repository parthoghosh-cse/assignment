<?php

$name="suraiya";
$marks=81;
$vaiorapu;

if($name=='aditi' ||$name=='ruma'||$name=='suraiya' ){
    $vaiorapu="apu";
}else{
    $vaiorapu="vai";
}



if($marks>=0 && $marks<=39){
    echo"<span style='color:red'>Dukhito $name $vaiorapu  apni fail korcen</span>";

}elseif($marks>=40 && $marks<=44){
    echo"<span style='color:orange'>$name $vaiorapu   apni D paicen</span>";

}elseif($marks>=45 && $marks<=49){
    echo"<span style='color:blue'>$name $vaiorapu  apni C paicen</span>";

}elseif($marks>=50 && $marks<=54){

    echo"<span style='color:orange'>$name $vaiorapu  apni C+ paicen</span>";
}elseif($marks>=55 && $marks<=59){

    echo"<span style='color:yellow'>$name $vaiorapu   apni B- paicen</span>";
}elseif($marks>=60 && $marks<=64){

    echo"<span style='color:blue' >$name  $vaiorapu  apni B paicen</span>";
}elseif($marks>=65 && $marks<=69){

    echo"<span style='color:black'>$name $vaiorapu  apni B+ paicen</span>";
}elseif($marks>=70 && $marks<=74){

    echo"<span style='color:orange'>$name $vaiorapu  apni A- paicen</span>";
}elseif($marks>=75 && $marks<=79){

    echo"<span style='color:blue'>$name $vaiorapu  apni A paicen</span>";
}elseif($marks>=80 && $marks<=100){

    echo"<span style='color:red'>	Excellent $name $vaiorapu  apni A+ paicen</span>";
}
?>





