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
        <div class="main" style="background-image: url(hospital.jpg);">
            <div class="text">
                Hospital Cash Plan
            </div>
        </div>
    <div class="row">
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
                Double the cash benefit of LKR 40,000 if admitted to the ICU.
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
            <form name="myform" action="insert.php" method="post" onsubmit="validation()"><br>
                <input type="text" name="cat_name" value="Hospital Cash Plan" readonly><br><br>
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