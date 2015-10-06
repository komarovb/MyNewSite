<?php
	$uploaddir = '/wamp/www/DZ1/img/';
	$uploadfile = $uploaddir . basename($_FILES['image']['name']);
	$pname = $_POST["name"];
	$purl = $_POST["url"];
	$pdesc = $_POST["desc"];
	$image = basename($_FILES['image']['name']);
	if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    	$jrepresent = array('name' => $pname,'url' => $purl,'description' => $pdesc,"image" =>$image,);
		$file = '../projects.json';
		if(file_exists($file))
		{
			$tmp=file_get_contents($file, NULL, NULL);
			$json = json_decode($tmp, true);
			array_push( $json['projects'], $jrepresent );
			$fp = fopen($file, 'w');
			fwrite($fp, json_encode($json));
			fclose($fp);
		}
		else{
			echo "<h1>ERROR!</h1>";
		}
	} 
?>