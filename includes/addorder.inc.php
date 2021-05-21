<?php 

	session_start();
	include ('config.php');
	$customer_id= $_SESSION['unique_id'];
	$post_id=mysqli_real_escape_string($conn,$_POST['post_id_selected']);
	$traveller_id=mysqli_real_escape_string($conn,$_POST['traveller_id']);
	$pickup_address=mysqli_real_escape_string($conn,$_POST['pickup_address']);
	$delivery_address=mysqli_real_escape_string($conn,$_POST['delivery_address']);
	$pickup_date=mysqli_real_escape_string($conn,date_format(date_create($_POST['pickup_date']), 'Y-m-d'));
	$delivery_date=mysqli_real_escape_string($conn,date_format(date_create($_POST['delivery_date']), 'Y-m-d'));
	$price=mysqli_real_escape_string($conn,$_POST['proposed_price']);
	$fragility=mysqli_real_escape_string($conn,$_POST['fragile']);
	$Parcel_weight=mysqli_real_escape_string($conn,$_POST['Parcel_weight']);
	$Parcel_height=mysqli_real_escape_string($conn,$_POST['Parcel_height']);
	$Parcel_width=mysqli_real_escape_string($conn,$_POST['Parcel_width']);
	$Parcel_depth=mysqli_real_escape_string($conn,$_POST['Parcel_depth']);
	
	$status= "To be confirmed by Traveller";

	// echo "$customer_id";
	// echo "\n";
	// echo "$post_id";
	// echo "\n";
	// echo "$traveller_id";
	// echo "\n";
	
	// echo "$pickup_address";
	// echo "\n";
	
	// echo "$delivery_address";
	// echo "\n";
	
	// echo "$pickup_date";
	// echo "\n";
	
	// echo "$delivery_date";
	// echo "\n";
	
	// echo "$price";
	// echo "\n";
	
	// echo "$fragility";
	// echo "\n";
	
	// echo "$Parcel_weight";
	// echo "\n";
	
	// echo "$Parcel_height";
	// echo "\n";
	
	// echo "$Parcel_width";
	// echo "\n";
	
	// echo "$Parcel_depth";
	// echo "\n";
	
	// echo "$status";
	// echo "\n";


	if(!empty($customer_id) &&!empty($post_id) &&!empty($traveller_id) &&!empty($pickup_address)&&!empty($delivery_address)&&!empty($pickup_date)&&!empty($delivery_date)&&!empty($price)&&!empty($Parcel_weight)&&!empty($Parcel_height)&&!empty($Parcel_width)&&!empty($Parcel_depth)){

		$INSERT_ORDER = "INSERT INTO orders(post_id,customer_id,traveller_id,pickup_address,delivery_address,pickup_date,delivery_date,price,fragility,weight,height,width,depth,order_status) VALUES ({$post_id},{$customer_id},{$traveller_id},'{$pickup_address}','{$delivery_address}','$pickup_date','$delivery_date','{$price}','{$fragility}','{$Parcel_weight}','{$Parcel_height}','{$Parcel_width}','{$Parcel_depth}','{$status}');";

		$sql = mysqli_query($conn,$INSERT_ORDER);

		if($sql){
			$UPDATE_POST = "UPDATE posts SET post_status='Not Active' WHERE post_id={$post_id};";
			$sql2 = mysqli_query($conn,$UPDATE_POST);
			if($sql2){
				echo 1;
			}
		}else{
			echo "order not created";
		}


	}else{
		echo "Fill All the fields";
	}


 ?>