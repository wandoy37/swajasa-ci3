<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- My Css -->
    <link rel="icon" href="<?php echo base_url() . 'assets/landingpages' ?>/img/icon.png" type="image/gif" sizes="32x32">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/landingpages' ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/landingpages' ?>/css/animate.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/landingpages' ?>/fontawesome/css/all.css">

    <title>Swajasa lintas | <?= $title; ?></title>
</head>

<body id="beranda">
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light  shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url() . 'assets/landingpages' ?>/img/brand-swajasa.png" width="200px" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url() . '' ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . '' ?>#tentang_kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . '' ?>#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . '' ?>#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Header -->