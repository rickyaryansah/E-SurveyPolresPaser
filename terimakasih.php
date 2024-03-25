<!DOCTYPE html>
<?php
session_start();
include "config.php";
if(isset($_SESSION['username'])){
    header('location: admin.php');
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Indeks Kepuasan Masyarakat - Polres Paser</title>
    <link rel="shortcut icon" href="assets/img/polres.png">


    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body,
    html {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
    }

    .thank-you {
        text-align: center;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
        max-width: 600px;
    }

    .thank-you i {
        font-size: 64px;
        color: #28a745;
        margin-bottom: 20px;
    }

    .thank-you h3 {
        font-size: 28px;
        margin-bottom: 20px;
        color: #333333;
    }

    .thank-you p {
        font-size: 18px;
        color: #6c757d;
        margin-bottom: 20px;
    }

    .thank-you .btn-wrapper {
        display: flex;
        justify-content: center;
    }

    .thank-you .btn-kirim {
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

    .thank-you .btn-kirim:hover {
        background-color: #218838;
        transform: translateY(-3px);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    }

    .thank-you .btn-kirim:focus {
        outline: none;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="thank-you">
            <i class="fas fa-check-circle"></i>
            <h3>Terima Kasih!</h3>
            <p>Terima kasih telah mengisi survey kepuasan masyarakat kami. Kami akan terus berupaya untuk meningkatkan
                layanan kami.</p>
            <div class="btn-wrapper">
                <a href="index.php" class="btn btn-kirim">Kembali Ke Beranda</a>
            </div>
        </div>
    </div>

</body>

</html>