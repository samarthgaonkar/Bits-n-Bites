<?php
	$name = "";
	$email = "";
	$msg = "";
	$error = array();	
	$con = mysqli_connect('localhost','root','','trial_project');

	if($con){
			// echo "<script>alert('Congratulation Connected to MySQL (For SUBS).')</script>";
		}else{
			echo "<script>alert('xx MySQL Connection Error. xx')</script>";
		}

?>