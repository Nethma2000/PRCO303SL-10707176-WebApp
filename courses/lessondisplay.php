<html>
    <head>
        <title>
Admin home-Add course
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
    href="adminhome.php">Career NextGen<small class="text-white">Admin-Courses</small></a>

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
                    <a class="nav-link" href="#">
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
<div style="background-color: white;" class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">View Lessons</h3>
    <?php if(isset($msg)) {
            echo $msg;
         } ?>
    <?php if(isset($_REQUEST['display'])){
        
        $sql="SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    } ?>
    <h3 class="mt-5 bg-dark text-white p-2">Course ID: <?php if
(isset($row['course_id'])){ echo $row['course_id'];} ?>
Course Name: <?php if(isset($row['course_name'])){ echo $row['course_name'];}
?></h3>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="course_id">Course ID</label>
    <input readonly type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])){
                echo $row['course_id']; } ?>">

        </div>
        <div class="form-group">
            <label for="course_name">CourseName</label>
            <input readonly type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])){
                echo $row['course_name']; } ?>">

        </div>
       
    <?php
     $sql="SELECT * FROM lesson WHERE course_id='".$row["course_id"]."'";

// $sql=" SELECT * FROM `lesson` WHERE `course_id`='".$row["course_id"]."';";
$result=$conn->query($sql);
if($result->num_rows>0){
?>
      
        <table class="table" style="width: 100%;">
            <thead>
                <tr>
                    <th scope="col">Lesson ID</th>
                    <th scope="col">Lesson Name</th> 
                    <th scope="col">Acion</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row=$result->fetch_assoc()){ 
               echo '<tr>';
                    echo '<th scope="row">'.$row['lesson_id'].'</th>';
                    echo '<td>'.$row['lesson_name'].'</td>';
                    echo '<td>';
                    echo '
                    <form action="editlesson.php" method="POST" class="d-inline">
                    <input type="hidden" name="id" value='.$row['lesson_id'].'>

                    <button type="submit" class="btn btn-info mr-3" name="ledit" value="ledit">
                        <i class="fas fa-pen"></i>
                    </button>
</form>
                    <form action="" method="POST" class="d-inline">
                    <input type="hidden" name="id" value='.$row['course_id'].'>
                    <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                        <i class="far fa-trash-alt"></i>
                    </button>
                    </form>
                  
              



                   
                </tr>';


                
             
                 } ?>
            </tbody>
        </table>
<?php } else{
    echo "No data found";
}








    ?>
    </div>
</div>

<?php  ?>
       
    </form>
</div>
  
</div>

</div>
</div>

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