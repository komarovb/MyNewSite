<?php
	$login = $_POST["login"];
	$pass = $_POST["pass"];
		if($login == "admin"&&$pass="1q2w3e4r5t")
		{
			session_start();
			$_SESSION["user"] = "admin";
			echo "OK";
		}
		else{
			echo "WRONG DATA!";
		}
		
?>