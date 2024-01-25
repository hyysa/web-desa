// Fungsi untuk mendapatkan dan memformat waktu saat ini dalam bahasa Indonesia
function getCurrentDateTime() {
    const now = new Date();
    const days = [
        "Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu",
    ];
    const options = {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
    };

    const day = days[now.getDay()];
    const formattedDate = now.toLocaleDateString("id-ID", options);

    return `${formattedDate}`;
}

// Fungsi untuk mendapatkan waktu real-time
function getRealTime() {
    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();

    return `${hours}:${minutes}:${seconds}`;
}

// Fungsi untuk mengupdate elemen HTML dengan waktu saat ini dan waktu real-time
function updateDateTime() {
    const dateTimeElement = document.getElementById("dateTime");
    const realTimeElement = document.getElementById("realTime");

    if (dateTimeElement && realTimeElement) {
        dateTimeElement.textContent = getCurrentDateTime();
        realTimeElement.textContent = getRealTime();
    }
}

// Memanggil fungsi pertama kali
updateDateTime();

// Memanggil fungsi setiap detik untuk memperbarui waktu
setInterval(updateDateTime, 1000);
