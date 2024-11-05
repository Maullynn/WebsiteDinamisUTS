<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Link Font Awesome -->
    <style>
        /* Styling dasar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Styling untuk kontainer utama */
        .container {
            background-color: #fff;
            padding: 30px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: center;
        }

        /* Judul utama */
        h1 {
            color: #007bff;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        /* Gaya untuk ikon media sosial */
        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
            color: #007bff;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #0056b3;
        }

        /* Tombol Back to Home */
        .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Kontak</h1>
        <p>Anda dapat menghubungi saya melalui platform berikut:</p>
        <div class="social-icons">
            <a href="https://www.instagram.com/boumahashizume?igsh=ZndvdThpajNoMGE=" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a> <!-- Instagram -->
            <a href="https://www.linkedin.com/in/muhammad-maulana1/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a> <!-- LinkedIn -->
            <a href="https://www.facebook.com/share/nrX68kxq1nQv4bHA/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a> <!-- Facebook -->
            <!-- Tambahkan platform lainnya di sini -->
        </div>
        <a href="index.php" class="btn">Kembali ke Beranda</a>
    </div>
</body>
</html>
