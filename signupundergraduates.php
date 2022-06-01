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

        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Already registered.Try login or create a account with different email!');
        window.location.href='signundergraduates.php';
        </script>");

    }
    else{
        $stmt=$con->prepare("insert into students(name,email,category,institute,password,stdid,mobile)
        values('$name','$email','$category','$institute','$password','$stdid','$mobile')");
    
        $stmt->execute();

        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Registration Succesfull! Login now');
    window.location.href='signundergraduates.php';
    </script>");
        // echo '<script type="text/javascript">';
        // echo ' alert("JavaScript Alert Box by PHP")';  
        // echo '</script>';
    //  header('location: signundergraduates.html');


        $stmt->close();
        $con->close();
    }
   

}

?>

