<?php
	session_start();

  	if(isset($_SESSION['login'])) {
  		$login=$_SESSION['login'];
      	$test = $_SESSION['test'];
  		if($test==1)
  		{
  			echo "OK";
  		}
  		else{
  			echo "WRONG";
  		}
    }
?>