function updateCurrentTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString("en-IN", {
        hour12: false,
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
    });
    document.getElementById("currentTime").textContent = timeString;
}

$(document).ready(function () {
    // Initial call
    updateCurrentTime();

    // Update every second
    setInterval(updateCurrentTime, 1000);
});
