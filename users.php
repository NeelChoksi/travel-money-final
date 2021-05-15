<?php 
		include('sidebar.php');

		$context=$_SESSION['current_user'];
		$username = $_SESSION['username'];

?>	
	<h2 class="heading-user">Messages</h2>

	<div class="wrapper">
		<section class="users">
			<header>
				<div class="content">
					<img src="#" alt="" />
					<div class="details">
						<span><?php echo $username; ?></span>
						<p> Active now</p>
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
				<a href="chat.php">
					<div class="content">
						<img src="#" alt="" />
						<div class="details">
							<span>
								Username of the user online
							</span>
							<p> Latest message</p>
						</div>
					</div>
					<div class="status-dot">
						<i class="fas fa-circle"></i>
					</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="#" alt="" />
						<div class="details">
							<span>
								Username of the user online
							</span>
							<p> Latest message</p>
						</div>
					</div>
					<div class="status-dot">
						<i class="fas fa-circle"></i>
					</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="#" alt="" />
						<div class="details">
							<span>
								Username of the user online
							</span>
							<p> Latest message</p>
						</div>
					</div>
					<div class="status-dot">
						<i class="fas fa-circle"></i>
					</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="#" alt="" />
						<div class="details">
							<span>
								Username of the user online
							</span>
							<p> Latest message</p>
						</div>
					</div>
					<div class="status-dot">
						<i class="fas fa-circle"></i>
					</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="#" alt="" />
						<div class="details">
							<span>
								Username of the user online
							</span>
							<p> Latest message</p>
						</div>
					</div>
					<div class="status-dot">
						<i class="fas fa-circle"></i>
					</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="#" alt="" />
						<div class="details">
							<span>
								Username of the user online
							</span>
							<p> Latest message</p>
						</div>
					</div>
					<div class="status-dot">
						<i class="fas fa-circle"></i>
					</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="#" alt="" />
						<div class="details">
							<span>
								Username of the user online
							</span>
							<p> Latest message</p>
						</div>
					</div>
					<div class="status-dot">
						<i class="fas fa-circle"></i>
					</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="#" alt="" />
						<div class="details">
							<span>
								Username of the user online
							</span>
							<p> Latest message</p>
						</div>
					</div>
					<div class="status-dot">
						<i class="fas fa-circle"></i>
					</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="#" alt="" />
						<div class="details">
							<span>
								Username of the user online
							</span>
							<p> Latest message</p>
						</div>
					</div>
					<div class="status-dot">
						<i class="fas fa-circle"></i>
					</div>
				</a>
			</div>
			
		</section>
	</div>
	<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>

</body>
</html>