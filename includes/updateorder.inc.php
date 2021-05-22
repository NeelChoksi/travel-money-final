<?php 
	
	session_start();
	include('config.php');

	$type = $_SESSION['type'];

	$order_no = $_GET['order_no'];

	$order_status = $_GET['order_status'];

	// echo $type;
	// echo $order_no;
	// echo $order_status; 
	// print_r($_GET);

	if($type=="traveller"){
		//update the order_status according to the current_status
		switch ($order_status) {
			case '1':
				$UPDATE_ORDER = "UPDATE orders SET order_status=2 WHERE order_no={$order_no};";
				$sql2 = mysqli_query($conn,$UPDATE_ORDER);
				header("location: ../vieworders.php?error=none");

				break;
			case '2':
				$UPDATE_ORDER = "UPDATE orders SET order_status=3 WHERE order_no={$order_no};";
				$sql2 = mysqli_query($conn,$UPDATE_ORDER);
				header("location: ../vieworders.php?error=none");
				break;
			case '3':
				header("location: ../vieworders.php?error=customertoupdate");
				# code...
				break;
			case '4':
				$UPDATE_ORDER = "UPDATE orders SET order_status=5 WHERE order_no={$order_no};";
				$sql2 = mysqli_query($conn,$UPDATE_ORDER);
				header("location: ../vieworders.php?error=none");	
				break;
			case '5':
				header("location: ../vieworders.php?error=customertoupdate");
				break;
			case '6':
				header("location: ../vieworders.php?error=delivered");
				break;
			
		}


	}else if($type=="customer"){
				switch ($order_status) {
			case '1':
				header("location: ../vieworders.php?error=travellertoupdate");
				break;
			case '2':
				header("location: ../vieworders.php?error=travellertoupdate");
				break;
			case '3':
				$UPDATE_ORDER = "UPDATE orders SET order_status=4 WHERE order_no={$order_no};";
				$sql2 = mysqli_query($conn,$UPDATE_ORDER);
				header("location: ../vieworders.php?error=none");
				break;
			case '4':
				header("location: ../vieworders.php?error=travellertoupdate");
				break;
			case '5':
				$UPDATE_ORDER = "UPDATE orders SET order_status=6 WHERE order_no={$order_no};";
				$sql2 = mysqli_query($conn,$UPDATE_ORDER);
				header("location: ../vieworders.php?error=none");				
				break;
			case '6':
				header("location: ../vieworders.php?error=delivered");
				break;
			
		}

	}



 ?>