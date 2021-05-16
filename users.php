<?php 
		include('sidebar.php');

		if(!isset($_SESSION['unique_id'])){
			header('location: login.php');
		}

		include_once "includes/config.php";

		$context=$_SESSION['type'];
		$username = $_SESSION['fname'].' '.$_SESSION['lname'];
		$unique_id = $_SESSION['unique_id'];

		$FETCH_USER = "SELECT * FROM users WHERE unique_id={$unique_id}";
		$sql = mysqli_query($conn,$FETCH_USER);

		if(mysqli_num_rows($sql)>0){
			$row = mysqli_fetch_assoc($sql);
		}


?>	
	<h2 class="heading-user">Messages</h2>

	<div class="wrapper">
		<section class="users">
			<header>
				<div class="content">
					<img src="includes/images/<?php echo $row['img']; ?>" alt="" />
					<div class="details">
						<span><?php echo $username; ?></span>
						<p> <?php echo $row['user_status']; ?></p>
					</div>
				</div>	
			</header>	
			<div class="search">
				<span class="text">
					Select <?php if($context=='customer'){
						echo 'Traveller';
					}else{
						echo 'Customer';
					}?> to communicate
				</span>
				<div class="search-bar">
					<input  type="text" placeholder="Enter name..">
					<button><i class="fas fa-search"></i></button>	
				</div>
				
			</div>

			<div class="users-list">
			</div>
			
		</section>
	</div>
	<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>
	<script src="javascript/users.js"></script>
</body>
</html>