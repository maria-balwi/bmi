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
            border-top: 5px solid #1266F1;
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
                    <li class="nav-item"><a class="nav-link" href="#page-top">Announcement</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4 pt-5">
        <h1 class="mt-5">Announcement</h1>
        <div class="row mt-3">

            <?php

            $query = "SELECT eventTitle, eventType, startDate, startTime, endDate, endTime, eventContent, image FROM tbl_events WHERE eventType = 'Public' AND endDate >= current_date()";
            $query_run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_run)) { ?>

                <div class="col-md-12 mt-5">
                    <div class="card borderPrimary shadow-sm ">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $row['eventTitle'] ?></h3>

                        </div>
                        <ul class="list-group list-group-flush">
                            <div class="row g-0">
                                <div class="col">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                Start Date:
                                                <?php echo $row['startDate'] ?>

                                            </div>
                                            <div class="col">
                                                Start Time:
                                                <?php echo $row['startTime'] ?>
                                            </div>

                                        </div>

                                    </li>
                                </div>
                                <div class="col">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                End Date:
                                                <?php echo $row['endDate'] ?>

                                            </div>
                                            <div class="col">
                                                End Time:
                                                <?php echo $row['endTime'] ?>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>


                        </ul>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <?php echo $row['eventContent'] ?>
                                </div>
                            </div>

                            <?php
                            $image = $row['image'];
                            
                            if ($image == null || $image == 'null') {

                                echo "";
                            } else {
                                echo "<div class='text-center'>";
                                echo "<img class='img-fluid' src='admin-interface/php/events/img/" . $row['image'] . "'/>";
                                echo "</div>";
                            }

                            ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>







    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="1Dsy1IkS"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>