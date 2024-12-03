function login() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username === "admin" && password === "12345") {
        alert("Login successful!");
        window.location.href = '/login'; // Login akan diarahkan ke halaman login terlebih dahulu
        // Anda bisa menggunakan redirect di server untuk ke /landing
    } else {
        alert("Invalid username or password.");
    }
}
