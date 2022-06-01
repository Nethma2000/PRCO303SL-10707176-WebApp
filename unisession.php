<?php
include('unidbConnection.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($conn,"select university_email,university_name from universities where university_email='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['university_name'];
$loggedin_id=$row['university_email'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
 echo "Go back";
 header("Location: main.php");
}
?>