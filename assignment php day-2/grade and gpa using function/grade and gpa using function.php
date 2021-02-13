<?php
function getresult($marks){
        $gpa= '';
        $grade='';

        if($marks>=0 && $marks<=32){
            $gpa= 'F';
            $grade='0';
        }elseif($marks>=33 && $marks<=39){
            $gpa= 'D';
            $grade='1';
    

        }elseif($marks>=40 && $marks<=49){
            $gpa= 'C';
            $grade='2';
    

        }elseif($marks>=50 && $marks<=59){
            
            $gpa= '2.5';
            $grade='B';

        }elseif($marks>=60 && $marks<=69){
            $gpa= '3';
            $grade='A-';


        }elseif($marks>=70 && $marks<=79){
            $gpa= '3.5';
            $grade='A';

        }elseif($marks>=80 && $marks<=100){
            $gpa= '5';
            $grade='A+';

        }
        echo"GPA=$gpa AND GRADE=$grade";
}

getresult(79);