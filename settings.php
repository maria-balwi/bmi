<?php

session_start();
$uname = $_SESSION['uname'];
include('php/conn.php');

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">

    <title> Account Settings</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- BOOTSTRAP LINK CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="css/setting.css" />
    <link rel="icon" href="media/logo.png">
</head>

<body>
    <div class="wrapper">
        <div class="navbar">
            <div class="logo">
                <a href="#">Barangay Milagrosa</a>
            </div>
            <div class="nav_right">
                <ul>
                    <li class="nr_li dd_main">
                        <img src="https://ronaldmottram.co.nz/wp-content/uploads/2019/01/default-user-icon-8-300x300.jpg" alt="profile_img" class="icon">

                        <div class="dd_menu">
                            <div class="dd_left">
                                <ul>
                                    <li><i class="fas fa-home"></i></li>
                                    <li><i class="fas fa-cog"></i></li>
                                    <li><i class="fas fa-sign-out-alt"></i></li>
                                </ul>
                            </div>
                            <div class="dd_right">
                                <ul>
                                    <li><a href="resident_interface.php">Home</a></li>
                                    <li><a href="settings.php">Settings</a></li>
                                    <li><a href="login.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Account Settings</h1>
        <hr>
        <br>
        <h5>Account Information</h5>
        <div class="row">
            <div class="column text-center">
                <img src="https://th.bing.com/th/id/OIP.0wI5BPNqM5xVjwYwVlMI4wAAAA?pid=ImgDet&rs=1" class="mt-2" style="width:10%; border-radius: 50%; margin-left:2%;">
            </div>
        </div>
        
        <?php
            $query = mysqli_query($conn, "SELECT * FROM tbl_accounts 
            INNER JOIN tbl_residents ON tbl_accounts.residentID = tbl_residents.residentID
            WHERE username = '$uname'");
            $row = mysqli_fetch_array($query);
        ?>

        <div class="row">
            <div class="column">
                <label for="resnum" class="formlabel">Account Number </label>
                <input type="text" class="form-control" size="62" name="resnum" maxlength="11" disabled value="<?php echo $row['accountID']; ?>">
            </div>

        </div>
        <div class="row">
            <div class="column">
                <label for="username" class="formlabel">Username</label>
                <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#username">Edit</a>
                <input type="text" size="62" name="username" maxlength="11" disabled value="<?php echo $row['username']; ?>">
            </div>
            <div class="column">
                <label for="contact" class="formlabel">Contact No. </label>
                <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#contact">Edit</a>
                <input type="number" size="62" name="contact" maxlength="11" disabled value="<?php echo $row['r_contactNum']; ?>">
            </div>
            <div class="column">
                <label for="password" class="formlabel">Password </label>
                <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#password">Edit</a>
                <input type="password" class="form-control" size="62" name="password" maxlength="11" disabled value="<?php echo $row['password']; ?>" style="padding: 8px 10px; margin-top:5px;">
            </div>

        </div>
        <br>
        <hr>


        <h5>Personal Information</h5>
        <form>
            <!-- Names-->
            <div class="row">
                <div class="column">
                    <input type="text" name="Sname" size="20" placeholder="Surname" maxlength="50" value="<?php echo $row['r_lastname']; ?>" disabled readonly>
                    <label for="Sname" class="formlabel"> Last Name </label>
                </div>
                <div class="column">
                    <input type="text" name="Fname" size="20" placeholder="First Name" maxlength="50" autofocus value="<?php echo $row['r_firstname']; ?>" disabled readonly>
                    <label for="Fname" class="formlabel">First Name </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="text" name="Mname" size="20" placeholder="Middle Name" maxlength="50" value="<?php echo $row['r_middlename']; ?>" disabled readonly>
                    <label for="Mname" class="formlabel"> Middle Name </label>
                </div>

                <div class="column">
                    <input type="text" name="suffix" size="20" placeholder="Suffix" maxlength="50" value="<?php echo $row['r_extension']; ?>" disabled readonly>
                    <label for="suffix" class="formlabel"> Suffix </label>
                </div>

            </div>

            <!-- Birthdate & Birthplace -->
            <div class="row">
                <div class="column">
                    <label for="birthdate" class="formlabel">Birthdate </label>
                    <input type="date" name="birthdate" value="<?php echo $row['r_birthdate']; ?>" disabled readonly>
                </div>
                <div class="column">
                    <label for="birthplace" class="formlabel">Birthplace</label>
                    <input type="text" size="50" name="Birthplace" maxlength="30" value="<?php echo $row['r_birthplace']; ?>" disabled readonly>
                </div>
            </div>

            <!--address-->
            <div class="row">
                <div class="column">
                    <label for="Address" class="formlabel">Address No.</label>
                    <input type="number" name="Adress" size="20" placeholder="Address" maxlength="50" value="<?php echo $row['houseNum']; ?>" disabled readonly>
                </div>
                <div class="column">
                    <label for="street" class="formlabel">Street</label><br>
                    <select class="formlabel" name="street" data-component="dropdown" disabled readonly>
                        <option > <?php echo $row['streetName']; ?> </option>
                    </select>
                </div>
            </div>
            <!-- Contact Number & occupation  -->
            <div class="row">
                <div class="column">
                    <label for="occupation" class="formlabel">Occupation </label>
                    <input type="text" size="62" name="occupation" maxlength="11" value="<?php echo $row['r_occupation']; ?>" disabled readonly>
                </div>
            </div>

            <!-- Gender, Civil Status & citizenship -->
            <div class="row">
                <div class="column">
                    <label for="gender" class="formlabel">Gender </label><br>
                    <select class="gender" name="gender" data-component="dropdown" disabled readonly>
                        <option><?php echo $row['r_sex']; ?></option>
                        <option value="Female"> Female </option>
                    </select>
                </div>
                <div class="column">
                    <label for="civilStatus" class="formlabel">Civil Status</label><br>
                    <select class="civilStatus" name="civilStatus" data-component="dropdown" disabled readonly>
                        <option><?php echo $row['r_civilStatus']; ?></option>
                    </select>
                </div>
                <div class="column">
                    <label for="citizenship" class="formlabel">Citizenship</label>
                    <input type="text" size="62" name="citizenship" maxlength="11" value="<?php echo $row['r_citizenship']; ?>" disabled readonly>
                </div>
            </div>


            <!-- Height & Weight -->
            <div class="row">
                <div class="column">
                    <label for="height" class="formlabel">Height</label>
                    <input type="text" name="height" value="<?php echo $row['r_height'].' cm'; ?>" disabled readonly/>
                </div>

                <div class="column">
                    <label for="weight" class="formlabel">Weight</label>
                    <input type="text" name="weight" value="" value="<?php echo $row['r_weight'].' kg'; ?>" disabled readonly/>
                </div>
            </div>

            <!-- SSS NO, GSIS NO, TIN NO-->
            <div class="row">
                <div class="column">
                    <label for="sssNo" class="formlabel">SSS No.</label>
                    <input type="text" name="sssNo" value="<?php echo $row['SSSnum']; ?>" disabled readonly />
                </div>

                <div class="column">
                    <label for="gsisNo" class="formlabel">GSIS No.</label>
                    <input type="text" name="gsisNo" value="<?php echo $row['GSISnum']; ?>" disabled readonly />
                </div>

                <div class="column">
                    <label for="tinNo" class="formlabel">TIN No. </label>
                    <input type="text" size="62" name="tinNo" maxlength="11" value="<?php echo $row['TIN']; ?>" disabled readonly>
                </div>
            </div>
            <!--incase of emergency-->
            <div class="row">
                <div class="column">
                    <h3>In case of Emergency</h3>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="text" name="Sname" size="20" placeholder="Surname" maxlength="50" value="<?php echo $row['e_lastname']; ?>" disabled readonly>
                    <label for="Sname" class="formlabel"> Last Name </label>
                </div>
                <div class="column">
                    <input type="text" name="Fname" size="20" placeholder="First Name" maxlength="50" autofocus value="<?php echo $row['e_firstname']; ?>" disabled readonly>
                    <label for="Fname" class="formlabel">First Name </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="text" name="Mname" size="20" placeholder="Middle Name" maxlength="50" value="<?php echo $row['e_middlename']; ?>" disabled readonly>
                    <label for="Mname" class="formlabel"> Middle Name </label>
                </div>

                <div class="column">
                    <input type="text" name="suffix" size="20" placeholder="Suffix" maxlength="50" value="<?php echo $row['e_extension']; ?>" disabled readonly>
                    <label for="suffix" class="formlabel"> Suffix </label>
                </div>

            </div>
            <div class="row">
                <div class="column">
                    <label for="EAddress" class="formlabel">Address: </label>
                    <input type="text" size="62" name="EAddress" maxlength="11" height="50" value="<?php echo $row['e_address']; ?>" disabled readonly>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="Econtact" class="formlabel">Contact No. </label>
                    <input type="number" size="62" name="Econtact" maxlength="11" value="<?php echo $row['e_contactNum']; ?>" disabled readonly>
                </div>
            </div>

            <!--Residency-->
            <div class="column">
                <label for="civilStatus" class="formlabel">Civil Status</label><br>
                <select class="civilStatus" name="civilStatus" data-component="dropdown" disabled readonly>
                    <option><?php echo $row['residency']; ?></option>
                </select>
            </div>
            
            <div class="row">
                <div class="column">
                    <?php 
                        if ($row['seniors'] == 1){
                    ?>
                        <input type="checkbox" class="formlabel" name="free" value="Senior" checked disabled readonly />
                        <label for="Senior" class="formlabel"> Senior </label>
                    <?php } else { ?>
                        <input type="checkbox" class="formlabel" name="free" value="Senior" disabled readonly />
                        <label for="Senior" class="formlabel"> Senior </label>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
            <div class="column">
                    <?php 
                        if ($row['pwd'] == 1){
                    ?>
                        <input type="checkbox" class="formlabel" name="free" value="PWD" checked disabled readonly />
                        <label for="PWD" class="formlabel"> Senior </label>
                    <?php } else { ?>
                        <input type="checkbox" class="formlabel" name="free" value="PWD" disabled readonly />
                        <label for="PWD" class="formlabel"> Senior </label>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
            <div class="column">
                    <?php 
                        if ($row['lgbt'] == 1){
                    ?>
                        <input type="checkbox" class="formlabel" name="free" value="LGBT" checked disabled readonly />
                        <label for="LGBT" class="formlabel"> LGBT </label>
                    <?php } else { ?>
                        <input type="checkbox" class="formlabel" name="free" value="LGBT" disabled readonly />
                        <label for="LGBT" class="formlabel"> LGBT </label>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
            <div class="column">
                    <?php 
                        if ($row['voters'] == 1){
                    ?>
                        <input type="checkbox" class="formlabel" name="free" value="Senior" checked disabled readonly />
                        <label for="Voters" class="formlabel"> Voters </label>
                    <?php } else { ?>
                        <input type="checkbox" class="formlabel" name="free" value="Voters" disabled readonly />
                        <label for="Voters" class="formlabel"> Voters </label>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
            <div class="column">
                    <?php 
                        if ($row['soloParent'] == 1){
                    ?>
                        <input type="checkbox" class="formlabel" name="free" value="Solo Parent" checked disabled readonly />
                        <label for="Solo Parent" class="formlabel"> Solo Parent </label>
                    <?php } else { ?>
                        <input type="checkbox" class="formlabel" name="free" value="Solo Parent" disabled readonly />
                        <label for="Solo Parent" class="formlabel"> Solo Parent </label>
                    <?php } ?>
                </div>
            </div>
        </form>
    </div>



    <!--settings modal-->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">


                        <div class="column">
                            <label for="username" class="formlabel">Username</label>
                            <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#username">Edit</a>
                            <input type="text" class="form-control" size="62" name="password" maxlength="11" disabled value="sample_sample" style="padding: 8px 10px; margin-top:8px;">
                        </div>

                        <div class="column">
                            <label for="password" class="formlabel" style="margin-top:18px;">Password </label>
                            <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#password" style="margin-top:18px;">Edit</a>
                            <input type="text" class="form-control" size="62" name="password" maxlength="11" disabled value="********" style="padding: 8px 10px; margin-top:8px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!--password -->
    <div class="modal fade" id="reference" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Barangay Clearance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    Form is successfully submitted!
                    <br>Your Reference Number is 012345


                    <div class="text-danger">Please take note of your reference Number</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>

                </div>
            </div>
        </div>
    </div>


    <!-- ===================================================================================================================== -->
    <!-- ======================================================= MODAL PART ================================================== -->
    <!-- ====================================================== USERNAME UPDATE ============================================== -->
    <!-- USERNAME  -->
    <form class="needs-validation" novalidate method="post" action="php/accsettingsUpdate.php">
        <div class="modal fade" id="username" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="username" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="username">Username</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-2 mt-1 position-relative">
                                <label for="newUsername" class="form-label">New Username</label>
                                <input type="text" class="form-control" id="newUsername" name="newUsername" required>
                                <div class="invalid-tooltip">
                                    Please input New Username
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#usernameVerification">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- USERNAME VERIFICATION -->
    <form class="needs-validation" novalidate>
        <div class="modal fade" id="usernameVerification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="usernameVerification" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="usernameVerification">Username</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-center mt-2 mb-2"> Username updated successfully</h5>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- ====================================================== CONTACT NUMBER ============================================== -->

    <!-- CONTACT UPDATE   -->
    <form class="needs-validation" novalidate>
        <div class="modal fade" id="contact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="contact" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contact">Contact Number</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-2 mt-1 position-relative">
                                <label for="contactNum" class="form-label">New Contact Number</label>
                                <input type="text" class="form-control" id="contactNum" required>
                                <div class="invalid-tooltip">
                                    Please input New Contact Number
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#contactVerification">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- VERIFICATION CODE -->
    <form class="needs-validation" novalidate>
        <div class="modal fade" id="contactVerification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="contactVerification" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactVerification">Contact Number</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-2 mt-1 position-relative">
                                <label for="username" class="form-label">Verification Code</label>
                                <input type="text" class="form-control" id="username" required>
                                <div class="invalid-tooltip">
                                    Please input Verification
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#contactUpdated">Verify</button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#contact">Cancel</button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- CONTACT UPDATED -->
    <form class="needs-validation" novalidate>
        <div class="modal fade" id="contactUpdated" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="contactUpdated" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactUpdated">New Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-center mt-2 mb-2"> Contact Number updated successfully</h5>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- =================================================== PASSWORD ====================================================== -->

    <!-- PASSWORD  -->
    <form class="needs-validation" novalidate>
        <div class="modal fade" id="password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="password" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="password">New Passwrod</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-2 mt-1 position-relative">
                                <label for="oldPassword" class="form-label">Old Password</label>
                                <input type="text" class="form-control" id="oldPassword" required>
                                <div class="invalid-tooltip">
                                    Please input Old Password
                                </div>
                            </div>

                            <div class="col-md-12 mb-2 mt-1 position-relative">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="text" class="form-control" id="newPassword" required>
                                <div class="invalid-tooltip">
                                    Please input New Password
                                </div>
                            </div>


                            <div class="col-md-12 mb-2 mt-1 position-relative">
                                <label for="newPassword" class="form-label">Re-type Password</label>
                                <input type="text" class="form-control" id="newPassword" required>
                                <div class="invalid-tooltip">
                                    Please Re-type password
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#passwordVerification">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <form class="needs-validation" novalidate>
        <div class="modal fade" id="passwordVerification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="passwordVerification" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="passwordVerification">Username</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-center mt-2 mb-2"> Password updated successfully</h5>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>




</body>

</html>

<script>
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

<!-- SCRIPT FOR FORM VALIDATION -->
<script>
    // Validation Forms
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
    })();
</script>