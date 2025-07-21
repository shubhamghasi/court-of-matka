let csrf_token = $('meta[name="csrf-token"]').attr("content");

function showToast(type, message) {
    const icons = {
        success: `<svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>`,
        error: `<svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>`,
        warning: `<svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20h.01"></path></svg>`,
        info: `<svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20h.01"></path></svg>`,
    };

    const colors = {
        success: {
            bg: "bg-green-50",
            text: "text-green-700",
            border: "border-green-400",
        },
        error: {
            bg: "bg-red-50",
            text: "text-red-700",
            border: "border-red-400",
        },
        warning: {
            bg: "bg-yellow-50",
            text: "text-yellow-700",
            border: "border-yellow-400",
        },
        info: {
            bg: "bg-blue-50",
            text: "text-blue-700",
            border: "border-blue-400",
        },
    };

    const toast = document.createElement("div");
    toast.className = `flex items-start gap-3 p-4 rounded shadow-md border-l-4 ${colors[type].bg} ${colors[type].border} ${colors[type].text} toast`;

    toast.innerHTML = `
        <div class="flex-shrink-0 mt-1">
            ${icons[type]}
        </div>
        <div class="flex-grow text-sm font-medium">${message}</div>
    `;

    const container = document.getElementById("toast-container");
    container.appendChild(toast);

    // Auto-dismiss after 4 seconds
    setTimeout(() => {
        toast.classList.add("opacity-0", "transition", "duration-500");
        setTimeout(() => toast.remove(), 500);
    }, 4000);
}

$(document).ready(function () {
    $("#refundForm").on("submit", function (e) {
        e.preventDefault();

        let marketId = $("#refund-market").val();
        let betNumber = $("#betted_number").val();
        let amount = $("#amount-played").val();

        if (!marketId || !betNumber || !amount) {
            alert("Please fill in all required fields.");
            return;
        }


        const formData = {
            _token: csrf_token,
            market_id: marketId,
            bet_number: betNumber,
            amount: amount,
        };

        $.ajax({
            type: "POST",
            url: "/refunds/store",
            data: formData,
            dataType: "json",
            success: function (response) {
                console.log(response);
                $("#refundSuccess").removeClass("hidden");
                $("#whatsappInstruction").removeClass("hidden"); // 👈 show WhatsApp div
                $("#refundForm")[0].reset();
            },
            error: function (xhr) {
                console.error(xhr.responseText);
                alert("An error occurred. Please try again.");
            },
        });
    });

    $("#dismissSuccess").on("click", function () {
        $("#refundSuccess").addClass("hidden");
    });
});

$("#dismissSuccess").on("click", function () {
    $("#refundSuccess").addClass("hidden");
});

$("#trendsForm").on("submit", function (e) {
    e.preventDefault();

    const form = $(this);
    const transactionId = $("#trend_check").val().trim();
    const market = $("#trends-market").val();
    const number_type = $("#number_type").val();
    url = "/prediction";

    // Reset previous messages
    $("#errorMessage").hide();
    $("#successMessage").hide();

    // Basic validation
    if (!transactionId || transactionId.length < 8) {
        $("#errorText").text("Please enter a valid Transaction ID.");
        $("#errorMessage").fadeIn();
        return;
    }

    if (!market) {
        $("#errorText").text("Please select a market.");
        $("#errorMessage").fadeIn();
        return;
    }
    if (!number_type) {
        $("#errorText").text("Please select Number Type.");
        $("#errorMessage").fadeIn();
        return;
    }

    const formData = {
        market_id: market,
        transaction_id: transactionId,
        number_type: number_type,
        _token: csrf_token,
    };
    console.log(formData);
    // return;
    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        dataType: "json",
        beforeSend: function () {
            // Optional: show loader or disable button
        },
        success: function (response) {
            $("#successMessage").fadeIn();
            $("#errorMessage").hide();
            form.trigger("reset");
        },
        error: function (xhr) {
            let message =
                "There was an error submitting your request. Please try again.";

            if (
                xhr.status === 422 &&
                xhr.responseJSON &&
                xhr.responseJSON.errors
            ) {
                const errors = xhr.responseJSON.errors;
                message = Object.values(errors)
                    .map((e) => e[0])
                    .join(" ");
            } else if (xhr.responseJSON?.message) {
                message = xhr.responseJSON.message;
            }

            $("#errorText").text(message);
            $("#errorMessage").fadeIn();
        },
    });
});

$(document).ready(function () {
    $("#copyUPI").on("click", function () {
        const upi = $("#trends-upi").val();
        navigator.clipboard.writeText(upi).then(() => {
            alert("UPI ID copied to clipboard!");
        });
    });
});

// override these in your code to change the default behavior and style
$.blockUI.defaults = {
    // message displayed when blocking (use null for no message)
    message:
        '<div class="custom-blockui-loader"><img src="/assets/img/loader.gif"></div>',

    title: null, // title string; only used when theme == true
    draggable: true, // only used when theme == true (requires jquery-ui.js to be loaded)

    theme: false, // set to true to use with jQuery UI themes

    // styles for the overlay
    overlayCSS: {
        backgroundColor: "#000",
        opacity: 0.6,
        cursor: "wait",
    },

    // style to replace wait cursor before unblocking to correct issue
    // of lingering wait cursor
    cursorReset: "default",

    // styles applied when using $.growlUI
    growlCSS: {
        width: "350px",
        top: "10px",
        left: "",
        right: "10px",
        border: "none",
        padding: "5px",
        opacity: 0.6,
        cursor: null,
        color: "#fff",
        backgroundColor: "#000",
        "-webkit-border-radius": "10px",
        "-moz-border-radius": "10px",
    },

    // IE issues: 'about:blank' fails on HTTPS and javascript:false is s-l-o-w
    // (hat tip to Jorge H. N. de Vasconcelos)
    iframeSrc: /^https/i.test(window.location.href || "")
        ? "javascript:false"
        : "about:blank",

    // force usage of iframe in non-IE browsers (handy for blocking applets)
    forceIframe: false,

    // z-index for the blocking overlay
    baseZ: 1000,

    // set these to true to have the message automatically centered
    centerX: true, // <-- only effects element blocking (page block controlled via css above)
    centerY: true,

    // allow body element to be stetched in ie6; this makes blocking look better
    // on "short" pages.  disable if you wish to prevent changes to the body height
    allowBodyStretch: true,

    // enable if you want key and mouse events to be disabled for content that is blocked
    bindEvents: true,

    // be default blockUI will supress tab navigation from leaving blocking content
    // (if bindEvents is true)
    constrainTabKey: true,

    // fadeIn time in millis; set to 0 to disable fadeIn on block
    fadeIn: 200,

    // fadeOut time in millis; set to 0 to disable fadeOut on unblock
    fadeOut: 400,

    // time in millis to wait before auto-unblocking; set to 0 to disable auto-unblock
    timeout: 0,

    // disable if you don't want to show the overlay
    showOverlay: true,

    // if true, focus will be placed in the first available input field when
    // page blocking
    focusInput: true,

    // suppresses the use of overlay styles on FF/Linux (due to performance issues with opacity)
    // no longer needed in 2012
    // applyPlatformOpacityRules: true,

    // callback method invoked when fadeIn has completed and blocking message is visible
    onBlock: null,

    // callback method invoked when unblocking has completed; the callback is
    // passed the element that has been unblocked (which is the window object for page
    // blocks) and the options that were passed to the unblock call:
    //   onUnblock(element, options)
    onUnblock: null,

    // don't ask; if you really must know: http://groups.google.com/group/jquery-en/browse_thread/thread/36640a8730503595/2f6a79a77a78e493#2f6a79a77a78e493
    quirksmodeOffsetHack: 4,

    // class name of the message block
    blockMsgClass: "blockMsg",

    // if it is already blocked, then ignore it (don't unblock and reblock)
    ignoreIfBlocked: false,
};


// start of tawk to 
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/687e7443fcac9d191f1572b3/1j0mvcag0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
