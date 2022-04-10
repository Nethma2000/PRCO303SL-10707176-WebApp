



<html>

<head>
    <title>Companies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Font awesome CDN link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <h1 class=" text-light text-center py-2" style="background-color: rgb(55, 13, 95);">Manage Companies</h1>
    <div class="container">



        <!--modal popup-->
        <div class="modal fade" id="usermodal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adding Company Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="addform" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">

                                <label>Company Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" name="company_name" class="form-control"
                                        placeholder="Enter Company Name" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>Field</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" name="field" class="form-control"
                                        placeholder="Enter Company Name" autocomplete="off" required="required">
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

                                    <input type="text" name="company_address" class="form-control"
                                        placeholder="Enter Company Name" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>Company Contact number</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" name="company_contact" class="form-control"
                                        placeholder="Enter Company Name" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>Name of the HR head</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" name="HRhead" class="form-control"
                                        placeholder="Enter Company Name" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>HR Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" name="HRphone" class="form-control"
                                        placeholder="Enter Company Name" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>Company Website link</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" name="website" class="form-control"
                                        placeholder="Enter Company Name" autocomplete="off" required="required">
                                </div>


                            </div>

                            <div class="form-group">

                                <label>Email Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepared">
                                        <span class="input-group-text" style="background-color: purple; height: 40px;">
                                            <i class="fas fa-search text-light"></i>
                                        </span>
                                    </div>

                                    <input type="text" name="email" class="form-control"
                                        placeholder="Enter Company Name" autocomplete="off" required="required">
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

                                    <input type="text" name="comp_password" class="form-control"
                                        placeholder="Enter Company Name" autocomplete="off" required="required">
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

                                    <input type="text" class="form-control" placeholder="Enter Company Name"
                                        autocomplete="off" required="required">
                                </div>


                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-dark"></button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                            <input type="hidden" name="action" value="adduser"> 
                            <input type="hidden" name="userId" id="userId" value=""> 

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

<table class="table" id="usertable">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Company Name</th>
        <th scope="col">Field</th>
        <th scope="col">Address</th>
        <th scope="col">Contact</th>
        <th scope="col">HRHead</th>
        <th scope="col">HRPhone</th>
        <th scope="col">Website</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Operations</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>
           <a href="#" class="mr-3 profile" data-target="#userViewModal" data-toggle="modal" title="View Profile"><i class="fas fa-eye text-success"></i></a>
           <a href="#" class="mr-3 edituser" title="Edit details" data-target="#usermodal" data-toggle="modal"><i class="fas fa-edit text-info"></i></a>
           <a href="#" class="mr-3 deleteuser" title="Delete user"><i class="fas fa-trash-alt text-danger"></i></a>
        </td>
      </tr>
    
    </tbody>
  </table>


  <!--Company Profile-->
 <div class="modal fade" id="userViewModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Company profile <i class="fas fa-user"></i></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                        <div class="modal-body">

                        <div class="container" id="profile">
                            <h4>All user data</h4>

                        </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    
                </div>
            </div>
        </div>
  <!--pagination-->
  <nav aria-label="..."id="pagination">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<!-- 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


        <!--js file-->
        <script src="companyscript.js"> 
        </script>

</body>

</html>