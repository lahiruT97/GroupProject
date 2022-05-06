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
        <div class="main" style="background-image:url(soubhagya.jpg);">
            <div class="text">
                Soubhagya
            </div>
        </div>
    <div class="rowo">
        <div class="topic"><br><br>
            <h2>What is Soubhagya?</h2>
        </div>
        <div class="slogon">
            <p class="sloganText">Insurance for all from the largest and strongest 
            National Insurer</p>
        </div>
    </div>
    <div class="det">
        <p class="details">
            In today's world, women play a crucial role as mothers,&nbsp; breadwinners,&nbsp;
            daughters,&nbsp;leaders and strong independent personalities who strive to win the world. The sacrifices they make 
            daily are many and they juggle between work and family expertly,&nbsp; achieving wonders.
            Illuminating Life Saubhagya is a life insurance plan which celebrates the devoted and driven everywhere,&nbsp;
            it is a plan especially made for them and their future.
        </p><br>
    </div>
    <h2>Benefits and Eligibility</h2><br>
    <div class="benefits">
        <div class="column1">
            <img src="image/benefit5_5.jpg" width="90px" height="90px"><br>
            <h3>How it works</h3>
               <p class="text2">Saubhagya provides a unique offering where periodic lump sum payments are paid to the policyholder 
                   during the term of the policy while also providing a life cover and a maturity at the end of the term if the 
                   policyholder survives.</p>
        
        </div>
        <div class="column2">
            <img src="image/benefit4_4.jpg" width="90px" height="90px"><br>
            <h3>Benefits</h3>
            <p class="text2">
                Once you purchase a Saubhagya policy you would be receiving generous lump sum payments every 4 years of your policy 
                term which you can use for your financial requirements.
                At the end of the term the policyholder is able to enjoy the added benefit of receiving the assured sum of the policy or the accumulated fund,&nbsp;
                whichever is higher and with no deductions of the lump sums already paid.
            </p>
        </div>
        <div class="column3">
            <img src="image/benefit1.jpg" width="90px" height="90px">
            <h3>Payment Modes</h3>
            <p class="text2">
                This policy can be paid in Monthly, Quarterly, Half-Yearly and Annual modes.
            </p>
        </div>
        <div class="column4">
            <img src="image/benefit8_8.jpg" width="90px" height="90px">
            <h3>Additional Benefits</h3>
            <p class="text2">
                Ceylinco Life Saubhagya Plan policyholders will be eligible for additional rewards as a tribute for their loyalty. 
                All policyholders stand a chance to take part in the Illuminating Life Family Savari consumer promotion and their 
                children are also eligible for the Pranama Scholarship scheme.
            </p>
        </div>
        <div class="column5">
            
        </div>
        <div class="column6">
            
        </div>
        <div class="column7">
            <img src="image/benefit7_7.jpg" width="90px" height="90px">
            <h3>Eligibility</h3>
            <p class="text2">
                If you are a female aged between 18-58 years you are eligible to purchase this policy for a period of 12, 16, 20 or 24 years.
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
                <input type="text" name="cat_name" value="Soubhagya" readonly><br><br>
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

            <div class="footer" >
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
