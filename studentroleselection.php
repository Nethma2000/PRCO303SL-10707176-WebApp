<?php 

// session_start();

// if(isset($_SESSION['id_user']) || isset($_SESSION['id_company'])) { 
//   header("Location: index.php");
//   exit();
// }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Career NextGen Registration Step1</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="jobportal/css/AdminLTE.min.css">
  <link rel="stylesheet" href="jobPortal/css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="jobPortal/css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body style="background-color: purple;" class="hold-transition skin- sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo logo-bg">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>J</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span style="color: white;" class="logo-lg"><b>Career</b>NextGen</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li>
            <a style="color: white;font-weight:bold;color:aqua;font-size:18px" href="http://localhost/CareerNextGenWeb/home.php">Go back to Main Home Page</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section class="content-header">
      <div class="container">
        <div class="row latest-job margin-top-50 margin-bottom-20">
          <h1 class="text-center margin-bottom-20">Student Role Selection</h1>
          <div class="col-md-6 latest-job ">
            <div style="background-color: #3b1754;" class="small-box  padding-5">
              <div class="inner">
                <h3 style="color:wheat" class="text-center">Undergraduate</h3>
              </div>
              <p style="font-weight:bolder;color:wheat">If you are a student of any university,please proceed for the undergraduate login and signup from here </p>
         
              <a style="color:wheat;font-weight:bold;" href="signundergraduates.html" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
         
             
             
            </div>
          </div>
          <div class="col-md-6 latest-job ">
            <div style="background-color: #73073f;" class="small-box  padding-5">
              <div class="inner">
                <h3 style="color:wheat"  class="text-center">Graduate/<br>School Leaver </h3>
              </div>
              <a style="color:wheat;font-weight:bold;"  href="sign.html" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    

  </div>
  <!-- /.content-wrapper -->


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
