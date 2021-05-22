<?php
	session_start();	

	include("config.php");

	$fname=mysqli_real_escape_string($conn,$_POST['fname']);
	$lname=mysqli_real_escape_string($conn,$_POST['lname']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$type=mysqli_real_escape_string($conn,$_POST['type']);
	//$aadhar_card=mysqli_real_escape_string($conn,$_POST['aadhar_card']);

	if(!empty($fname) &&!empty($lname) &&!empty($email) &&!empty($pwd) ){
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			$FETCH_EMAIL = "SELECT email FROM users WHERE email='{$email}'";
			$sql = mysqli_query($conn,$FETCH_EMAIL);
			if(mysqli_num_rows($sql)>0){
				//email exists
				echo "$email exists already";
			}else{
				//user has uploaded file or not:
				if(isset($_FILES['profile_img']) ){
					//file is uploaded
					$profile_img_name = $_FILES['profile_img']['name'];
					$profile_img_type = $_FILES['profile_img']['type'];
					$profile_img_tmpname = $_FILES['profile_img']['tmp_name'];

					$aadhar_name = $_FILES['aadhar_card']['name'];
					$aadher_type = $_FILES['aadhar_card']['type'];
					$aadhar_tmpname = $_FILES['aadhar_card']['tmp_name'];



					$img_explode = explode('.',$profile_img_name);
					$img_ext = end($img_explode);
					// echo "$img_ext";
					$aadhar_explode = explode('.',$aadhar_name);
					$aadhar_ext = end($aadhar_explode);

					$extensions = ['png','jpeg','jpg'];
					$extensions2 = ['pdf'];
					if(in_array($img_ext,$extensions)=== true ){
						$time = time();
						$new_img_name = $time.$profile_img_name;
						$new_aadhar_name = $time.$aadhar_name;
						if(move_uploaded_file($profile_img_tmpname,
						"images/".$new_img_name ) ){
							
						move_uploaded_file($aadhar_tmpname,"aadhars/".$new_aadhar_name);

							$status = "Active now";
							$random_id = rand(time(),10000000);

							// $sql2 = mysqli_query($conn,"INSERT INTO users (unique_id,type,first_name,last_name,email,pwd,user_status,img) VALUES ({$random_id},'{$type}','{$fname}','{$lname}','{$email}','{$pwd}','{$status}','{$new_img_name}'");
							
							// $INSERT_USER = "INSERT INTO `users`(`unique_id`, `type`, `first_name`, `last_name`, `email`, `pwd`, `user_status`, `img`, `aadhar_card`) VALUES ({$random_id},'{$type}','{$fname}','{$lname}','{$email}','{$pwd}','{$status}','{$new_img_name}')";

							$INSERT_USER = "INSERT INTO users(unique_id,type,first_name,last_name,email,pwd,user_status,img) VALUES ({$random_id},'{$type}','{$fname}','{$lname}','{$email}','{$pwd}','{$status}','{$new_img_name}')";


							$sql2 = mysqli_query($conn,$INSERT_USER);


							if($sql2){
								$sql3 = mysqli_query($conn,"SELECT * FROM users WHERE email='{$email}'");
								if(mysqli_num_rows($sql3)>0){
									$row = mysqli_fetch_assoc($sql3);
									$_SESSION['unique_id']= $row['unique_id'];
									$_SESSION['type']=$row['type'];
									$_SESSION['fname']=$row['first_name'];
									$_SESSION['lname']=$row['last_name'];
									$success =1;
									echo $success;
								}else{
									echo "data not fetched from sql db";
								}
							}else{
								echo "data not inserted in sql db";
							}

						}else{
							echo "file not inserted in server";
						}
					}else{
						echo"jpeg,jpg,png for profile image  ";
					}
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