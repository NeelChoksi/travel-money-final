<?php
	include('sidebar.php');

	$context=$_SESSION['type'];
	if(!isset($_SESSION['unique_id'])){
			header('location: login.php');
	}
?>


	<div class="dashboard">
		
		<?php 
			if($context == 'traveller'){?>
				<?php
					include('traveller/traveller-dashboard.php');
				?>
		<?php } ?>
		


		<?php 

		     if($context == 'customer'){?>
				<?php
					include('customer/customer-dashboard.php');
				?>	
		<?php } ?>


	</div>
</body>
</html>