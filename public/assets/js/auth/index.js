function validateAuthForm(type = "signup") {
    return $("#authForm").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 6,
            },
            name: {
                required: type === "signup",
            },
            phone: {
                required: type === "signup",
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
            agreed_terms: {
                required: type === "signup",
            },
        },
        messages: {
            email: "Please enter a valid email.",
            password: {
                required: "Password is required.",
                minlength: "Password must be at least 6 characters.",
            },
            name: "Please enter your full name.",
            phone: {
                required: "Phone number is required.",
                digits: "Phone number must contain only digits.",
                minlength: "Phone number must be 10 digits.",
                maxlength: "Phone number must be 10 digits.",
            },
            agreed_terms: "You must agree to the terms.",
        },
        errorElement: "label",
        errorClass: "text-red-600 text-sm mt-1 block",
        validClass: "text-green-600",

        errorPlacement: function (error, element) {
            if (
                element.attr("type") === "checkbox" &&
                element.attr("name") === "agreed_terms"
            ) {
                error.insertAfter(
                    element
                        .closest(".flex.items-start")
                        .find('label[for="terms"]')
                );
            } else {
                error.insertAfter(element);
            }
        },

        highlight: function (element, errorClass, validClass) {
            $(element)
                .addClass("border-red-500")
                .removeClass("border-gray-300");

            const label = $("label[for='" + element.id + "']");
            label.addClass("text-red-600");
        },

        unhighlight: function (element, errorClass, validClass) {
            $(element)
                .removeClass("border-red-500")
                .addClass("border-gray-300");

            const label = $("label[for='" + element.id + "']");
            label.removeClass("text-red-600");
        },
    });
}

function submitAuthForm(url, form_id) {
    const $form = $(form_id);
    const type = $form.data("type") || "signup";

    const validator = validateAuthForm(type);

    if (!$form.valid()) return;

    $.blockUI();

    $.ajax({
        url: url,
        method: $form.attr("method"),
        data: $form.serialize(),
        success: function (response) {
            $.unblockUI();
            if (response.success) {
                showToast(
                    "success",
                    response.message || "Account created successfully!"
                );
                if (response.redirect) {
                    setTimeout(
                        () => (window.location.href = response.redirect || "/"),
                        1000
                    );
                }
                showOtpValidationForm();
            } else {
                showToast("error", response.message || "Something went wrong.");
            }
        },
        error: function () {
            $.unblockUI();
            showToast("error", "Server error. Please try again.");
        },
    });
}

function validateOtpInput(otp) {
    return /^\d{6}$/.test(otp);
}

$(document).on("submit", "#otp_verification_form", function (e) {
    e.preventDefault();
    const otp = $("#otp").val().trim();

    if (!validateOtpInput(otp)) {
        showToast("error", "Please enter a valid 6-digit OTP.");
        return;
    }

    $.blockUI();

    $.ajax({
        url: "/verify-otp",
        method: "POST",
        data: {
            _token: $('meta[name="csrf-token"]').attr("content"),
            otp: otp,
        },
        success: function (response) {
            $.unblockUI();
            if (response.redirect) {
                setTimeout(() => {
                    window.location.href = "/";
                }, 3000);
            } else {
                window.location.href = "/";
            }
        },
        error: function () {
            $.unblockUI();
            showToast("error", "Server error. Please try again.");
        },
    });
});

function validateOtpForm() {
    return $("#otp_verification_form").validate({
        rules: {
            otp: {
                required: true,
                digits: true,
                minlength: 6,
                maxlength: 6,
            },
        },
        messages: {
            otp: {
                required: "OTP is required.",
                digits: "OTP must be numeric.",
                minlength: "OTP must be 6 digits.",
                maxlength: "OTP must be 6 digits.",
            },
        },
        errorElement: "label",
        errorClass: "text-red-600 text-sm mt-1 block",
        validClass: "text-green-600",
    });
}
