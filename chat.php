<?php 
		include('sidebar.php');
		if(!isset($_SESSION['unique_id'])){
			header('location: login.php');
		}

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
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor, sit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias!
						</p>
					</div>
				</div>
				<div class="chat incoming">
					<img src="#" alt="" />

					<div class="details">
						<p>Lorem ipsum dolor, sit. Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Sunt, nemo pariatur voluptas!</p>
					</div>
				</div>

			</div>	
			<?php if($context=='customer'){?>
				<div class="add-order">
					<a href="addorder.php">Place Order</a>
				</div>

			<?php } ?>

			<form action="#" class="typing-area">
				<input type="text" placeholder="Type a message">
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