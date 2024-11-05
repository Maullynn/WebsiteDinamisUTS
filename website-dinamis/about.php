<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Styling dasar */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
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
            margin-bottom: 0.5rem;
        }

        /* Nama dan informasi tambahan */
        h2 {
            color: #333;
            font-size: 1.5rem;
            margin-top: 0;
        }

        h3 {
            color: #555;
            font-size: 1.2rem;
            margin: 0.5rem 0;
        }

        p {
            color: #666;
            line-height: 1.6;
        }

        /* Styling tombol */
        .btn {
            display: inline-block;
            margin-top: 20px;
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

        /* Tombol Back to Home */
        .btn-home {
            margin-top: 10px;
            background-color: #28a745;
        }

        .btn-home:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tentang Saya</h1>
        <h2>Muhammad Maulana</h2>
        <h3>NIM: 312310475</h3>
        <p>Saya adalah mahasiswa Universitas Pelita Bangsa yang sedang mendalami pemrograman dan pengembangan aplikasi web. Saya memiliki minat yang besar dalam teknologi dan terus belajar untuk menjadi pengembang yang lebih baik setiap harinya.</p>
        <a href="mailto:muhammad.maulana@example.com" class="btn">Hubungi Saya</a>
        <a href="index.php" class="btn btn-home">Home</a>
    </div>
</body>
</html>