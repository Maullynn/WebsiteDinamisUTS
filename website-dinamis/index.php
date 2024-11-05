<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Dinamis</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* Hero Section Styling */
        .hero-section {
            background: linear-gradient(45deg, #007bff, #6610f2);
            color: #fff;
            padding: 60px 0;
        }

        /* Card Styling */
        .feature-card {
            transition: transform 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Footer Styling */
        footer {
            background-color: #333;
            color: #ddd;
        }
        footer a {
            color: #ccc;
            transition: color 0.3s;
        }
        footer a:hover {
            color: #fff;
        }
    </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"><i class="bi bi-globe"></i> Website Dinamis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="?page=home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="form.php">Form</a></li>
            <li class="nav-item"><a class="nav-link" href="?page=datatables">DataTables</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero-section text-center">
    <div class="container">
      <h1 class="display-4 fw-bold">Selamat Datang di Website Dinamis!</h1>
      <p class="lead">Website ini dibuat dengan PHP dan Bootstrap 5.3 untuk memberikan pengalaman yang interaktif dan responsif.</p>
      <a href="about.php" class="btn btn-light btn-lg mt-3 shadow-sm custom-btn">Getting Started</a>

<style>
    .custom-btn {
        transition: background-color 0.3s, transform 0.3s;
    }
    .custom-btn:hover {
        background-color: #007bff; /* Ubah warna latar belakang saat hover */
        color: white; /* Ubah warna teks saat hover */
        transform: translateY(-2px); /* Efek angkat saat hover */
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.5); /* Bayangan saat hover */
    }
</style>      </div>
  </section>

  <!-- Features Section -->
  <section class="py-5">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-4">
          <div class="feature-card p-4">
            <i class="bi bi-laptop fs-1 text-primary"></i>
            <h3 class="mt-3">Responsive Design</h3>
            <p>Website ini tampil dengan baik di semua perangkat, dari desktop hingga ponsel.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card p-4">
            <i class="bi bi-speedometer2 fs-1 text-primary"></i>
            <h3 class="mt-3">Cepat dan Efisien</h3>
            <p>Dikembangkan dengan kinerja optimal agar cepat dan ringan saat diakses.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card p-4">
            <i class="bi bi-lock fs-1 text-primary"></i>
            <h3 class="mt-3">Keamanan Terjamin</h3>
            <p>Dibangun dengan memperhatikan keamanan agar data Anda tetap terlindungi.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="container mt-5" id="pageContent">
    <?php
      // Check if a specific page is requested
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
          case 'home': include "home.php"; break;
          case 'about': include "about.php"; break;
          case 'contact': include "contact.php"; break;
          case 'form': include "form.php"; break;
          case 'datatables': include "datatables.php"; break;
          case '404': include "404.php"; break;
          default: include "home.php";
        }
      } else {
        include "home.php";
      }
    ?>
  </div>

  <!-- Footer -->
  <footer class="text-center py-4 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5>Kontak Kami</h5>
          <p>Email: peoplelikethi12@gmail.com</p>
          <p>Telepon: (123) 456-7890</p>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Ikuti Saya</h5>
          <a href="https://www.instagram.com/boumahashizume?igsh=ZndvdThpajNoMGE=" target="_blank" title="Instagram"><i class="bi bi-instagram fs-4"></i></a> <!-- Instagram -->
          <a href="https://www.facebook.com/share/nrX68kxq1nQv4bHA/" target="_blank" title="Facebook"><i class="bi bi-facebook fs-4"></i></a> <!-- Facebook -->
        </div>
        <div class="col-md-4 mb-3">
          <h5>Bekasi</h5>
          <p>Jl. Ahmad Dhani </p>
          <p>Indonesia</p>
        </div>
      </div>
      <small>&copy; 2024 Pemrograman Web UTS 1. All rights reserved.</small>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="assets/jquery-3.7.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/datatables/dataTables.js"></script>

  <!-- Initialize DataTable -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      if (document.querySelector("#example")) {
        new DataTable("#example");
      }
    });
  </script>
</body>
</html>
