<?php
 include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" href="css/coursestyles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700&family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
 <title>Student Home-Courses</title>
</head>
<body>


<?php
include('dbConnection.php');

if(isset($_REQUEST['requpdate'])){
    if(($_REQUEST['stu_id']=="")|| ($_REQUEST['stuname']=="")||
    ($_REQUEST['stuemail']=="")|| ($_REQUEST['stu_occ']=="")|| ($_REQUEST['stupass']=="")){
        $msg='<div class ="alert alert-warning col-sm-6 ml-5 mt-2"
        role="alert">Fill all fields</div>';
    }else{
        $cid=$_REQUEST['stu_id'];
        $cname=$_REQUEST['stuname'];
        $cdesc=$_REQUEST['stuemail'];
        $cduration=$_REQUEST['stu_occ'];
        $cpass=$_REQUEST['stupass'];

        // $cimg='../courses/image/courseimg/'.$_FILES['stu_img']['name'];

        $sql="UPDATE studentenroll SET stu_id='$cid', stuname='$cname',
        stuemail='$cdesc',stu_occ='$cduration',stupass='$cpass'
        WHERE stu_id='$cid'";

if($conn->query($sql)==TRUE){
    $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">
    Course Updated Successfully</div>';
}
else{
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">
    Unable to Update Course </div>';
}

    }
}


?>


<nav class="navbar navbar-dark fixed-top p-0 shadow"
        style="background-color: purple;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"
    href="adminhome.php">Career NextGen<small class="text-white">Admin-Courses</small></a>

    </nav>
 <nav>
 <nav style = "position:absolute; left:20px; top:100px;" class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print none">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="studenthome.php">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-accessibe-icon"></i>
                        My Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-accessibe-icon"></i>
                        All Available Courses
                    </a>
                </li>
            
            
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-accessibe-icon"></i>
                        Feedback
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="fas fa-accessibe-icon"></i>
                        Logout
                    </a>
                </li>
            </ul>
   
    
 </nav>

<div style = "position:absolute; left:300px; top:100px;" id="center">
<div id="center-set">
<h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>
<div id="contentbox">
<?php
$sql="SELECT * FROM studentenroll where stu_id=$loggedin_id";
$result=mysqli_query($conn,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg"></div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4">            <input readonly type="text" class="form-control" id="stu_id" name="stu_id" value="<?php echo $rows['stu_id']; ?>">
</td>
</tr>


<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4">            <input type="text" class="form-control" id="stuname" name="stuname" value="<?php echo $rows['stuname']; ?>">
</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email:</div></td>
<td class="tl-4">            <input type="text" class="form-control" id="stuemail" name="stuemail" value="<?php echo $rows['stuemail']; ?>">
</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Occupation:</div></td>
<td class="tl-4">            <input type="text" class="form-control" id="stu_occ" name="stu_occ" value="<?php echo $rows['stu_occ']; ?>">
</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Password:</div></td>
<td class="tl-4">            <input type="password" class="form-control" id="stupass" name="stupass" value="<?php echo $rows['stupass']; ?>">
</td>
</tr>

<!-- <tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
<td class="tl-4"><input type="file" class="form-control-file" id="stu_img" name="stu_img"></td>
</tr> -->

</table>
<br><br>
<h5 style="color: red;background-color:yellow;">Note: If you update any detail here, the changes will be applied for your course profile only.</h5>
    <h5  style="color: red;background-color:yellow;">So,Please manitain same details as for you main Career NextGen account to avoid any complexities</h5>

<div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate"
            name="requpdate">Update</button>
            <!-- <a href="coursesview.php" class="btn btn-secondary">Close</a> -->
        </div>

</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<!-- <div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div> -->
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>
</body>
</html>