<?php
session_start();
include "config.php";
if(isset($_SESSION['username'])){
    header('location: admin.php');
}

if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $query = mysqli_query($konek, "SELECT * FROM user WHERE username='$username'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
        if ($password == $data['password']) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header('location: admin.php');

        }
    }
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

    <!-- Favicons -->
    <link href="assets/img/favicon-uho.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

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


<body id="hero">


    <div class="hero-container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.php" class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
            </div><!-- End Logo -->
            <div class="card mb-3" style="max-width: 30rem;">

                <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4"><b>Masuk Ke Akun Anda</b></h5>
                        <p class="text-center small">Masukkan Username Dan Password</p>
                    </div>

                    <form class="row g-3" action="login.php" method="post">

                        <div class="col-12">
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend"><i
                                        class="bi bi-person-fill"></i></span>
                                <input type="text" name="username" class="form-control" id="yourUsername"
                                    placeholder="Masukkan Username" required>
                                <div class="invalid-feedback">Masukkan Username Anda.</div>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend"><i
                                        class="bi bi-key-fill"></i></span>
                                <input type="password" name="password" class="form-control" id="yourPassword"
                                    placeholder="Masukkan Password" required>
                                <div class="invalid-feedback">Masukkan Password Anda.</div>
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <button class="btn btn-success w-100 mb-4" type="submit" name="btnLogin">Login</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </section>

    </div>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

<?php
if (isset($_SESSION['pesan'])) {
    ?>
<div class="alert alert-danger alert-dismissible fade show floating-alert" role="alert">
    <i class="bi bi-exclamation-octagon me-1"></i>
    <b>Username</b> atau <b>Password</b> salah!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
    unset($_SESSION['pesan']);
    }
?>