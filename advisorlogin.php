<?php

session_start();

$con= new mysqli('localhost','root','123','careernextgen');

$email=$_POST['email'];
$password=$_POST['password'];

$s = "select * from advisors where email='$email' && password='$password'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    if($s1 == '1'){
        header('location: advisorhome.html');
    }
    
//     if('active' == '1') {
//         header("Location: advisorhome.html");
        
//     } else if('active' == '0') {
//        echo "Your Account Is Rejected. Please Contact Admin For More Info.";
      
//     }
//     else if('active' == '3') {
//         echo "Your Account Is Deactivated. Contact Admin For Reactivation.";
//     }
 }
else{
    echo "Invalid Email or Password";
}


?>