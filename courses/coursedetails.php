<html>
    <head>
        <title>Courses Details</title>
     
   
    <link rel="stylesheet" href="css/coursestyles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700&family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet">
       
    </head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark  pl-5 fixed-top">
  <a class="navbar-brand" href="main.php">Career NextGen</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav pl-5">
     <li class="nav item custom-nav-item"><a href="main.php" class="nav-link">Home</a></li>
     <li class="nav item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
     <li class="nav item custom-nav-item"><a href="" class="nav-link">Profile</a></li>
     <li class="nav item custom-nav-item"><a href="" class="nav-link">Feedback</a></li>
     <li class="nav item custom-nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li>
     <li class="nav item custom-nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Join</a></li>
     <li class="nav item  custom-nav-item"><a href="" class="nav-link">Logout</a></li>


     <li class="nav item custom-nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#adminLoginModalCenter">Admin</a></li>

</ul>
  </div>
</nav>

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="image/course.jpg" style="height:500px ; width:100%;object-fit:cover;box-shadow:10px;margin-top:50px;"/>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="image/course.jpg" class="card-img-top"/>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: English</h5>
                <p class="card-text">Description: ddddddddddddddddddddddddddddddddddddddddccccccccccc
                    cccccccccccccccccccccccccccccccccccccccccccc
                    cccccccccccccccccccccccccccccccccccccccccc
                    cccccccccccccccccccccccccccccccccc
                </p>
                <p class="card-text">Duration: 23hours</p>
                <form action="" method="post">
                    
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" 
                    name="buy">Enroll</button>
                </form>
            </div>
        </div>
        </div>
    </div>


    <div class="container mt-5">
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Lesson Number</th>
                    <th scope="col">Lesson Name</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Inroduction</td> </tr>';
               
            </tbody>
        </table>';
    </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajaxrequest.js"></script>


    </body>

</html>