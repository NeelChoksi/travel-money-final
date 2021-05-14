<?php
	include('sidebar.php');
	$context=$_SESSION['current_user'];

?>


	<div>
		<h1>Dashboard</h1>
		
		<?php 
			if($context == 'traveller'){?>
				<h2>Traveller Dashboard</h2>
				<?php
					include('traveller/traveller-dashboard.php');
				?>
		<?php } ?>
		


		<?php 

		     if($context == 'customer'){?>
				<h2>Customer Dashboard</h2>	
				<?php
					include('customer/customer-dashboard.php');
				?>	
		<?php } ?>


	</div>
</body>
</html>