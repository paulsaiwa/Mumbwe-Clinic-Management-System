<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mumbwe";

	$conn = new mysqli($servername , $username , $password , $dbname);
		if (!$conn === true) 
		{
			echo mysqli_error($conn);
		}
		else
		{
			true;
		}
?>