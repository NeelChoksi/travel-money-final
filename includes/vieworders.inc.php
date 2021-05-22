<?php 
	session_start();
	include_once "config.php";
	$context=$_SESSION['type'];
	$output = "";
	$unique_id = $_SESSION['unique_id'];


	if($context == 'traveller'){
		$FETCH_ALL_ACITVE_ORDERS="SELECT * FROM orders LEFT JOIN users ON orders.customer_id=users.unique_id AND traveller_id={$unique_id} LEFT JOIN orderstatus ON orders.order_status=orderstatus.id ORDER BY order_no DESC;";
		$sql = mysqli_query($conn,$FETCH_ALL_ACITVE_ORDERS)	;

		if(mysqli_num_rows($sql) ==0){
			echo "no orders in the db for this traveller.";
		}else{
			while($row=mysqli_fetch_assoc($sql)){
				$output .='
					<div class="card" >
					<h1>Order#'. $row['order_no'] . '</h1>
					<a class="proceed" href="chat.php?user_id='. $row['customer_id'] .' ">
						Customer: '. $row['first_name']." ".$row['last_name'] . '
						
					</a>
					<p>
						Pickup:
						'. $row['pickup_address']." (".$row['pickup_date'].")" . '

					</p>
					<p>
						Deliver:
						'. $row['delivery_address']." (".$row['delivery_date'].")" . '

					</p>
					<p>
						Size: h x w x d 
						'. $row['height']."(cm)x".$row['width']."(cm)x".$row['depth']."(cm)"  .'

					</p>
					<p>
						Price:Rs.
						'. $row['price'] . '

					</p>
					<p>
						Weight(in kg):
						'. $row['weight'] . '
					</p>
					<p class="Status'. $row['id'] . '">
						Status:
						'. $row['state'] . '
					</p>
					<p class="'. $row['id'] . '">
						Action to be taken:
						'. $row['action'] . '
					</p>

					<a class="proceed" href="includes/updateorder.inc.php?order_no='.$row['order_no'].'&order_status='. $row['id'] . '">
						Update Status
					</a>
				</div>
				';
			}
		}
		echo $output;

	}else if($context == 'customer'){
		$FETCH_ALL_ACITVE_ORDERS="SELECT * FROM orders LEFT JOIN users ON orders.traveller_id=users.unique_id AND customer_id={$unique_id} LEFT JOIN orderstatus ON orders.order_status=orderstatus.id ORDER BY order_no DESC;";
		$sql = mysqli_query($conn,$FETCH_ALL_ACITVE_ORDERS)	;
		if(mysqli_num_rows($sql) ==0){
			echo "no orders in the db";
		}else{
			while($row=mysqli_fetch_assoc($sql)){
				$output .='
					<div class="card" >
					<h1>Order#'. $row['order_no'] . '</h1>
					<a class="proceed" href="chat.php?user_id='. $row['traveller_id'] .' ">
						Traveller: '. $row['first_name']." ".$row['last_name'] . '
						
					</a>
					<p>
						Pickup:
						'. $row['pickup_address']." (".$row['pickup_date'].")" . '

					</p>
					<p>
						Deliver:
						'. $row['delivery_address']." (".$row['delivery_date'].")" . '

					</p>
					<p>
						Size: h x w x d 
						'. $row['height']."(cm)x".$row['width']."(cm)x".$row['depth']."(cm)"  .'

					</p>
					<p>
						Price:Rs.
						'. $row['price'] . '

					</p>
					<p>
						Weight(in kg):
						'. $row['weight'] . '

					</p>
					<p class="Status'. $row['id'] . '">
						Status:
						'. $row['state'] . '
					</p>
					<p>
						Action to be taken:
						'. $row['action'] . '
					</p>
					<a class="proceed" href="includes/updateorder.inc.php?order_no='. $row['order_no'] . '&order_status='. $row['id'] . '">
						Update Status
					</a>
				</div>
				';
			}
		}
		echo $output;

	}

	

?>