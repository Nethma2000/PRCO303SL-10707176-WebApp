<?php
  session_start();
  $connection = mysqli_connect("localhost","root","123");
  $db = mysqli_select_db($connection,"careernextgen");

  if(isset($_POST['login'])){
    $query = "select * from uninoticeusers where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      $_SESSION['email'] = $_POST['email'];
      while($row = mysqli_fetch_assoc($query_run)){
        $_SESSION['class'] = $row['class'];
        echo "<script>
        window.location.href = 'user_dashboard.php';
        </script>";
      }
    }
    else{
      echo "<script>alert('Please Enter correct email id and password');

      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Career NextGen Notice Board </title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- Header section code start here  -->
    <div style="background-color: #410d42;"  class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
      <h3 style="background-color: #410d42;">Career NextGen Notice Board</h3>
      <a  style="color: aqua;margin: left 100px;" href="../undergraduatehome.html">Back to main</a>

      </div>
      <div class="col-md-4">
      </div>
    </div>

    <!-- Login from code starts here -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Get Started</h4></center>
          <form action="index.php" method="post">
            <div class="form-group">
              <lable>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable>Passowrd:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
            <button style="background-color: purple;color:white" class="btn btn-primary" type="submit" name="login">Go</button>
          </form>
          <a style="color: purple;" href="register.php">Click here to subscribe for the university notices</a>
        </div>
      </div>
    </section>
  </body>
</html>
