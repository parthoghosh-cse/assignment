<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development</title>
<!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
</head>
<body>
<?php

/**
 * student data form
 */

 if(isset($_POST['insert'])){
	//form value get
	
	$name=$_POST['name'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$cell=$_POST['cell'];
	$roll=$_POST['roll'];
	$random = $_REQUEST['hdn'];
	

//test email
$email_arr=explode('@',$email);
$inst_mail= end($email_arr);
//cell manage
$cell_start=substr($cell,0,3);

//form require
if(empty($name)){
	$err['name']="<p style=\"color:red;\">* Required</p>";
}if(empty($age)){
	$err['age']="<p style=\"color:red;\">* Required</p>";
}if(empty($email)){
	$err['email']="<p style=\"color:red;\">* Required</p>";
}if(empty($cell)){
	$err['cell']="<p style=\"color:red;\">* Required</p>";
}if(empty($roll)){
	$err['roll']="<p style=\"color:red;\">* Required</p>";
}if(empty($random)){
	$err['hdn']="<p style=\"color:red;\">* Required</p>";
}



/**
 * form validation
 */

if(empty($name)||empty($age)||empty($email)||empty($cell)||empty($roll)||empty($random)){

$msg= "<p class=\"alert alert-danger \" >All fields are required! <button class=\"close\"data-dismiss=\"alert\">&times;</button></p>";


}elseif($age<18 || $age>40){
 $msg= "<p class=\"alert alert-warning\">Your age is not supported !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){

	$msg= "<p class=\"alert alert-warning \" >Invalid email address ! <button class=\"close\"data-dismiss=\"alert\">&times;</button></p>";
}elseif($inst_mail!='coderstrust.com'){
	
	$msg= "<p class=\"alert alert-info \" >This email are not supported <button class=\"close\"data-dismiss=\"alert\">&times;</button></p>";
}elseif(in_array($cell_start,['017','018','016','015','019','013','014'])==false){
	$msg= "<p class=\"alert alert-warning\">Mobile number is not currect !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
}else{
	if($_POST['random'] ==$random){
		$msg= "<p class=\"alert alert-success \" >Data stable <button class=\"close\"data-dismiss=\"alert\">&times;</button></p>";
	}else{
		$msg= "<p class=\"alert alert-warning \" >Math calculation is not currect <button class=\"close\"data-dismiss=\"alert\">&times;</button></p>";
	}
}


 }



 



?>







<div class="wrap shadow">
		<div class="card">
			<div class="card-body">


			<h2>Add new student</h2>
 			<?php 

				
            if(isset($msg)){
	          echo $msg;
   
             }
             
			?>
         
        <form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name"class="form-control" type="text">
			 			<?php
						 if(isset($err['name'])){
							echo $err['name'];	
						 }
						 
						 ?>

					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age"class="form-control" type="text">
						 <?php
						 if(isset($err['age'])){
							echo $err['age'];	
						 }
						 
						 ?>
					</div>

				 <div class="form-group">
						<label for="">Email</label>
						<input name="email"class="form-control" type="text">
						<?php
						 if(isset($err['email'])){
							echo $err['email'];	
						 }
						 
						 ?>
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
						<?php
						 if(isset($err['cell'])){
							echo $err['cell'];	
						 }
						 
						 ?>
			

					</div>
					<div class="form-group">
						<label for="">Roll</label>
						<input name="roll" class="form-control" type="text">
						<?php
						 if(isset($err['roll'])){
							echo $err['roll'];	
						 }
						 
						 ?>

					</div>

					<div class="form-group">
						<span><span><?php $a= rand(0,10);echo $a; ?></span> <span>+</span> <span><?php $b= rand(0,10);echo $b; ?></span></span><span><input type="number" class="form-control" name="random"></span>
						<input type="hidden" name="hdn" value="<?php echo $a+$b;?>">
						<?php
						 if(isset($err['hdn'])){
							echo $err['hdn'];	
						 }
						 
						 ?>
									
						
					</div>
					<div class="form-group">
						<input name="insert"class="btn btn-primary" type="submit" value="Insert">
					</div>
				</form>

  </div>
  </div>
  </div>

 
	<!-- JS FILES  -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>