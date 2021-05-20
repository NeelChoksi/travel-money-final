<?php 
	session_start();	

	include("config.php");

	$unique_id= $_SESSION['unique_id'];



	$start_loc=mysqli_real_escape_string($conn,$_POST['start_loc']);
	$end_loc=mysqli_real_escape_string($conn,$_POST['end_loc']);
	
	$start_date=mysqli_real_escape_string($conn,date_format(date_create($_POST['start_date']), 'Y-m-d'));
	$end_date=mysqli_real_escape_string($conn,date_format(date_create($_POST['end_date']), 'Y-m-d'));
	$available_weight=mysqli_real_escape_string($conn,$_POST['available_weight']);
	$proposed_price=mysqli_real_escape_string($conn,$_POST['proposed_price']);

	$post_status = "Active";

	if(!empty($start_loc) &&!empty($end_loc) &&!empty($start_date) &&!empty($end_date)&&!empty($available_weight)&&!empty($proposed_price) ){

		$INSERT_POST = "INSERT INTO posts(unique_id, start_location, end_location, start_date,end_date,weight,proposed_price,post_status) VALUES ({$unique_id},'{$start_loc}','{$end_loc}','$start_date','$end_date','{$available_weight}','{$proposed_price}','{$post_status}')";
		$sql = mysqli_query($conn,$INSERT_POST);

		if($sql){
			echo 1;
		}else{
			echo "post not created";
		}


	}else{
		echo "All input fields are required";

	}

 ?>
