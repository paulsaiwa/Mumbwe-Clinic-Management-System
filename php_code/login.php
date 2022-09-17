<?php
	include "includes/db_connection.php";
	if(isset($_POST['login'])){
		$user_name=$_POST['username'];
		$pass = $_POST['password'];
		$pass=md5($pass);

		$querry = "SELECT * FROM db_users WHERE username='$user_name' AND password='$pass'";

		$run = $conn->query($querry);
        if($run->num_rows > 0){
			$get = $run->fetch_array();

			if($get['role'] == 'Admin' AND $get['status']=='On' ){

				$_SESSION['username'] = $get['username'];
				$_SESSION['user_id'] = $get['user_id'];

				//log_activity($get['user_id'], "Has successfully logged in the system");
				header("location: admin/dashboard.php");
			}
	        elseif($get['role'] == 'Assessor' AND $get['status']=='On'){
				$_SESSION['username'] = $get['username'];
				$_SESSION['user_id'] = $get['user_id'];
				//log_activity($get['user_id'], "Has successfully logged in the system");
				header("location: assessor/assessor.php?action=dashboard");
			}
			elseif($get['role'] == 'In charge' AND $get['status']=='On'){
				$_SESSION['username'] = $get['username'];
				$_SESSION['user_id'] = $get['user_id'];
				//log_activity($get['user_id'], "Has successfully logged in the system");
				header("location: incharge/in-charge.php?action=dashb");
			}
			else  echo " <script type='text/javascript'>alert(' Sorry!! Access Denied, Consult Administrator!')</script>";
		}else{
			echo "<b style='color:red;'>". "<script type='text/javascript'>alert(' Wrong username Or password! Make sure you are authorised to login!')</script>"." </b>";
		}
	}
	
	?>