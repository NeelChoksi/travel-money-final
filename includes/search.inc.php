<?php
	include_once "config.php";
	$output= "";
	$searchTerm = mysqli_real_escape_string($conn,$_POST['searchTerm']);
	$SEARCH_QUERY="SELECT * FROM users WHERE first_name LIKE '%{$searchTerm}%' OR last_name LIKE '%{$searchTerm}%'";


	$sql = mysqli_query($conn,$SEARCH_QUERY);

	if(mysqli_num_rows($sql)>0){
		while($row=mysqli_fetch_assoc($sql)){

			$output .='
						<a href="chat.php">
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
}else{
		$output = "No users found";
	}

	echo $output;

?>