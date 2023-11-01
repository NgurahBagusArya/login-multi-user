function updateCountdown() {
    const targetDate = new Date();
    targetDate.setHours(24, 0, 0, 0); // Set target time to 24:00:00 (midnight)

    const currentDate = new Date();
    const timeLeft = targetDate - currentDate;

    const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((timeLeft / 1000 / 60) % 60);
    const seconds = Math.floor((timeLeft / 1000) % 60);

    const countdownElement = document.getElementById("countdown");
    countdownElement.innerHTML = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

    if (timeLeft <= 0) {
        countdownElement.innerHTML = "Waktu Habis!";
    }
}

// Update countdown every second
setInterval(updateCountdown, 1000);

// Initial call to set the initial countdown
updateCountdown();
