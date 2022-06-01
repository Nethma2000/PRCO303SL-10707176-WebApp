<?php

session_start();
require_once("unidbConnection.php");
//$con= new mysqli('localhost','root','123','careernextgen');

// $email=$_POST['email'];
// $password=$_POST['password'];

// $s = "select * from students where email='$email' && password='$password'";
// $result=mysqli_query($con,$s);
// $num=mysqli_num_rows($result);
// if($num==1){
   
//     echo "success";
//     header('location: studenthome.html');
// }
// else{
//     echo "Invalid Email or Password";
// }

if(isset($_POST)) {

	//Escape Special Characters in String

$stuemail=$_POST['email'];
$stupass=$_POST['password'];
	//sql query to check company login
	$sql = "select * from universities where university_email='$stuemail' && password='$stupass'";
	$result = $conn->query($sql);
    $_SESSION["university_name"]=$row['university_name'];

	//if company table has this this login details
	if($result->num_rows > 0) {
	
        // echo "login";
					//Set some session variables for easy reference
                    $_SESSION['login_user']=$stuemail;
				header("Location: unigome.php");
				exit();
			}
          
    
    else{
         echo '<script type="text/javascript">';
            echo 'alert( "Invalid Username or Password!")';

            echo '</script>';
            exit();
          
      
            
    }
}


?>