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
        <div class="main" style="background-image: url(surgery1.jpg);">
            <div class="text">
                Surgical Plan
            </div>
        </div>
    <div class="row">
        <div class="topic"><br><br>
            <h2>What is Surgical plan?</h2>
        </div>
        <div class="slogon">
            <p class="sloganText">Insurance for all from the largest and strongest 
            National Insurer</p>
        </div>
    </div>
    <div class="det">
        <p class="details">
            For financial coverage in the event of an unexpected surgery, the Illuminating life insurance 
            Surgery Plan provides you with a comprehensive policy that covers surgery costs up to a pre-specified 
            maximum limit. The policy covers you, your spouse and 5 dependent children, and must be purchased together 
            with an Illuminating life insurance policy.
        </p><br>
    </div>
    </div>
    <h2>Benefits and Eligibility</h2><br>
    <div class="benefits">
        <div class="column1">
            <img src="image/benefit5_5.jpg" width="90px" height="90px"><br>
            <h3>Maximum of LKR 1,000,000</h3>
               <p class="text2">Maximum of LKR 1,000,000 in the event of a surgery performed under medical necessity,&nbsp; or a 
                   pre-specified percentage from the maximum limit depending on the nature of the surgery and selected benefits.</p>
        
        </div>
        <div class="column2">
            <img src="image/benefit4_4.jpg" width="90px" height="90px"><br>
            <h3>360 plus listed surgeries</h3>
            <p class="text2">
                More than 360 listed surgeries and many non- listed surgeries are covered
            </p>
        </div>
        <div class="column3">
            <img src="image/benefit1.jpg" width="90px" height="90px">
            <h3>Up to five times of the insured value</h3>
            <p class="text2">
                You get up to five times of the insured value for the total policy period.
            </p>
        </div>
        <div class="column4">
            <img src="image/benefit8_8.jpg" width="90px" height="90px">
            <h3>ILC Surgical Plan</h3>
            <p class="text2">
                Under the ILC Surgical Plan you can claim a percentage of your ILC surgical Plan 
                sum assured between 10% - 100% depending on the type of surgery
            </p>
        </div>
        <div class="column5">
            <img src="image/benefit9_9.jpg" width="90px" height="90px">
            <h3>Surgeries performed abroad</h3>
            <p class="text2">
                 Valid for surgeries done in Singapore, India, Malaysia and Sri Lanka
            </p>
        </div>
        <div class="column6">
            <img src="image/benefit6_6.jpg" width="90px" height="90px">
            <h3>Cover period</h3>
            <p class="text2">
                Cover period from 5 - 30 years
            </p>
        </div>
        <div class="column7">
            <img src="image/benefit7_7.jpg" width="90px" height="90px">
            <h3>Eligibility</h3>
            <p class="text2">
                The policy can be obtained by adults between the ages of 18 to 60 years with the cover ceasing at the age of 70,&nbsp; while the children need to be under the age of 3 months to 20 years,&nbsp; and hey will be covered until the age of 25 years<br>
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
                <input type="text" name="cat_name" value="Surgical Plan" readonly><br><br>
                <input type="mail" name="mail" value="E-mail*" onkeypress="validationMail()"><br><br>
                <span id="lblError" style="color: red"></span>
                <textarea name="cmd" rows="6" cols="59" >Message*</textarea><br><br>
                <input type="submit" name="submit">
            </form>
            <div class="apply">
                <a href=""><h2 style="color: white;">Apply now...</h2></a>
            </div>
        </div>
    <div>
        <script src="script/mediPlusScript.js"></script>
    </body>
</html>