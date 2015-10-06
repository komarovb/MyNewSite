<?php
	session_start();
	$name = $_POST["name"];
	$email = $_POST["email"];
	$msg=$_POST["text"];
	$capt=$_POST["capt"];
	if($_SESSION['code']==$capt)
	{
		echo "SUC";
	}
	else{
		echo "CERROR!";
	}
?>