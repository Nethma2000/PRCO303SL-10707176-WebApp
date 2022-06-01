<html>
    <head>
        <title>
Admin home-Courses
        </title>

        <link rel="stylesheet"  href="css/bootstrap.min.css">
         
    <link rel="stylesheet" href="css/coursestyles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700&family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<?php
include('dbConnection.php');

?>
    </head>
    <body>
        <nav class="navbar navbar-dark fixed-top p-0 shadow"
        style="background-color: purple;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"
    href="adminhome.php">Career NextGen<small class="text-white">Admin-Lessons</small></a>

    </nav>

    <div class="container-fluid mb-5" style="margin-top: 40px;">
<div class="row">
    <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print none">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="adminhome.php">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="coursesview.php">
                        <i class="fas fa-accessibe-icon"></i>
                        Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lessons.php">
                        <i class="fas fa-accessibe-icon"></i>
                        Lessons
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-accessibe-icon"></i>
                        Feedback
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-accessibe-icon"></i>
                        Enollments
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-accessibe-icon"></i>
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-accessibe-icon"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

   <div class="col-sm-9 mt-5 mx-3">
   <?php
require_once("dbConnection.php");

$sql="SELECT course_id FROM course";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    $sql="SELECT * FROM course WHERE course_id={$_REQUEST['checkid']}";
    if(isset($_REQUEST['checkid']) && $_REQUEST['checkid'] ==$row
    ['course_id']){
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if(($row['course_id'])==$_REQUEST['checkid']){
         //    $_SESSION['course_id']==$row['course_id'];
         //    $_SESSION['course_name']==$row['course_name'];
?>

<h3 class="mt-5 bg-dark text-white p-2">Course ID: <?php if
(isset($row['course_id'])){ echo $row['course_id'];} ?>
   &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp

   Course Name: <?php if(isset($row['course_name'])){ echo $row['course_name'];}
?></h3>

<?php
             
        }
        else{
         echo "No data";
     }
    }
 
 }



?>
      

   </div>
   <div>
    <a class="btn btn-danger box" href="addLesson.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
<?php
// if(isset($_SESSION['course_id'])){
//     echo '<div>
//     <a class="btn btn-danger box" href="addLesson.php"><i class="fas fa-plus fa-2x"></i></a>
// </div>';
// }
// ?>
  


<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="js/adminajaxrequest.js"></script>


        <!-- <div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
</div>
</div> -->
    </body>
</html>