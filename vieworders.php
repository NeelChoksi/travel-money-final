<?php 

	include("sidebar.php");
	$context=$_SESSION['type'];
	if(!isset($_SESSION['unique_id'])){
			header('location: login.php');
		}
?>
<?php 
	if($context=="traveller"){?>
	<h2 class="heading-user">My Posts</h2>

	<?php }else{ ?>
	<h2 class="heading-user">Traveller Posts</h2>
	
	<?php } ?>	

	<div class="wrapper">
			<div class="search">
				<span class="text">
					Select <?php if($context=='customer'){
						echo 'Traveller';
					}else{
						echo 'Customer';
					}?> to communicate
				</span>
				<div class="search-bar">
					<input  type="text" placeholder="Enter start_location..">
					<input  type="text" placeholder="Enter end_location..">
					<button><i class="fas fa-search"></i></button>	
				</div>
				
			</div>

			

		<?php if($context=="traveller"){?>

			<h2 class="heading-user">Active Orders</h2>
				<div id="posts_display_box" class="functional-cards">
					<div class="card" id=<?php echo $row['post_id']; ?> >
						<h1>Order ID</h1>
						<p>
							Customer Name
							Message Link
						</p>
						<p>
							Customer ID
						</p>
						<p>
							Start Location(Start Date): 
						</p>
						<p>
							End Location(End Date):
						</p>
						<p>
							Size: l x w x h 
						</p>
						<p>
							Price:
						</p>
						<p>
							Weight(in kg):
						</p>
						<p>
							Status:
						</p>

						<a class="proceed">
							Update Status
						</a>
					</div>
				</div>	
			<h2 class="heading-user">Previous Orders</h2>
				<div id="posts_display_box" class="functional-cards">
					<div class="card" id=<?php echo $row['post_id']; ?> >
						<h1>Order ID</h1>
						<p>
							Customer Name
							Message Link
						</p>
						<p>
							Customer ID
						</p>
						<p>
							Start Location(Start Date): 
						</p>
						<p>
							End Location(End Date):
						</p>
						<p>
							Size: l x w x h 
						</p>
						<p>
							Price:
						</p>
						<p>
							Weight(in kg):
						</p>
						<p>
							Status:Delivered
						</p>

						
					</div>
				</div>

				

				<?php }else{ ?>
				<div class="functional-cards">		

			<h2 class="heading-user">Active Orders</h2>
				<div id="posts_display_box" class="functional-cards">
					<div class="card" id=<?php echo $row['post_id']; ?> >
						<h1>Order ID</h1>
						<p>
							Traveller Name
							Message Link
						</p>
						<p>
							Traveller ID
							Message Link
						</p>
						<p>
							Start Location(Start Date): 
						</p>
						<p>
							End Location(End Date):
						</p>
						<p>
							Size: l x w x h 
						</p>
						<p>
							Price:
						</p>
						<p>
							Weight(in kg):
						</p>
						<p>
							Status:
						</p>

						<a class="proceed">
							Update Status
						</a>
					</div>
				</div>	
			<h2 class="heading-user">Previous Orders</h2>
				<div id="posts_display_box" class="functional-cards">
					<div class="card" id=<?php echo $row['post_id']; ?> >
						<h1>Order ID</h1>
						<p>
							Traveller Name
							Message Link
						</p>
						<p>
							Traveller ID
							Message Link
						</p>
						<p>
							Start Location(Start Date): 
						</p>
						<p>
							End Location(End Date):
						</p>
						<p>
							Size: l x w x h 
						</p>
						<p>
							Price:
						</p>
						<p>
							Weight(in kg):
						</p>
						<p>
							Status:Delivered
						</p>

					
					</div>
				</div>
				<?php } ?>					
		

			</div>
			
	</div>
	<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>
	<script src="javascript/vieworders.js"></script>
</body>
</html>