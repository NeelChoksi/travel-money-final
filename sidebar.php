<?php 
		session_start(); 
		$context=$_SESSION['current_user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>

</head>
<body>
	<nav>
		<a href="#">Travel Money</a>
		<ul>
			<li>
				<a href="dashboard.php">Dashboard</a>
			</li>
			
		<?php 
			if($context == 'traveller'){?>
			<li>
				<?php echo $_SESSION['current_user']; ?>
			</li>
			<li>
				<a href="#">Traveller Dashboard</a>
				<!-- add post , modify order (current: accept->deliver)	-->

				<!-- Repeat: posts, orders, messages-->
			</li>
			<li>
				<a href="#">Traveller Posts</a>
			</li>
			<li>
				<a href="#">Traveller Orders</a>
			</li>
			<li>
				<a href="#">Traveller Messages</a>
			</li>

		<?php } ?>

		<?php 
		    if($context == 'customer'){?>
			<li>
				<?php echo $_SESSION['current_user']; ?>
			</li>
			<li>
				<a href="#">Customer Dashboard</a>
				<!--  modify order (current: delivered)	-->

				<!-- Repeat: posts, orders, messages-->
			</li>
			<li>
				<a href="#">Customer Posts</a>
			</li>
			<li>
				<a href="#">Customer Orders</a>
			</li>
			<li>
				<a href="#">Customer Messages</a>
				<!--add order -->
			</li>
		<?php } ?>

			<li>
				<a href="logout.php">Logout</a>
			</li>
		</ul>
	</nav>

		
