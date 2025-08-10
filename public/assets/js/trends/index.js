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
                console.log("Bet Data:", response);

                let result_container = $("#result_container");
                result_container.empty(); // clear old results

                if (response.success && response.data.length > 0) {
                    // Create a grid wrapper
                    let gridWrapper = $(
                        '<div class="mt-3 max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6"></div>'
                    );

                    response.data.forEach(function (bet) {
                        let number = bet.number
                            ? bet.number.panel_number
                                ? bet.number.panel_number
                                : bet.number.number
                            : bet.number_id;

                        let totalAmount = Number(bet.total_amount) || 0;

                        // If it's the highest bet, add green background
                        let highestClass = bet.is_highest
                            ? "heighest_amount"
                            : "bg-gray-800";

                        let cardHtml = `
        <div class="jodi jodi-card rounded-2xl p-6 text-white shadow-lg ${highestClass}">
            <div class="flex flex-col items-center space-y-4">
                <div class="jodi-number w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold bg-white text-black">
                    ${number}
                </div>
                <div class="amount amount-text text-center">
                    <div class="text-sm opacity-80 mb-1">Amount</div>
                    <div class="text-xl sm:text-2xl font-bold">₹ ${totalAmount.toLocaleString()}</div>
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
                console.error(xhr.responseText);
            },
        });
    },
});

// Show panel number field if "Panel" is selected
$("#number_type").on("change", function () {
    let selectedText = $("#number_type option:selected")
        .text()
        .trim()
        .toLowerCase();
    if (selectedText === "panel") {
        $("#panel-number-field").removeClass("hidden");
    } else {
        $("#panel-number-field").addClass("hidden");
        $("#panel_number").val(""); // clear if hidden
    }
});
