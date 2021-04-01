<?php
	session_start();
	include ("dbconn.php");

	if(isset($_POST["submit"]))
	{
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$image = $_FILES['fileToUpload']['name'];

			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			try
			{
				$sql = "INSERT INTO students(firstname,lastname,email,gender,image) VALUES('$firstname','$lastname','$email','$gender','$image')";
				$conn->exec($sql);
				$_SESSION['message'] = "This data is created successfully";
				header("Location:index.php");
			}catch(PDOException $e){
			// echo "error!".$e->getMessage();
			$_SESSION['message'] = "Something went wrong";
			header("Location:index.php");
		}
	}
?>