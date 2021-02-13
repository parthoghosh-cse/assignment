<?php

$phone_book=array(
        'number01'=>array(
            'name'=>'father',
            'address'=>'monirampur-jessore',
            'phone-number'=>'019122555222'
      ), 
        'number02'=>array(
             'name'=>'mother',
             'address'=>'monirampur-jessore',
             'phone-number'=>'019180000000'
      ),
        'number03'=>array(
            'name'=>'shovon',
            'address'=>'dhaka',
            'phone-number'=>'01755555544'
       ),
        'number04'=>array(
             'name'=>'partho',
             'address'=>'dhaka',
             'phone-number'=>'01845132726'
       ), 
        'number05'=>array(
             'name'=>'souvik',
             'address'=>'jessore',
             'phone-number'=>'01755655222'
        )  
        
);
foreach($phone_book as $key=>$contact){
    echo"Name:".$contact['name']."<br>"."Address:".$contact['address']."<br>"."Phone-Number:".$contact['phone-number']."<br>";
    echo"........><..........."."<br>";
}