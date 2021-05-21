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
					<label for="select_post_id">Select the Post of Traveller</label>
					<select name="post_id_selected" id="select_post_id" required>
						<option disabled selected value> -- select post of traveller -- </option>
						<?php 
							$traveller_id=$_GET['traveller_id'];
							// echo $traveller_id;
							// session_start();
							include_once "includes/config.php";
							// $context=$_SESSION['type'];
							$output = "";
							$FETCH_ALL_ACITVE_POSTS="SELECT * FROM posts WHERE unique_id={$traveller_id} AND post_status='Active'";

							$sql = mysqli_query($conn,$FETCH_ALL_ACITVE_POSTS)	;

							if(mysqli_num_rows($sql) ==0){
								echo "no posts in the db for this traveller.";
							}else{
							while($row=mysqli_fetch_assoc($sql)){
								$output .='
									<option value ="'. $row['post_id'] .'">
									<p>
										'. $row['start_location']." (".$row['start_date'].")" . '
									</p>
									<p>
										'. $row['end_location']." (".$row['end_date'].")" . '
									</p>
									<p>
										'. $row['proposed_price']. '
									</p>
									<p>
										'. $row['weight']."kg" . '
									</p>
									</option>

										';
								}
								echo $output; 
							}
						?>
					</select>		

				</div>
				<input type="hidden" name="traveller_id" value="<?php echo $traveller_id?>" required>
				<div class="name-details">
					<div class="field input">
						<label>Pickup Address</label>
						<input type="text" name="pickup_address" placeholder="Pickup Address.." required>
					</div>
					<div class="field input">
						<label>Delivery Address</label>
						<input type="text" name="delivery_address" placeholder="Delivery Address.." required>
					</div>
				</div>
				<div class="name-details">
					<div class="field input">
						<label>Pickup Date</label>
						<input type="date" name="pickup_date" required>
					</div>
					<div class="field input">
						<label>Delivery Date</label>
						<input type="date" name="delivery_date" required>
					</div>
				</div>
				<div class="select-field field">
					<label for="typeOfFragile">Fragile/Not</label>
					<select name="fragile" id="typeOfFragile" required>
						  <option value="Fragile">Not Fragile</option>
						  <option value="Not Fragile">Fragile</option>
					</select>
				</div>
				<div class="name-details">
					<div class="field input">
						<label>Proposed Price</label>
						<input type="text" name="proposed_price" placeholder="Proposed Price" required>
					</div>
					<div class="field input">
						<label>Parcel Weight in kg</label>
						<input type="text" name="Parcel_weight" placeholder="Parcel weight in kgs" required>
					</div>
					
				</div>

				<div class="name-details">
					<div class="field input">
						<label>Parcel Height(in cm)</label>
						<input type="text" name="Parcel_height" placeholder="Parcel Height(in cm)" required>
					</div>
					<div class="field input">
						<label>Parcel Width(in cm)</label>
						<input type="text" name="Parcel_width" placeholder="Parcel Width(in cm)" required>
					</div>
					<div class="field input">
						<label>Parcel Depth(in cm)</label>
						<input type="text" name="Parcel_depth" placeholder="Parcel Depth(in cm)" required>
					</div>
				</div>

					<div class="field submit_order ">
						<input class="proceed" type="submit" name="submit_order" value="Place Order" >
					</div>

				
			</form>
		</section>
	</div>
	<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>
	<script src="javascript/addorder.js">
	</script>

</body>
</html>

<?php 
	
	
?>