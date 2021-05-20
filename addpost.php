<?php 
	include('sidebar.php');

	if(!isset($_SESSION['unique_id'])){
			header('location: login.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signup</title>
	<link rel="stylesheet" href="styles/indexstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	
	<script src="https://kit.fontawesome.com/a076d05399.js" ></script>




</head>
<body>


	<div class="wrapper">
		<section class="form signup">
			<header>Add Post</header>
			<form action="#" class="form" enctype="multipart/form-data">
				<div class="error-txt">
					This is the error message
				</div>
				<div class="name-details">
					<div class="field input">
						<label>Start Location(City/Town)</label>
						<input type="text" name="start_loc" placeholder="Start Location.."required>
					</div>
					<div class="field input">
						<label>End Location(City/Town)</label>
						<input type="text" name="end_loc" placeholder="End Location.."required>
					</div>
				</div>
				<div class="login-details">
				
					<div class="field input">
						<label>Start Date</label>
						<input type="date" name="start_date" required>
					</div>
					<div class="field input">
						<label>End Date</label>
						<input type="date" name="end_date" required>
					</div>
				</div>
				<div class="login-details">
				
					<div class="field input">
						<label>Available weight(in kg)</label>
						<input type="number" name="available_weight" placeholder="Available weight(in kg)" required>
					</div>
					<div class="field input">
						<label>Proposed Price(in Rs)</label>
						<input type="number" name="proposed_price" placeholder="Proposed Price(in Rs)" required>
					</div>
				</div>

			
					<div class="field submit-btn submit_post">
						<input type="submit" name="submit_post" value="Create Post" >
					</div>
				
				
			</form>
		</section>
	</div>
	<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>
	<script src="javascript/addpost.js"></script>

</body>
</html>