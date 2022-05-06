<?php
include('./dbConnection039.php');
session_start();

$conn = Database::getConnection();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else if (!isset($_SESSION["user"])) {
    header("location: login039.php");
}

$user = $_SESSION["user"];


//get the details of the logged user
$userdetails = "SELECT * FROM customer_details WHERE NIC='$user[NIC]'";
$userDetailsResult = mysqli_query($conn, $userdetails);

$userDetailsRow = mysqli_fetch_array($userDetailsResult);


?>
<!-- headerFooterS -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

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
    <link href="css/style.css" rel="stylesheet" type="text/css" /> <!-- dan -->

    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/theme039.css">
    <link rel="stylesheet" type="text/css" href="css/style039.css">


</head>

<body>
    <?php include 'includes/header.php'; ?>
    

    <div class="form-body-hr on-top">
        <div class="row">
                <section style="width: 100%;">
            <img style="width:100%" src="images/background/account_profile_top_img039.jpg" alt="">
            </section>
            <hr>

            <div class="container">
                <h1 style="margin-block:0%">My Profile</h1>

                <div class="row">
                    <h3> Personal Details </h3>
                </div>
                <div class="row">
                    <div class="col">
                        <p><b>NIC Number : </b> <?php echo $userDetailsRow[0]; ?> </p>
                    </div>
                    <div class="col">
                        <p><b>Name : </b><?php echo $userDetailsRow[1];
                                            echo " . ";
                                            echo $userDetailsRow[2]; ?> </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h3> Contact Details </h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <p><b>E-mail : </b><?php echo $userDetailsRow[4]; ?> </p>
                        </div>
                        <!-- Update email -->
                        <div class="update-row-btn">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn-update" id="up-email-modal">Update email</button>

                            <!-- Modal -->
                            <div class="modal" id="update-modal-email" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header39" style="padding:35px 50px;">
                                            <h4> Update Contact Details</h4>
                                        </div>

                                        <form role="form" name="update-email-form" id="update-email-form" action="update_contact039.php" method="post">
                                            <div class="modal-body39" style="padding:40px 50px;">
                                                <div class="form-group">
                                                    <label for="email">Enter new Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@mail.com" required>
                                                </div>
                                                <button type="submit" class=" btn-modal-new btn-block btn-update"> Update</button>
                                            </div>
                                            <div class="modal-footer39">
                                                <button type="submit" class="btn btn-modal-new" data-dismiss="modal" onclick="this.form.reset();"><span class="icofont-ui-close"></span> Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="row">
                            <p> <b> Contact Number: </b> <?php echo $userDetailsRow[3] ?> </p>
                        </div>
                        <div class="update-row-btn">

                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn-update" id="up-number-modal">Update Contact Number</button>

                            <!-- Modal -->
                            <div class="modal" id="update-modal-number" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header39" style="padding:35px 50px;">
                                            <h4> Update Contact Details</h4>
                                        </div>
                                        <form role="form" name="update-number-form" id="update-number-form" action="update_contact039.php" method="post">
                                            <div class="modal-body39" style="padding:40px 50px;">
                                                <div class="form-group">
                                                    <label for="number">Enter new contact Number</label>
                                                    <input type="text" class="form-control" id="number" name="number" placeholder="07XXXXXXXX" required>

                                                    <!-- Warning -->
                                                    <div classname="hidden-md" id="hide-number">
                                                        <label id="number-warning" style="color: #8a0000;"></label>
                                                    </div>
                                                </div>
                                                <button type="submit" class=" btn-modal-new btn-block btn-update"> Update</button>
                                            </div>
                                            <div class="modal-footer39">
                                                <button type="submit" class="btn btn-modal-new" data-dismiss="modal" onclick="this.form.reset();"><span class="icofont-ui-close"></span> Cancel</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- <div class="container"> -->
                <h3>My policies</h3>
                <div class="form-group">
                    <table width=100%>
                        <thead>
                            <tr>
                                <th>Policy Type</th>
                                <th>Policy Number</th>
                                <th>Premium of the policy</th>
                                <th>Active/not</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //$_POST[NICNumber]
                            $sql = "SELECT * FROM policyncustomer WHERE NIC='$user[NIC]'";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                                //get the required type from the policy details table

                                $sqltype = "SELECT policy_name
                                     FROM policy_details
                                    WHERE policyNum_pre=$row[1]";

                                $resultype = mysqli_query($conn, $sqltype);
                                $type = mysqli_fetch_array($resultype);

                                echo "<tr>
                                <td>$type[0]</td>
                                 <td> $row[2] </td>
                                 <td> $row[3] </td>
                                 <td> $row[4] </td>
                                 </tr>";
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
                <hr>
            </div>

            <section data-bgimage="url(images/background/account_profile_img039.png)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow fadeInRight" data-wow-delay=".2s">
                            <h2>Begin a new journey with a new insurance Plan.
                                All is for you..</h2>
                            <a href="ApplyNewPolicy039.php" alt="" class="btn-custom invert med">Apply now..</a>
                        </div>
                    </div>
                </div>
            </section>


            <?php include 'includes/footer.php' ?>

        </div>
    </div>

    <script src="js/popper.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/update_contact039.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jpreLoader.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script> <!-- dan -->

    <script src="js/jquery.plugin.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/designesia.js"></script> <!-- dan -->



</body>

</html>