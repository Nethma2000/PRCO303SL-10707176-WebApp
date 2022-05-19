<?php

// session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$institute=$_POST['institute'];
$stdid=$_POST['stdid'];
$category=$_POST['category'];
$mobile=$_POST['mobile'];




 $con= new mysqli('localhost','root','123','careernextgen');
if($con->connect_error){
    die("Connection failed");
}

else{

    $s = "select * from students where email='$email'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        echo "Already registered";

    }
    else{
        $stmt=$con->prepare("insert into students(name,email,category,institute,password,stdid,mobile)
        values('$name','$email','$category','$institute','$password','$stdid','$mobile')");
    
        $stmt->execute();
         echo "Registration Successful";
      // header('location: sign.html');


        $stmt->close();
        $con->close();
    }
   

}

?>

