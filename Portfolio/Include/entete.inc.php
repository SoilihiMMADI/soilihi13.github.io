<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Portfolio Soilihi M'MADI</title>
        <link rel="shortcut icon" href="Images/logo.png">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- font perso -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@700&display=swap" rel="stylesheet">
        <link href="Styles/portfolio.css" rel="stylesheet">

        <!-- style -->
        <link href="css/bvice.css" rel="stylesheet">

    </head>

    <body>

        <h1 class="site-heading text-center text-white d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Portfolio</span>
            <span class="site-heading-lower">Soilihi M'MADI</span>
        </h1>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">B.vice</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item <?php
                        if ($_REQUEST['action'] == 10 || !isset($_REQUEST['action'])) {
                            echo 'active';
                        }
                        ?> px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=10">Accueil
                            </a>
                        </li>
                        <li class="nav-item <?php
                        if ($_REQUEST['action'] == 20) {
                            echo 'active';
                        }
                        ?> px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=20">PPE</a>
                        </li>
                        <li class="nav-item <?php
                        if ($_REQUEST['action'] == 30) {
                            echo 'active';
                        }
                        ?> px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=30">Stage</a>
                        </li>
                        <li class="nav-item <?php
                        if ($_REQUEST['action'] == 40) {
                            echo 'active';
                        }
                        ?> px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=40">Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg2">