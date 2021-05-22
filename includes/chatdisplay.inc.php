<?php 
	session_start();
	if(isset($_SESSION['unique_id'])){
		include_once "config.php";
		$sender_id = mysqli_real_escape_string($conn,$_POST['sender_id']);
		$receiver_id = mysqli_real_escape_string($conn,$_POST['receiver_id']);
		$output = '';

		$GET_MESSAGES = "SELECT * FROM messages LEFT JOIN users ON users.unique_id=messages.receiver_id WHERE (sender_id={$sender_id} AND receiver_id={$receiver_id}) OR (sender_id={$receiver_id} AND receiver_id={$sender_id}) ORDER BY msg_id ;";
		$query = mysqli_query($conn,$GET_MESSAGES);

		if(mysqli_num_rows($query)>0){
			while($row = mysqli_fetch_assoc($query)){
				if($row['sender_id']=== $sender_id){
					$output .='
						<div class="chat outgoing">
							<div class="details">
								<p>'.$row['message'] .'</p>
							</div>
						</div>
					';
				}else if($row['receiver_id']===$sender_id){
					$output .='
						<div class="chat incoming">
							<img src="includes/images/'. $row['img'] .'" alt="" />

							<div class="details">
								<p>'. $row['message'] .'</p>
							</div>
						</div>
					';

				}
			} 
			echo $output;

		}



	
	}else{
		header("location: ../login.php");
	}


?>