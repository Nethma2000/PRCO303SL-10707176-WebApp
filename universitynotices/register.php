<?php
  $connection = mysqli_connect("localhost","root","123");
  $db = mysqli_select_db($connection,"careernextgen");

  if(isset($_POST['register'])){
    $query = "insert into uninoticeusers values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[class]')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Registration successfully...You may now login.');
      window.location.href = 'index.php';
      </script>";
    }
    else{
      echo "<script>alert('Registration failed...try again');
      window.location.href = 'register.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Notice Board System</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- Header section code start here  -->
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>

    <!-- Login from code starts here -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Registration form</h4></center>
          <form action="" method="post">
            <div class="form-group">
              <lable>Name:</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your Name">
            </div>
          
            <div class="form-group">
              <lable>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable>Passowrd:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
            <div class="form-group">
              <lable>Select Your Class:</label>
                <select class="form-control" name="class">
                  <option>-Select-</option>
                  <option>To All</option>
                <option>NSBM</option>
                <option>SLIIT</option>
                <option>CINEC</option>
                <option>JAVA</option>
                <option>IIT</option>
                <option>UOC</option>
                <option>UOM</option>
                <option>UOJ</option>
                <option>UOP</option>
                <option>UOR</option>
                <option>ICBT</option>
                <option>NIBM</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          <a href="index.php">Click here to login</a>
        </div>
      </div>
    </section>
  </body>
</html>
