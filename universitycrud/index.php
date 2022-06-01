<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manage Universities</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<h1 style="background-color: purple;height: 70px;text-align:center;padding-top:15px;color:white;font-weight:bold" class="page-header text-center">Manage Universities</h1>

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table style="margin-left: -10px;" id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>Name</th>
						<th>Address</th>
						<th>Email</th>
						<th>Telephone</th>
						<th>Career Guidance head</th>
						<th>Career Guidance contact</th>
					
						
						<th>Action</th>
					</thead>
					<tbody>
					
				

						<?php
						include_once('connection.php');
							$sql = "SELECT * FROM universities";

								
						

							//use for MySQLi-OOP
							$query = $conn->query($sql);
	
	
							while($row = $query->fetch_assoc()){
	
						?>
	
								<tr>
	
	
	
									<td><?php echo $row['university_name']; ?></td>
	
									<td><?php echo $row['university_address']; ?></td>
	
									<td><?php echo $row['university_email']; ?></td>
	
									<td><?php echo $row['university_contactnum']; ?></td>
									<td><?php echo $row['carerguidanceHead']; ?></td>
	
									<td><?php echo $row['carerguidanceNumber']; ?></td>
	
									<!-- <td><?php echo $row['password']; ?></td> -->
	
	
	
									<td>
	
										<a class="btn btn-info" href="universityupdate.php?university_email=<?php echo $row['university_email']; ?>">Edit</a>&nbsp;
										
										<a class="btn btn-danger" href="universitydelete.php?university_email=<?php echo $row['university_email']; ?>">Delete</a>
									</td>
								</tr>
	
						<?php       }
						
	
						?>
	
			
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
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
</script>
</body>
<<style>
.PP{
	text-align: center;
}
</style>
</html>