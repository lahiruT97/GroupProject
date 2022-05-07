

window.onload = function () {
    var form = document.getElementById('apply');

    form.addEventListener('submit', (e) => {
        var age = document.getElementById('age');
        var NIC = document.getElementById('NICNum');
        var contNumber = document.getElementById('number');


        //validate the age
         if(age.value <0 || age.value>120){
            const element = document.getElementById('hide-age');
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
                    const element = document.getElementById('hide-NIC');
                    element.className = "";
                    const message = document.getElementById('NIC-warning')
                    message.innerText = "Invalid NIC number"
                       e.preventDefault();
                }
            }
            else 
                {
                    const element = document.getElementById('hide-NIC');
                    element.className = "";
                    const message = document.getElementById('NIC-warning')
                    message.innerText = "Invalid NIC number"
                     e.preventDefault();
                }
        
        }else if(NIC.value.length ==12){
           if (isNaN(NIC.value)){
            const element = document.getElementById('hide-NIC');
            element.className = "";
            const message = document.getElementById('NIC-warning')
            message.innerText = "Invalid NIC number"
       e.preventDefault();
           }
        }
        else{
            const element = document.getElementById('hide-NIC');
            element.className = "";
            const message = document.getElementById('NIC-warning')
            message.innerText = "Invalid NIC number"
       e.preventDefault();
        };

        //validate the contact number
        if(contNumber.value.length != 10 || isNaN(contNumber.value)){
            const element = document.getElementById('hide-number');
            element.className = "";
            const message = document.getElementById('number-warning')
            message.innerText = "Invalid Contact number"
    e.preventDefault();
        }

        
    });
};
