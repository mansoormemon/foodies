$(document).ready(
    () => {
        $("#signUpAgreementChk").change(
            () => {
                $("#signUpSubmit").prop("disabled", !$("#signUpAgreementChk").prop("checked"));
            }
        );
    }
);
