<?php

session_start();




require_once("config.php");

if(isset($_GET)) {


	$sql = "UPDATE advisors SET active='1' WHERE id_advisor='$_GET[id]'";
	if($conn->query($sql)) {
		header("Location: advisors.php");
		exit();
	} else {
		echo "Error";
	}
}