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

if(isset($_REQUEST['courseSubmitBtn'])){
    if(($_REQUEST['course_name']=="")||($_REQUEST['course_desc']=="")||
    ($_REQUEST['course_category']=="")||($_REQUEST['course_duration']=="")){
        $ermsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">
        Fill All fields</div>';
    }
    else{
        
        $course_name=$_REQUEST['course_name'];
        $course_desc=$_REQUEST['course_desc'];
        $course_category=$_REQUEST['course_category'];
        $course_duration=$_REQUEST['course_duration'];
        $course_image=$_FILES['course_img']['name'];
        $course_image_temp=$_FILES['course_img']['tmp_name'];
        $img_folder='../courses/image/courseimg/'.$course_image;
        move_uploaded_file($course_image_temp,$img_folder);


        $sql="INSERT INTO course(course_name,
        course_desc,course_category,course_img,course_duration)
        VALUES('$course_name','$course_desc','$course_category','$img_folder','$course_duration')";

        if($conn->query($sql)==TRUE){
            $ermsg='<div class="alert alert-success col-sm-6 ml-5 mt-2">
            Course Added Successfully</div>';
        }
        else{
            $ermsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">
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
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Course</h3>
    <?php if(isset($ermsg)) {
            echo $ermsg;
         } ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">CourseName</label>
            <input type="text" class="form-control" id="course_name" name="course_name">

        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea class="form-control" id="course_desc" name="course_desc" row=2></textarea>
            
        </div>
        <div class="form-group">
            <label for="course_category">Course Category</label>
            <input type="text" class="form-control" id="course_category" name="course_category">
            
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration">
            
        </div>
        <div class="form-group">
            <label for="course_img">Course Image</label>
            <input type="file" class="form-control-file" id="course_img" name="course_img">
            
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="courseSubmitBtn"
            name="courseSubmitBtn">Submit</button>
            <a href="coursesview.php" class="btn btn-secondary">Close</a>
        </div>

       
        <!-- <?php if(isset($ermsg)) {
            echo $ermsg;
         } ?> -->
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