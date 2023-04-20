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
d1 = document.getElementsByClassName('hamburg')[0];
d2 = document.getElementsByClassName("hammenu")[0];


d1.addEventListener("click", function () {
    if (d2.style.display == "flex") {
        d2.style.display = "none"
    }
    else {
        d2.style.display = "flex"
    }
})
