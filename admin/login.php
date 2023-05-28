<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url(https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/java/di-yogyakarta/image11.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-3 rounded-lg mt-5 bg-transparent">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login Admin</h3>
                                    <?php
                                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                                        echo '<h3 class="bg-danger text-white border-2"> ' . $_SESSION['status'] . ' </h3>';
                                        unset($_SESSION['status']);
                                    }
                                    ?>
                                </div>
                                <div class="card-body">
                                    <form class="user" action="logincode.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control bg-transparent shadow-lg" type="email" name="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control bg-transparent shadow-lg" type="password" name="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="">
                                            <button type="submit" name="login_btn" class="btn btn-warning form-control align-center">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>