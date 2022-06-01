<?php
include("config.php");
?>
<!doctype html>
<html>
  <head>
    <title>Training Videos</title>
  </head>
  <body>

    <div>
    <h1 style="color:purple;text-align: center; ">Training Videos</h1>
    <h2 style="color:purple;text-align: center; ">The video recordings of training programs and various sessions held by companies/universities</h2>
     <?php
     $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
       $name = $row['name'];
       echo "<div style='float: left; margin-right: 5px;'>
          <video src='".$location."' controls width='320px' height='320px' ></video>     
          <br>
          <span>".$name."</span>
       </div>";
     }
     ?>
 
    </div>

  </body>
</html>