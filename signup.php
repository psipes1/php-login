<?php

include_once 'header.php';

?>

<section class="container">
	<br>

		<h3 style="text-align: center;">Don't have an Account? Sign Up!</h3>

		<form action="includes/signup.inc.php" method="POST">
			<div class="form-group">
				<input class="form-control" type="text" name="first" placeholder="First Name">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="last" placeholder="Last Name">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="uid" placeholder="Username">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="pwd" placeholder="Password">
			</div>
			
			<button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
		</form>

		

	</div>
</section>

<?php

include_once 'footer.php';
?>

