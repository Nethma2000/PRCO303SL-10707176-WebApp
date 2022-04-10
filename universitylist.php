<?php

include "config.php";

$sql = "SELECT * FROM universities";

$result = $conn->query($sql);

?>


<html>

<head>
    <title>Universities</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Font awesome CDN link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <h1 class=" text-light text-center py-2" style="background-color: rgb(55, 13, 95);">Manage Universities</h1>
    <div class="container">



        <!--modal popup-->
        <div class="modal fade" id="usermodal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adding University Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="universityregistration.php" class="uni-reg-form" method="post">
                        <div class="modal-body">

                            <div class="form-group">

                                <label>University Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Enter the University name" name="university_name" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Enter the address" name="university_address" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>University Contact Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Enter the number of head career guidance unit" name="university_contactnum" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>Carrer Guidance Head</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Enter the nme of head career guidance unit" name="carerguidanceHead" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>Carrer Guidance unit Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Enter the number of head career guidance unit" name="carerguidanceNumber" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Enter the nemail" name="university_email" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" required="required">
                                </div>


                            </div>




                            <div class="form-group">

                                <label>Confirm Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Confirm your password" autocomplete="off" required="required">
                                </div>


                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-dark"></button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>



                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="row mb-3">
            <div class="col-5">
                <div class="input-group">
                    <div class="input-group-prepared">
                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                            <i class="fas fa-search text-light"></i>
                        </span>
                    </div>

                    <input type="text" class="form-control" placeholder="Search User">
                </div>

            </div>

            <div class="col-5">
                <div class="input-group">
                    <div class="input-group-prepared">
                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                            <i class="fas fa-search text-light"></i>
                        </span>
                    </div>

                    <input type="text" class="form-control" placeholder="Search User">
                </div>

            </div>
            <div class="col-2">
                <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#usermodal">

                    Add New</button>
            </div>

        </div>

        <!--table-->

        <div class="container">

            <table class="table">

                <thead>

                    <tr>

                        <th>Name</th>

                        <th>Address</th>
                        <th>Email</th>

                        <th>Contact</th>



                        <th>Head</th>
                        <th>number</th>
                        <th>password</th>

                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    <?php

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {

                    ?>

                            <tr>



                                <td><?php echo $row['university_name']; ?></td>

                                <td><?php echo $row['university_address']; ?></td>

                                <td><?php echo $row['university_email']; ?></td>

                                <td><?php echo $row['university_contactnum']; ?></td>
                                <td><?php echo $row['carerguidanceHead']; ?></td>

                                <td><?php echo $row['carerguidanceNumber']; ?></td>

                                <td><?php echo $row['password']; ?></td>



                                <td>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#userViewModal">View</a>&nbsp;

                                    <a class="btn btn-info" href="universityupdate.php?university_email=<?php echo $row['university_email']; ?>">Edit</a>&nbsp;
                                    
                                    <a class="btn btn-danger" href="universitydelete.php?university_email=<?php echo $row['university_email']; ?>">Delete</a>
                                </td>
                            </tr>

                    <?php       }
                    }

                    ?>

                </tbody>

            </table>

        </div>


        <!--University Profile-->
        <div class="modal fade" id="userViewModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">University profile <i class="fas fa-user"></i></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <div class="container" id="profile">
                            <h4>All university data</h4>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>







        <!--pagination-->
        <nav aria-label="..." id="pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>




    <!--jquery CDN-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <!-- 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!--js file-->
    <script src="companyscript.js">
    </script>

</body>

</html>