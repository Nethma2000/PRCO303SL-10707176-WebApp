<?php

// session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$category=$_POST['category'];
$institute=$_POST['institute'];
$password=$_POST['password'];
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
         echo ("<script LANGUAGE='JavaScript'>
    window.alert('Registration Successful');
    window.location.href='sign.html';
    </script>");
         

    }
    else{
        $stmt=$con->prepare("insert into students(name,email,category,institute,password,stdid,mobile)
        values('$name','$email','$category','$institute','$password','','$mobile')");
    
        $stmt->execute();
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Registration Successful');
    window.location.href='sign.html';
    </script>");
         

        $stmt->close();
        $con->close();
    }
   

}

?>

