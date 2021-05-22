<?php 
	session_start();
	include_once "config.php";
	$context=$_SESSION['type'];
	$output = "";
	$unique_id = $_SESSION['unique_id'];


	if($context == 'traveller'){
		$FETCH_ALL_ACITVE_POSTS="SELECT * FROM posts WHERE 	unique_id={$unique_id} ";
		$sql = mysqli_query($conn,$FETCH_ALL_ACITVE_POSTS)	;

		if(mysqli_num_rows($sql) ==0){
			echo "no posts in the db for this traveller.";
		}else{
			while($row=mysqli_fetch_assoc($sql)){
				$output .='
					<div class="card">
						<h1>
								'. $row['post_id'] . '

						<span class='. $row['post_status']."Post" . '>
								'. $row['post_status'] . '
						</span>
						</h1>
						<p>
							'. $row['start_location']." (".$row['start_date'].")" . '
							Start Location(Start Date): 
						</p>
						<p>
							'. $row['end_location']." (".$row['end_date'].")" . '
							End Location(End Date):
						</p>
						<p>
							'. $row['proposed_price']. '
							Proposed Price:
						</p>
						<p>
							'. $row['weight']."kg" . '
							Available Weight(in kg):
						</p>
						<a class="proceed" style="border-color: red; color:red; background: red; color:#fff;" href="includes/deletepost.inc.php?post_id='. $row['post_id'] .'">
							Deactivate Post
						</a>
					</div>
				';
			}
		}
		echo $output;

	}else if($context == 'customer'){
		$FETCH_ALL_ACITVE_POSTS="SELECT * FROM posts LEFT JOIN users ON posts.unique_id=users.unique_id AND posts.post_status='Active'";
		$sql = mysqli_query($conn,$FETCH_ALL_ACITVE_POSTS)	;

		if(mysqli_num_rows($sql) ==0){
			echo "no travellers in the db";
		}else{
			while($row=mysqli_fetch_assoc($sql)){
				$output .='
					<div class="card" >
						<h1>
							'. $row['first_name']." ".$row['last_name'] .'	
						</h1>
						<p>
							'. $row['start_location']." (".$row['start_date'].")" . '
							Start Location(Start Date): 
						</p>
						<p>
							'. $row['end_location']." (".$row['end_date'].")" . '
							End Location(End Date):
						</p>
						<p>
							'. $row['proposed_price']. '
							Proposed Price:
						</p>
						<p>
							'. $row['weight']."kg" . '
							Available Weight(in kg):
						</p>

						<a href="chat.php?user_id='. $row['unique_id'] . '" class="proceed traveller_addpost">
							Contact Traveller
						</a>
					</div>	
				';
			}
		}
		echo $output;

	}

	

?>