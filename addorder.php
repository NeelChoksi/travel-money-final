<?php 
	include('sidebar.php');
	if(!isset($_SESSION['unique_id'])){
			header('location: login.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="styles/indexstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	
	<script src="https://kit.fontawesome.com/a076d05399.js" ></script>


</head>
<body>
	

	<div class="wrapper">
		<section class="form signup">
			<header>Add Order</header>
			<form action="#">
				<div class="error-txt">
					This is the error message
				</div>
				<div class="traveller_posts_fetched">
					
				</div>
				<div class="name-details">
					<div class="field input">
						<label>Pickup Address</label>
						<input type="text" name="pickup_address" placeholder="Pickup Address..">
					</div>
					<div class="field input">
						<label>Delivery Address</label>
						<input type="text" name="delivery_address" placeholder="Delivery Address..">
					</div>
				</div>
				<div class="name-details">
					<div class="field input">
						<label>Pickup Date</label>
						<input type="date" name="pickup_date" >
					</div>
					<div class="field input">
						<label>Delivery Date</label>
						<input type="date" name="delivery_date" placeholder="Last Name..">
					</div>
				</div>
				<div class="name-details">
					<div class="field input">
						<label>Proposed Price</label>
						<input type="text" name="proposed_price" placeholder="Proposed Price">
					</div>
					<div class="field input">
						<label>Parcel Weight in kg</label>
						<input type="text" name="Parcel_weight" placeholder="Parcel weight in kgs">
					</div>
					
				</div>

				<div class="name-details">
					<div class="field input">
						<label>Parcel Height(in cm)</label>
						<input type="text" name="proposed_price" placeholder="Parcel Height(in cm)">
					</div>
					<div class="field input">
						<label>Parcel Width(in cm)</label>
						<input type="text" name="Parcel_weight" placeholder="Parcel Width(in cm)">
					</div>
					<div class="field input">
						<label>Parcel Depth(in cm)</label>
						<input type="text" name="Parcel_weight" placeholder="Parcel Depth(in cm)">
					</div>
				</div>

					<div class="field submit_order">
						<input type="submit" name="submit_order" value="Place Order" >
					</div>

				
			</form>
		</section>
	</div>
	<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>
</body>
</html>

<?php 
	
	
?>