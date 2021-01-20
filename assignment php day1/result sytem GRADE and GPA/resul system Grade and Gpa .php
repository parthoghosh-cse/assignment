<?php

$name="partho";
$marks=50 ;


if($marks>=0 && $marks<=39){
    echo"<span style='color:red'>$name Your Grade is: F and Grade point: 0.00</span>";

}elseif($marks>=40 && $marks<=44){
    echo"<span style='color:orange'>$name Your Grade is: D and Grade point: 2.00</span>";

}elseif($marks>=45 && $marks<=49){
    echo"<span style='color:blue'>$name Your Grade is: C and Grade point: 2.50</span>";

}elseif($marks>=50 && $marks<=54){

    echo"<span style='color:orange'>$name Your Grade is: C+ and Grade point: 2.50</span>";
}elseif($marks>=55 && $marks<=59){

    echo"<span style='color:yellow'>$name Your Grade is: B- and Grade point: 2.75</span>";
}elseif($marks>=60 && $marks<=64){

    echo"<span style='color:blue' >$name Your Grade is: B and Grade point: 3.00</span>";
}elseif($marks>=65 && $marks<=69){

    echo"<span style='color:black'>$name Your Grade is: B+ and Grade point: 3.25</span>";
}elseif($marks>=70 && $marks<=74){

    echo"<span style='color:orange'>$name Your Grade is: A-  and Grade point: 3.50</span>";
}elseif($marks>=75 && $marks<=79){

    echo"<span style='color:blue'>$name Your Grade is: A and Grade point: 3.75</span>";
}elseif($marks>=80 && $marks<=100){

    echo"<span style='color:red'>$name	Your Grade is: A+ and Grade point: 4.00</span>";
}
?>