<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="main.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<header>
	<div class="container-fluid">
		<nav class="navbar navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="index.php">Home</a>


		
				<?php
					if(isset($_SESSION['u_id'])){
							echo '<form action="includes/logout.inc.php" method="POST">
							<div class="col-auto">
							<button class="btn btn-primary" type="submit" name="submit">Logout</button>
							</div>
							</form>';

					}else

						echo'<form action="includes/login.inc.php" method="POST">
				  <div class="form-row">
				    <div class="col">
				      <input type="text" class="form-control" name="uid" placeholder="Username/e-mail">
				    </div>
				    <div class="col">
				      <input type="password" class="form-control" name="pwd" placeholder="Password">
				    </div>
				    <div class="col-auto">
				    <button class="btn btn-primary" type="submit" name="submit">Login</button>
				    </div>
				    <div class="col-auto">
					<a class="btn btn-primary" href="signup.php">Signup!</a>	
					</div>
				  </div>
				 
				</form>';
							


				?>

			</div>
				




				

		


	</nav>

</header>

	</div>
	