
window.onload = function () {
    //display the modal of update number form
    $(document).ready(function () {
        $("#up-number-modal").click(function () {
            $("#update-modal-number").modal();
        });
    });

    //display the modal of update email form
    $(document).ready(function () {
        $("#up-email-modal").click(function () {
            $("#update-modal-email").modal();
        });
    });


//update number validations

    var form = document.getElementById('update-number-form');

    form.addEventListener('submit', (e) => {
        var contNumber = document.getElementById('number');
        var NIC = document.getElementById('NICNum');
        //validate the contact number
        if (contNumber.value.length != 10 || isNaN(contNumber.value)) {
            const element = document.getElementById('hide-number');
            element.className = "";
            const message = document.getElementById('number-warning')
            message.innerText = "Invalid Contact number"
            e.preventDefault();
        }

    });

};




