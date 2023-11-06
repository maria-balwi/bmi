<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Barangay Milagrosa Login</title>
    <link rel="icon" href="media/bglogo.png">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- SWEET ALERT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.min.css">


</head>

<body>
    <section class="side">
        <img src="media/bglogo.png" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Login</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, provide login credential to proceed and have access to all our services</p>
            <form class="login-form">
                <!-- method="post" action="php/loginProcess.php" -->
                <div class="form-control">
                    <input type="text" placeholder="Username" id="username" name="username" autofocus>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" id="password" name="password">
                    <i class="fas fa-lock"></i>
                </div>
                <button class="submit" id="login">Login</button>
                <a href="register.php" class="text">Sign Up</a>
                <a href="index.php" class="text">Cancel</a>
            </form>
        </div>
    </section>
</body>

<!-- JQUERY EXTENSION -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!-- SWEET ALERT -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.all.min.js"></script>

</html>

<script>
    
    $(document).ready(function() {
        $('#login').click(function(e) {
            e.preventDefault();

            let loginInfo = new FormData();
            var username = $('#username').val();
            var password = $('#password').val();

            if (username == '' || password == '') {
                Swal.fire({
                    icon: 'warning',
                    text: 'Enter username and password',
                })
            } else {
                loginInfo.append('username', username);
                loginInfo.append('password', password);

                $.ajax({
                    type: 'POST',
                    url: 'php/loginProcess.php',
                    data: loginInfo,
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        const data = JSON.parse(res);
                        if (data.error != 1) {
                            if (data.users == 1) {
                                if(data.settings == 1) {
                                    window.location.replace('admin-interface/settings.php');
                                } else {
                                    window.location.replace('admin-interface/dashboard.php');
                                }
                            } else {
                                if (data.accounts == 1) {
                                    if (data.settings == 1) {
                                        window.location.replace('resident-interface/settings.php');
                                    } else if (data.settings == 2) {
                                        window.location.replace('resident-interface/settings.php');
                                    } else if (data.settings == 1) {
                                        window.location.replace('resident-interface/dashboard.php');
                                    }
                                    window.location.replace('resident-interface/dashboard.php');
                                }
                            } 
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
    }) 
</script>