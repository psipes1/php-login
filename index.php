<?php
include_once 'header.php';

?>

<section class="container">
	<br>
		<h1 style="text-align: center;">Welcome to the Landing Page</h1>

		<?php
			if(isset($_SESSION['u_id'])){
				header("Location: profile.php");

    
			}
		?>

	
</section>

<?php

include_once 'footer.php';
?>


