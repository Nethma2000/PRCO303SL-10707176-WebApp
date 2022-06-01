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
                <!-- <li class="nav-item">
                    <a class="nav-link" href="lessons.php">
                        <i class="fas fa-accessibe-icon"></i>
                        Lessons
                    </a>
                </li> -->
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

    <?php

    $sql="SELECT * FROM course";
    $result=$conn->query($sql);
    if($result->num_rows>0){

    ?>

    <div  class="col-sm-9 mt-5">
      
        <div  class="mx-5 mt-5 text-center">
            <p style = "position:absolute; left:30px; top:-5px;width:100%" class="bg-dark text-white p-2">Courses & Lessons</p>
            <table style = "position:absolute; left:30px; top:-1px;margin-top:40px" class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th scope="col">Course ID</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Course Category</th>
                        <th scope="col">Course duration</th>

                        <th scope="col">Acion</th>

                    </tr>
                </thead>
                <tbody>

                <?php while($row=$result->fetch_assoc()){ 

                
                   echo '<tr>';
                        echo '<th scope="row">'.$row['course_id'].'</th>';
                        echo '<td>'.$row['course_name'].'</td>';
                        echo '<td>'.$row['course_category'].'</td>';
                        echo '<td>'.$row['course_duration'].'</td>';
                        
                        // echo '<td>'.row['course_id'].'</td>';
                        echo '<td>';
                    
                       
                      
                        echo '

                        
                        <form action="editcourse.php" method="POST" class="d-inline">
                        <input type="hidden" name="id" value='.$row['course_id'].'>

                        <button type="submit" class="btn btn-info mr-3" name="view" value="View">
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

                    echo '<td>';
echo'


<form action="lessonview.php" method="POST" class="d-inline">
<input type="hidden" name="id" value='.$row['course_id'].'>
<button type="submit" class="btn btn-secondary" name="view" value="add">
Add Lessons
</button>
</form>

<form action="lessondisplay.php" method="POST" class="d-inline">
<input type="hidden" name="id" value='.$row['course_id'].'>
<button type="submit" class="btn btn-secondary" name="display" value="Display">
View 
</button>
</form>

</tr>';
                    
                 
                     } ?>
                </tbody>
            </table>
    <?php } else{
        echo "No data found";
    }

    if(isset($_REQUEST['delete'])){
        $sql="DELETE FROM course WHERE course_id={$_REQUEST['id']}";
        if($conn->query($sql)==TRUE){
            echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';

        }
        else{
            echo "Unable to delete data"; 
        }
    }






        ?>
        </div>
    </div>

    <?php  ?>
    <div>
        <a class="btn btn-danger box" href="addCourse.php">
            <i class="fas fa-plus fa-2x"></i>
        </a>
    </div>
</div>
<!-- </div>
</div>
</div> -->

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