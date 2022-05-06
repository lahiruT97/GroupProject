

window.onload = function () {
    var re_enter = document.getElementById('reset');

    re_enter.addEventListener('submit', (e) => {
        var password = document.getElementById('passwrd');
        var reenter = document.getElementById('repasswrd');

        //validate the password
        if (password.value.length < 8) {

            const element = document.getElementById('hide-passwrd');
            element.className = "";
            const message = document.getElementById('passwrd-warning')
            message.innerText = "8 characters should be included in the password"
            e.preventDefault();

        }

        else if (!/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/.test(password.value)) {
            const element = document.getElementById('hide-passwrd');
            console.log("in the character");

            element.className = "";
            const message = document.getElementById('passwrd-warning')
            message.innerText = "At least a number and a special character should be included in the password"
            e.preventDefault();

        };
        //compare the entered password 
        if (password.value.localeCompare(reenter.value) !== 0) {
            const element = document.getElementById('hide-repasswrd');
            element.className = "";
            const message = document.getElementById('repasswrd-warning')
            message.innerText = "Re-entered password does not match with the given password"
            e.preventDefault();
        }

    });
};
