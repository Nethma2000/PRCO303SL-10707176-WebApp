<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Font awesome CDN link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php

include "config.php";

if (isset($_POST['update'])) {


    $university_name = $_POST['university_name'];
    $university_address = $_POST['university_address'];
    $university_email = $_POST['university_email'];
    $university_contactnum = $_POST['university_contactnum'];
    $carerguidanceHead = $_POST['carerguidanceHead'];
    $carerguidanceNumber = $_POST['carerguidanceNumber'];
    $password = $_POST['password'];



    $sql = "UPDATE `universities` SET `university_name`='$university_name',`university_address`='$university_address',`university_email`='$university_email',`university_contactnum`='$university_contactnum',`carerguidanceHead`='$carerguidanceHead',`carerguidanceNumber`='$carerguidanceNumber',`password`='$password' WHERE `university_email`='$university_email'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Record updated successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['university_email'])) {

    $user_id = $_GET['university_email'];

    $sql = "SELECT * FROM `universities` WHERE `university_email`='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {



            $university_name = $row['university_name'];

            $university_address = $row['university_address'];

            $university_email = $row['university_email'];

            $university_contactnum  = $row['university_contactnum'];

            $carerguidanceHead = $row['carerguidanceHead'];

            $carerguidanceNumber = $row['carerguidanceNumber'];

            $password = $row['password'];
        }

?>
<link rel="stylesheet" href="uniup.css">
        <h2>User Update Form</h2>

        <form action="" method="post">
            <div class="viewcont">


            <fieldset>

                <!-- <legend>Personal information:</legend> -->
              
                First name:<br>
               
                <input type="text" name="university_name" value="<?php echo $university_name; ?>">

                <input type="hidden" name="user_id" value="<?php echo $university_email; ?>">

                <br>

                Last name:<br>

                <input type="text" name="university_address" value="<?php echo $university_address; ?>">

                <br>

                Email:<br>

                <input type="text" name="university_email" value="<?php echo $university_email; ?>">

                <br>

                Password:<br>

                <input type="text" name="university_contactnum" value="<?php echo $university_contactnum; ?>">

                <br>
                Email:<br>

                <input type="text" name="carerguidanceHead" value="<?php echo $carerguidanceHead; ?>">

                <br>
                Email:<br>

                <input type="text" name="carerguidanceNumber" value="<?php echo $carerguidanceNumber; ?>">

                <br>
                Email:<br>

                <input type="text" name="password" value="<?php echo $password; ?>">

                <br>


                <br><br>

                <input type="submit" value="Update" name="update" style="background:linear-gradient(to right,#a506e4, #5907f3);">

            </fieldset>
            </div>
        </form>

        </body>

        </html>

<?php

    } else {

        header('Location: universityview.php');
    }
}

?>