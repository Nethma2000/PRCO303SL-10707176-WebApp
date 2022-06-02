
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="universitydashboard.css">
    <link rel="stylesheet" type="text/css" href="admindashboard.css">


	<title>Admin Dashboard</title>
</head>
<body onload="initClock()">
<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Career NextGen</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="admindashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span  class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="jobPortal/index.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Job Portal</span>
				</a>
			</li>
			<li>
				<a href="universitycrud/index.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Universities</span>
				</a>
			</li>
			<li>
				<a href="advisorscrud/index.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Advisors</span>
				</a>
			</li>
			<li>
				<a href="studentscrud/index.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Students</span>
				</a>
			</li>
            <li>
				<a href="courses/main.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Courses</span>
				</a>
			</li>
            <li>
				<a href="career-guidance-tips-files/admin-files-upload.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Tips</span>
				</a>
			</li>
            <li>
				<a href="trainingvideos/addvideo.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Training Videos</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			
			<li>
				<a href="universitylogout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
            <img style="width: 200px;height:100px" src="images/Career nextgen logo.png">

		</ul>
	</section>
	<!-- SIDEBAR -->

    

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Admin Dashboard</a>
			<form action="#">
            <h1 align='center'>Welcome,</h1>

			</form>

			<a href="#" class="profile">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>

				</div>
				
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
                    <span class="info-box-text">Registered<br> Students </span>

<!-- <span class="text">
    <h3>1020</h3>
    <p>New Order</p>
</span> -->

<?php

$servername = "localhost";

$username = "root"; 

$password = "123"; 

$dbname = "careernextgen"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 
<?php
$sql = "SELECT * FROM students";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $totalno = $result->num_rows;
} else {
    $totalno = 0;
}
?>
<span class="info-box-number"><?php echo $totalno; ?></span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
                    <span class="info-box-text">Registered<br> Advisors </span>

<!-- <span class="text">
    <h3>1020</h3>
    <p>New Order</p>
</span> -->
<?php
$sql = "SELECT * FROM advisors";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $totalno = $result->num_rows;
} else {
    $totalno = 0;
}
?>
<span class="info-box-number"><?php echo $totalno; ?></span>

				</li>
				<li>
                <i class='bx bxs-building-house'></i>
                    <span class="info-box-text">Registered<br> Universities </span>

<!-- <span class="text">
    <h3>1020</h3>
    <p>New Order</p>
</span> -->
<?php
$sql = "SELECT * FROM universities";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $totalno = $result->num_rows;
} else {
    $totalno = 0;
}
?>
<span class="info-box-number"><?php echo $totalno; ?></span>

				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<!-- <div class="head">
						
					
					</div> -->
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Query</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>

									<p>Nethma Dhananjani</p>
								</td>
								<td><a href="mailto:rmndhananjani@gmail.com">Send Mail</a></td>
								<td><span class="status completed">For student realted queries</span></td>
							</tr>
							<tr>
								<td>
									<p>Nayana Kalyani</p>
								</td>
								<td><a href="mailto:nethud2000@gmail.com">Send Mail</a></td>
								<td><span class="status pending">For other queries</span></td>
							</tr>
							<tr>
								<td>
									<p>Viraj Karunarathna</p>
								</td>
								<td><a href="mailto:virajlahiru9719@gmail.com">Send Mail</a></td>
								<td><span class="status process">For application realted queries</span></td>
							</tr>
						
						
						</tbody>
					</table>
				</div>
                <div class="datetime">
    <div class="date">
      <span id="dayname">Day</span>,
      <span id="month">Month</span>
      <span id="daynum">00</span>,
      <span id="year">Year</span>
    </div>
    <div class="time">
      <span id="hour">00</span>:
      <span id="minutes">00</span>:
      <span id="seconds">00</span>
      <span id="period">AM</span>
    </div>
  </div>  
  
  
  <script type="text/javascript">
  function updateClock(){
    var now = new Date();
    var dname = now.getDay(),
        mo = now.getMonth(),
        dnum = now.getDate(),
        yr = now.getFullYear(),
        hou = now.getHours(),
        min = now.getMinutes(),
        sec = now.getSeconds(),
        pe = "AM";

        if(hou >= 12){
          pe = "PM";
        }
        if(hou == 0){
          hou = 12;
        }
        if(hou > 12){
          hou = hou - 12;
        }

        Number.prototype.pad = function(digits){
          for(var n = this.toString(); n.length < digits; n = 0 + n);
          return n;
        }

        var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
        var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
        var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
        for(var i = 0; i < ids.length; i++)
        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
  }

  function initClock(){
    updateClock();
    window.setInterval("updateClock()", 1);
  }
  </script>


      
     

  
        
	

	<script src="universitydashboard.js"></script>
    <script src="calendar.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>







	<!-- SIDEBAR -->
	

</body>
</html>