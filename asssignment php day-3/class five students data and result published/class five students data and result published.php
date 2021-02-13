<?php



$result_one = array(
    'english' => array(
        'number' => 75,
        'grade'  => 'A',
        'gpa'=>4,
    ),
    'math' => array(
        'number' => 85,
        'grade'  => 'A+',
        'gpa'=>5,
    ),
    'rel' => array(
        'number' => 75,
        'grade'  => 'A',
        'gpa'=>4,
    ),
    'bangla' => array(
        'number' => 80,
        'grade'  => 'A+',
        'gpa'=>5,
    ),
  
);

$result_two=array(
       'english'=>array(
           'number'=>80,
           'grade'=>'A+',
           'gpa'=>5,
       ),
       'math'=>array(
        'number'=>90,
        'grade'=>'A+',
        'gpa'=>5,
    ),
    'rel'=>array(
        'number'=>81,
        'grade'=>'A+',
        'gpa'=>5,
    ),
    'bangla'=>array(
        'number'=>70,
        'grade'=>'A',
        'gpa'=>4,
    ),

);

    
   

$classfive=array(
    '01'=>array(
             'name'=>'nick',
             'gender'=>'male',
             'age'=>10,
             'contact'=>'01884545454',
             'result'=>$result_one
        ),
 
    '02'=>array(
        'name'=>'mike',
        'gender'=>'male',
        'age'=>12,
        'contact'=>'018555825222',
        'result'=>$result_two
        

    )
   
    );

    foreach($classfive as $key=>$value){
        echo"Name:".$value['name']."<br>";
        echo"gender:".$value['gender']."<br>";
        echo"age:".$value['age']."<br>";
        echo"contact:".$value['contact']."<br>";
      
    if($value['result']){

        foreach($value['result'] as $key=>$result){
            echo $key.":"."Number=".$result['number']."Grade=".$result['grade']."Gpa=".$result['gpa']."<br>";
        }

      }  
        echo"..........."."<>".".........."."<br>";
        
    };


