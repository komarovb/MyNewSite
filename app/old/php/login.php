<?php

	session_start();

	$login = $_POST['login'];
	$pass=$_POST['pass'];

	if($login=="admin")
	{
		if($pass=="admin")
		{
			$_SESSION['login']=$login;
          	$_SESSION['test']=1;
			echo "OK";
		}
	}

?>