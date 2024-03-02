<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
            href="<?= base_url('asets/')?>vendor/bootstrap/css/bootstrap.min.css">
        <link href="<?= base_url('asets/')?>vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('asets/')?>libs/css/style.css">
        <link rel="stylesheet"
            href="<?= base_url('asets/')?>vendor/fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet"
            href="<?= base_url('asets/')?>vendor/charts/chartist-bundle/chartist.css">
        <link rel="stylesheet"
            href="<?= base_url('asets/')?>vendor/charts/morris-bundle/morris.css">
        <link rel="stylesheet"
            href="<?= base_url('asets/')?>vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="<?= base_url('asets/')?>vendor/charts/c3charts/c3.css">
        <link rel="stylesheet"
            href="<?= base_url('asets/')?>vendor/fonts/flag-icon-css/flag-icon.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel='shortcut icon'
            href='https://amikom.ac.id/theme/material/img/amikom_icon_pack/favicon-16x16.png'
            type='image/x-icon' />
        <title>Dashboard Mahasiswa</title>
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg fixed-top"
                    style="background-color: #7430a9;">
                    <a class="navbar-brand" href="<?= base_url('User')?>"><img
                            src="https://amikom.ac.id/template/assets_dashboard/img/amikom.png"
                            class="logo"></a>
                    <a href="<?= base_url('User')?>"><h6 style="color: white; font-size: 13px;"
                            class="title-text ">UNIVERSITAS
                            AMIKOM YOGYAKARTA</h6></a>
                    <button class="navbar-toggler" type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse "
                        id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <li class="nav-item dropdown nav-user">
                                <button class="btn btn-danger"><a href="<?= base_url('Auth/Logout')?>">Logout</a></button>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- ============================================================== -->
            <!-- end navbar -->
            <!-- ============================================================== -->