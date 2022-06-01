<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$university_name = $_POST['university_name'];
		$university_address = $_POST['university_address'];
		$university_email = $_POST['university_email'];
		$university_contactnum = $_POST['university_contactnum'];
		$carerguidanceHead = $_POST['carerguidanceHead'];
		$carerguidanceNumber = $_POST['carerguidanceNumber'];
		$password = $_POST['password'];
		
		$sql = "INSERT INTO universities (university_name, university_address, university_email,university_contactnum,carerguidanceHead,carerguidanceNumber,password)
		 VALUES ('$university_name', '$university_address', '$university_email','$university_contactnum', '$carerguidanceHead', '$carerguidanceNumber','$password')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>