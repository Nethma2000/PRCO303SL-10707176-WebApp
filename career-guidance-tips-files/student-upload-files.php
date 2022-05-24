<html>
<title>File|Mgr</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link href="globe.png" rel="shortcut icon">
<?php
date_default_timezone_set("Asia/Calcutta");

?>


<?php
$conn = mysqli_connect('localhost', 'root', '123', 'careernextgen');

if (isset($_POST['submit']) != "") {
	$name = $_FILES['photo']['name'];
	$size = $_FILES['photo']['size'];
	$type = $_FILES['photo']['type'];
	$temp = $_FILES['photo']['tmp_name'];
	$date = date('Y-m-d H:i:s');
	$caption1 = $_POST['caption'];
	$link = $_POST['link'];

	move_uploaded_file($temp, "files/" . $name);

	$query = $conn->query("INSERT INTO fileupload (name,date) VALUES ('$name','$date')");
	if ($query) {
		header("location:student-upload-files.php");
	} else {
		die(mysqli_error($conn));
	}
}
?>


<html>

<body>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
	</head>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>

	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
	<!-- <?php include('dbcon.php'); ?> -->
	<style>
		.table tr th {

			border: #d9a7e8 1px solid;

			position: relative;
			font-size: 12px;
			text-transform: uppercase;
		}

		table tr td {

			border: #d9a7e8 1px solid;
			color: black;
			position: relative;
			font-size: 12px;

			text-transform: uppercase;
		}


		#photo {
			/* border: 1px #A9A9A9 solid; */
			/* background-color: #00BFFF; */
			/* color: #fff; */
			font-family: Arial;
			font-size: 20px;
		}
	</style>

	<div style="background-color: purple;width:100%;height:80px;margin-top:0px">

		<h3 style="color: white;text-align: center;padding-top:22px;">Career Guidance Files Management</h3>


	</div>
	<br>
	<form enctype="multipart/form-data" action="" id="wb_Form1" name="form" method="post">

		<input type="file" name="photo" id="photo" required="required">
		<input style="background-color: purple;color:white;" type="submit" class="btn btn-" value="UPLOAD" name="submit">
	</form>
	<div class="col-md-18">
		<div class="container-fluid" style="margin-top:0px;">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="table-responsive">


							<form method="post">
								<table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">

									<thead>

										<tr>

											<th style="color:#751b8f;font-weight:bolder;font-size:15px">File ID</th>
											<th style="color:#751b8f;font-weight:bolder;font-size:15px">File Name</th>
											<th style="color:#751b8f;font-weight:bolder;font-size:15px">Uploaded Date</th>
											<th style="color:#751b8f;font-weight:bolder;font-size:15px">Download</th>
										


										</tr>
									</thead>
									<tbody>
										<?php
										$query = mysqli_query($conn, "select * from fileupload  WHERE publish='yes'") or die(mysqli_error($conn));
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
											$name = $row['name'];
											$date = $row['date'];
										?>

											<tr>

												<td><?php echo $row['id'] ?></td>
												<td><?php echo $row['name'] ?></td>
												<td><?php echo $row['date'] ?></td>
												<td>
													<a href="file-download.php?filename=<?php echo $name; ?>" title="click to download"><span class="glyphicon glyphicon-download" style="font-size:20px; color:purple"></span></a>
												</td>
											
											</tr>

										<?php } ?>
									</tbody>
								</table>




						</div>

						</form>

					</div>
				</div>
			</div>
		</div>



</body>

</html>