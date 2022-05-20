<?php

session_start();


$stuname=$_POST['stuname'];
$stuemail=$_POST['stuemail'];
$stupass=$_POST['stupass'];


 $con= new mysqli('localhost','root','123','careernextgen');
if($con->connect_error){
    die("Connection failed");
}

 else{

    $s = "select * from studentenroll where stuemail='$stuemail'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Already created the Course Profile.Try Login!')
        window.location.href='main.php';
        </SCRIPT>");
    
    }
    else{
        

        $stmt1=$con->prepare("insert into studentenroll(stuname,stuemail,stupass,stu_occ,stu_img)
        values('$stuname','$stuemail','$stupass','','')");
    


       
        $stmt1->execute();
    //     $("#successMsg").html("<span class='alert alert-success'>Registration successfull</span>");
    //     //  echo "Registration Successful";
    //   // header('location: sign.html');
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Course Profile Creation Successful! Login Now!')
    window.location.href='main.php';
    </SCRIPT>");

    $stuname="";
$stuemail="";
$stupass="";


        $stmt1->close();
        $con->close();
    }
   
}


?>

