<?php 
		
		session_start(); 
		$context=$_SESSION['type'];
		$username = $_SESSION['fname'].' '.$_SESSION['lname'];
		$unique_id = $_SESSION['unique_id'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Money</title>

	<link rel="stylesheet" href="styles/indexstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	
	<script src="https://kit.fontawesome.com/a076d05399.js" ></script>

</head>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check">
			<i class="fas fa-bars" id="btn"></i>
			<i class="fas fa-times" id="cancel"></i>
		</label>
		<h2>Travel Money</h2>
		<ul>

		<?php 
			if($context == 'traveller'){?>
			<li>
				<a><?php echo $username; ?></a>
			</li>
			<li>
				<a>Welcome <?php echo $_SESSION['type']; ?></a>
			</li>
			<li>
				<a href="dashboard.php">Traveller Dashboard</a>
				<!-- add post , modify order (current: accept->deliver)	-->

				<!-- Repeat: posts, orders, messages-->
			</li>
			<li>
				<a  href="viewposts.php">Traveller Posts</a>
			</li>
			<li>
				<a href="vieworders.php">Traveller Orders</a>
			</li>
			<li>
				<a href="users.php">Traveller Messages</a>
			</li>

		<?php } ?>

		<?php 
		    if($context == 'customer'){?>
			<li>
				<a>Welcome <?php echo $_SESSION['type']; ?> </a>
			</li>
			<li>
				<a href="dashboard.php">Customer Dashboard</a>
				<!--  modify order (current: delivered)	-->

				<!-- Repeat: posts, orders, messages-->
			</li>
			<li>
				<a  href="viewposts.php">Traveller Posts</a>
			</li>
			<li>
				<a href="vieworders.php">Customer Orders</a>
			</li>
			<li>
				<a href="users.php">Customer Messages</a>
				<!--add order -->
			</li>
		<?php } ?>

			<li>
				<a href="logout.php?user_id=<?php echo $unique_id ?>">Logout</a>
			</li>
		</ul>
	</nav>

		
