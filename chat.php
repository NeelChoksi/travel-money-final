<?php 
		include('sidebar.php');
		if(!isset($_SESSION['unique_id'])){
			header('location: login.php');
		}
		$sender_id = $_SESSION['unique_id'];

		include_once "includes/config.php";

		$context=$_SESSION['type'];
		$username = $_SESSION['fname'].' '.$_SESSION['lname'];
?>	

	<div class="wrapper">
		<section class="chat-area">
			<header>
				<?php 
					$id_of_clicked = mysqli_real_escape_string($conn,$_GET['user_id']);
					$FETCH_USER = "SELECT * FROM users WHERE unique_id={$id_of_clicked}";
					$sql = mysqli_query($conn,$FETCH_USER);

					if(mysqli_num_rows($sql)>0){
						$row = mysqli_fetch_assoc($sql);
					}
				 ?>
				<div class="content">
					<a href="users.php" ><i class="fas fa-arrow-left"></i></a>
					<img src="includes/images/<?php echo $row['img']; ?>" alt="" />
					
					<div class="details">
						<span><?php echo $row['first_name']." ".$row['last_name']; ?></span>
						<p> <?php echo $row['user_status']; ?></p>
					</div>
				</div>	
			</header>	
			<div class="chat-box">
				
				
				

			</div>	
			<?php if($context=='customer'){?>
				<div class="add-order">
					<a href="addorder.php?traveller_id=<?php echo $id_of_clicked; ?>">Place Order</a>
				</div>

			<?php } ?>

			<form action="#" class="typing-area">
				<input type="text" name="message" id="inputtext" placeholder="Type a message">
				<input type="hidden" name="sender_id" value = "<?php echo $sender_id ?>" >
				<input type="hidden" name="receiver_id" value = "<?php echo $id_of_clicked?>">
				<button><i class="fab fa-telegram-plane"></i></button>
			</form>		
		</section>
	</div>
	<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>
	<script src="javascript/chat.js"></script>

</body>
</html>