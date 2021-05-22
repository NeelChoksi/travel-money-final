<?php 
	session_start();
	if(isset($_SESSION['unique_id'])){
		include_once "includes/config.php";
		$user_id = mysqli_real_escape_string($conn,$_GET['user_id']); 
		if(isset($user_id)){
			$UPDATE_STATUS = "UPDATE users SET user_status='Not Active' WHERE unique_id={$user_id};";
			$sql2 = mysqli_query($conn,$UPDATE_STATUS);
			if($sql2){
				session_unset();
				session_destroy();
				header('location: login.php');

			}
		}


	}else{
		header("location: login.php");
	}


?>