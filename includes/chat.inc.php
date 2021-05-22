<?php 
	

	session_start();
	if(isset($_SESSION['unique_id'])){
		include_once "config.php";
		$sender_id = mysqli_real_escape_string($conn,$_POST['sender_id']);
		$receiver_id = mysqli_real_escape_string($conn,$_POST['receiver_id']);
		$message = mysqli_real_escape_string($conn,$_POST['message']);


		if(!empty($message)){
			$INSERT_MESSAGE = "INSERT INTO messages (sender_id, receiver_id, message) VALUES ({$sender_id},{$receiver_id},'{$message}');";

			$sql = mysqli_query($conn,$INSERT_MESSAGE);
		}
	
	}else{
		header("location: ../login.php");
	}

?>