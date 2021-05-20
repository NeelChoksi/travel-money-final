<?php 

	include("sidebar.php");
	$context=$_SESSION['type'];
if(!isset($_SESSION['unique_id'])){
			header('location: login.php');
		}
	echo $context

	

 ?>

