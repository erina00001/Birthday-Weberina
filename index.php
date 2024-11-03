<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        /* Memposisikan konten di tengah halaman */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #F3E5AB; /* Latar belakang coklat soft */
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }

        h1 {
            font-size: 70px;
            color: #8B4513; /* Warna coklat sedang */
            text-shadow: 2px 2px 5px #D2B48C, 2px 2px 10px #FFE4B5; /* Bayangan lembut */
            animation: fadeIn 1.5s ease; /* Animasi perlahan */
            margin-bottom: 20px;
        }

        /* Form */
        .form-container {
            text-align: center;
        }

        input[type="password"] {
            padding: 10px;
            font-size: 18px;
            border: 2px solid #8B4513;
            border-radius: 5px;
            margin-top: 10px;
            width: 250px;
            text-align: center;
            background-color: #FFF8DC; /* Latar belakang krem */
        }

        button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #8B4513;
            color: #FFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan */
        }

        button:hover {
            background-color: #A0522D; /* Warna coklat lebih terang saat hover */
        }

        /* Animasi teks */
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>HELLO!</h1>
        <form onsubmit="return checkPassword()">
            <input type="password" id="password" placeholder="Enter Password" required>
            <br>
            <button type="submit">Enter</button>
        </form>
    </div>

    <script>
        // Password default
        let password = "aurora";

        // Fungsi untuk memeriksa password
        function checkPassword() {
            const userInput = document.getElementById("password").value;
            if (userInput === password) {
                // Arahkan ke halaman Happy Birthday jika password benar
                window.location.href = "cake.php";
                return false; // Mencegah form dari reload halaman
            } else {
                alert("Password salah! Coba lagi.");
                return false; // Mencegah form dari reload halaman
            }
        }
    </script>
</body>
</html>
