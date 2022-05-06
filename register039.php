<?php
include 'dbConnection039.php';
$conn = Database::getConnection();
?>
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
    <div>
        <?php include 'includes/header.php'; ?>
    </div>
    <section class="form-body">
        <div class="row">
            <div class="col">
            </div>
        </div>
        <div class="col">
            <div class=" row">
                <div class="form-content">
                    <div class="form-items">
                        <h1>Register as a customer</h1>
                        <form action="serve_register039.php" method="POST" name="register" id="register">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><label>Title</label></td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form check">
                                                    <div class="container">
                                                        <div class="row row-cols-2 row-cols-lg-3">
                                                            <input class="col " class="form-check-input" type="radio" id="Mr" name="title" value="Mr">
                                                            <label for="Mr">Mr</label>
                                                            <input class="col " class="form-check-input" type="radio" id="Ms" name="title" value="Ms">
                                                            <label for="Ms">Ms</label>
                                                            <input class="col " class="form-check-input" type="radio" id="Rev" name="title" value="Rev">
                                                            <label for="Rev">Rev</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Full name</label></td>
                                        <td>
                                            <input type="text" placeholder="Full Name" name="fullName" id="fullName" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Policy Number</label></td>
                                        <td>
                                            <input type="text" placeholder="Policy Number" name="policyNum" id="policyNum" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <p style="font-size: 14px">If you have more than one policies enter one of those</p>
                                        </td>

                                    </tr>
                                    <!-- warning -->
                                    <tr classname="d-none" id="hide-tr-policy">
                                        <td colspan="2" class="col-sm-9 col-md-6">
                                            <div class="container" padding:20px>
                                                <div id="policy-warning" class="warning-div"></div>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td><label>Age</label></td>
                                        <td>
                                            <input type="number" placeholder="Age" name="age" id="age" required>
                                        </td>
                                    </tr>

                                    <!-- warning -->
                                    <tr classname="d-none" id="hide-tr-age">
                                        <td colspan="2" class="col-sm-9 col-md-6">
                                            <div class="container" padding:20px>
                                                <div id="age-warning" class="warning-div"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label>NIC Number</label></td>
                                        <td>
                                            <input type="text" placeholder="NIC number" name="NICNum" id="NICNum" required>
                                        </td>
                                    </tr>

                                    <!-- warning -->
                                    <tr classname="d-none" id="hide-tr-NIC">
                                        <td colspan="2" class="col-sm-9 col-md-6">
                                            <div class="container" padding:20px>
                                                <div id="NIC-warning" class="warning-div"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label>Address</label></td>
                                        <td>
                                            <input type="text" placeholder="Address" name="address" id="address" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Email address</label></td>
                                        <td>
                                            <input type="email" placeholder="email@mail.com" name="email" id="email" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Contact Number</label></td>
                                        <td>
                                            <input type="text" placeholder="07XXXXXXXX" name="number" id="number" required>
                                        </td>
                                    </tr>
                                    <!-- warning -->
                                    <tr classname="d-none" id="hide-tr-number">
                                        <td colspan="2" class="col-sm-9 col-md-6">
                                            <div class="container" padding:20px>
                                                <div id="number-warning" class="warning-div"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label>User Name</label></td>
                                        <td>
                                            <input type="text" placeholder="userName" name="username" id="username" required>
                                        </td>
                                    </tr>
                                    <tr classname="d-none" id="hide-tr-username">
                                        <td colspan="2" class="col-sm-9 col-md-6">
                                            <div class="container" padding:20px>
                                                <div id="username-warning" class="warning-div"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Password</label></td>
                                        <td>
                                            <input type="password" placeholder="password" name="passwrd" id="passwrd" required>
                                            <br>
                                        </td>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <p style="font-size: 14px">(8 or more characters are required including numerical values and special characters)</p>
                                        </td>
                                    </tr>
                                    </tr>
                                    <!-- warning -->
                                    <tr classname="d-none" id="hide-tr-passwrd">
                                        <td colspan="2" class="col-sm-9 col-md-6">
                                            <div class="container" padding:20px>
                                                <div id="passwrd-warning" class="warning-div"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label>Confirm the Password</label></td>
                                        <td>
                                            <input type="password" placeholder="re-enter the password" name="repasswrd" id="repasswrd" required>
                                        </td>
                                    </tr>

                                    <!-- warning -->
                                    <tr classname="d-none" id="hide-tr-repasswrd">
                                        <td colspan="2" class="col-sm-9 col-md-6">
                                            <div class="container" padding:20px>
                                                <div id="repasswrd-warning" class="warning-div"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-button ">
                                            <input type="submit" class="ibtn " value="clear form" onclick="this.form.reset();">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-button ">
                                            <input type="submit" class="ibtn" value="Register">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <div>
        <?php include 'includes/footer.php' ?>
    </div>

    <script src="js/register_validations039.js"></script>
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