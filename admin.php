<?php
session_start();
include "config.php";
if(!isset($_SESSION['username'])){
    header('location:login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Indeks Kepuasan Masyarakat - Polres Paser</title>
    <link rel="shortcut icon" href="assets/img/polres.png">

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
    <link href="assets/img/polres.png" rel="apple-touch-icon">

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

    <!-- Favicons -->
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php
include 'config.php';
?>

<style>
body {
    font-family: 'Raleway', sans-serif;
    background-color: #f8f9fa;
}

.container {
    padding-top: 20px;
}

.card {
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    transition: transform 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.card-header {
    background-color: #03C4EB;
    color: #000000;
    border-radius: 20px 20px 0 0;
}

.card-header h3 {
    margin: 0;
    font-size: 18px;
    text-align: center;
}

.card-body {
    padding: 20px;
    text-align: center;
}

.card-body p {
    font-size: 36px;
    font-weight: bold;
    color: #03C4EB;
    margin: 0;
}

.btn {
    background-color: #03C4EB;
    border: none;
    border-radius: 5px;
    padding: 8px 20px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}

.table-bordered {
    border: 2px solid #f8f9fa;
    /* Warna batas */
}

.table-bordered thead th,
.table-bordered tbody td {
    border: 2px solid #f8f9fa;
    /* Warna batas */
}

.table-bordered thead th {
    background-color: #03C4EB;
    /* Warna latar belakang header */
    color: #000000;
    /* Warna teks header */
}

.table-bordered tbody td {
    background-color: #f8f9fa;
    /* Warna latar belakang sel data */
}

@media print {
    @page {
        margin: 0.39in 0.39in 0.39in 1in;
    }

    body * {
        visibility: hidden;
    }

    #surveyTable,
    #surveyTable * {
        visibility: visible;
    }

    #surveyTable {
        position: absolute;
        left: 0;
        top: 0;
    }

    #printButton {
        display: none;
    }

    header,
    footer {
        display: none;
    }
}

#printButton {
    top: 10px;
    /* Sesuaikan posisi vertikal */
    right: 10px;
    /* Sesuaikan posisi horizontal */
    z-index: 999;
    /* Pastikan tombol tetap di atas tabel */
}

#printButton .bi-printer {
    color: black;
    /* Ubah warna ikon menjadi hitam */
}

.centered-button {
    text-align: center;
}

.table-bordered {
    border: 2px solid #f8f9fa;
    /* Warna batas */
}
</style>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div data-aos="fade-in">
                <div class="hero-logo">
                    <img class="" src="assets/img/logo.png" alt="Imperial">
                </div>

                <h1>Selamat Datang Admin</h1>
                <h2>E-Survey <span class="typed" data-typed-items="Indeks Kepuasan Masyarakat, Polres Paser"></span>
                </h2>
                <div class="actions">
                    <a href="#about" class="btn-get-started">SELENGKAPNYA</a>
                    <a href="logout.php" class="btn-get-started">Log Out</a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div id="surveyTable" class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Laporan E-Survey</h3>
                        <div class="section-title-divider"></div>
                        <div class="centered-button">
                            <button id="printButton" class="btn btn-warning" data-toggle="tooltip" data-placement="top"
                                title="Cetak Halaman" onclick="printTable()" style="height: 50px;">
                                <i class="bi bi-printer"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="container about-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <?php
            $query_biodata = "SELECT * FROM biodata";
            $sql_biodata = mysqli_query($konek, $query_biodata);
            $data_biodata = mysqli_fetch_array($sql_biodata);
            $jumlah_biodata = mysqli_num_rows($sql_biodata);
            ?>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3><b>Jumlah Responden</b></h3>
                                </div>
                                <div class="card-body">
                                    <p><?= $jumlah_biodata ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
            $query_sangatpuas = "SELECT * FROM biodata WHERE penilaian = 3";
            $sql_sangatpuas = mysqli_query($konek, $query_sangatpuas);
            $data_sangatpuas = mysqli_fetch_array($sql_sangatpuas);
            $jumlah_sangatpuas = mysqli_num_rows($sql_sangatpuas);
            ?>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3><b>Jumlah Sangat Puas</b></h3>
                                </div>
                                <div class="card-body">
                                    <p><?= $jumlah_sangatpuas ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
            $query_puas = "SELECT * FROM biodata WHERE penilaian = 2";
            $sql_puas = mysqli_query($konek, $query_puas);
            $data_puas = mysqli_fetch_array($sql_puas);
            $jumlah_puas = mysqli_num_rows($sql_puas);
            ?>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3><b>Jumlah Puas</b></h3>
                                </div>
                                <div class="card-body">
                                    <p><?= $jumlah_puas ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
            $query_tidakpuas = "SELECT * FROM biodata WHERE penilaian = 1";
            $sql_tidakpuas = mysqli_query($konek, $query_tidakpuas);
            $data_tidakpuas = mysqli_fetch_array($sql_tidakpuas);
            $jumlah_tidakpuas = mysqli_num_rows($sql_tidakpuas);
            ?>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3><b>Jumlah Tidak Puas</b></h3>
                                </div>
                                <div class="card-body">
                                    <p><?= $jumlah_tidakpuas ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table text-center table-bordered table-striped"
                                style="font-family: 'Verdana', sans-serif;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Usia</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Penilaian</th>
                                        <th>Saran & Masukan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
            $query_survey = "SELECT * FROM biodata";
            $sql_survey = mysqli_query($konek, $query_survey);
            $no = 1;
            while ($data_survey = mysqli_fetch_array($sql_survey)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $data_survey['nama'] . "</td>";
                echo "<td>" . $data_survey['usia'] . "</td>";
                echo "<td>" . $data_survey['alamat'] . "</td>";
                echo "<td>" . $data_survey['nohp'] . "</td>";
                if ($data_survey['penilaian']== 1){
                    $penilaian = "Tidak Puas";
                }else if ($data_survey['penilaian']== 2){
                    $penilaian = "Puas";
                }else if ($data_survey['penilaian']== 3){
                    $penilaian = "Sangat Puas";
                }
                echo "<td>" . $penilaian . "</td>";
                echo "<td>" . $data_survey['saran'] . "</td>";
                echo "</tr>";
            }
            ?>
                                </tbody>
                            </table>
                        </div>

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
    <script>
    $(document).ready(function() {
        $('#surveyTable').DataTable();
    });

    function printTable() {
        window.print();
    }
    </script>

</body>

</html>