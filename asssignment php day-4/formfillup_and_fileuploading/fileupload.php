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
	 * upload
	 */
	if(isset($_POST['upload'])){
		$file= $_FILES['profile_photo'];
		
	/**
	 * file info
	 */
	  $file_name=$file['name'];
	  $file_tmpname=$file['tmp_name'];
	  $file_size=$file['size'];
	  $size_in_kb=($file_size/1024);
	
	//get extention 

	$file_arr=explode('.',$file_name);
	$extension=end($file_arr);
    

	//unique file name

	$unique_name_pro=time(). rand(1,99999999);
	$unique_name=md5($unique_name_pro) . '.' . $extension;
	
	/**
	 * file validation
	 */
	if(empty($file_name)){

		$msg="<p class=\"alert alert-warning\">please select a file !<button class=\"close\"data-dismiss=\"alert\">&times;</button></p>";


	}else if(in_array($extension,['jpg','jpeg','png','webp'])==false){

		$msg="<p class=\"alert alert-danger\">Invalid file format !<button class=\"close\"data-dismiss=\"alert\">&times;</button></p>";


	}else if( $size_in_kb>100){

		$msg="<p class=\"alert alert-info\">Image size is too large! !<button class=\"close\"data-dismiss=\"alert\">&times;</button></p>";

	}else{
		move_uploaded_file($file_tmpname,'photos/' . $unique_name);

		$msg="<p class=\"alert alert-success\">File upload success! !<button class=\"close\"data-dismiss=\"alert\">&times;</button></p>";

	
	}

	

	}

	
	?>

	
  <div class="wrap shadow">
		<div class="card">
			<div class="card-body">


				<h2>Add new file</h2>

				<?php
				if(isset($msg)){
					echo $msg;

				}
				
				?>
    

        <form action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
				<div class="form-group">
					<img style="max-width:50%;" id="upload_photo" src="" alt="">
				</div>

					<label for="file_upload"><img style="cursor:pointer;" title="profile photo" data-toggle="tooltip" data-placement="right" width="100" src="file.gif" alt=""></label>
					<input name="profile_photo" style="display:none" type="file" id="file_upload">
				</div>

				<div class="form-group">
					<input name="upload" class="btn btn-sm btn-success" type="submit" value="Upload now">
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
<script>
		$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


$('input[name="profile_photo"]').change(function(e){
	let file_url=URL.createObjectURL(e.target.files[0]);

	$('img#upload_photo').attr('src',file_url);
})

</script>

</body>
</html>