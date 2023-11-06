<?php

include('php/conn.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Barangay Milagrosa Quezon City</title>
    <link rel="icon" type="image/x-icon" href="media/bglogo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- BOOTSTRAP SELECT -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <!-- SWEET ALERT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.min.css">

    <!--Captcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        .borderPrimary {
            border-top: 3px solid #1266F1;
        }
    </style>

</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom border-1 mb-5" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="media/bglogo.png" alt="Barangay Milagrosa" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="announcement.php">Announcement</a></li>
                    <li class="nav-item"><a class="nav-link" href="#page-top">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 mb-4 pt-5">
        <h1 class="mt-5">Account Registration</h1>
        <div class="row mt-3">

            <div class="col-md-12 mt-1">
                <div class="card shadow borderPrimary ">
                    <div class="card-header">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <!-- RESIDENT TAB -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-resident-tab" data-bs-toggle="pill" data-bs-target="#pills-resident" type="button" role="tab" aria-controls="pills-resident" aria-selected="true">
                                    <h5 class="card-title m-0">Resident / Transient</h5>
                                </button>
                            </li>
                            <!-- NON-RESIDENT TAB -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-nonResident-tab" data-bs-toggle="pill" data-bs-target="#pills-nonResident" type="button" role="tab" aria-controls="pills-nonResident" aria-selected="false">
                                    <h5 class="card-title m-0">Non-Resident</h5>
                                </button>
                            </li>

                        </ul>
                    </div>

                    <div class="card-body p-0">
                        <div class="tab-content" id="pills-tabContent">
                            <!-- RESIDENT BODY -->
                            <div class="tab-pane fade show active" id="pills-resident" role="tabpanel" aria-labelledby="pills-resident-tab" tabindex="0">
                                <div class="card pt-2 border-0">
                                    <form id="residentAccount" novalidate method="POST">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <h5 class="text-center card-title">Resident / Transient</h5>
                                                <h6><b>Instructions:</b></h6>
                                                <p>
                                                    1. Input the necessary details needed for this account registration. All fields with asterisk <span class="required"></span> are required. <br>
                                                    2. Next, make sure to provide a Valid ID, Government Issued ID, or Proof of Residency that will support your identification. <br>
                                                    3. For this account registration, provide an appropriate username and password. <br>
                                                    4. Read and check if all information inputted below is correct. <br>
                                                    5. A Captcha verification is also needed for this account registration. <br>
                                                    6. Lastly, click <b>Register</b> to finish this registration.
                                                </p>
                                                <hr>
                                                <h5 class="mt-3"><b>Personal Information</b></h5>
                                                <div class="row g-3 mt-1 mb-3">

                                                    <div class="col-md-3 position-relative">
                                                        <label for="resident_lastname" class="form-label required">Lastname</label>
                                                        <input type="text" class="form-control" id="resident_lastname" name="resident_lastname" required>
                                                    </div>

                                                    <div class="col-md-3 position-relative">
                                                        <label for="resident_firstname" class="form-label required">Firstname</label>
                                                        <input type="text" class="form-control" id="resident_firstname" name="resident_firstname" required>

                                                    </div>

                                                    <div class="col-md-3 position-relative">
                                                        <label for="resident_middlename" class="form-label">Middlename</label>
                                                        <input type="text" class="form-control" id="resident_middlename" name="resident_middlename" required>

                                                    </div>

                                                    <div class="col-md-3 position-relative">
                                                        <label for="resident_suffix" class="form-label">Suffix</label>
                                                        <input type="text" class="form-control" id="resident_suffix" name="resident_suffix" required>

                                                    </div>

                                                    <div class="col-md-6 position-relative">
                                                        <label for="resident_birthdate" class="form-label required">Birthdate</label>
                                                        <input type="date" class="form-control" id="resident_birthdate" name="resident_birthdate" required>

                                                    </div>

                                                    <div class="col-md-6 position-relative">
                                                        <label for="resident_contactNum" class="form-label required">Contact Number</label>
                                                        <input type="text" class="form-control" id="resident_contactNum" name="resident_contactNum" required>

                                                    </div>

                                                    <div class="col-md-4 position-relative">
                                                        <label for="resident_residency" class="form-label required">Residency</label>
                                                        <select class="form-select" id="resident_residency" name="resident_residency">
                                                            <option selected disabled>Choose Residency</option>
                                                            <option value="Resident">Resident</option>
                                                            <option value="Transient">Transient</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="resident_streetNum" class="form-label required">Street Number</label>
                                                        <input type="text" class="form-control" id="resident_streetNum" name="resident_streetNum" required>

                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="resident_streetName" class="form-label required">Street Name</label>
                                                        <select class="form-control selectFilter border border-1" id="resident_streetName" name="resident_streetName" data-size="5" data-live-search="true" required>
                                                            <option disabled selected value="0">Choose Street</option>
                                                            <?php
                                                            $sql = mysqli_query($conn, "SELECT streetName FROM tbl_streets");
                                                            while ($result = mysqli_fetch_array($sql)) {
                                                            ?>
                                                                <option value="<?php echo $result['streetName']; ?>">
                                                                    <?php echo $result['streetName']; ?>
                                                                </option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mt-3 mb-3">
                                                    <div class="col-md-12">
                                                        <label for="resident_file" class="form-label"><b>For Resident:</b> Proof of Residency or ID with address</label><br>
                                                        <label for="resident_file" class="form-label"><b>For Transient:</b> Transient authorization from land lessor</label>
                                                        <div class="input-group">
                                                            <input class="form-control" type="file" id="resident_file" name="resident_file" accept="image/png, image/jpeg">
                                                            <button class="btn btn-primary" type="button" id="proofView">View</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>

                                            <!--
                                            <li class="list-group-item">
                                                <h5 class="mt-3"><b>Account Credential</b></h5>
                                                <div class="row g-3 mt-1 mb-3">
                                                    <div class="col-md-4">
                                                        <label for="resident_username" class="form-label required">Username</label>
                                                        <input type="text" class="form-control" id="resident_username" name="resident_username" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="resident_password" class="form-label required">Password</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" id="resident_password" name="resident_password" required>
                                                            <button class="btn btn-secondary" type="button" id="eyePass"><i class="bi bi-eye-fill"></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="resident_passwordVal" class="form-label required">Re-type Password</label>

                                                        <div class="input-group">
                                                            <input type="password" class="form-control" id="resident_passwordVal" name="resident_passwordVal" required>
                                                            <button class="btn btn-secondary" type="button" id="evePassVal"><i class="bi bi-eye-fill"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> -->

                                            <li class="list-group-item">
                                                <h5 class="mt-3"><b>Captcha Verification</b></h5>
                                                <div class="row mt-3 mb-3">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="g-recaptcha" data-sitekey="6LdRF3QfAAAAAAQsmC1PkTqOvH7ftnN_jgxofIXd"></div>

                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="d-grid gap-2 d-md-block">
                                                            <button class="btn btn-success" type="submit" id="submit"><i class="bi bi-check-lg me-2"></i>REGISTER</button>
                                                            <a class="btn btn-secondary" type="button" href="index.php"><i class="bi bi-x-lg me-2"></i>CANCEL</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>

                            <!-- NON-RESIDENT BODY -->
                            <div class="tab-pane fade" id="pills-nonResident" role="tabpanel" aria-labelledby="pills-nonResident-tab" tabindex="0">
                                <form method="post" id="nonresidentAccount" novalidate method="POST">
                                    <div class="card pt-2 border-0">
                                        <ul class="list-group list-group-flush">

                                            <li class="list-group-item">
                                                <h5 class="text-center card-title">Non-Residents</h5>
                                                <h6><b>Instructions:</b></h6>
                                                <p>
                                                    1. Input the necessary details needed for this account registration. All fields with asterisk (*) are required. <br>
                                                    2. Next, make sure to provide a Proof of Business that will support your account registration for your business. <br>
                                                    3. For this account registration, provide an appropriate username and password. <br>
                                                    4. Read and check if all information inputted below is correct. <br>
                                                    5. A Captcha verification is also needed for this account registration. <br>
                                                    6. Lastly, click <b>Register</b> to finish this registration.
                                                </p>
                                                <hr>
                                                <h5 class="mt-3"><b>Personal Information</b></h5>
                                                <div class="row g-3 mt-1 mb-3">

                                                    <div class="col-md-3 position-relative">
                                                        <label for="nonresident_lastname" class="form-label required">Lastname</label>
                                                        <input type="text" class="form-control" id="nonresident_lastname" name="nonresident_lastname" required>
                                                    </div>

                                                    <div class="col-md-3 position-relative">
                                                        <label for="nonresident_firstname" class="form-label required">Firstname</label>
                                                        <input type="text" class="form-control" id="nonresident_firstname" name="nonresident_firstname" required>
                                                    </div>

                                                    <div class="col-md-3 position-relative">
                                                        <label for="nonresident_middlename" class="form-label">Middlename</label>
                                                        <input type="text" class="form-control" id="nonresident_middlename" name="nonresident_middlename">
                                                    </div>

                                                    <div class="col-md-3 position-relative">
                                                        <label for="nonresident_suffix" class="form-label">Suffix</label>
                                                        <input type="text" class="form-control" id="nonresident_suffix" name="nonresident_suffix">
                                                    </div>

                                                    <div class="col-md-6 position-relative">
                                                        <label for="nonresident_birthdate" class="form-label required">Birthdate</label>
                                                        <input type="date" class="form-control" id="nonresident_birthdate" name="nonresident_birthdate" required>
                                                    </div>

                                                    <div class="col-md-6 position-relative">
                                                        <label for="nonresident_contactNum" class="form-label required">Contact Number</label>
                                                        <input type="text" class="form-control" id="nonresident_contactNum" name="nonresident_contactNum" required>
                                                    </div>

                                                    <div class="col-md-12 position-relative">
                                                        <label for="nonresident_address" class="form-label required">Home Address</label>
                                                        <input type="text" class="form-control" id="nonresident_address" name="nonresident_address" required>
                                                    </div>
                                                </div>



                                            </li>
                                            <li class="list-group-item">

                                                <div class="row g-3 mt-1 mb-3" id="businessInformation">
                                                    <h5 class="mb-0"><b>Business Information</b></h5>
                                                    <div class="col-md-4">
                                                        <label for="nonresident_bname" class="form-label required">Business Name</label>
                                                        <input type="text" class="form-control" id="nonresident_bname" name="nonresident_bname" required>

                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="nonresident_bstreetNo" class="form-label required">Business Street No.</label>
                                                        <input type="text" class="form-control" id="nonresident_bstreetNo" name="nonresident_bstreetNo" required>

                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="nonresident_bstreet" class="form-label required">Street</label>
                                                        <select class="form-control selectFilter border border-1" id="nonresident_bstreet" name="nonresident_bstreet" data-size="5" data-live-search="true" required>
                                                            <option disabled selected>Choose Street</option>
                                                            <?php
                                                            $sql = mysqli_query($conn, "SELECT streetName FROM tbl_streets");
                                                            while ($result = mysqli_fetch_array($sql)) {
                                                            ?>
                                                                <option value="<?php echo $result['streetName']; ?>">
                                                                    <?php echo $result['streetName']; ?>
                                                                </option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="nonresident_file" class="form-label required"><b>For Business Owner:</b> Proof of Business or DTI</label>

                                                        <div class="input-group">
                                                            <input class="form-control" type="file" id="nonresident_file" name="nonresident_file">
                                                            <button class="btn btn-primary" type="button" id="nonresident_fileView">View</button>

                                                        </div>

                                                    </div>
                                                </div>

                                            </li>
                                            <li class="list-group-item">
                                                <h5 class="mt-3"><b>Catcha Verification</b></h5>
                                                <div class="row mt-3 mb-3">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="g-recaptcha" data-sitekey="6LdRF3QfAAAAAAQsmC1PkTqOvH7ftnN_jgxofIXd"></div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="d-grid gap-2 d-md-block">
                                                            <button class="btn btn-success" type="submit" id="nonResident-submit"><i class="bi bi-check-lg me-2"></i>REGISTER</button>
                                                            <a class="btn btn-secondary" type="button" href="index.php"><i class="bi bi-x-lg me-2"></i>CANCEL</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ======================================================================================================================================== -->
    <!-- JQUERY EXTENSION -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FACEBOOK -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="1Dsy1IkS"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- SWEET ALERT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.all.min.js"></script>

    <!-- BOOTSTRAP SELECT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {

            $('#resident_contactNum').inputmask('099-999-99999', {
                placeholder: 'XXX-XXXX-XXXX'
            })

            $('#nonresident_contactNum').inputmask('099-999-99999', {
                placeholder: 'XXX-XXXX-XXXX'
            })

            $('.selectFilter').selectpicker();

            $('#eyePass').click(function() {
                if ($("#resident_password").attr("type") == "password") {
                    $("#resident_password").prop("type", "text");
                } else {
                    $("#resident_password").prop("type", "password");
                }
            })

            $('#evePassVal').click(function() {
                if ($("#resident_passwordVal").attr("type") == "password") {
                    $("#resident_passwordVal").prop("type", "text");
                } else {
                    $("#resident_passwordVal").prop("type", "password");
                }
            })


 

            $('#nonresident_fileView').click(function() {
                const [file] = nonresident_file.files;
                const acceptedImageTypes = ['image/jpeg', 'image/png'];
                if (file) {
                    const fileType = file['type'];
                    if ($.inArray(fileType, acceptedImageTypes) < 0) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Invalid File',
                            text: 'Invalid File only accept (JPG/PNG) file',

                        })
                    } else {
                        const reader = new FileReader()
                        reader.onload = (e) => {
                            Swal.fire({
                                title: 'Proof of Business Owner',
                                imageUrl: e.target.result,
                                imageHeight: 450,
                            })
                        }
                        reader.readAsDataURL(file)
                    }
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No Picture',
                    })
                }
            })


            //Business Information 
            $('#proofView').click(function() {
                const [file] = resident_file.files;
                const acceptedImageTypes = ['image/jpeg', 'image/png'];
                if (file) {
                    const fileType = file['type'];
                    if ($.inArray(fileType, acceptedImageTypes) < 0) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Invalid File',
                            text: 'Invalid File only accept (JPG/PNG) file',

                        })
                    } else {
                        const reader = new FileReader()
                        reader.onload = (e) => {
                            Swal.fire({
                                title: 'Proof of Residency',
                                imageUrl: e.target.result,
                                imageHeight: 450,
                            })
                        }
                        reader.readAsDataURL(file)
                    }
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No Picture',
                    })
                }
            })


            $('#submit').click(function(e) {
                e.preventDefault();

                let form_data = new FormData();
                var lastname = $('#resident_lastname').val();
                var firstname = $('#resident_firstname').val();
                var middlename = $('#resident_middlename').val();
                var suffix = $('#resident_suffix').val();
                var birthdate = $('#resident_birthdate').val();
                var contactNumber = $('#resident_contactNum').val();
                var residency = $('#resident_residency').val();
                //var username = $('#resident_username').val();
                //var password = $('#resident_password').val();
                //var passwordVal = $('#resident_passwordVal').val();
                var houseNum = $('#resident_streetNum').val();
                var streetName = $('#resident_streetName').val();
                let proofPic = $("#resident_file")[0].files;

                if (lastname == '' || firstname == '' || birthdate == '' || contactNumber == '' || residency == '' || streetName == null || houseNum == null) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Required Information',
                        text: 'Please input all the required field',
                    })
                } else {
                    if (proofPic.length > 0) {
                        Swal.fire({
                            icon: 'question',
                            title: 'Data Entry',
                            text: 'Are you sure you want you want to submit this data?',
                            showCancelButton: true,
                            cancelButtonColor: '#6c757d',
                            confirmButtonColor: '#28a745',
                            confirmButtonText: 'Yes',

                        }).then((result) => {
                            if (result.isConfirmed) {
                                form_data.append('lastname', lastname);
                                form_data.append('firstname', firstname);
                                form_data.append('middlename', middlename);
                                form_data.append('suffix', suffix);
                                form_data.append('birthdate', birthdate);
                                form_data.append('contactNumber', contactNumber);
                                form_data.append('residency', residency);
                                form_data.append('houseNum', houseNum);
                                form_data.append('streetName', streetName);
                                form_data.append('proofPic', proofPic[0]);

                                $.ajax({
                                    type: 'POST',
                                    url: 'php/resident/newResident.php',
                                    data: form_data,
                                    contentType: false,
                                    processData: false,
                                    success: function(res) {
                                        const data = JSON.parse(res);
                                        if (data.error != 1) {
                                            var message = data.em
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: message,
                                                timer: 2000,
                                                showConfirmButton: false,
                                            }).then(() => {
                                                //window.location.reload();
                                            })
                                        } else {
                                            var message = data.em
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'warning',
                                                text: message,
                                            })
                                        }
                                    }
                                })
                            }
                        })

                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Proof',
                            text: 'For Resident: Proof of Residency or ID with address \n For Transient: Transient authorization from land lessor',
                        })
                    }

                }
            })

            $('#nonResident-submit').click(function(e) {
                e.preventDefault();

                let nonResident_form = new FormData();
                var lastname = $('#nonresident_lastname').val();
                var firstname = $('#nonresident_firstname').val();
                var middlename = $('#nonresident_middlename').val();
                var suffix = $('#nonresident_suffix').val();
                var birthdate = $('#nonresident_birthdate').val();
                var contactNumber = $('#nonresident_contactNum').val();
                //var username = $('#resident_username').val();
                //var password = $('#resident_password').val();
                //var passwordVal = $('#resident_passwordVal').val();
                var address = $('#nonresident_address').val();
                var businessName = $('#nonresident_bname').val();
                var businessStreetNum = $('#nonresident_bstreetNo').val();
                var businessStreetName = $('#nonresident_bstreet').val();
                var businessInfo = $('#businessInfo').is(":checked");

                let proofPic = $("#nonresident_file")[0].files;

                if (lastname == '' || firstname == '' || birthdate == '' || contactNumber == '' || address == '' || businessName == '' || businessStreetNum == '' || businessStreetName == '' || businessName == '' || businessStreetNum == '' || businessStreetName == '') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Required Information',
                        text: 'Please input all the required field',
                    })
                } else {

                    if (proofPic.length > 0) {
                        Swal.fire({
                            icon: 'question',
                            title: 'Data Entry',
                            text: 'Are you sure you want you want to submit this data?',
                            showCancelButton: true,
                            cancelButtonColor: '#6c757d',
                            confirmButtonColor: '#28a745',
                            confirmButtonText: 'Yes',

                        }).then((result) => {
                            if (result.isConfirmed) {
                                nonResident_form.append('lastname', lastname);
                                nonResident_form.append('firstname', firstname);
                                nonResident_form.append('middlename', middlename);
                                nonResident_form.append('suffix', suffix);
                                nonResident_form.append('birthdate', birthdate);
                                nonResident_form.append('contactNumber', contactNumber);
                                nonResident_form.append('address', address);
                                nonResident_form.append('businessName', businessName);
                                nonResident_form.append('businessStreetNum', businessStreetNum);
                                nonResident_form.append('businessStreetName', businessStreetName);
                                nonResident_form.append('proofPic', proofPic[0])

                                $.ajax({
                                    type: 'POST',
                                    url: 'php/resident/newNonResidents.php',
                                    data: nonResident_form,
                                    contentType: false,
                                    processData: false,
                                    success: function(res) {
                                        const data = JSON.parse(res);
                                        if (data.error != 1) {
                                            var message = data.em
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: message,
                                                timer: 2000,
                                                showConfirmButton: false,
                                            }).then(() => {
                                                //window.location.reload();
                                            })
                                        } else {
                                            var message = data.em
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'warning',
                                                text: message,
                                            })
                                        }
                                    }
                                })
                            }
                        })

                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Proof',
                            text: 'For Business Owner: Proof of Business or DTI',
                        })

                    }
                }
            })


            /*
                    if (proofPic.length > 0) {
                        Swal.fire({
                            icon: 'question',
                            title: 'Data Entry',
                            text: 'Are you sure you want you want to submit this data?',
                            showCancelButton: true,
                            cancelButtonColor: '#6c757d',
                            confirmButtonColor: '#28a745',
                            confirmButtonText: 'Yes',

                        }).then((result) => {
                            if (result.isConfirmed) {
                                nonResident_form.append('lastname', lastname);
                                nonResident_form.append('firstname', firstname);
                                nonResident_form.append('middlename', middlename);
                                nonResident_form.append('suffix', suffix);
                                nonResident_form.append('birthdate', birthdate);
                                nonResident_form.append('contactNumber', contactNumber);
                                nonResident_form.append('address', address);
                                nonResident_form.append('businessName', businessName);
                                nonResident_form.append('businessStreetNum', businessStreetNum);
                                nonResident_form.append('businessStreetName', businessStreetName);
                                nonResident_form.append('proofPic', proofPic[0]);

                                $.ajax({
                                    type: 'POST',
                                    url: 'php/resident/newOwner.php',
                                    data: nonResident_form,
                                    contentType: false,
                                    processData: false,
                                    success: function(res) {
                                        const data = JSON.parse(res);
                                        if (data.error != 1) {
                                            var message = data.em
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: message,
                                                timer: 2000,
                                                showConfirmButton: false,
                                            }).then(() => {
                                                //window.location.reload();
                                            })
                                        } else {
                                            var message = data.em
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'warning',
                                                text: message,
                                            })
                                        }
                                    }
                                })
                            }
                        })

                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Proof',
                            text: 'For Business Owner: Proof of Business or DTI',
                        })
                    }*/

            /*
            $('#residentAccount').submit(function(e) {
                e.preventDefault();

                var lastname = $('#resident_lastname').val();
                var firstname = $('#resident_firstname').val();
                var birthdate = $('#resident_birthdate').val();
                var contactNumber = $('#resident_contactNum').val();
                var residency = $('#resident_residency').val();
                var username = $('#resident_username').val();
                var password = $('#resident_password').val();
                var passwordVal = $('#resident_passwordVal').val();

                if (lastname == '' || firstname == '' || birthdate == '' || contactNumber == '' || residency == '' || username == '' || password == '' || passwordVal == '') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Required Information',
                        text: 'Please input all the required field',
                    })
                } else {

                    if (password != passwordVal) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Password',
                            text: 'Password mismatch',

                        })

                    } else {

                        Swal.fire({
                            icon: 'info',
                            title: 'Information',
                            text: 'Are you sure you want you want to submit this data',
                            showCancelButton: true,
                            cancelButtonColor: '#6c757d',
                            confirmButtonColor: '#28a745',
                            confirmButtonText: 'Yes',

                        }).then((result) => {
                            if (result.isConfirmed) {

                                $.ajax({
                                    url: 'php/residentAccount.php',
                                    type: 'GET',
                                    data: $(this).serialize(),
                                    success: function(response) {

                                        var res = jQuery.parseJSON(response);
                                        if (res.status == 404) {

                                            switch (res.validation) {
                                                case 1:
                                                    Swal.fire({
                                                        icon: 'warning',
                                                        title: 'Resident not Registered',
                                                        text: "The name entered doesn't exist to our database!",

                                                    })
                                                    break;

                                                case 2:
                                                    Swal.fire({
                                                        icon: 'warning',
                                                        title: 'Resident Currently Pending',
                                                        text: "Data already requested in the system! Wait for the approval of your account.",

                                                    })
                                                    break;

                                                case 3:
                                                    Swal.fire({
                                                        icon: 'info',
                                                        title: 'Resident Officially Registered',
                                                        text: "Data already have an account!",

                                                    })
                                                    break;

                                                case 4:
                                                    Swal.fire({
                                                        icon: 'warning',
                                                        title: 'Invalid Mobile Number',
                                                        text: "Invalid contact number!",

                                                    })
                                                    break;
                                            }

                                            /*
                                            if (res.validation == 1) {

                                                Swal.fire({
                                                    icon: 'warning',
                                                    title: 'Resident not Registered',
                                                    text: "The name entered doesn't exist to our database!",

                                                })

                                            } else if (res.validation == 2) {

                                                Swal.fire({
                                                    icon: 'warning',
                                                    title: 'Resident Currently Pending',
                                                    text: "Data already requested in the system! Wait for the approval of your account.",

                                                })

                                            } else if (res.validation == 3) {

                                                Swal.fire({
                                                    icon: 'info',
                                                    title: 'Resident Officially Registered',
                                                    text: "Data already have an account!",

                                                })

                                            } else if (res.validation == 4) {

                                                Swal.fire({
                                                    icon: 'warning',
                                                    title: 'Invalid Mobile Number',
                                                    text: "Invalid contact number!",

                                                })

                                            } 


                                        } else if (res.status == 200) {

                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: 'Resident successfully registered Please wait for the approval of the barangay officials thank you',
                                                timer: 2000,
                                                showConfirmButton: false,
                                            }).then(() => {

                                            })
                                        }

                                    }
                                })
                            }
                        })
                    }
                }
            }) */


            /*
            Swal.fire({
                icon: 'question',
                title: 'Data Entry',
                text: 'Are you sure you want you want to submit this data?',
                showCancelButton: true,
                cancelButtonColor: '#6c757d',
                confirmButtonColor: '#28a745',
                confirmButtonText: 'Yes',

            }).then((result) => {
                if (result.isConfirmed) {
                    nonResident_form.append('lastname', lastname);
                    nonResident_form.append('firstname', firstname);
                    nonResident_form.append('middlename', middlename);
                    nonResident_form.append('suffix', suffix);
                    nonResident_form.append('birthdate', birthdate);
                    nonResident_form.append('contactNumber', contactNumber);
                    nonResident_form.append('address', address);
                    
                    $.ajax({
                        type: 'POST',
                        url: 'php/resident/newNonResidents.php',
                        data: nonResident_form,
                        contentType: false,
                        processData: false,
                        success: function(res) {
                            const data = JSON.parse(res);
                            if (data.error != 1) {
                                var message = data.em
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: message,
                                    timer: 2000,
                                    showConfirmButton: false,
                                }).then(() => {
                                    //window.location.reload();
                                })
                            } else {
                                var message = data.em
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'warning',
                                    text: message,
                                })
                            }
                        }
                    })
                }
            }) */





        })
    </script>


</body>

</html>