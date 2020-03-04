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

    <!-- Bootstrap & Tailwind core CSS -->
    <link href="https://unpkg.com/tailwindcss@%5E1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
   
    <link href="/../ProjetWeb/article/Article.css" rel="stylesheet">
    <link href="/../ProjetWeb/asset/css/style.css" rel="stylesheet">
    <link href="/../ProjetWeb/asset/css/carousselcss.css" rel="stylesheet">
    <link href="/../ProjetWeb/asset/css/tablecss.css" rel="stylesheet">
    
</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
    
    <nav class="bg-gray-800 pt-1 md:pt-2 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0 px-4">
        <div class="flex flex-shrink justify-center md:justify-start text-white">
        <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
            <li class="mr-3">
                    <a href="../accueil/accueil.php" class="inline-block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-white">
                        <i class="fas fa-home fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 inline-block md:inline-block ml-2">Accueil</span>
                    </a>
                </li>
                <li class="mr-3">
                    <a href="../index/index.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                        <i class="fas fa-gamepad fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Recettes</span>
                    </a>
                <li class="mr-3 dropdown">
                        <button onclick="myFunction()" class="dropbtn">
                        <i class="fas fa-search fa-fw mr-1"></i>Saison 
                        <i class="fa fa-caret-down fa-fw mr-1 pt-1 pl-3"></i>
                        </button>
                        <div id="myDropdown" class="dropdown-content text-white ml-4 show" >
                            <a href="#"><i class="fas fa-snowflake fa-fw mr-1"></i>Hiver</a>
                            <a href="#"><i class="fas fa-fan fa-fw mr-1"></i>Printemps</a>
                            <a href="#"><i class="fas fa-sun fa-fw mr-1"></i>Eté</a>
                            <a href="#"><i class="fas fa-leaf fa-fw mr-1"></i>Automne</a>
                        </div>
                </li>
                </li>
                <li class="mr-3">
                    <?php
                if (isset($_SESSION['nickname'])):

                    ?>
                    <a href="/../ProjetWeb/cart/cart.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-green-300">
                    <i class="fas fa-shopping-cart fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Cart</span>
                    </a>
                </li>
                <?php else :  ?>
                    <li class="mr-3">
                    <a href="/../ProjetWeb/cart/cart.php" class="block py-1 px-3 md:py-3 pl-1 text-gray-400 align-middle text-white cursor-not-allowed">
                    <i class="fas fa-shopping-cart fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Cart</span>
                    </a>
                </li>
                <?php endif ?>
                <li class="mr-3">
                    <a href="/../ProjetWeb/ajoutRecette/ajtRecette.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="far fa-plus-square fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Nouvelle recette</span>
                    </a>
                </li>
                </ul>
            

            <div class="flex flex-1 md:w-1/3 justify-center md:justify-center text-black px-4 items-center">
                <span class="relative w-full">
                    <input type="search" placeholder="Search" class="w-full bg-gray-500 text-sm text-black transition border border-transparent focus:outline-none focus:border-gray-700 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: .5rem; left: .8rem;">
                        <svg class="fill-current pointer-events-none text-black w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </span>
            </div>
				<ul class="list-reset flex justify-between flex-1 md:flex-none items-center px-4 mx-auto">
                        <?php
                            if (isset($_SESSION['nickname'])):

                        ?>
                            <li class="flex-1 md:flex-none md:mr-3">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/../ProjetWeb/deconnexion/deconnexion.php">
                                    Deconnexion
                                </a>
                            </li>
                        <?php else :  ?>
                            <li class="flex-1 md:flex-none md:mr-3">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/../ProjetWeb/connexion/connexion.php">
                                    Connexion
                                </a>
                            </li>
                        <?php endif ?>
				    <li class="flex-1 md:flex-none md:mr-3">
					    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/../ProjetWeb/inscription/inscription.php"><i class="fas fa-user-plus fa-fw mr-1"></i> Inscription</a>
				    </li>
				    <li class="flex-1 md:flex-none md:mr-3">
						<div class="relative inline-block text-white">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none">
                            <?php
                            if (isset($_SESSION['nickname'])) // Si le membre est connecté
                            {
                            echo 'Bonjour  '.$_SESSION['nickname'];
                            }
                            ?><svg class="h-3 fill-current inline-block mr-1 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></button>
                            <div id="myDropdown" class="dropdownlist absolute bg-black text-white overflow-auto z-30 invisible">
                                <a href="/../ProjetWeb/user/user.php" class="hover:bg-grey-darkest text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw mr-1"></i>Profile</a>
                                <a href="#" class="hover:bg-grey-darkest text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw mr-1"></i>Settings</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
    </nav>
    <!-- <nav>
    <div class="bg-gray-800 shadow-lg h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
        <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            <ul class="dropdown list-reset flex flex- md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left ">
                <li class="mr-3">
                    <a href="../accueil/accueil.php" class="inline-block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-white">
                        <i class="fas fa-home fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 inline-block md:inline-block ml-2">Accueil</span>
                    </a>
                </li>
                <li class="mr-3">
                    <a href="../index/index.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                        <i class="fas fa-gamepad fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Recettes</span>
                    </a>
                </li>
                <button class="dropdown-btn">Saison
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="#">Hiver</a>
                            <a href="#">Printemps</a>
                            <a href="#">Eté</a>
                            <a href="#">Automne</a>
                        </div>
                        </li>
                <li class="mr-3 dropdown-btn">
                        <button class="dropdown-btn block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <i class="fas fa-search fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Saison  
                        <i class="fa fa-caret-down"></i>
                        </span></button>
                        <ul class="dropdown-container hidden text-white ml-4">
                            <li><a href="#"><i class="fas fa-snowflake fa-fw mr-1"></i>Hiver</a></li>
                            <li><a href="#"><i class="fas fa-fan fa-fw mr-1"></i>Printemps</a></li>
                            <li><a href="#"><i class="fas fa-sun fa-fw mr-1"></i>Eté</a></li>
                            <li><a href="#"><i class="fas fa-leaf fa-fw mr-1"></i>Automne</a></li>
                        </ul>
                </li>
                
                <li class="mr-3">
                    <?php
                if (isset($_SESSION['nickname'])):

                    ?>
                    <a href="/../ProjetWeb/cart/cart.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-green-300">
                    <i class="fas fa-shopping-cart fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Cart</span>
                    </a>
                </li>
                <?php else :  ?>
                    <li class="mr-3">
                    <a href="/../ProjetWeb/cart/cart.php" class="block py-1 px-3 md:py-3 pl-1 text-gray-400 align-middle text-white cursor-not-allowed">
                    <i class="fas fa-shopping-cart fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Cart</span>
                    </a>
                </li>
                <?php endif ?>
                <li class="mr-3">
                    <a href="/../ProjetWeb/ajoutRecette/ajtRecette.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="far fa-plus-square fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Nouvelle recette</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </nav> -->
    <div class="flex flex-col md:flex-row" id="page-warp">