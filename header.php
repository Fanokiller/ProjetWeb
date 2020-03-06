<?php
session_start(); 
require 'fonction/db.class.php';
$DB = new DB();
require 'fonction/cart.class.php';
$panier = new panier();

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://kit.fontawesome.com/41d2d2bd90.js" crossorigin="anonymous"></script>

    <title>ProjetWeb</title>

    <!-- Bootstrap & Tailwind core CSS -->
    <link href="https://unpkg.com/tailwindcss@%5E1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/../ProjetWeb/article/Article.css" rel="stylesheet">
    <link href="/../ProjetWeb/asset/css/style.css" rel="stylesheet">
    <link href="/../ProjetWeb/asset/css/carousselcss.css" rel="stylesheet">
    <link href="/../ProjetWeb/asset/css/tablecss.css" rel="stylesheet">

</head>

<body class="bg-white font-sans leading-normal tracking-normal mt-12">
    <nav class="bg-teal-500 pt-1 md:pt-2 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0 px-4">
        <div class="flex flex-shrink justify-center md:justify-start text-white">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                <li class="mr-3">
                    <a href="../accueil/accueil.php" class="inline-block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-teal-500 hover:border-white">
                        <i class="fas fa-home fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white inline-block md:inline-block ml-2">Accueil</span>
                    </a>
                </li>
                <li class="mr-3">
                    <a href="../index/index.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-teal-500 hover:border-pink-500">
                        <i class="fas fa-bars fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block ml-2">Recettes</span>
                    </a>
                </li>
                    <li class="mr-3 dropdown">
                        <button class="dropbtnSaison" id="btnSaison">
                            <i class="fas fa-search fa-fw mr-1"></i>Saison 
                            <i class="fa fa-caret-down fa-fw mr-1 pt-1 pl-3"></i>
                        </button>
                        <div id="DropdownSaison" class="dropdown-content text-white ml-4 show" >
                            <a href="#"><i class="fas fa-fan fa-fw mr-1"></i>Printemps</a>
                            <a href="#"><i class="fas fa-sun fa-fw mr-1"></i>Eté</a>
                            <a href="#"><i class="fas fa-leaf fa-fw mr-1"></i>Automne</a>
                            <a href="#"><i class="fas fa-snowflake fa-fw mr-1"></i>Hiver</a>
                        </div>
                    </li>
                
                <li class="mr-3">
                    <?php
                if (isset($_SESSION['nickname'])):

                    ?>
                    <a href="/../ProjetWeb/cart/cartIndex.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-teal-500 hover:border-green-300">
                    <i class="fas fa-shopping-cart fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block ml-2">Cart</span>
                    </a>
                </li>
                <?php else :  ?>
                    <li class="mr-3">
                    <a href="/../ProjetWeb/cart/cart.php" class="block py-1 px-3 md:py-3 pl-1 text-white align-middle text-white cursor-not-allowed hidden">
                    <i class="fas fa-shopping-cart fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block ml-2">Cart</span>
                    </a>
                </li>
                <?php endif ?>
                <li class="mr-3">
                <?php
                if (isset($_SESSION['nickname'])):

                    ?>
                    <a href="/../ProjetWeb/ajoutRecette/ajtRecette.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-teal-500 hover:border-red-500">
                        <i class="far fa-plus-square fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block ml-2">Nouvelle recette</span>
                    </a>
                </li>
                <?php else :  ?>
                    <a href="/../ProjetWeb/ajoutRecette/ajtRecette.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white hidden">
                        <i class="far fa-plus-square fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block ml-2">Nouvelle recette</span>
                    </a>
                </li>
                <?php endif ?>
            </ul>
            

            <!-- <div class="flex flex-1 md:w-1/3 justify-center md:justify-center text-black px-4 items-center">
                <span class="relative w-full">
                    <input type="search" placeholder="Search" class="w-full bg-white text-sm text-black transition border border-transparent focus:outline-none focus:border-gray-700 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: .5rem; left: .8rem;">
                        <svg class="fill-current pointer-events-none text-black w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </span>
            </div> -->
				<ul class="list-reset flex justify-between flex-1 md:flex-none items-center mx-auto px-4">
                    <!-- <li class="flex-1 md:flex-none md:mr-3">
					    <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/../ProjetWeb/inscription/inscription.php"><i class="fas fa-user-plus fa-fw mr-1"></i> Inscription</a>
				    </li> -->
                        <?php
                            if (isset($_SESSION['nickname'])):

                        ?>
                            <li class="flex-1 md:flex-none md:mr-3">
                                <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/../ProjetWeb/deconnexion/deconnexion.php">
                                    Deconnexion
                                </a>
                            </li>
                            <li class="flex-1 md:flex-none md:mr-3">
					            <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4 hidden" href="/../ProjetWeb/inscription/inscription.php"><i class="fas fa-user-plus fa-fw mr-1"></i> Inscription</a>
				            </li>
                        <?php else :  ?>
                            <li class="flex-1 md:flex-none md:mr-3">
                                <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/../ProjetWeb/connexion/connexion.php">
                                    Connexion
                                </a>
                            </li>
                            <li class="flex-1 md:flex-none md:mr-3">
					            <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/../ProjetWeb/inscription/inscription.php"><i class="fas fa-user-plus fa-fw mr-1"></i> Inscription</a>
				            </li>
                        <?php endif ?>

				    <li class="flex-1 md:flex-none md:mr-3">
						<div class="relative inline-block text-white">
                            <button class="dropbtnUser" id="btnUser">                            
                                <?php
                                    if (isset($_SESSION['nickname'])) // Si le membre est connecté
                                    {
                                        echo 'Bonjour  '.$_SESSION['nickname'];                                    
                                        $id_user = $_SESSION['nickname'];
                                    }

                                ?>
                                <i class="fa fa-caret-down fa-fw mr-1 pt-1 pl-3"></i>
                            </button>
                            <div id="DropdownUser" class="dropdown-content text-white ml-4 show" >
                                <a href="/../ProjetWeb/user/user.php?id_user=<?= $id_user?>"><i class="fas fa-user fa-fw mr-1"></i>User</a>
                                <a href="/../ProjetWeb/admin/adminIndex.php"><i class="fas fa-user-shield fa-fw mr-1"></i>Admin</a>
                                </div>
                            </div>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="flex flex-col md:flex-row">