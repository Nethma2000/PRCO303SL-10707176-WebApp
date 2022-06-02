<?php
session_start();
if(isset($_POST['update_profile'])){
  $connection = mysqli_connect("localhost","root","123");
  $db = mysqli_select_db($connection,"careernextgen");
  $query = "update admins set name='$_POST[name]',email='$_POST[email]',password='$_POST[password]' where email='$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
    alert('Profile Updated successfully...');
    window.location.href = 'admin_dashboard.php'
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
    alert('Can't update try again...');
    window.location.href = 'admin_dashboard.php'
    </script>";
  }
}
if(isset($_POST['send_notice'])){
  $connection = mysqli_connect("localhost","root","123");
  $db = mysqli_select_db($connection,"careernextgen");
  $query = "insert into notice values(null,'$_POST[post_date]','$_POST[to_whom]','$_POST[subject]','$_POST[message]')";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script>alert('Notice Created...');
    window.location.href = 'admin_dashboard.php';
    </script>";
  }
  else{
    echo "<script>alert('Please try again');
    window.location.href = 'admin_dashboard.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
    <!-- Bootstrap files -->
    <script src="../bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <!-- CSS File -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../jQuery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#edit_profile_button").click(function(){
          $("#main_content").load('edit_profile.php');
        });

        $("#create_notice_button").click(function(){
          $("#main_content").load('create_notice.php');
        });

        $("#view_notice_button").click(function(){
          $("#main_content").load('view_all_notice.php');
        });
      });
    </script>
  </head>
  <body>
    <!-- Header section code start here  -->
    <div style="background-color: #410d42;" class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3 style="background-color: #410d42;">Career NextGen Notice Board</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <br>
    <section id="container">
      <div class="row">
        <div class="col-md-2" id="left_sidebar">
        <!-- <img  src="lo.png"> -->

          <!-- <img src="../images/Career nextgen logo.png" class="img-rounded" width="200px" height="200px"> -->
          <!-- <b><?php echo $_SESSION['email'];?></b><hr> -->
          <!-- <button type="button" class="btn btn-primary btn-block" id="edit_profile_button">Edit Profile</button> -->
          <button type="button" style="background-color:#1f4f2a ;color:white;font-weight:bold" class="btn btn-secondary btn-block" id="create_notice_button">Create a Notice</button>
          <button type="button" style="background-color:#450d28 ;color:white;font-weight:bold" class="btn btn-warning btn-block" id="view_notice_button">View All Notices</button>
          <!-- <button type="button" class="btn btn-primary btn-block" id="view_reply_button">View Replies</button> -->
          <!-- <a href="logout.php" style="background-color:#0d2945 ;color:white;font-weight:bold" type="button" class="btn btn-success btn-block">Logout</a><br> -->

          <img width="210px" height="230px" src="lo.png">
        </div>
        <div class="col-md-8" id="main_content">
          <h2>Welcome to the Notice Board</h2>
          <p>
You can publish any notices regarding career guidance events/ training programs or any related occassions 
organized by your unniversity.The all notices you publish will be visible to the undergraduates of your university
who are registered with us: the Career NextGen          <p>


        <img width="400px" style="margin-left: 300px;" src="notice.png" alt="logo">
    </div>
      </div>
    </section>
  </body>
</html>
