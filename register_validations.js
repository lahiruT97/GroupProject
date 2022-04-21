

window.onload = function () {
    var form = document.getElementById('register_validate');

    form.addEventListener('submit', (e) => {
        var policyNum = document.getElementById('policyNum');
        var age = document.getElementById('age');
        var username = document.getElementById('username');
        var password = document.getElementById('passwrd');
        var NIC = document.getElementById('NICNum');
        var contNumber = document.getElementById('number');
        var reenter = document.getElementById('repasswrd');

       //validate the policy number
       if(policyNum.value.length==8 && !(isNaN(policyNum.value)) ){
          if(policyNum.value.slice(0,2)< 00 || policyNum.value.slice(0,2)> 11){
            const element = document.getElementById('hide-tr-policy');
            element.className = "";
            const message = document.getElementById('policy-warning')
            message.innerText = "Invalid policy number"
            e.preventDefault();
            }
        }
        else{
            const element = document.getElementById('hide-tr-policy');
            element.className = "";
            const message = document.getElementById('policy-warning')
            message.innerText = "Invalid policy number"
            e.preventDefault();
        }

        //validate the age
         if(age.value <0 || age.value>120){
            const element = document.getElementById('hide-tr-age');
            element.className = "";
            const message = document.getElementById('age-warning')
            message.innerText = "Invalid age"
            e.preventDefault();
        };
        
        //validae the NIC
        if (NIC.value.length ==10)
        {
            if(NIC.value.slice(-1) == 'v' || NIC.value.slice(-1) == 'V')
            {
                if (isNaN(NIC.value.slice(0,9))){
                    const element = document.getElementById('hide-tr-NIC');
                    element.className = "";
                    const message = document.getElementById('NIC-warning')
                    message.innerText = "Invalid NIC number"
                       e.preventDefault();
                }
            }
            else 
                {
                    const element = document.getElementById('hide-tr-NIC');
                    element.className = "";
                    const message = document.getElementById('NIC-warning')
                    message.innerText = "Invalid NIC number"
                     e.preventDefault();
                }
        
        }else if(NIC.value.length ==12){
           if (isNaN(NIC.value)){
            const element = document.getElementById('hide-tr-NIC');
            element.className = "";
            const message = document.getElementById('NIC-warning')
            message.innerText = "Invalid NIC number"
       e.preventDefault();
           }
        }
        else{
            const element = document.getElementById('hide-tr-NIC');
            element.className = "";
            const message = document.getElementById('NIC-warning')
            message.innerText = "Invalid NIC number"
       e.preventDefault();
        };

        //validate the contact number
        if(contNumber.value.length != 10 || isNaN(contNumber.value)){
            const element = document.getElementById('hide-tr-number');
            element.className = "";
            const message = document.getElementById('number-warning')
            message.innerText = "Invalid Contact number"
    e.preventDefault();
        }

        //validate the username
        if (username.value.length < 7 || username.value.length > 13) {
            const element = document.getElementById('hide-tr-username');
            element.className = "";
            const message = document.getElementById('username-warning')
            message.innerText = "Enter username with 8-12 characters"
            e.preventDefault();
        };

         //validate the password
         if (password.value.length < 7 ) {
            const element = document.getElementById('hide-tr-passwrd');
            element.className = "";
            const message = document.getElementById('passwrd-warning')
            message.innerText = "8 characters should be included in the password"
            e.preventDefault();
        };

        if (!/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/.test(password.value)) {
            const element = document.getElementById('hide-tr-passwrd');
            element.className = "";
            const message = document.getElementById('passwrd-warning')
            message.innerText = "At least a number and a special character should be included in the password"
            e.preventDefault();
        }
        //compare the entered password 
        if (password.value.localeCompare(reenter.value) !== 0 ){
            const element = document.getElementById('hide-tr-repasswrd');
            element.className = "";
            const message = document.getElementById('repasswrd-warning')
            message.innerText = "Re-entered password does not match with the given password"
            e.preventDefault();
        }
        
    });
};
