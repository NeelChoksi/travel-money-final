<?php 

	include("sidebar.php");
	$context=$_SESSION['type'];
	if(!isset($_SESSION['unique_id'])){
			header('location: login.php');
		}
?>
	
	<h2 class="heading-user">My orders</h2>
	<div class="error-txt-orders">
		<?php
			if(isset($_GET['error'])){

			$error = $_GET['error'];
			if($error!='none'){
				echo $error;
			}
		} 

		?>	
	</div>
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

			<h2 class="heading-user">Orders</h2>
			<div id="orders_display_box" class="functional-cards">
				
			</div>	
		<?php }else{ ?>

			<h2 class="heading-user">Orders</h2>
				<div id="orders_display_box" class="functional-cards">
					
				</div>	
			
				<?php } ?>					
		

			
	</div>
	<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>
	<script>
		

const ordersList = document.querySelector("#orders_display_box");


window.addEventListener("load", ()=>{
	let xhr = new XMLHttpRequest();
	xhr.open("GET","includes/vieworders.inc.php",true);//async = true
	xhr.onload = () =>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				 // console.log(data);
				ordersList.innerHTML = data;
				
			}
		}
	}
	xhr.send();
});

	</script>
</body>
</html>