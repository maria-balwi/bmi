<!--doctype html-->
<html>

<head>
    <meta charset="utf-8">

    <title>Services</title>

    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="css/newcert.css" />
    <link rel="stylesheet" href="css/navigation.css" />
    <link rel="icon" href="media/logo.png">

    <!-- BOOTSTRAP LINK CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- BOOSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <section class="main">
        <!--navigation-->
        <nav>
            <!--logo-->
            <a href="index.php" class="logo">
                <img src="media/logo.png" />
            </a>
            <!--menu-btn----------->
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <!--menu-->
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="announcement.php">Announcement</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="newcert.php">Services</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <!--main-content-->
        <div class="home-content">
            <!--text-->
            <div class="home-text">
                <h1>Services</h1>
            </div>

        </div>

    </section>

    <!--services----------------------->
    <section class="services">
        <!--box-container----------------->
        <div class="box-container">
            <!--barangay ID-------->
            <div class="box">
                <font>Barangay ID</font><br>
                Requirements:
                <ul>
                    <li>6 months residency in the barangay</li>
                    <li>Proof of residency</li>
                    <li>Certificate of employment issued by employer (Kasambahay, driver etc.)</li>
                </ul>
                <p><b>Fee: </b>₱80</p>
                <!--btn--------->
                <a href="login.php" class="button">Click to apply</a>
            </div>

            <!--Barangay Business Clearance-------->
            <div class="box">
                <font>Barangay Business Clearance</font><br>
                Requirements:
                <ul>
                    <li>Latest Community Tax Certificate (Cedula)</li>
                    <li>DTI Business Name Registration</li>
                    <li>Barangay Business Clearance Fee</li>
                </ul>
                <p><b>Fee: </b><a href="pic/Business_Clearance_Fee.pdf" class="link" target="_blank" style="display: inline;">Barangay Business Clearance Fee Lists</a></p>
                <!--btn--------->
                <a href="login.php" class="button">Click to apply</a>
            </div>

            <!--Barangay Clearance-------->
            <div class="box">
                <font>Barangay Clearance</font><br>
                Requirements:
                <ul>
                    <li>6 months residency in the barangay</li>
                    <li>Proof of residency</li>
                    <li>Certificate of employment issued by employer (Kasambahay, driver etc.) </li>
                </ul>
                <p><b>Fee: </b>₱80</p>
                <!--btn--------->
                <a href="login.php" class="button">Click to apply</a>
            </div>
            <!--Barangay Certificate-------->
            <div class="box">
                <font>Barangay Certificate</font><br>
                Requirements:
                <ul>
                    <li>6 months residency in the barangay</li>
                    <li>Proof of residency</li>
                    <li>Certificate of employment issued by employer (Kasambahay, driver etc.) </li>
                </ul>
                <p><b>Fee: </b>₱150</p>
                <!--btn--------->
                <a href="login.php" class="button">Click to apply</a>
            </div>
            <!--Barangay Indigency-------->
            <div class="box">
                <font>Barangay Indigency</font><br>
                Requirements:
                <ul>
                    <li>6 months residency in the barangay</li>
                    <li>Proof of residency</li>
                    <li>Certificate of employment issued by employer (Kasambahay, driver etc.) </li>
                </ul>
                <p><b>Fee: </b>FREE</p>
                <!--btn--------->
                <a href="login.php" class="button">Click to apply</a>
            </div>

            <!--Community Tax Certificate-------->
            <div class="box">
                <font>Community Tax Certificate</font><br>
                Requiremets:
                <ul>
                    <li>Accomplished Community Tax Declaration Form (CTDF) (from City Treasurer’s Office)</li>
                    <li>Government issued valid ID</li>
                    <li>Proof of Income</li>
                    <li>Payslip</li>
                    <li>BIR form 2316</li>
                </ul>
                <p><b>Fee: </b>₱80 (minimum) *Amount may vary depending on the income</p>
                <!--btn--------->
                <a href="certificates/ctc.php" class="button" data-bs-toggle="modal" data-bs-target="#ctc">CTC Form</a>
            </div>




            <!--Blotter-------->
            <div class="box">
                <font>Complainant Report</font><br>
                Requirements:
                <ul>
                    <li>Supporting document for the complaint</li>
                </ul>
                <p><b>Fee: </b>₱200</p>
                <!--btn--------->
                <a href="certificates/blotter.php" class="button" data-bs-toggle="modal" data-bs-target="#blotter">Complainant Form</a>
            </div>
        </div>
    </section>

    <!-- DATA ENTRY MODAL CTC -->
    <form id="form" class="  needs-validation" novalidate>
        <div class="modal fade" id="ctc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">CTC</h5>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="d-flex flex-row flex-wrap ">

                            <!-- First Name -->
                            <div class="flex-fill col m-1 position-relative">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                                <div class="invalid-tooltip">
                                    Please Input First Name
                                </div>

                            </div>

                            <!-- Middle Name -->
                            <div class="flex-fill col m-1 position-relative">
                                <label for="middleName">Middle name</label>
                                <input type="text" class="form-control" id="middleName" placeholder="Middle Name" required>
                                <div class="invalid-tooltip">
                                    Please Input Middle Name
                                </div>

                            </div>

                            <!-- Last Name -->
                            <div class="flex-fill col m-1 position-relative">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                                <div class="invalid-tooltip">
                                    Please Input Last Name
                                </div>

                            </div>

                            <!-- Suffix -->
                            <div class="flex-fill col m-1 position-relative">
                                <label for="suffix">Suffix</label>
                                <input type="text" class="form-control" id="suffix" placeholder="Suffix">
                            </div>

                        </div>

                        <div class="d-flex flex-row flex-wrap ">

                            <!-- ADDRESS -->
                            <div class="flex-fill col m-1 position-relative">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Address" required>
                                <div class="invalid-tooltip">
                                    Please Input Address
                                </div>

                            </div>

                            <!-- ADDRESS -->
                            <div class="flex-fill col m-1 position-relative">
                                <label for="number">Number</label>
                                <input type="text" class="form-control" id="address" placeholder="number" required>
                                <div class="invalid-tooltip">
                                    Please Input Number
                                </div>

                            </div>

                        </div>

                        <!-- Birthdate Birthplace Height Weight-->
                        <div class="d-flex flex-row flex-wrap ">
                            <div class="flex-fill col m-1 position-relative">
                                <label for="birthdate" class="form-label">Birthdate</label>
                                <input type="date" class="form-control" placeholder="Birthdate" required>
                                <div class="invalid-tooltip">
                                    Please Input Birthdate
                                </div>
                            </div>

                            <div class="flex-fill col m-1 position-relative">
                                <label for="birthplace" class="form-label">Birthplace</label>
                                <input type="text" class="form-control" placeholder="Birthplace" required>
                                <div class="invalid-tooltip">
                                    Please Input Birthplace
                                </div>
                            </div>


                            <div class="flex-fill col m-1 position-relative">
                                <label for="height" class="form-label">Height</label>
                                <input type="number" class="form-control" placeholder="height" required>
                                <div class="invalid-tooltip">
                                    Please Input Height
                                </div>
                            </div>


                            <div class="flex-fill col m-1 position-relative">
                                <label for="weight" class="form-label">Weight</label>
                                <input type="number" class="form-control" placeholder="weight" required>
                                <div class="invalid-tooltip">
                                    Please Input Weight
                                </div>
                            </div>

                        </div>

                        <!-- Gender Citizenship Civil Status-->
                        <div class="d-flex flex-row flex-wrap ">

                            <div class="flex-fill col m-1 position-relative">
                                <label for="gender">Gender </label>
                                <select class="form-select" id="gender" required>
                                    <option selected disabled value="">Choose Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Please Input Gender
                                </div>
                            </div>

                            <div class="flex-fill col m-1 position-relative">
                                <label for="citizenship">Citizenship</label>
                                <input type="text" class="form-control" id="citizenship" placeholder="" required>
                                <div class="invalid-tooltip">
                                    Please Input Citizenship
                                </div>
                            </div>


                            <div class="flex-fill col m-1 position-relative">
                                <label for="civilStatus">Civil Status</label>
                                <select class="form-select" required>
                                    <option selected disabled value="">Choose Civil Status</option>
                                    <option value="1">Single</option>
                                    <option value="2">Married</option>
                                    <option value="2">Divorced</option>
                                    <option value="2">Seperated</option>
                                    <option value="2">Widowed</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Choose Civil Status
                                </div>
                            </div>
                        </div>

                        <!-- ICR No. PROFFESSION -->
                        <div class="d-flex flex-row flex-wrap ">
                            <div class="flex-fill col m-1 position-relative">
                                <label for="icr">ICR No. (if an Alien) </label>
                                <input type="number" id="icr" width="270" class="form-control" />

                            </div>

                            <div class="flex-fill col m-1 position-relative">
                                <label for="proffession">Proffession / Occupation / Business</label>
                                <input type="text" class="form-control" id="proffession" placeholder="" required>
                                <div class="invalid-tooltip">
                                    Please Input Proffession
                                </div>
                            </div>
                        </div>

                        <!-- Other Questions-->
                        <div class="d-flex flex-row flex-wrap ">
                            <div class="flex-fill col m-1 mt-1 position-relative">
                                <label for="grossReceipt">1. GROSS RECEIPTS OR EARNINGS DERIVED FROM BUSINESS DURING THE PRECEDING YEAR ( 1.00 for Every 1,000.00)</label>
                                <input type="number" id="icr" width="270" class="form-control" required />
                                <div class="invalid-tooltip">
                                    Please Input Gross Receipt
                                </div>
                            </div>

                            <div class="flex-fill col m-1 mt-1 position-relative">
                                <label for="salaries">2. SALARIES OR GROSS RECEIPT OR EARNINGS DERVIED FROM EXERCISE OF PROFESSION OR PURSUIT OF ANY OCCUPATION ( 1.00 for every 1,000.00)</label>
                                <input type="text" class="form-control" id="proffession" placeholder="" required>
                                <div class="invalid-tooltip">
                                    Please Input Salaries
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row flex-wrap ">
                            <div class="flex-fill m-1">
                                <label for="icr">TIN (if Any)</label>
                                <input type="number" id="icr" width="270" class="form-control" />
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verification">SAVE</button>
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--MODAL FORM FOR COMPLAINANT-->
    <form id="form" class="needs-validation" novalidate>
        <div class="modal fade" id="blotter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Case</h5>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!--Complainant Name, Address, Number-->
                    <div class="modal-body">
                        <!-- COMPLAINANT  -->
                        <h5>Complainant</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="complainantName" class="form-label">Complainant's Name</label>
                                <input type="text" class="form-control" id="complainantName" required>
                                <div class="invalid-tooltip">
                                    Please input Complainant's Name
                                </div>

                            </div>
                            <div class="col-md-6">
                                <label for="contact" class="form-label">Contact No.</label>
                                <input type="number" class="form-control" id="contact" required>
                                <div class="invalid-tooltip">
                                    Please input Contact No.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control" id="address" required>
                                <div class="invalid-tooltip">
                                    Please input Address
                                </div>

                            </div>
                        </div>

                        <!-- RESPONDENT  -->
                        <hr>
                        <h5 class="mt-3">Respondent</h5>
                        <div class="MutipleRecord">
                            <div class="row g-3 duplicate-row">
                                <div class="col-md-6">
                                    <label for="complainantName" class="form-label">Respondent Name</label>
                                    <input type="text" class="form-control" id="complainantName" required>
                                    <div class="invalid-tooltip">
                                        Please input Respondent Name
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <label for="contact" class="form-label">Contact No.</label>
                                    <input type="number" class="form-control" id="contact" required>
                                    <div class="invalid-tooltip">
                                        Please input Contact No.
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Address</label>

                                    <div class="input-group mb-3">
                                        <input class="form-control" id="address" required>
                                        <div class="invalid-tooltip">
                                            Please input Address
                                        </div>
                                        <div class="input-group-append ms-1">
                                            <button type="button" class="btn btn-lg btn-danger  btn-remove "><i class="bi bi-trash3-fill"></i></button>
                                        </div>
                                    </div>

                                </div>
                                <hr>

                            </div>
                        </div>

                        <!-- BUTTON FOR DUPLICATE-->
                        <div class="row mt-1">
                            <div class="col">
                                <button type="button" class="btn btn-primary" id="addmorebtn">Add Respondent</button>

                            </div>
                        </div>

                        <div class="row mt-4 g-3">
                            <div class="col-md-12 position-relative">
                                <label for="purpose" class="form-label">Blotter Details</label>
                                <textarea class="form-control" id="purpose" rows="3" required></textarea>
                                <div class="invalid-tooltip">
                                    Please input Purpose
                                </div>

                            </div>

                            <div class="col-md-12 position-relative">
                                <label for="formFile" class="form-label">Upload Proof (If available)</label>
                                <input class="form-control" type="file" id="formFile">

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#verification">Submit</button> <!-- data-bs-toggle="modal" data-bs-target="#verification" -->
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--MODAL FOR VERIFICATION-->
    <!-- VERIFICATION MODAL -->
    <div class="modal fade" id="verification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <!--TITLE-->
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body mt-3 mb-3">
                    <div class="modal-body text-center">
                        Form is successfully submitted!
                        <br>Your Reference Number is 012345


                        <div class="text-danger">Please take note of your reference Number</div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewData">OK</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>

                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>


<script>
    $(document).ready(function() {
        $("#addmorebtn").click(function() {
            $(".MutipleRecord .duplicate-row:last-child").clone().appendTo(".MutipleRecord");
        });

        $(document).on('click', '.btn-remove', function() {
            if ($(".MutipleRecord .duplicate-row").length > 1) {
                $(this).parents(".duplicate-row").remove();
            }
        });

    });

    var dd_main = document.querySelector(".dd_main");

    dd_main.addEventListener("click", function() {
        this.classList.toggle("active");
    })

    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>



<!-- Form validation -->
<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)

            })
    })()
</script>