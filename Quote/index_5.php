<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="QUOTE - Request a New Third Party Policy">
    <meta name="author" content="Yehan">
    <title>Apply for a New Third Party Policy</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="css/magnific-popup.min.css" rel="stylesheet">
    <link href="css/skins/square/yellow.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
    <div>
        <?php include 'includes/header.php'; ?>
    </div>


    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /Loader_form -->

    <header>
        <a id="menu-button-mobile" class="cmn-toggle-switch cmn-toggle-switch__htx" href="javascript:void(0);"><span>Menu mobile</span></a>
        <nav class="main_nav">
            <ul class="nav nav-tabs">
                <li><a href="#tab_1" data-toggle="tab" class="active show">Request a quote</a></li>

            </ul>
        </nav>
    </header><!-- /header -->

    <div id="main_container" class="visible">

        <!--  --  <div id="header_in">
            <div id="logo_in"><a href="index.html"><img src="img/logo_black.png" width="160" height="48" alt="Quote"></a></div> logo design
        </div> -->

        <div class="wrapper_in">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab_1">
                        <div class="subheader" id="quote"></div>
                        <div class="row">
                            <aside class="col-xl-3 col-lg-4">
                                <h2>Apply For a New Third Party Policy</h2>
                                <p class="lead">Illusion Provides the best profitable third party insurance service</p>
                                <ul class="list_ok">
                                    <li>Death or bodily injury to any third party person</li>
                                    <li>Any damaged property up to Rs. 5Million</li>
                                    <li>Does not cover you or any damage to your vehicle</li>
                                </ul>
                            </aside><!-- /aside -->

                            <div class="col-xl-9 col-lg-8">
                                <div id="wizard_container">
                                    <div id="top-wizard">
                                        <strong>Progress</strong>
                                        <div id="progressbar"></div>
                                    </div><!-- /top-wizard -->

                                    <form name="example-1" id="wrapped" method="POST">
                                        <input id="website" name="website" type="text" value=""><!-- Leave for security protection, read docs for details -->
                                        <div id="middle-wizard">
                                            <div class="step">
                                                <h3 class="main_question"><strong>1/4</strong>Select your Vehicle Type..?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>1. Car
                                                        <input name="question_1" type="radio" value="car" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>2. Motor Cycle
                                                        <input name="question_1" type="radio" value="motor cycle" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>3. Three wheelar
                                                        <input name="question_1" type="radio" value="three wheelar" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>4. SUV
                                                        <input name="question_1" type="radio" value="suv" class="icheck required">
                                                    </label>
                                                </div>

                                            </div><!-- /step 1-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>2/4</strong>Select the Fuel Type?</h3>

                                                <div class="row add_bottom_30">

                                                    <div class="col-sm-6">
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="petral" class="icheck required">Petral
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="electrical" class="icheck required">Electrical
                                                            </label>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="diesel" class="icheck required">Deisel
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="petral_electrical" class="icheck required">Petral/Electrical
                                                            </label>
                                                        </div>


                                                    </div>
                                                </div><!-- /row-->
                                                <div class="form-group textarea_info">
                                                    <label>Additional Covers</label>
                                                    <textarea name="addtional_info" class="form-control" style="height:150px;" placeholder="Please mention if you need additional covers.."></textarea>
                                                </div>
                                            </div><!-- /step 2-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>3/4</strong>Select the details about the vehicle:</h3>

                                                <div class="row">

                                                    <div class="col-lg-10">
                                                        <div class="form-group select">
                                                            <label>Make:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_1">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="honda">Honda</option>
                                                                    <option value="toyota">Toyota</option>
                                                                    <option value="Other_make">Other</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->

                                                        <div class="form-group select">
                                                            <label>Model:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_2">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="civic">Civic</option>
                                                                    <option value="ct100">CT100</option>
                                                                    <option value="other_model">Other</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->

                                                        <div class="form-group select">
                                                            <label>Manufacture Year:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_3">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="y2010">2010</option>
                                                                    <option value="y2011">2011</option>
                                                                    <option value="y2012">2012</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->
                                                    </div>
                                                </div><!-- /row-->
                                            </div><!-- /step 3-->

                                            <div class="submit step">

                                                <h3 class="main_question"><strong>4/4</strong>Please fill with your details</h3>

                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="first_name" class="form-control" placeholder="Your First name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="last_name" class="required form-control" placeholder="Last name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="address" class="required form-control" placeholder="Address">
                                                        </div>
                                                    </div><!-- /col-sm-6 -->

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="required form-control" placeholder="Your Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="telephone" class="required form-control" placeholder="Your Telephone">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="styled-select">
                                                                <select class="required" name="district">
                                                                    <option value="" selected>Select your District</option>
                                                                    <option value="kurunegala">Kurunegala</option>
                                                                    <option value="kandy">Kandy</option>
                                                                    <option value="anuradhapura">Anuradhapura</option>
                                                                    <option value="colombo">Colombo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- /col-sm-6 -->
                                                </div><!-- /row -->

                                                <div class="form-group checkbox_questions">
                                                    <input name="terms" type="checkbox" class="icheck required" value="yes">
                                                    <label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?
                                                    </label>
                                                </div>

                                            </div><!-- /step 4-->

                                        </div><!-- /middle-wizard -->
                                        <div id="bottom-wizard">
                                            <button type="button" name="backward" class="backward">Backward </button>
                                            <button type="button" name="forward" class="forward">Forward</button>
                                            <button type="submit" name="process" class="submit">Submit</button>
                                        </div><!-- /bottom-wizard -->
                                    </form>
                                </div><!-- /Wizard container -->

                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /TAB 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->



                </div><!-- /.modal -->



                <!-- SCRIPTS -->
                <!-- Jquery-->
                <script src="js/jquery-3.6.0.min.js"></script>
                <!-- Common script -->
                <script src="js/common_scripts_min.js"></script>
                <!-- Theme script -->
                <script src="js/functions_no_side_panel.js"></script>



</body>

</html>