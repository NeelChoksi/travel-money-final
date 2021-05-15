<?php
	
	include_once "config.php";

	$fname=mysqli_real_escape_string($conn,$_POST['fname']);
	$lname=mysqli_real_escape_string($conn,$_POST['lname']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$type=mysqli_real_escape_string($conn,$_POST['type']);
	//$aadhar_card=mysqli_real_escape_string($conn,$_POST['aadhar_card']);

	if(!empty($fname) &&!empty($lname) &&!empty($email) &&!empty($pwd) ){
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			$sql = mysqli_query($conn,"SELECT email FROM users WHERE email='{$email}'");
			if(mysqli_num_rows($sql)>0){
				//email exists
				echo "$email exists already";
			}else{
				//user has uploaded file or not:
				if(isset($_FILES['file'])){
					//file is uploaded

				}else{
					echo "upload image and aadhar";
				}
			}
		}else{
			echo "email not valid";
		}

	}else{
		echo "All input fields are required";
	}







?>