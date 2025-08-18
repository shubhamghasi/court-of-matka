$("#trendsForm").validate({
    rules: {
        market: { required: true },
        number_type: { required: true },
        date: { required: true, date: true },
    },
    messages: {
        market: "Please select a market",
        number_type: "Please select a number type",
        date: "Please select a valid date",
    },
    errorClass: "text-red-500 text-sm mt-1",
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
        let formObj = {};
        $(form)
            .serializeArray()
            .forEach(function (item) {
                formObj[item.name] = item.value.trim();
            });

        $.ajax({
            url: "/market-bets/fetch",
            method: "POST",
            data: formObj,
            headers: {
                "X-CSRF-TOKEN": csrf_token,
            },
            success: function (response) {
                let panel_requested = response.panel_requested ?? false; // FIX HERE
                let result_container = $("#result_container");
                result_container.empty(); // clear old results

                // If requires payment, show payment form and stop further execution
                if (response.requires_payment) {
                    $("#trends_payment_form").removeClass("hidden");
                    result_container.html(
                        `<div class="text-center text-red-500 font-semibold">${response.message}</div>`
                    );
                    return;
                }

                if (response.success && response.data.length > 0) {
                    let gridWrapper = $(
                        '<div class="mt-3 max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6"></div>'
                    );

                    response.data.forEach(function (bet) {
                        let number = panel_requested
                            ? bet.number.panel_number
                            : bet.number.number;

                        let totalAmount = Number(bet.total_amount) || 0;

                        let categoryColor = bet.color
                            ? `bg-${bet.color}-500`
                            : "bg-gray-800";

                        let cardHtml = `
                                        <div class="jodi jodi-card rounded-2xl p-6 text-white shadow-lg ${categoryColor}">
                                            <div class="flex flex-col items-center space-y-4">
                                                <div class="jodi-number w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold bg-white text-black">
                                                    ${number}
                                                </div>
                                            </div>
                                        </div>
                                    `;

                        gridWrapper.append(cardHtml);
                    });

                    result_container.append(gridWrapper);
                } else {
                    result_container.html(
                        `<div class="col-span-full text-center text-gray-400">No bets found</div>`
                    );
                }
            },
            error: function (xhr) {
                if (xhr.status === 403) {
                    try {
                        let res = JSON.parse(xhr.responseText);
                        if (res.requires_payment) {
                            $("#trends_payment_form").removeClass("hidden");
                            $("#result_container").html(
                                `<div class="text-center text-red-500 font-semibold">${res.message}</div>`
                            );
                        }
                    } catch (e) {
                        console.error("Error parsing JSON:", e);
                    }
                }
            },
        });
    },
});

function initNumberTypeHandler() {
    const numberTypeSelect = $("#number_type");
    const panelField = $("#panel-number-field");
    const panelInput = $("#panel_number");

    function togglePanelField() {
        let selectedText = numberTypeSelect
            .find("option:selected")
            .text()
            .toLowerCase();
        if (selectedText.includes("panel")) {
            panelField.removeClass("hidden");
        } else {
            panelField.addClass("hidden");
            panelInput.val(""); // clear when hidden
        }
    }

    // Bind change event
    numberTypeSelect.on("change", togglePanelField);

    // Run once on load
    togglePanelField();
}

$(document).ready(function () {
    $("#trends_payment_form").on("submit", function (e) {
        e.preventDefault();

        let formData = $(this).serialize();

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            beforeSend: function () {
                // Optional: disable button & show loading
                $("#trends_payment_form button[type=submit]")
                    .prop("disabled", true)
                    .text("Submitting...");
            },
            success: function (response) {
                // Clear the form
                $("#trends_payment_form")[0].reset();
                $("#trends_payment_form").addClass("hidden");

                // Show success message
                $("#result_container").html(`
                    <div class="bg-green-100 border border-green-300 text-green-800 rounded-lg p-4 text-center font-semibold">
                        ✅ Payment submitted successfully! Please check after 30 minutes — we need to process and validate your payment.
                    </div>
                `);
            },
            error: function (xhr) {
                let errMsg = "Something went wrong. Please try again.";
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errMsg = xhr.responseJSON.message;
                }

                $("#result_container").html(`
                    <div class="bg-red-100 border border-red-300 text-red-800 rounded-lg p-4 text-center font-semibold">
                        ❌ ${errMsg}
                    </div>
                `);
            },
            complete: function () {
                $("#trends_payment_form button[type=submit]")
                    .prop("disabled", false)
                    .text("Submit Payment Details");
            },
        });
    });

    initNumberTypeHandler();
});
