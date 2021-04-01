<?php
include 'conn.php';

	try
	{
		$stmt = $conn->prepare("SELECT * FROM students");
	
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach($stmt->fetchAll() as $k =>$v)  {
			echo "<pre>";
			print_r($v);
		}
	}catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
?>