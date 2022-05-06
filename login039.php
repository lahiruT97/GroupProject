<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="css/jpreloader.css" rel="stylesheet" type="text/css">
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/theme039.css">
    <link rel="stylesheet" type="text/css" href="css/style039.css">

</head>

<body>
    <?php include 'includes/header.php'; ?>

    <div class="form-body">
        <div class="row-small form-holder">
            <section >
                    <div class="form-content">
                        <div class="form-items ">
                            <div class="small-forms" >
                                <h1>Customer Login</h1>
                                <br>
                                <form action="serve_login039.php" method="post" id="login_validate" name="login_validate">
                                    <input class="form-control" type="text" name="username" id="username" placeholder="Username" required>
                                    <input class="form-control" type="password" name="password" id="passwrd" placeholder="Password" required>

                                    <button id="submit" type="submit" class="btn-update" style="width: auto;">Login</button>
                                    <a href="forget039.php">Forgot password?</a>


                                </form>
                                <div class="other-links">

                                    <p>New User? <a href="register039.php">Register as a new Customer</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

    </div>
    <div>
        <?php include 'includes/footer.php' ?>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jpreLoader.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/designesia.js"></script>

</body>

</html>