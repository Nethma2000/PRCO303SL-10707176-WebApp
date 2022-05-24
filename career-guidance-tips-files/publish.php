
<?php
extract($_REQUEST);

$conn = mysqli_connect('localhost','root','123','careernextgen');

$sql=mysqli_query($conn,"select * from fileupload where id='$del'");
$row=mysqli_fetch_array($sql);

// $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

mysqli_query($conn,"UPDATE  fileupload SET publish='yes' where id='$del'");

header("Location:admin-files-upload.php");

?>