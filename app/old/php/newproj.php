<?php

	session_start();
	
	$counter=1;

	$ImgName=$_SESSION['imgname'];
	$file = '../info/projects.json';

	$pname=$_POST['name'];
	$purl=$_POST['url'];
	$pdesc=$_POST['desc'];

	if(file_exists($file))
	{
		$tmp=file_get_contents($file, NULL, NULL);
		$json = json_decode($tmp, true);
		$arr = array(
    		"name" => $pname,
    		"url" => $purl,
    		"description"=>$pdesc,
    		"image"=>$ImgName,
		);
		array_push( $json['projects'], $arr );

		$file="../info/projects.json";
		$fp = fopen($file, 'w');
		fwrite($fp, json_encode($json));
		fclose($fp);

		echo "OK";
}


?>