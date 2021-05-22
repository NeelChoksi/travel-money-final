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
			<!-- <div class="search">
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
				
			</div> -->

			

		<?php if($context=="traveller"){?>

			<h2 class="heading-user">Your Posts</h2>
				<div id="traveller_active_posts_display_box" class="functional-cards" >

					
				</div>	
		<?php }else{ ?>
			<h2 class="heading-user">Traveller Posts</h2>

			<div id="traveller_active_posts_display_box" class="functional-cards">		
							
			</div>

				<?php } ?>					

				
	</div>
	<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>
	<script>
		

const postsList = document.querySelector("#traveller_active_posts_display_box");

const loadActiveTravellerBTN =document.querySelector("#loadActiveTraveller");

// console.log(postsList);
// postsList.textContent="hi";

window.addEventListener("load", ()=>{
	let xhr = new XMLHttpRequest();
	xhr.open("GET","includes/viewposts.inc.php",true);//async = true
	xhr.onload = () =>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				 // console.log(data);
				postsList.innerHTML = data;
				
			}
		}
	}
	xhr.send();
});
	</script>
</body>
</html>