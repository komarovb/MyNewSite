<?php
	session_start();
	if($_SESSION["user"]=="admin")
	{
		echo "OK";
	}
	else
	{
		echo "WRONG!";
	}

?>