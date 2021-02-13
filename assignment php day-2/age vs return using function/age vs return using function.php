<?php

function getage($age){
    $outerage='';
    if($age>=0 && $age<=7){
        $outerage='Baby';
    }elseif($age>=8 && $age<=13){
        $outerage='BOY';
    }elseif($age>=14 && $age<=17){
        $outerage='Teenager';
    }elseif($age>=18 && $age<=40){
        $outerage='YOUNG MAN';
    }elseif($age>=41 && $age<=105){
        $outerage='OLD MAN';
    }else{
        $outerage='::ERROR::';
    }
    echo"YOU ARE A $outerage ";
}

getage(25);