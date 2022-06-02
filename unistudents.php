<?php
 include('unisession.php');
 include('unidbConnection.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="universitydashboard.css">


	<title>University Students</title>
</head>
<body>
<section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Career NextGen</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="unigome.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="partnershipcompanies/index.php">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Partnership Companies</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Industry Trainings</span>
                </a>
            </li>
            <li>
                <a href="universitynotices/admin/admin_dashboard.php">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Notices</span>
                </a>
            </li>
            <li class="active">
                <a href="unistudents.php">
                    <i class='bx bxs-group'></i>
                    <span class="text">Students</span>
                </a>
            </li>

        </ul>
        <ul class="side-menu">
            <li>
                <a href="uni-company-chat/login.php">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Chat with companies</span>
                </a>
            </li>
            <li>
                <a href="universitylogout.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
	<!-- SIDEBAR -->

    

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">University Dashboard</a>
			<form action="#">
            <h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>

			</form>
            <input readonly type="text" class="form-control" id="university_name" name="university_name" value="<?php echo $loggedin_session; ?>">
		
		
			<a href="#" class="profile">
				<img src="img/people.png">
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
							<a class="active" href="#">Students</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
			<!-- <?php echo $loggedin_session; ?> -->
			<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>Name</th>
						<th>Email</th>
                        <th>Mobile no.</th>
						<th>Category</th>
						<th>Institute</th>
						<th>Student ID</th>
					
						
						<th>Action</th>
					</thead>
					<tbody>
					
				

						<?php
						
							$sql = "SELECT * FROM students where institute='$loggedin_session'";

						

							//use for MySQLi-OOP
							$query = $conn->query($sql);
	
	
							while($row = $query->fetch_assoc()){
	
						?>
	
								<tr>
	
	
	
									<td><?php echo $row['name']; ?></td>
	
									<td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>

									<td><?php echo $row['category']; ?></td>
	
									<td><?php echo $row['institute']; ?></td>
									<td><?php echo $row['stdid']; ?></td>
	
	
	
	
	
									<td>
	
										<!-- <a class="btn btn-info" href="universityupdate.php?university_email=<?php echo $row['university_email']; ?>">Edit</a>&nbsp; -->
										
										<a class="btn btn-danger" href="delete.php?email=<?php echo $row['email']; ?>">Delete</a>
									</td>
								</tr>
	
						<?php       }
						
	
						?>
	
			
					</tbody>
				</table>
			</ul>


			<div class="table-data">
				
        </div>
      </div>
      <div class="back">
        <div class="contentback">
          <div class="backcontainer">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
          </div>
        </div>

      </div>
    </div>
    
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="universitydashboard.js"></script>
    <script src="calendar.js"></script>


<?php
include('unidbConnection.php');




?>

<div style = "position:absolute; left:300px; top:100px;" id="center">
<div id="center-set">
<!-- <h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1> -->
<!-- <input readonly type="text" class="form-control" id="university_name" name="university_name" value="<?php echo $loggedin_session; ?>"> -->
<div id="contentbox">
<?php
$sql="SELECT * FROM universities where university_email=$loggedin_id";
$result=mysqli_query($conn,$sql);
?>

<!-- 
<script src="univesitycrud/jquery/jquery.min.js"></script>
<script src="univesitycrud/bootstrap/js/bootstrap.min.js"></script>
<script src="univesitycrud/datatable/jquery.dataTables.min.js"></script>
<script src="univesitycrud/datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script> -->

<body>


	<!-- SIDEBAR -->
	

</body>
</html>