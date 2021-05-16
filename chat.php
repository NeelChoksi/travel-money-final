<?php 
		include('sidebar.php');

		$context=$_SESSION['type'];
		$username = $_SESSION['fname'].' '.$_SESSION['lname'];
?>	

	<div class="wrapper">
		<section class="chat-area">
			<header>
				<div class="content">
					<a href="users.php" ><i class="fas fa-arrow-left"></i></a>
					<img src="#" alt="" />
					<div class="details">
						<span>Username of other person</span>
						<p> Active now</p>
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

</body>
</html>