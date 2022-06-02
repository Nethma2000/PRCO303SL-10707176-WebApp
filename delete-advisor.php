<?php



require_once("config.php");

if(isset($_GET)) {

	//Delete Company using id and redirect
	$sql = "DELETE FROM advisors WHERE id_advisor='$_GET[id]'";
	if($conn->query($sql)) {
		header("Location: advisors.php");
		exit();
	} else {
		echo "Error";
	}
}