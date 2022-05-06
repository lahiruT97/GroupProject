<html>
    <head>

    <meta charset="utf-8" />
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Priva - Insurance Company Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />

 

   
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

        <link rel="stylesheet" href="css/mediPlusDesign.css">
        <script>
            function validationMail(){
                var email = document.forms["myform"]["mail"].value;
                var type = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var lblError = document.getElementById("lblError");
                lblError.innerHTML = "";
                if(!type.test(email))
                {
                    lblError.innerHTML = "Invalid email address";
                    return false;
                }
                return true;
            }
            function validation(){
                var cmd = document.forms["myform"]["cmd"].value;
                var len = cmd.length;
                if(len>100){
                    alert("Message must be less than 100 letters");
                    return false;
                }
		        return true;
            }
        </script>
    </head>
    <body>
    <?php include 'includes/header.php' ?>
        <div class="main" style="background-image: url(hospital.jpg);">
            <div class="text">
                Hospital Cash Plan
            </div>
        </div>
    <div class="rowo">
        <div class="topic"><br><br>
            <h2>What is Hospital Cash Plan?</h2>
        </div>
        <div class="slogon">
            <p class="sloganText">Insurance for all from the largest and strongest 
            National Insurer</p>
        </div>
    </div>
    <div class="det">
        <p class="details">
            A unique and innovative health plan that provides a fixed amount as cover for each day 
            you are hospitalized,&nbsp; irrespective of the actual bills or expenses. This affords 
            the policyholder a blanket cover for additional expenses with the fixed daily cash benefit.
        </p>
    </div>
    <h2>Benefits and Eligibility</h2><br>
    <div class="benefits">
        <div class="column1">
            <img src="image/benefit5_5.jpg" width="90px" height="90px"><br>
            <h3>LKR 20,000 on a daily basis</h3>
               <p class="text2">Up to LKR 20,000 on a daily basis to cover medical expenses.</p>
        
        </div>
        <div class="column2">
            <img src="image/benefit4_4.jpg" width="90px" height="90px"><br>
            <h3>Double the cash benefit</h3>
            <p class="text2">
                double the cash benefit of LKR 40,000 if admitted to the ICU.
            </p>
        </div>
        <div class="column3">
            <img src="image/benefit1.jpg" width="90px" height="90px">
            <h3>4 days' cash benefit</h3>
            <p class="text2">
                Added 4 days' cash benefit if hospital stay extends beyond 10 days.
            </p>
        </div>
        <div class="column4">
            <img src="image/benefit8_8.jpg" width="90px" height="90px">
            <h3>Hospital Cash benefit</h3>
            <p class="text2">
                Annually the ILC Hospital Cash benefit will be paid up to 180 days
            </p>
        </div>
        <div class="column5">
            <img src="image/benefit9_9.jpg" width="90px" height="90px">
            <h3>Up to 5 times the annual limit</h3>
            <p class="text2">
                Up to 5 times the annual limit for the total policy period.
            </p>
        </div>
        <div class="column6">
            
        </div>
        <div class="column7">
            <img src="image/benefit7_7.jpg" width="90px" height="90px">
            <h3>Eligibility</h3>
            <p class="text2">
                The policy can be obtained by adults between the ages of 18 to 60 years with the cover ceasing at the age of 70,&nbsp; while the children need to be under the age of 3 months to 20 years,&nbsp; and they will be covered until the age of 25 years<br>
                Must be obtained with a ILC life insurance policy
            </p>
        </div>
    </div>
    <div class="row2">
        <div class="col1" style="background-color: #000080;">
            <div class="row2Topic">
                <h2 style="color: white;">Why should I select Illuminating Life Insurance as My Insurance Partner?</h2>
            </div>
            <div class="row2Details">
                <p class="details" style="color: white;">
                    Illuminating Life Insurance is the pioneer insurance company in the island with a history spanning 57 years. 
                    Being backed by the state has added to its strength and credibility while it has the most experienced technical knowledge 
                    base. Its Life Fund in excess of LKR 134 billion and asset base of over LKR 235 billion are unmatched in the industry.
                </p>
            </div>
        </div>
        <div class="col2" style="margin-left:40px;">
            <h2 style="margin-top: -35px; margin-left: 30px;">Quick Inquiry</h2>
            <form name="myform" action="insert_inquiry.php" method="post" onsubmit="validation()"><br>
                <input type="text" name="cat_name" value="Hospital Cash Plan" readonly><br><br>
                <input type="email" name="mail" placeholder="E-mail" onkeypress="validationMail()" required><br><br>
                <span id="lblError" style="color: red"></span>
                <textarea name="cmd" rows="6" cols="64" placeholder="Message*" required></textarea><br><br>
                <input type="submit" name="submit">
            </form>
            <div class="apply">
                <a href="ApplyNewPolicy039.php"><h2 style="color: white;">Apply now...</h2></a>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top"></a>

    <div class="footer">
        <?php include 'includes/footer.php' ?>
    </div>
         <script src="script/mediPlusScript.js"></script>

         <script src="js/jquery.min.js"></script>
        <script src="js/jpreLoader.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/easing.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/enquire.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.plugin.js"></script>
        <script src="js/typed.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.countdown.js"></script>
        <script src="js/typed.js"></script>
        <script src="js/designesia.js"></script>
    </body>
</html>
