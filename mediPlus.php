<html>
    <head>
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
                else if(cmd="Message*"){
                    alert("Please add your message");
                    return false;
                }
		        return true;
            }
        </script>
    </head>
    <body>
        <div class="main">
            <div class="text">
                Medi Plus
            </div>
        </div>
    <div class="row">
        <div class="topic"><br><br>
            <h2>What is Medi Plus?</h2>
        </div>
        <div class="slogon">
            <p class="sloganText">Insurance for all from the largest and strongest 
            National Insurer</p>
        </div>
    </div>
    <div class="det">
        <p class="details">
            Medi Plus Health Insurance plan covers a range of health insurance needs at 
            an affordable price and comes with a special no claim bonus, which increases the 
            sum insured for every claim-free year. You can also enjoy our cashless claim settlement 
            procedure, which gives you even greater convenience. you can choose your best suited Medi 
            Plus Health Insurance Plan from 4 packages based on your financial investment.
        </p><br>
    </div>
    <h2>Benefits and Eligibility</h2><br>
    <div class="benefits">
        <div class="column1">
            <img src="image/benefit5_5.jpg" width="90px" height="90px"><br>
            <h3>Hospitalization Benefits - Private Hospitals</h3>
               <p class="text2">Hospitalization benefits inclusive of room charges,&nbsp; medical practitioner fees,&nbsp; theatre charges, &nbsp;
                ambulance charges,&nbsp; maternity benefits,&nbsp; etc.</p>
        
        </div>
        <div class="column2">
            <img src="image/benefit4_4.jpg" width="90px" height="90px"><br>
            <h3>Hospitalization Benefits - Government Hospitals</h3>
            <p class="text2">
                Hospitalization benefits are inclusive of daily allowance,&nbsp; Cost of Drugs and tests from outside while in Government hospitals 
                and Allowance for Childbirth.
            </p>
        </div>
        <div class="column3">
            <img src="image/benefit1.jpg" width="90px" height="90px">
            <h3>Additional Benefits</h3>
            <p class="text2">
                Benefits applicable for treatments for cataract,&nbsp; hernia,&nbsp; hysterectomy,&nbsp; all types of cardiac surgeries,&nbsp; 
                cancer treatments,&nbsp; and more
            </p>
        </div>
        <div class="column4">
            <img src="image/benefit8_8.jpg" width="90px" height="90px">
            <h3>Epidemic and pandemic cover (Covid 19)</h3>
            <p class="text2">
                Hospital daily allowance for government hospitals and hospitalization charges for private hospitals/intermediary
                 care centres managed by health ministry approved private hospitals.
            </p>
        </div>
        <div class="column5">
            <img src="image/benefit9_9.jpg" width="90px" height="90px">
            <h3>No Claim Bonus</h3>
            <p class="text2">
                A No Claim Bonus that increases the basic sum assured by 5% up to a maximum of 50% for every claim-free year.
            </p>
        </div>
        <div class="column6">
            <img src="image/benefit6_6.jpg" width="90px" height="90px">
            <h3>Medical Reports</h3>
            <p class="text2">
                Medical reports are not required up to the age limit of 55 years.
            </p>
        </div>
        <div class="column7">
            <img src="image/benefit7_7.jpg" width="90px" height="90px">
            <h3>Eligibility</h3>
            <p class="text2">
                The policy can be obtained by adults between the ages of 18 to 60 years with the cover ceasing at the age of 69.<br>
                The policy can be obtained for children between the ages of 180 days to 17 years with the cover ceasing at the age of 21.
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
            <form name="myform" action="insert.php" method="post" onsubmit="validation()"><br>
                <input type="text" name="cat_name" value="Medi Plus" readonly><br><br>
                <input type="mail" name="mail" value="E-mail*" onkeypress="validationMail()"><br><br>
                <span id="lblError" style="color: red"></span>
                <textarea name="cmd" rows="6" cols="59" >Message*</textarea><br><br>
                <input type="submit" name="submit">
            </form>
            <div class="apply">
                <a href=""><h2 style="color: white;">Apply now...</h2></a>
            </div>
        </div>
    </div>
    <script src="script/mediPlusScript.js"></script>
    </body>
</html>