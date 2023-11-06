<?php

session_start();
$uname = $_SESSION['uname'];
include('php/conn.php');

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">

    <title> Barangay Milagrosa Resident</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- BOOTSTRAP LINK CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="css/resident_int.css" />
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
    <!--ANNOUNCEMENT-->


    <!-- ================================= -->
    <?php
    $query_events = $conn->query("SELECT * FROM tbl_events WHERE startDate = CURRENT_DATE");
    $events_run = mysqli_fetch_array($query_events);
    $name = $events_run['eventTitle'];
    $description = $events_run['eventContent'];
    $image = $events_run['image'];
    ?>
    <div class="m-3">
        <button type="button" class="collapsible">Announcements</button>
        <div class="content">
            <?php if (mysqli_num_rows($query_events) == 1) { ?>
                    <h1><?php echo $name ?></h1>
                    <p><?php echo $description ?></p>
                    <?if ($image == null || $image == 'null') {
                        echo "";
                    } else {
                    echo "<div class='text-center'>";
                    echo "<img class='img-fluid' src='admin-interface/php/events/img/" . $query_events[' image'] . "'/>" ; echo "</div>" ; 
                    } 
                } else if (mysqli_num_rows($query_events) == 1) {
                    echo "No event/announcement for today.";
                } ?> </div>
                </div>

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
                            <a href="certificates/brgy_id.php" class="button">Barangay ID form</a>
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
                            <p><b>Fee: </b><a href="pic/Business_Clearance_Fee.pdf" class="link" target="_blank" style="display: inline; text-decoration:none;">Barangay Business Clearance Fee Lists</a></p>
                            <!--btn--------->
                            <a href="certificates/brgy_busclear.php" class="button">Business Clearance Form</a>
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
                            <a href="certificates/brgy_clearance.php" class="button">Barangay Clearance Form</a>
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
                            <a href="certificates/cert_residency.php" class="button">Barangay Clearance Form</a>
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
                                <li>For representative:
                                    <br>&emsp;ID of the representative
                                    <br>&emsp;Authorization Letter with a photocopy of government issued valid ID of the person
                                    being represented
                                </li>
                            </ul>
                            <p><b>Fee: </b>₱80 (minimum) *Amount may vary depending on the income</p>
                            <!--btn--------->
                            <a href="certificates/ctc.php" class="button">CTC Form</a>
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
                            <a href="certificates/brgy_indigency.php" class="button">Barangay Indigency Form</a>
                        </div>

                        <!--Blotter-------->
                        <div class="box">
                            <font>Complaint Report</font><br>
                            Requirements:
                            <ul>
                                <li>Supporting document for the complaint</li>
                            </ul>
                            <p><b>Fee: </b>₱200</p>
                            <!--btn--------->
                            <a href="certificates/blotter.php" class="button">Complaint Form</a>
                        </div>
                    </div>
                </section>





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