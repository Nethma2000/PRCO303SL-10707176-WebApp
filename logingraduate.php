<?php

session_start();
require_once("config.php");
$con= new mysqli('localhost','root','123','careernextgen');

$email=$_POST['email'];
$password=$_POST['password'];

$s = "select * from students where email='$email' && password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
   
    echo "success";
    header('location: graduatehome.html');
}
else{
    echo "Invalid Email or Password";
}

// if(isset($_POST)) {

// 	//Escape Special Characters in String
// 	$email=$_POST['email'];
// $password=$_POST['password'];

	
// 	//sql query to check company login
// 	$sql = "select * from students where email='$email' && password='$password'";
// 	$result = $conn->query($sql);

// 	//if company table has this this login details
// 	if($result->num_rows > 0) {
// 		//output data
// 		while($row = $result->fetch_assoc()) {

// 			if($row['category'] == 'graduate') {

			
		
				
// 				header("Location: undergraduatehome.html");
// 				exit();
// 			}
//             else if($row['category'] == 'schoolleaver') {

			
		
				
// 				header("Location: undergraduatehome.html");
// 				exit();
// 			}
           
//             else{
//                 echo "Nott ";
//             }
//         }
       
//     }
//     else{
//          echo '<script type="text/javascript">';
//             echo 'alert( "Invalid Username or Password!")';

//             echo '</script>';
//             exit();
          
      
            
//     }
// }


?>