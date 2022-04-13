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
        <div class="main" style="background-image: url(medi60.jpeg);">
            <div class="text">
                Medi60 Plan
            </div>
        </div>
    <div class="row">
        <div class="topic"><br><br>
            <h2>What is Medi60?</h2>
        </div>
        <div class="slogon">
            <p class="sloganText">Insurance for all from the largest and strongest 
            National Insurer</p>
        </div>
    </div>
    <div class="det">
        <p class="details">
            Illuminating Insurance Medi 60 is a health insurance product which Covering a range of health insurance 
            needs of senior citizens (Age 60) in the country at a highly affordable price. You can choose your best 
            suited Medical Plan from 3 packages based on your financial investment.
        </p>
    </div>
    <h2>Benefits and Eligibility</h2><br>
    <div class="benefits">
        <div class="column1">
            <img src="image/benefit5_5.jpg" width="90px" height="90px"><br>
            <h3>Hospitalization Benefits - Private Hospitals</h3>
               <p class="text2"><ul>
                   <li style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: 18px;">Hospital & Nursing Home Maintenance Charges including room charges</li>
                    <li style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: 18px;">Consultant's and Specialist's Fees,&nbsp; Surgeon's and Anesthetists Fees</li></p></ul>
        
        </div>
        <div class="column2">
            <img src="image/benefit4_4.jpg" width="90px" height="90px"><br>
            <h3>Hospitalization Benefits - Government Hospitals</h3>
            <p class="text2">
                Government Hospital per day allowance - Maximum of 15 days (**Government Hospitalization due to COVID 19 - Rs. 1,000/- per 
                day paid within above government hospital allowance limit (One night considered as a day)
            </p>
        </div>
        <div class="column3">
            <img src="image/benefit1.jpg" width="90px" height="90px">
            <h3>Day Care Surgery expenses</h3>
            <p class="text2">
                135 Day care surgery expenses Will be covered
            </p>
        </div>
        <div class="column4">
            <img src="image/benefit8_8.jpg" width="90px" height="90px">
            <h3>Entitled for claim in 30 days</h3>
            <p class="text2">
                Entitled for claim in 30 days after policy commencement. This is not applicable for accidents
            </p>
        </div>
        <div class="column5">
            <img src="image/benefit9_9.jpg" width="90px" height="90px">
            <h3>First Year Exclusions</h3>
            <p class="text2">
                Some specific ailments and surgeries are excluded in first twelve months
            </p>
        </div>
        <div class="column6">
            <img src="image/benefit6_6.jpg" width="90px" height="90px">
            <h3>Pre-existing conditions</h3>
            <p class="text2">
                Pre Existing Medical Conditions are excluded other than Diabetes, cholesterol and Hypertension
            </p>
        </div>
        <div class="column7">
            <img src="image/benefit7_7.jpg" width="90px" height="90px">
            <h3>Eligibility</h3>
            <p class="text2">
                The policy can be obtained by senior citizens between the ages of 60 to 70 years with the cover and ceasing 
                at the age of 80 years.
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
                <input type="text" name="cat_name" value="Medi60" readonly><br><br>
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