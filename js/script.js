'use strict'


$(document).ready(
    () => {
        $("#signUpAgreementChk").change(
            () => {
                $("#signUpSubmit").prop("disabled", !$("#signUpAgreementChk").prop("checked"));
            }
        );

        $("#signUpShowPassword").click(
            () => {
                var signUpPassword = $("#signUpPassword");
                signUpPassword.attr('type', signUpPassword.attr('type') == "password" ? "text" : "password");
                $("#signUpEye").toggleClass('d-none');
                $("#signUpEyeSlash").toggleClass('d-none');
            }
        );

        // Fetch all the forms we want to apply custom Bootstrap validation styles.
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            });
    }
);



const fastFoodItems = [
    "Cheeseburger",
    "Chicken Nuggets",
    "French Fries",
    "Pizza",
    "Hot Dog",
    "Taco",
    "Burrito",
    "Fried Chicken",
    "Chicken Sandwich",
    "Fish and Chips",
    "Milkshake",
    "Soft Drink",
    "Onion Rings",
    "Nachos",
    "Sushi",
    "Donut",
    "Ice Cream",
    "Pancakes",
    "Waffles",
    "Sub Sandwich",
    "Chicken Wings",
    "Gyros",
    "Falafel",
    "McDonald's Big Mac",
    "KFC Original Recipe Chicken",
    "Wendy's Baconator",
    "Taco Bell Crunchwrap Supreme",
    "Arby's Roast Beef Sandwich",
    "In-N-Out Double-Double",
    "Chick-fil-A Chicken Sandwich",
];

var z1 = document.getElementsByClassName('i1');
var z2 = z1[0].value;

function Chip() {
    var d1 = document.getElementsByClassName("modal-body");
    var d2 = document.createElement('div');
    d2.style.cssText = "background-color:red;width:100px;height:20px;border-radius:30px;"
    d2.innerHTML = z2;
    d1[0].appendChild(d2);
}

if (z2!=" "){
    if (fastFoodItems.includes(z2)==true){
        Chip();
    }
}


