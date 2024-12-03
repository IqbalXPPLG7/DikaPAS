<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Bernada Coffee</title>
    <link rel="stylesheet" href="/css/filament/login.css">
    <link rel="icon" href="{{ asset('img/logos12.png') }}" type="image/png">
</head>
<body>

    <div class="container">
        <div class="left-section">
            <h2>LOGIN</h2>
            <input type="text" id="username" placeholder="Username">
            <input type="password" id="password" placeholder="Password">
            <button onclick="login()">Login</button>
            <div class="signup">
                <a href="#">Lupa kata sandi?</a> | <a href="#">SIGN UP</a>
            </div>
        </div>
        <div class="right-section">
            <img src="img/whatsapp-image-2024-08-22-at-14-39-51-defbb557-removebg-preview-2.png" alt="Bernada Coffee Logo">
        </div>
    </div>

    <script src="/js/filament/script.js"></script>

    <script>
        function login() {
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (username && password) {
                // Ambil CSRF Token
                let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                
                // Kirim data login ke server via AJAX
                fetch('/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken // Pastikan token CSRF dikirim
                    },
                    body: JSON.stringify({
                        username: username,
                        password: password
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Login successful!");
                        window.location.href = '/landing'; // Redirect ke halaman landing
                    } else {
                        alert(data.message); // Menampilkan pesan kesalahan jika login gagal
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                });
            } else {
                alert("Please enter both username and password.");
            }
        }
    </script>
</body>
</html>
