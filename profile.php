<?php
include_once 'header.php';

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>test</title>
 </head>
 <body>
 <div class="container">
 	<br>
 	<i class="fas fa-user-circle fa-10x"></i>
 	<h4>Welcome to your profile, <?php if(isset($_SESSION["u_id"])){
 		echo $_SESSION['u_first'];} ?></h4>
 		<button class="btn btn-primary tooltip1" title="This button reveals your info" data-placement="top" type="button" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="false" aria-controls="collapseProfile">
    Account <i class="fas fa-info-circle"></i></button>
 		

 		<br>
 		<div>
<br>
<br>
<br>
 			
 	

 		</div>

 		<div class="collapse" id="collapseProfile">
  		<h4>Your Information is below:</h4>
    	<table class="table table-striped">
  <thead class="table-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php if(isset($_SESSION["u_id"])){echo $_SESSION['u_first'];} ?> </td>
      <td><?php if(isset($_SESSION["u_id"])){echo $_SESSION['u_last'];} ?>  </td>
      <td><?php if(isset($_SESSION["u_id"])){echo $_SESSION['u_uid'];} ?>   </td>
      <td><?php if(isset($_SESSION["u_id"])){echo $_SESSION['u_email'];} ?> </td>
    </tr>
    
  </tbody>
</table>
  		
		</div>
 		
 		

 </div>


 	
 
 </body>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript">
	
	$( document ).ready(function() { // jquery init

    $('#collapseProfile').collapse({
  toggle: false
	})

$('.tooltip1').tooltip('show')

}); //end jquery init

</script>
 </html>