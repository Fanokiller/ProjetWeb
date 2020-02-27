<?php session_start();?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://kit.fontawesome.com/41d2d2bd90.js" crossorigin="anonymous"></script>

    <title>ProjetWeb</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@%5E1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/../skeleton/asset/dashboard.css" rel="stylesheet">
    
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/../ProjetWeb/index.php"><i class="fas fa-home fa-fw"></i></a>
    <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="/../ProjetWeb/inscription/inscription.php"><i class="fas fa-user-plus fa-fw"></i>Inscription</a>
        </li>
        <?php
             if (isset($_SESSION['user_login'])):

                ?>
            <li class="nav-item">
                <a class="nav-link active" href="/../ProjetWeb/formulaire/traitement/deconnexion/deconnexion.php">
                    Deconnexion
                </a>
            </li>
            <?php else :  ?>
                <li class="nav-item">
                <a class="nav-link active" href="/../ProjetWeb/connexion/connexion.php">
                    Connexion
                </a>
            </li>
            <?php endif ?>
        
    </ul>
</nav>
    
<!-- container-fluid -->
<div class="container-fluid">
    <!-- row -->
    <div class="row">
        <!-- <?php include __DIR__ . '/../ProjetWeb/menu.php' ?> -->