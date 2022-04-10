<?php 

include "config.php"; 

if (isset($_GET['university_email'])) {

    $user_email = $_GET['university_email'];

    $sql = "DELETE FROM `universities` WHERE `university_email`='$user_email'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>

