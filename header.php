<?php
include 'koneksi.php';
function formatTanggal($tanggal) {
  // Mengonversi string tanggal ke format tanggal
  $tanggalBaru = date("d F Y", strtotime($tanggal));
  // Mengubah bulan ke bahasa Indonesia
  $bulanIndonesia = [
      'January' => 'Januari',
      'February' => 'Februari',
      'March' => 'Maret',
      'April' => 'April',
      'May' => 'Mei',
      'June' => 'Juni',
      'July' => 'Juli',
      'August' => 'Agustus',
      'September' => 'September',
      'October' => 'Oktober',
      'November' => 'November',
      'December' => 'Desember'
  ];
  // Mengganti nama bulan Inggris dengan Indonesia
  foreach ($bulanIndonesia as $en => $id) {
      $tanggalBaru = str_replace($en, $id, $tanggalBaru);
  }
  return $tanggalBaru;
}
?>
 <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Portofolio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="home/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="home/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="home/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">Portofolio</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="portofolio.php" class="nav-item nav-link">Portofolio</a>
                        <a href="galeri.php" class="nav-item nav-link">Galeri</a>
                        <a href="biodata.php" class="nav-item nav-link">Biodata</a>
                        <a href="kontak.php" class="nav-item nav-link">Kontak</a>
                    </div>
                </div>
            </nav>