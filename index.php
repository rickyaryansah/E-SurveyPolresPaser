<?php
session_start();
include "config.php";
if(isset($_SESSION['username'])){
    header('location: admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Indeks Kepuasan Masyarakat - Polres Paser</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="shortcut icon" href="assets/img/polres.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Imperial
  * Updated: Mar 13 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div data-aos="fade-in">
                <div class="hero-logo">
                    <img class="" src="assets/img/logo.png" alt="Imperial">
                </div>

                <h1>KEPOLISIAN RESOR (POLRES) KABUPATEN PASER</h1>
                <h2>E-Survey <span class="typed" data-typed-items="Indeks Kepuasan Masyarakat, Polres Paser"></span>
                </h2>
                <div class="actions">
                    <a href="#about" class="btn-get-started">Mulai Mengisi!</a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container mt-5" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Biodata</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">Silahkan mengisi data diri terlebih dahulu sebelum melakakukan
                            survey Indeks Kepuasan Masyarakat (IKM) Polres Paser</p>
                    </div>
                </div>
            </div>
            <div class="container about-container" data-aos="fade-up" data-aos-delay="200">
                <div class="row">

                    <div class="about-content">
                        <div class="form">
                            <form action="survey.php" method="post">
                                <style>
                                .form-group {
                                    display: flex;
                                    flex-direction: row;
                                    align-items: center;
                                }

                                .form-group label {
                                    flex: 1;
                                    margin-right: 10px;
                                }

                                .form-group input,
                                .form-group textarea {
                                    flex: 3;
                                }
                                </style>

                                <div class="form-group">
                                    <label for="name">Nama </label>
                                    <input type="text" name="nama" class="form-control" id="name"
                                        placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="usia">Usia</label>
                                    <input type="number" class="form-control" id="usia" name="usia"
                                        placeholder="Masukkan Usia" required></input>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat"
                                        placeholder="Masukkan Alamat" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="nohp">No HP</label>
                                    <input type="number" class="form-control" name="nohp" id="nohp"
                                        placeholder="Masukkan No HP" required>
                                </div>
                                <div class="text-center mt-5 mb-5">
                                    <style>
                                    .btn-success {
                                        background-color: #28a745;
                                        color: #fff;
                                        border: none;
                                        border-radius: 50px;
                                        padding: 12px 24px;
                                        font-size: 18px;
                                        cursor: pointer;
                                        transition: background-color 0.3s, transform 0.3s;
                                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                        outline: none;
                                    }

                                    .btn-success:hover {
                                        background-color: #218838;
                                        transform: translateY(-3px);
                                        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
                                    }

                                    /* .btn-success i {
                                        margin-right: 10px;
                                    } */

                                    .btn-success:focus {
                                        outline: none;
                                    }
                                    </style>

                                    <button class="btn btn-md btn-success" name="button" value="kirim" type="submit">
                                        <i class="fas fa-paper-plane"></i> Kirim Biodata
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section><!-- End About Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy; Copyright <strong> 2024 Polres Paser</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>