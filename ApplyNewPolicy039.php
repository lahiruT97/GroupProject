<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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


    <link rel="stylesheet" href="revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/navigation.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/theme039.css">
    <link rel="stylesheet" type="text/css" href="css/style039.css">


</head>

<body>
    <?php include 'includes/header.php'; ?>
        <div class="form-body on-top">
            <div class="row">
                <div class=" apply col-md-6 wow fadeInRight" data-wow-delay=".2s">
                    <h1 >Apply for a insurance plan</h1>
                    <h5 >begin a new journey with a new hope..</h5>  
                </div>
                <section >

                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <form action="applynew_includes.php" method="POST" id="apply" name="apply">
                                <div class="container wow fadeInRight" data-wow-delay=".4s">
                                    <p style="text-align: center;">Please fill the form to apply for a new insuarance plan. We response within 48 hours.</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="form check">
                                                <div class="container">
                                                    <div class="row row-cols-2 row-cols-lg-3">
                                                        <input class="col " class="form-check-input" type="radio" id="Mr" name="title" value="Mr">
                                                        <label for="Mr">Mr</label>
                                                        <input class="col " class="form-check-input" type="radio" id="Ms" name="title" value="Mr">
                                                        <label for="Ms">Ms</label>
                                                        <input class="col " class="form-check-input" type="radio" id="Rev" name="title" value="Mr">
                                                        <label for="Rev">Rev</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full name" name="fullName" id="fullName">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="NIC number" name="NICNum" id="NICNum">
                                            <!-- warning -->
                                            <div classname="hidden-md" id="hide-NIC">
                                                <div class="container">
                                                    <div id="NIC-warning" class="warning-div"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Age" name="age" id="age">
                                            <!-- warning -->
                                            <div classname="hidden-md" id="hide-age">
                                                <div id="age-warning" class="warning-div"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address" name="address" id="address">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Address" name="email" id="email">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Contact Number" name="number" id="number">
                                            <!-- warning -->
                                            <div classname="hidden-md" id="hide-number">
                                                <div class="warning-div" id="number-warning"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <select name="policy" class="form-control">
                                                <option selected="" value="Default">(Please select a policy name)</option>
                                                <option value="Medi_Plus">Medi_Plus</option>
                                                <option value="Surgical_Plan">Surgical_Plan</option>
                                                <option value="Hospital_Cash_Plan">Hospital_Cash_Plan</option>
                                                <option value="Future_Server">Future_Server</option>
                                                <option value="Saubhagya">Saubhagya</option>
                                                <option value="Medi60">Medi60</option>
                                                <option value="Car">Car</option>
                                                <option value="Motor_Cycle">Motor_Cycle</option>
                                                <option value="Three_Wheeler">Three_Wheeler</option>
                                                <option value="SUV">SUV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="row top-padding">
                                            <div class="form-button col">
                                                <input type="submit" class="ibtn less-padding" value="Apply">
                                            </div>
                                            <div class="form-button col">
                                                <input type="submit" class="ibtn less-padding" value="clear form" onclick="this.form.reset();">
                                            </div>
                                        </div>
                                        <p style="text-align: center;"><b>Thank you for selecting us !</b></p>
                                    </div>
                            </form>
                        </div>
                    </div>
                    </section>
                </div>
            </div>
            <div>
            <?php include 'includes/footer.php'; ?>
            </div>

    <script src="js/apply_validations039.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jpreLoader.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
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