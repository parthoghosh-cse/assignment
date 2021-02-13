<?php

$picnic=array(
    'member01'=>array(
        'name'=>'partho',
        'address'=>'shyamoli',
        'contact'=>'01845132726',
        'donation_paid'=>500
    ),
    'member02'=>array(
        'name'=>'nasim',
        'address'=>'shyamoli',
        'contact'=>'01855222222',
        'donation_paid'=>600
    ),
    'member03'=>array(
        'name'=>'sadid',
        'address'=>'mirpur',
        'contact'=>'0177442726',
        'donation_paid'=>700
    ),
    'member04'=>array(
        'name'=>'bikash',
        'address'=>'uttara',
        'contact'=>'01655542726',
        'donation_paid'=>500
    ),
);
$total = 0;
foreach($picnic as $key=>$info){
    echo"Name:".$info['name']."<br>"."Address:".$info['address']."<br>"."Contact:".$info['contact']."<br>"."Donation_Paid:".$info['donation_paid']."<br>";
    echo"........**............"."<br>";

    if( $info['donation_paid']){
        $total = $total+ $info['donation_paid'];
    }
}

echo "total donation collected:".$total;