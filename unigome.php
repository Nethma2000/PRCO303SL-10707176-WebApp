<?php
include('unisession.php');
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


    <title>University Dashboard</title>
</head>

<body>
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Career NextGen</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
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
            <li>
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
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">University Dashboard</a>
            <form action="#">
                <h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>

            </form>
            <input readonly type="text" class="form-control" id="university_name" name="university_name" value="<?php echo $loggedin_session; ?>">

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
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>

            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="info-box-text">Registered<br> Undergraduates </span>

                    <!-- <span class="text">
						<h3>1020</h3>
						<p>New Order</p>
					</span> -->
                    <?php
                    $sql = "SELECT * FROM students where institute='$loggedin_session'";

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
                    <i class='bx bxs-group'></i>
                    <span class="info-box-text">Partnership<br> Companies </span>

                 
                    <?php
                    $sql = "SELECT * FROM partners where loggedin_session='$loggedin_session'";

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
                    <span class="info-box-text">Other Registered<br> Universities </span>

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
                    <div class="head">
                        <h3>Admin Panel Details</h3>

                    </div>
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
                <div class="todo">
                    <img style="width: 350px;height:250px" src="images/Career nextgen logo.png">
                </div>
            </div>
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

<div style="position:absolute; left:300px; top:100px;" id="center">
    <div id="center-set">
        <!-- <h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1> -->
        <!-- <input readonly type="text" class="form-control" id="university_name" name="university_name" value="<?php echo $loggedin_session; ?>"> -->
        <div id="contentbox">
            <?php
            $sql = "SELECT * FROM universities where university_email=$loggedin_id";
            $result = mysqli_query($conn, $sql);
            ?>



            <body>


                <!-- SIDEBAR -->


            </body>

</html>