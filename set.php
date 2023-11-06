<!DOCTYPE html>

<head>
    <meta charset="utf-8">

    <title> Settings</title>
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
        <h1>Profile</h1>
        <hr>
        <br>
        <h5>Account</h5>
        <div class="row">
            <div class="column text-center">
                <img src="https://th.bing.com/th/id/OIP.0wI5BPNqM5xVjwYwVlMI4wAAAA?pid=ImgDet&rs=1" class="mt-2" style="width:10%; border-radius: 50%; margin-left:2%;">
            </div>
        </div>
        <div class="row">
            <div class="column">
                <label for="re-password" class="formlabel">Resident Number </label>
                <input type="text" class="form-control" size="62" name="passwordre-password" maxlength="11" disabled value="r12546">
            </div>

        </div>
        <div class="row">
            <div class="column">
                <label for="username" class="formlabel">Username</label>
                <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#password">Edit</a>
                <input type="text" size="62" name="username" maxlength="11" disabled value="sample_sample">
            </div>
            <div class="column">
                <label for="contact" class="formlabel">Contact No. </label>
                <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#password">Edit</a>
                <input type="number" size="62" name="contact" maxlength="11" required>
            </div>
            <div class="column">
                <label for="password" class="formlabel">Password </label>
                <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#password">Edit</a>
                <input type="password" class="form-control" size="62" name="password" maxlength="11" disabled value="123456" style="padding: 8px 10px; margin-top:5px;">
            </div>

        </div>
        <br>
        <hr>
        <h5>Personal Information</h5>

        <form>
            <!-- Names-->
            <div class="row">
                <div class="column">
                    <input type="text" name="Sname" size="20" placeholder="Surname" maxlength="50" required>
                    <label for="Sname" class="formlabel"> Surname </label>
                </div>
                <div class="column">
                    <input type="text" name="Fname" size="20" placeholder="First Name" maxlength="50" autofocus required>
                    <label for="Fname" class="formlabel">First Name </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="text" name="Mname" size="20" placeholder="Middle Name" maxlength="50" required>
                    <label for="Mname" class="formlabel"> Middle Name </label>
                </div>

                <div class="column">
                    <input type="text" name="suffix" size="20" placeholder="Suffix" maxlength="50">
                    <label for="suffix" class="formlabel"> Suffix </label>
                </div>

            </div>

            <!-- Birthdate & Birthplace -->
            <div class="row">
                <div class="column">
                    <label for="birthdate" class="formlabel">Birthdate </label>
                    <input type="date" name="birthdate" required>
                </div>
                <div class="column">
                    <label for="birthplace" class="formlabel">Birthplace</label>
                    <input type="text" size="50" name="Birthplace" maxlength="30" required>
                </div>
            </div>

            <!--address-->
            <div class="row">
                <div class="column">
                    <label for="Address" class="formlabel">Address No.</label>
                    <input type="number" name="Adress" size="20" placeholder="Address" maxlength="50" required>
                </div>
                <div class="column">
                    <label for="street" class="formlabel">Street</label><br>
                    <select class="formlabel" name="street" data-component="dropdown" required="">
                        <option value="Kalantiaw"> Kalantiaw </option>
                        <option value="F. Salalilla"> F. Salalilla </option>
                        <option value="M. Gregorio"> M. Gregorio </option>
                        <option value="Belarmino"> Belarmino </option>
                        <option value="Lakandula"> Lakandula </option>
                        <option value="Alimudin"> Alimudin </option>
                        <option value="Rajah Matanda"> Rajah Matanda </option>
                        <option value="Alvarez"> Alvarez </option>
                        <option value="T. Mascardo"> T. Mascardo </option>
                        <option value="J. Ocampo"> J. Ocampo </option>
                        <option value="Delos Reyes"> Delos Reyes </option>
                        <option value="D. Tirona"> D. Tirona </option>
                        <option value="Reverend Garciaw"> Reverend Garcia </option>
                        <option value="Pasaje Dela Paz"> Pasaje Dela Paz </option>
                        <option value="Tom Castro"> Tom Castro </option>
                        <option value="Poblete Main"> Poblete Main </option>
                        <option value="Poblete Extension"> Poblete Extension </option>
                        <option value="Poblete Interior"> Poblete Interior </option>
                        <option value="A De Legaspi"> A De Legaspi </option>
                        <option value="J.P. Rizal"> J.P. Rizal </option>
                    </select>
                </div>
            </div>
            <!-- Contact Number & occupation  -->
            <div class="row">
                <div class="column">
                    <label for="occupation" class="formlabel">Occupation </label>
                    <input type="text" size="62" name="occupation" maxlength="11" required>
                </div>
            </div>

            <!-- Gender, Civil Status & citizenship -->
            <div class="row">
                <div class="column">
                    <label for="gender" class="formlabel">Gender </label><br>
                    <select class="gender" name="gender" data-component="dropdown" required="">
                        <option value="Male"> Male </option>
                        <option value="Female"> Female </option>
                    </select>
                </div>
                <div class="column">
                    <label for="civilStatus" class="formlabel">Civil Status</label><br>
                    <select class="civilStatus" name="civilStatus" data-component="dropdown" required="">
                        <option value="Single"> Single </option>
                        <option value="Married"> Married </option>
                    </select>
                </div>
                <div class="column">
                    <label for="citizenship" class="formlabel">Citizenship</label>
                    <input type="text" size="62" name="citizenship" maxlength="11" required>
                </div>
            </div>


            <!-- Height & Weight -->
            <div class="row">
                <div class="column">
                    <label for="height" class="formlabel">Height</label>
                    <input type="text" name="height" value="" required="" />
                </div>

                <div class="column">
                    <label for="weight" class="formlabel">Weight</label>
                    <input type="text" name="weight" value="" required="" />
                </div>
            </div>

            <!-- SSS NO, GSIS NO, TIN NO-->
            <div class="row">
                <div class="column">
                    <label for="sssNo" class="formlabel">SSS No.</label>
                    <input type="text" name="sssNo" value="" />
                </div>

                <div class="column">
                    <label for="gsisNo" class="formlabel">GSIS No.</label>
                    <input type="text" name="gsisNo" value="" />
                </div>

                <div class="column">
                    <label for="tinNo" class="formlabel">TIN No. </label>
                    <input type="text" size="62" name="tinNo" maxlength="11">
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
                    <input type="text" name="Sname" size="20" placeholder="Surname" maxlength="50" required>
                    <label for="Sname" class="formlabel"> Surname </label>
                </div>
                <div class="column">
                    <input type="text" name="Fname" size="20" placeholder="First Name" maxlength="50" autofocus required>
                    <label for="Fname" class="formlabel">First Name </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="text" name="Mname" size="20" placeholder="Middle Name" maxlength="50" required>
                    <label for="Mname" class="formlabel"> Middle Name </label>
                </div>

                <div class="column">
                    <input type="text" name="suffix" size="20" placeholder="Suffix" maxlength="50">
                    <label for="suffix" class="formlabel"> Suffix </label>
                </div>

            </div>
            <div class="row">
                <div class="column">
                    <label for="EAddress" class="formlabel">Address: </label>
                    <input type="text" size="62" name="EAddress" maxlength="11" height="50" required>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label for="Econtact" class="formlabel">Contact No. </label>
                    <input type="number" size="62" name="Econtact" maxlength="11" required>
                </div>
            </div>

            <!--Residency-->
            <div class="row">

                <div class="column">
                    <input type="radio" name="residency" value="30">
                    <label for="Resident">Resident</label><br>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <input type="radio" name="residency" value="30">
                    <label for="Transient">Transient</label><br>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="radio" name="residency" value="30">
                    <label for="busOwner">Business Owner</label><br>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="checkbox" class="formlabel" name="free" value="Senior" />
                    <label for="Senior" class="formlabel"> Senior </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="checkbox" name="free" value="PWD" />
                    <label for="PWD" class="formlabel"> PWD </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="checkbox" name="free" value="LGBT" />
                    <label for="LGBT" class="formlabel"> LGBT </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="checkbox" name="free" value="voter" />
                    <label for="voter" class="formlabel"> Voter </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="checkbox" name="free" value="solo" />
                    <label for="solo" class="formlabel"> Solo Parent </label>
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
    <!--username -->
    <div class="modal fade" id="username" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</body>

</html>