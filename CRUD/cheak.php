<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";

	try
	{
		$conn = new PDO("mysql::host=$localhost,dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMOD,PDO::ERRMODE_EXECPTION);
		echo "connecdtion ok";
	}
		catch(PDOExecption $e)
	{
		echo "error".$e->getMessage();
	}
?>