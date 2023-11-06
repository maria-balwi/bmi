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
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#page-top">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4 mb-4 pt-5">
        <h1 class="mt-5">About Us</h1>
        <div class="row mt-3 g-3">

            <div class="col-md-12 aboutUs">
                The proposition to declare territorial and political subdivision of Quezon City, autonomous in form in
                order to fully developed as a self reliant community, was formulated by then Mayor Norberto Amoranto.
                Acting on the issue, the Quezon City Council delineated political subdivisions particularly in the
                Project 4 area. Barangay Milagrosa was established on June 25, 1975. Barangay is named Barangay
                Milagrosa in honor of the Patron Saint of Project 4, the Our Lady of Miraculous Medal Parish under OIC
                Barangay Captain, Mr. Pablo Cacatan. It is located at the center of Project 4, with 20 streets which
                consist of a total land area of 26,971 hectares.

            </div>

            <div class="col-md-6 mt-4">
                <div class="card card-body">
                    <h5 class="card-title text-center">Vision</h5>
                    <p class="text-center">"To reach the most prosperous level in the maintenance of peace and order with the cleanest picturesque of the Barangay community"</p>


                </div>

            </div>

            <div class="col-md-6 mt-4">
                <div class="card card-body">
                    <h5 class="card-title text-center">Mission</h5>
                    <p class="text-center">"To serve the best and nothing but the greatest needs and demands of an ideal community"</p>

                </div>
            </div>
        </div>
    </div>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">

            <?php
                $sql = "SELECT COUNT(officialID) AS totalOfficials FROM tbl_officials WHERE archive = 'Inactive'";
                $sql_run = mysqli_query($conn, $sql);
                $sqlTotal = mysqli_fetch_array($sql_run);

                $officials = $sqlTotal['totalOfficials'];
                
                if ($officials > 0) {?>
                
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Officials</h2>
                        <h3 class="section-subheading text-muted">Barangay Officials of Milagrosa Quezon City</h3>
                    </div>

                <?php } ?>
               

            
            <div class="row">

                <?php

                $query = "SELECT tbO.positionID, positionName,CONCAT(r_firstname, ' ', r_middlename, ' ', r_lastname, ' ',r_extension) AS fullname, image FROM tbl_officials AS tbO INNER JOIN tbl_residents AS tbR ON tbO.residentID = tbR.residentID INNER JOIN tbl_position AS tbP ON tbO.positionID = tbP.positionID WHERE tbO.archive = 'Inactive' ORDER BY tbP.positionID ASC";
                $query_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($query_run)) {

                    $positionName =  $row['positionName'];
                    $name = $row['fullname'];

                    //echo "<img src='admin-interface/library/php/official/img/" . $row['image'] . "' >";

                    if ($positionName == 'Barangay Captain') { ?>
                        <div class="col-md-12">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="admin-interface/library/php/official/img/<?php echo $row['image'] ?>" />
                                <h4><?php echo $name ?></h4>
                                <p class="text-muted">Barangay Captain</p>

                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-md-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="admin-interface/library/php/official/img/<?php echo $row['image'] ?>" />
                                <h4><?php echo $name ?></h4>
                                <p class="text-muted"><?php echo $positionName ?></p>

                            </div>
                        </div>

                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="1Dsy1IkS"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>