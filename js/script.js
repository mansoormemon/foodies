'use strict'


$(document).ready(
    () => {
        $("#signUpAgreementChk").change(
            () => {
                $("#signUpSubmit").prop("disabled", !$("#signUpAgreementChk").prop("checked"));
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
            })

        $(".form-check").css("color", "#0f0f0f");

    }
);
