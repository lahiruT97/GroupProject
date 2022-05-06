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
                             <h1>Reset Password</h1>
                                <p> Enter new password
                                    <br>8 or more characters are required including numerical values and special characters
                                </p>
                                <br>
                                <form method="post" id="reset" name="reset" action="serve_reset039.php">



                                    <label name="password">Password</label>
                                    <input class="form-control" type="password" id="passwrd" name="passwrd" placeholder="Password" required>

                                    <!-- warning -->
                                    <div class="invisible" id="hide-passwrd">
                                        <div class="container">
                                            <div id="passwrd-warning" class="warning-div"></div>
                                        </div>
                                    </div>

                                    <label name="repassword">Re-Enter Password</label>
                                    <input class="form-control" type="password" id="repasswrd" name="repasswrd" placeholder="Confirm Password" required>

                                    <!-- warning -->
                                    <div classname="hidden-md" id="hide-repasswrd">
                                        <div class="container">
                                            <div id="repasswrd-warning" class="warning-div"></div>
                                        </div>
                                    </div>

                                    <div class="form-button">
                                        <input id="submit" type="submit" class="ibtn" value="Reset">
                                    </div>
                                </form>
                            </div>
                        </div>
            </section>
        </div>
    </div>
    <div>
        <?php include 'includes/footer.php' ?>
    </div>

    <script src="js/reset_validation039.js"></script>
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