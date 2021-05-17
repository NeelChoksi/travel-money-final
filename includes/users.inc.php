<?php 
	session_start();
	include_once "config.php";
	$context=$_SESSION['type'];
	$output = "";


	if($context == 'traveller'){
		$FETCH_ALL_CUSTOMERS="SELECT * FROM users WHERE type='customer'";
		$sql = mysqli_query($conn,$FETCH_ALL_CUSTOMERS)	;

		if(mysqli_num_rows($sql) ==0){
			echo "no customers in the db";
		}else{
			while($row=mysqli_fetch_assoc($sql)){
				$output .='
					<a href="chat.php?user_id='.$row['unique_id'].'">
						<div class="content">
							<img src="includes/images/'. $row['img'] . '" alt="profile img" />
							<div class="details">
								<span>
									'. $row['first_name']." ".$row['last_name'] . '
								</span>
								<p> Latest message</p>
							</div>
						</div>
						<div class="status-dot">
							<i class="fas fa-circle"></i>
						</div>
					</a>		
				';
			}
		}
		echo $output;

	}else if($context == 'customer'){
		$FETCH_ALL_TRAVELLERS = "SELECT * FROM users WHERE type='traveller'";
		$sql2= mysqli_query($conn,$FETCH_ALL_TRAVELLERS);
		if(mysqli_num_rows($sql2) ==0){
			echo "no travellers in the db";
		}else{
			while($row=mysqli_fetch_assoc($sql2)){
				$output .='
					<a href="chat.php">
						<div class="content">
							<img src="includes/images/'. $row['img'] . '" alt="profile img" />
							<div class="details">
								<span>
									'. $row['first_name'] . '." ".'. $row['last_name'] . '
								</span>
								<p> Latest message</p>
							</div>
						</div>
						<div class="status-dot">
							<i class="fas fa-circle"></i>
						</div>
					</a>
						
				';
			}
		}
		echo $output;

	}

	

?>