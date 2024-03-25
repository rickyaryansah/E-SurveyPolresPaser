<?php
session_start();
include "config.php";
if(isset($_SESSION['username'])){
    header('location: admin.php');
}

    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
if (isset($_POST['button']) && $_POST['button'] == "penilaian") {
    $kepuasan = $_POST['kepuasan'];
    $saran = $_POST['saran'];
    $namapenilai = $_POST['namapenilai'];
    $usiapenilai = $_POST['usiapenilai'];
    $alamatpenilai = $_POST['alamatpenilai'];
    $nohppenilai = $_POST['nohppenilai'];

    $sql_kirim = "INSERT INTO biodata VALUES ('', '$namapenilai', '$usiapenilai', '$alamatpenilai', '$nohppenilai', '$kepuasan', '$saran')";
    $query_kirim = mysqli_query($konek, $sql_kirim);

    if ($query_kirim) {
        header('Location: terimakasih.php');
        exit();
    } else {
        $error_message = "Gagal mengirim data. Silakan coba lagi.";
        echo "<script>alert('$error_message');</script>";
    }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

    <style>
    .option label {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        /* Mengatur tata letak menjadi kolom */
        text-align: center;
        /* Memastikan teks berada di tengah */
    }

    .option label i {
        font-size: 150%;
        /* Mengubah ukuran ikon menjadi 150% dari ukuran aslinya */
        margin-bottom: 5px;
        /* Menambahkan jarak antara ikon dan teks */
        transition: transform 0.3s ease;
        /* Menambahkan animasi transisi */
    }

    .option label span {
        font-size: 15px;
        /* Ubah ukuran teks */
    }

    /* Mengubah warna ikon saat dipilih */
    .option input[type="radio"]:checked+label i {
        color: green;
    }

    /* Menjadikan teks label lebih menarik saat dipilih */
    .option input[type="radio"]:checked+label span {
        font-weight: bold;
        color: green;
    }
    </style>

</head>

<body>
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <form action="survey.php" method="post">
                <input type="hidden" name="namapenilai" value="<?= $nama ?>">
                <input type="hidden" name="usiapenilai" value="<?= $usia ?>">
                <input type="hidden" name="alamatpenilai" value="<?= $alamat ?>">
                <input type="hidden" name="nohppenilai" value="<?= $nohp ?>">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title">Puaskah Anda Dengan Layanan Kami?</h3>
                            <div class="section-title-divider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form action="survey.php" method="POST">
                                <div class="form-group d-flex justify-content-center align-items-center" required>
                                    <div class="option">
                                        <input type="radio" id="sangat_puas" name="kepuasan" value="3" required>
                                        <label for="sangat_puas"><i class="fas fa-grin-stars"></i> Sangat Puas</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" id="puas" name="kepuasan" value="2" required>
                                        <label for="puas"><i class="far fa-smile"></i> Puas</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" id="tidak_puas" name="kepuasan" value="1" required>
                                        <label for="tidak_puas"><i class="far fa-frown"></i> Tidak Puas</label>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="container about-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">

                        <div class="about-content">
                            <div class="form">
                                <style>
                                .form-group {
                                    display: flex;
                                    justify-content: center;
                                    gap: 40px;
                                }

                                .option {
                                    display: flex;
                                    align-items: center;
                                }

                                .option input[type="radio"] {
                                    display: none;
                                }

                                .option label {
                                    cursor: pointer;
                                    display: flex;
                                    align-items: center;
                                }

                                .option label i {
                                    font-size: 80px;
                                    margin-right: 10px;
                                }

                                .option label {
                                    font-size: 20px;
                                    /* Ubah ukuran teks */
                                }

                                .option input[type="radio"]:checked+label i {
                                    color: green;
                                }

                                .option input[type="radio"]:checked+label {
                                    font-weight: bold;
                                }

                                .form-group {
                                    display: flex;
                                    flex-direction: row;
                                    align-items: center;
                                }

                                .form-group label {
                                    flex: 1;
                                    /* margin: 30px; */
                                }

                                .form-group input,
                                .form-group textarea {
                                    flex: 10;
                                }

                                img {
                                    display: block;
                                    /* Make the image a block element */
                                    margin: 0 auto;
                                    /* Center the image horizontally */
                                    max-width: 100%;
                                    /* Ensure the image doesn't exceed its container's width */
                                    height: auto;
                                    /* Maintain the aspect ratio of the image */
                                }
                                </style>
                                <div class="form-group mt-3">
                                    <label for="saran">
                                        <h5><b>Saran dan Masukan</b></h5>
                                    </label>
                                </div>
                                <div class="form-group" style="border: 2px solid #ccc; border-radius: 5px;">
                                    <textarea class="form-control" name="saran" id="saran" cols="30" rows="5"
                                        required></textarea>
                                </div>
                                <div class="text-center mt-5 mb-5">
                                    <style>
                                    .btn-success {
                                        background-color: #28a745;
                                        color: #fff;
                                        border: none;
                                        border-radius: 25px;
                                        padding: 10px 20px;
                                        font-size: 18px;
                                        cursor: pointer;
                                        transition: background-color 0.3s, transform 0.3s;
                                    }

                                    .btn-success:hover {
                                        background-color: #218838;
                                        transform: translateY(-2px);
                                    }

                                    .btn-success i {
                                        margin-right: 5px;
                                    }
                                    </style>

                                    <button class="btn btn-success" name="button" value="penilaian" type="submit"
                                        onclick="return confirmSubmit()">
                                        <i class="fas fa-poll"></i> Kirim Survey
                                    </button>

                                </div>
            </form>
            <img src="assets/img/hotline.png" alt="" width="1300px">
            </div>
        </section><!-- End About Section -->

    </main><!-- End #main -->

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
    <script>
    function confirmSubmit() {
        if (confirm("Apakah Anda yakin ingin mengirim survey?")) {
            return true;
        } else {
            return false;
        }
    }
    </script>

</body>

</html>