<?php
	session_start();	

	include("config.php");

	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$type=mysqli_real_escape_string($conn,$_POST['type']);
	//$aadhar_card=mysqli_real_escape_string($conn,$_POST['aadhar_card']);

	if(!empty($email) &&!empty($pwd) ){
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			$FETCH_EMAIL = "SELECT * FROM users WHERE email='{$email}'";
			$sql = mysqli_query($conn,$FETCH_EMAIL);
			if(mysqli_num_rows($sql)>0){
				$row = mysqli_fetch_assoc($sql);
				if($row['pwd']==$pwd){
					$_SESSION['unique_id']= $row['unique_id'];
					$_SESSION['type']=$row['type'];
					$_SESSION['fname']=$row['first_name'];
					$_SESSION['lname']=$row['last_name'];
					$success =1;
					echo $success;
				}else{
				echo "user not found kindly check username or password";

				}	
					
			}else{
				echo "user not found kindly check username or password";
			}

	}else{
		echo "invalid email";
	}
}else{
	echo "all input fields are required";
}







?>