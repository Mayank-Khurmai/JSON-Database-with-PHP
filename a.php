<?php

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	//$fp = fopen('a.json', 'r');
	//print_r($fp);
	//fclose($fp);



	$json = json_decode(file_get_contents("a.json"));


		if($username==$json->username && $password==$json->password)
		{
			echo "Login Suceess";
		}
		else
		{
			echo "Login Failed";
		}
?>