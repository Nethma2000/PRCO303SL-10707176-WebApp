<?php

session_start();
$servername = "localhost";

$username = "root"; 

$password = "123"; 

$dbname = "careernextgen"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}
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

$email=$_POST['adminLogemail'];
$password=$_POST['adminLogpass'];
	//sql query to check company login
	$sql = "select * from admins where email='$email' && password='$password'";
	$result = $conn->query($sql);
    // $_SESSION["stu_id"]=$row['stu_id'];

	//if company table has this this login details
	if($result->num_rows > 0) {
	
        echo "login";
					//Set some session variables for easy reference
                    // $_SESSION['login_user']=$stuemail;
				header("Location: adminhome.php");
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