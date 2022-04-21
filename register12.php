
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "group12";


// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h1 style = "color: white">Register as a customer</h1>
                        <form action="serve_register.php" method="POST" name="register" id = "register_validate">
                            <table>
                                <tbody>
                                <tr>
                                 <td><label>Title</label></td>
                                    <td> 
                                    <div class="form-group">
                                <div class="form check" >
                                    <div class = "container">
                                        <div class= "row row-cols-2 row-cols-lg-3">
                                            <input class = "col " class="form-check-input" type="radio" id="Mr" name="title" value="Mr" >
                                            <label for="Mr">Mr</label>
                                            <input class = "col " class="form-check-input" type="radio" id="Ms" name="title" value="Ms">
                                            <label for="Ms">Ms</label>
                                            <input class = "col " class="form-check-input" type="radio" id="Rev" name="title" value="Rev">
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
                                        <input type = "text" placeholder = "Full Name" name = "fullName" id = "fullName"  required>
                                    </td>
                                </tr>
                                <tr>
                                 <td><label>Policy Number</label></td>
                                    <td> 
                                        <input type = "text" placeholder = "Policy Number" name = "policyNum" id="policyNum" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p style="font-size: 12px" >If you have more than one policies enter one of those</p></td>

                                </tr>
                                 <!-- warning -->
                                <tr classname="d-none" id="hide-tr-policy">
                                    <td colspan="2" class="col-sm-9 col-md-6">
                                        <div class="container" padding:20px>
                                            <label id="policy-warning" style="background-color: #8a0000;"></label>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td><label>Age</label></td>
                                       <td> 
                                           <input type = "number" placeholder = "Age" name = "age" id="age"required>
                                     </td>
                                </tr>

                                <!-- warning -->
                                <tr classname="d-none" id="hide-tr-age">
                                    <td colspan="2" class="col-sm-9 col-md-6">
                                        <div class="container" padding:20px>
                                            <label id="age-warning" style="background-color: #8a0000;"></label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>NIC Number</label></td>
                                       <td> 
                                           <input type = "text" placeholder = "NIC number" name = "NICNum"  id="NICNum" required>
                                     </td>
                                </tr>

                                <!-- warning -->
                                <tr classname="d-none" id="hide-tr-NIC">
                                    <td colspan="2" class="col-sm-9 col-md-6">
                                        <div class="container" padding:20px>
                                            <label id="NIC-warning" style="background-color: #8a0000;"></label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>Address</label></td>
                                    <td> 
                                           <input type = "text" placeholder = "Address" name = "address" id="address" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Email address</label></td>
                                    <td> 
                                           <input type = "email" placeholder = "email@mail.com" name = "email" id="email" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Contact Number</label></td>
                                    <td> 
                                           <input type = "text" placeholder = "07XXXXXXXX" name = "number" id="number" required>
                                    </td>
                                </tr>
                                <!-- warning -->
                                <tr classname="d-none" id="hide-tr-number">
                                    <td colspan="2" class="col-sm-9 col-md-6">
                                        <div class="container" padding:20px>
                                            <label id="number-warning" style="background-color: #8a0000;"></label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>User Name</label></td>
                                    <td> 
                                           <input type = "text" placeholder = "userName" name = "username" id="username" required>
                                    </td>
                                </tr>
                                <tr classname="d-none" id="hide-tr-username">
                                    <td colspan="2" class="col-sm-9 col-md-6">
                                        <div class="container" padding:20px>
                                            <label id="username-warning" style="background-color: #8a0000;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Password</label></td>
                                    <td> 
                                           <input type = "password" placeholder = "password" name = "passwrd" id="passwrd" required>
                                           <br>
                                    </td>
                                    <tr>
                                    <td></td>
                                    <td> 
                                    <p style="font-size: 12px">(8 or more characters are required including numerical values and special characters)</p>
                                    </td>
                                    </tr>    
                                </tr>
                                <!-- warning -->
                                <tr classname="d-none" id="hide-tr-passwrd">
                                    <td colspan="2" class="col-sm-9 col-md-6">
                                        <div class="container" padding:20px>
                                            <label id="passwrd-warning" style="background-color: #8a0000;"></label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>Confirm the Password</label></td>
                                    <td> 
                                           <input type = "password" placeholder = "re-enter the password" name = "repasswrd" id="repasswrd" required>
                                        </td>
                                    </tr>

                                        <!-- warning -->
                                <tr classname="d-none" id="hide-tr-repasswrd">
                                    <td colspan="2" class="col-sm-9 col-md-6">
                                        <div class="container" padding:20px>
                                            <label id="repasswrd-warning" style="background-color: #8a0000;"></label>
                                        </div>
                                    </td>
                                </tr>

                                    <tr>
                                        <td>
                                            <div class="form-button">
                                                <input  type="submit" class="ibtn" value="Register">
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
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="./register_validations.js"></script>
</body>
</html>