<?php 

include "connection.php"; 

if (isset($_GET['university_email'])) {

    $user_email = $_GET['university_email'];

    $sql = "DELETE FROM universities WHERE university_email='$user_email'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Record deleted successfully');
    window.location.href='index.php';
    </script>");

  
       


    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>

