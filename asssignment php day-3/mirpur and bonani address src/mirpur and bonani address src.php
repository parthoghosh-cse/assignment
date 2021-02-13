<?php

$students=array(
        'stu_01'=>array(
            'name'=>'bikash',
            'address'=>'uttara'
        ),
         'stu_02'=>array(
            'name'=>'sadid',
            'address'=>'mirpur'
        ), 
        'stu_03'=>array(
            'name'=>'partho',
            'address'=>'shyamoli'
        ),
         'stu_04'=>array(
            'name'=>'nasim',
            'address'=>'shyamoli'
        ),
         'stu_05'=>array(
            'name'=>'joy kumar',
            'address'=>'mirpur'
        ),
         'stu_06'=>array(
            'name'=>'emon',
            'address'=>'bonani'
        ), 
        'stu_07'=>array(
            'name'=>'topu',
            'address'=>'dhanmondi'
        ), 
        'stu_08'=>array(
            'name'=>'moni',
            'address'=>'shyamoli'
        ),
        'stu_09'=>array(
            'name'=>'solaiman',
            'address'=>'bonani'
        ), 
        'stu_10'=>array(
            'name'=>'tarak',
            'address'=>'mirpur'
        ), 
        'stu_11'=>array(
            'name'=>'sohana',
            'address'=>'bonani'
        ), 
        'stu_12'=>array(
            'name'=>'samim',
            'address'=>'dhanmondi'
        ), 
         'stu_13'=>array(
            'name'=>'raihan',
            'address'=>'dhanmondi'
        ), 
        'stu_14'=>array(
            'name'=>'ullash',
            'address'=>'azimpur'
        ), 
        'stu_15'=>array(
            'name'=>'aisha',
            'address'=>'dhanmondi'
        ), 
        


);

foreach($students as $key=>$info){
   

        if( $info['address']=='mirpur'  ){

            echo "Name:".$info['name']."<br>";
            echo "Address:".$info['address']."<br>";
            echo".........<>........"."<br>";
        }elseif($info['address']=='bonani'){
            echo "Name:".$info['name']."<br>";
            echo "Address:".$info['address']."<br>";
            echo".........<>........"."<br>";
        }
    }