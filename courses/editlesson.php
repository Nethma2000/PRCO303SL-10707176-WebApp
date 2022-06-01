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
if(isset($_REQUEST['requpd'])){
    if(($_REQUEST['lesson_id']=="")|| ($_REQUEST['lesson_name']=="")||
    ($_REQUEST['lesson_desc']=="")){
        $msg='<div class ="alert alert-warning col-sm-6 ml-5 mt-2"
        role="alert">Fill all fields</div>';
    }else{
        $lid=$_REQUEST['lesson_id'];
        $lname=$_REQUEST['lesson_name'];
        $ldesc=$_REQUEST['lesson_desc'];
    
        $lesson_link=$_FILES['lesson_link']['name'];
        $lesson_link_temp=$_FILES['lesson_link']['tmp_name'];
        $link_folder='../courses/lessonvideos/'.$lesson_link;
        move_uploaded_file($lesson_link_temp,$link_folder);


        // $cimg='../courses/image/courseimg/'.$_FILES['course_img']['name'];

        $sql="UPDATE lesson SET lesson_id='$lid', lesson_name='$lname',
        lesson_desc='$ldesc,lesson_link='$link_folder'
        WHERE lesson_id='$lid'";

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
    <h3 class="text-center">Update Lesson</h3>
    <?php if(isset($msg)) {
            echo $msg;
         } ?>
    <?php if(isset($_REQUEST['ledit'])){
        
        $sql="SELECT * FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    } ?>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="course_name">Lesson ID</label>
            <input readonly type="text" class="form-control" id="lesson_id" name="lesson_id" value="<?php if(isset($row['lesson_id'])){
                echo $row['lesson_id']; } ?>">

        </div>
        <div class="form-group">
            <label for="course_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name" value="<?php if(isset($row['lesson_name'])){
                echo $row['lesson_name']; } ?>">

        </div>
        <div class="form-group">
            <label for="course_desc">Lesson Description</label>
            <textarea class="form-control" id="lesson_desc" name="lesson_desc" row=2><?php if(isset($row['lesson_desc'])){
                echo $row['lesson_desc']; } ?></textarea>
            
        </div>
        <div class="form-group">
            <label for="course_category">Lesson Video</label>
            <input type="file" class="form-control" id="lesson_link" name="lesson_link" value="<?php if(isset($row['lesson_link'])){
                echo $row['lesson_link']; } ?>">
            
            <label for="lesson_link">Lesson Video</label>
            <video width="50" height="50" controls>
            <source src="<?php if(isset($row['lesson_link'])) {echo $row['lesson_link']; } ?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
            </video>


        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpd"
            name="requpd">Update</button>
            <!-- <a href="coursesview.php" class="btn btn-secondary">Close</a> -->
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