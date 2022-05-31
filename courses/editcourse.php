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

if(isset($_REQUEST['requpdate'])){
    if(($_REQUEST['course_id']=="")|| ($_REQUEST['course_name']=="")||
    ($_REQUEST['course_desc']=="")|| ($_REQUEST['course_duration']=="")){
        $msg='<div class ="alert alert-warning col-sm-6 ml-5 mt-2"
        role="alert">Fill all fields</div>';
    }else{
        $cid=$_REQUEST['course_id'];
        $cname=$_REQUEST['course_name'];
        $cdesc=$_REQUEST['course_desc'];
        $cduration=$_REQUEST['course_duration'];
        $ccategory=$_REQUEST['course_category'];

        $cimg='../courses/image/courseimg/'.$_FILES['course_img']['name'];

        $sql="UPDATE course SET course_id='$cid', course_name='$cname',
        course_desc='$cdesc',course_duration='$cduration',course_category='$ccategory',course_img='$cimg'
        WHERE course_id='$cid'";

if($conn->query($sql)==TRUE){
    $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">
    Course Updated Successfully</div>';
}
else{
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">
    Unable to Update Course </div>';
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
    <h3 class="text-center">Update Course</h3>
    <?php if(isset($msg)) {
            echo $msg;
         } ?>
    <?php if(isset($_REQUEST['view'])){
        
        $sql="SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    } ?>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="course_name">Course ID</label>
            <input readonly type="text" class="form-control" id="course_name" name="course_id" value="<?php if(isset($row['course_id'])){
                echo $row['course_id']; } ?>">

        </div>
        <div class="form-group">
            <label for="course_name">CourseName</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])){
                echo $row['course_name']; } ?>">

        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea class="form-control" id="course_desc" name="course_desc" row=2><?php if(isset($row['course_desc'])){
                echo $row['course_desc']; } ?></textarea>
            
        </div>
        <div class="form-group">
            <label for="course_category">Course Category</label>
            <input type="text" class="form-control" id="course_category" name="course_category" value="<?php if(isset($row['course_category'])){
                echo $row['course_category']; } ?>">
            
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php if(isset($row['course_duration'])){
                echo $row['course_duration']; } ?>">
            
        </div>
        <div class="form-group">
            <label for="course_img">Course Image</label>
            <img src="<?php if(isset($row['course_img'])) {echo $row['course_img']; } ?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="course_img" name="course_img">
            
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate"
            name="requpdate">Update</button>
            <a href="coursesview.php" class="btn btn-secondary">Close</a>
        </div>

       
       
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