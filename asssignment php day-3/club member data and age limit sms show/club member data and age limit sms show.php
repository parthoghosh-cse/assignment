
<?php
$club_member=array(
        '01'=>array(
            'name'=>'partho',
            'age'=>25,
            'address'=>'shyamoli',
            'contact'=>'01845132726'
        ),
        
        '02'=>array(
            'name'=>'shown',
            'age'=>21,
            'address'=>'mirpur',
            'contact'=>'01721954562'
        ),
        '03'=>array(
            'name'=>'nick',
            'age'=>45,
            'address'=>'uttra',
            'contact'=>'0177954562'
        ),
        '04'=>array(
            'name'=>'nick',
            'age'=>17,
            'address'=>'uttra',
            'contact'=>'0177954562'
        ),
);
foreach($club_member as $key=>$info){
//    echo "Name:".$info['name']."<br>";
//    echo"Age:".$info['age']."<br>";
//    echoecho"Address:".$info['address']."<br>";
//    echo"contact:".$info['contact']."<br>";
//    echo".......<>......."."<br>";
   
   if( $info['age'] < 18){
         echo "Name:".$info['name']."<br>"."Age:".$info['age']."<br>"."Address:".$info['address']."<br>"."contact:".$info['contact']."<br>"."your age is under 18 please do your study properly "."<br>";
         echo".......<>......."."<br>";
   }elseif($info['age'] > 18 &&$info['age'] < 40){

         echo "Name:".$info['name']."<br>"."Age:".$info['age']."<br>"."Address:".$info['address']."<br>"."contact:".$info['contact']."<br>"."Welcome to our club "."<br>";
         echo".......<>......."."<br>";
 }elseif($info['age']>40){
         echo"Name:".$info['name']."<br>"."Age:".$info['age']."<br>"."Address:".$info['address']."<br>"."contact:".$info['contact']."<br>"."Your age is over 40<GOOD LUCK >"."<br>";
         echo".......<>......."."<br>";
 }
  
   

}