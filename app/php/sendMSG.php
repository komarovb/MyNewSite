<?php
	session_start();
	$name = $_POST["name"];
	$email = $_POST["email"];
	$msg=$_POST["text"];
	$capt=$_POST["capt"];
	$name_prefix = rand(1, 10000);
	if($_SESSION['code']==$capt)
	{

		$myfile = fopen("../msgs/".$name_prefix."F".$name.".txt", "w") or die("FERROR");
		$txt = "Name: ".$name."
Email: ".$email."
Message: ".$msg."
END";
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "OK";
	}
	else{
		echo "CERROR!";
	}
?>