<?php 
	
	session_start();
	include('config.php');

	$post_id = $_GET['post_id'];

	// echo $post_id;
	$UPDATE_POST = "UPDATE posts SET post_status='Not Active' WHERE post_id={$post_id};";
			$sql2 = mysqli_query($conn,$UPDATE_POST);
			if($sql2){
				header("location: ../viewposts.php");
			}


?>	