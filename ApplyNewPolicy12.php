<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply_for_a_new_policy</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    
</head>
<body>
    <div class="form-body on-top">
    <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div><h1  >Apply for a new policy</h1></div>
            </div>
        
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <form action ="applynew_includes.php" method="POST">
                            
                            <div class="form-group">
                                <div class="form check" >
                                    <div class = "container">
                                        <div class= "row row-cols-2 row-cols-lg-3">
                                            <input class = "col " class="form-check-input" type="radio" id="Mr" name="title" value="Mr" >
                                            <label for="Mr">Mr</label>
                                            <input class = "col " class="form-check-input" type="radio" id="Ms" name="title" value="Mr">
                                            <label for="Ms">Ms</label>
                                            <input class = "col " class="form-check-input" type="radio" id="Rev" name="title" value="Mr">
                                            <label for="Rev">Rev</label>
                                        </div>
                                    </div>
                                </div>
                             </div>

                             <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full name"  name= "fullName" id="fullName">
                             </div>
                            
                             <div class="form-group">
                                    <input type="text" class="form-control" placeholder="NIC number"  name= "NICNum" id="NICNum">
                            </div>

                            <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Age" name= "age" id="age">
                            </div>

                            <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address" name= "address" id="address">
                            </div>

                            <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address" name= "email" id="email">
                            </div>

                            <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Contact Number" name= "number" id="number">
                            </div>
                            <div class="form-group">

                                <select name="policy" class = "form-control">
                                    <option selected="" value="Default">(Please select a colicy name)</option>
                                    <option value="01">Medi_Plus</option>
                                            <option value="AL">Canada</option>
                                            <option value="DZ">India</option>
                                            <option value="AS">Russia</option>
                                            <option value="AD">USA</option>
                                </select>                           
                             </div>
                            
                            <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <input type="checkbox" id="chk1" required><label for="chk1">I agree on <a href="#">terms & conditions</a> of iofrm</label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <input type="submit" class="ibtn less-padding" value ="Apply">
                                    </div>
                                </div>
                            </div>
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
</body>
</html>