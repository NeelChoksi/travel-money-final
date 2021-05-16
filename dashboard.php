<?php
	include('sidebar.php');
	$context=$_SESSION['type'];

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