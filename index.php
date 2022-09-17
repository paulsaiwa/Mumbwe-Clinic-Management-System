<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Assets/css/moodal.css">
<link rel="stylesheet" href="Assets/css/style.css">
<body>

		<div class="w3-container w3-cyan" id="header">
		 	
		 		<img src="Assets/img/mw_logo.png" width="100" height="100" class="w3-round-xxlarge w3-display-topleft"> 
		 		<h1 class="w3-center">MUMBWE CLINIC MANAGEMENT SYSTEM</h1>
		 		 <img src="Assets/img/logo.png" width="100" height="100" class="w3-round-xxlarge w3-display-topright"> 
		 			 		
		 			  
		</div>

		
		<div class="w3-container w3-center w3-card-4" id="login">
		  <p>
		  	<form class="w3-container" method="POST" action="index.php">
		  		<label>First Name</label>
				<input class="w3-input w3-center" type="text" name="username" id="inp" autocomplete="off"  autocomplete="on">
				<label>Last Name</label>
				<input class="w3-input" type="password" name="password" id="inp" autocomplete="off">
				<input class="w3-btn " type="reset" name="reset" value="Cancel">
				<input class="w3-btn" type="submit" name="login" value="Login">
		</form>
		  </p>
		</div>

		<div class="w3-container w3-cyan">
		  <h5>Footer</h5>
		</div>

</body>
</html>

<?php include_once 'php_code/login.php';  ?>