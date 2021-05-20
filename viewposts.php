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

			<h2 class="heading-user">Active Posts</h2>
				<div id="posts_display_box" class="functional-cards">
					<div class="card" id=<?php echo $row['post_id']; ?> >
						<h1>Post ID</h1>
						<p>
							Start Location(Start Date): 
						</p>
						<p>
							End Location(End Date):
						</p>
						<p>
							Proposed Price:
						</p>
						<p>
							Available Weight(in kg):
						</p>
						<a class="proceed" style="border-color: red; color:red; background: red; color:#fff;">
							Delete Post
						</a>
					</div>
				</div>	
			<h2 class="heading-user">Previous posts</h2>
				<div id="posts_display_box" class="functional-cards">
					<div class="card" id=<?php echo $row['post_id']; ?> >
						<h1>Post ID</h1>
						<p>
							Start Location(Start Date): 
						</p>
						<p>
							End Location(End Date):
						</p>
						<p>
							Proposed Price:
						</p>
						<p>
							Available Weight(in kg):
						</p>
						
					</div>
				</div>

				

				<?php }else{ ?>
				<div class="functional-cards">		
				<div class="card" id=<?php echo $post_id; ?> >
					<h1>Name Of Traveller</h1>
					<p>
						Start Location(Start Date): 
					</p>
					<p>
						End Location(End Date):
					</p>
					<p>
						Proposed Price:
					</p>
					<p>
						Available Weight(in kg):
					</p>
					<a href="chat.php?user_id=<?php echo $row['unique_id']; ?> " class="proceed traveller_addpost">
						Contact Traveller
					</a>
				</div>			
				<?php } ?>					
		

			</div>
			
	</div>
	<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>
	<script src="javascript/viewposts.js"></script>
</body>
</html>