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

if(isset($_REQUEST['lessonSubmitBtn'])){
    if(($_REQUEST['course_id']=="")||($_REQUEST['course_name']=="")||($_REQUEST['lesson_name']=="")||($_REQUEST['lesson_desc']=="")
  ){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">
        Fill All fields</div>';
    }
    else{
        $course_id=$_REQUEST['course_id'];
        $course_name=$_REQUEST['course_name'];
        $lesson_name=$_REQUEST['lesson_name'];
        $lesson_desc=$_REQUEST['lesson_desc'];
        $lesson_link=$_FILES['lesson_link']['name'];
        $lesson_link_temp=$_FILES['lesson_link']['tmp_name'];
        $link_folder='../courses/lessonvideos/'.$lesson_link;
        move_uploaded_file($lesson_link_temp,$link_folder);

        // $lesson_link=$_REQUEST['lesson_link'];
    

        $sql="INSERT INTO lesson(lesson_name,
        lesson_desc,lesson_link,course_id,course_name)
        VALUES('$lesson_name','$lesson_desc','$link_folder','$course_id','$course_name')";

        if($conn->query($sql)==TRUE){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">
            Course Added Successfully</div>';
        }
        else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">
            Unable to add Course </div>';
        }

    }

}

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
    <h3 class="text-center">Add Lesson</h3>
    <?php if(isset($msg)) {
            echo $msg;
         } ?>
    <?php if(isset($_REQUEST['view'])){
        
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
            <input readonly type="text" class="form-control" id="course_name" name="course_id" value="<?php if(isset($row['course_id'])){
                echo $row['course_id']; } ?>">

        </div>
        <div class="form-group">
            <label for="course_name">CourseName</label>
            <input readonly type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])){
                echo $row['course_name']; } ?>">

        </div>
        <div class="form-group">
            <label for="lesson_name">Lesson name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name">
            
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Descrition</label>
            <input type="text" class="form-control" id="lesson_desc" name="lesson_desc">
            
        </div>
        <div class="form-group">
            <label for="lesson_link">Lesson Video link</label>
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
            
        </div>
       
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="courseSubmitBtn"
            name="lessonSubmitBtn">Submit</button>
            <a href="#" class="btn btn-secondary">Close</a>
        </div>
       
       
    </form>
</div>
  
</div>
<a href="lessondisplay.php">fgh</a>

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