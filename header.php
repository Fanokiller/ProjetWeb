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
    <link href="/../skeleton/asset/dashboard.css" rel="stylesheet">
    
</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
    
    <nav class="bg-gray-800 pt-1 md:pt-2 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">
        <div class="flex flex-wrap items-center">
        <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white"></div>

            <div class="flex flex-1 md:w-1/3 justify-center md:justify-center text-black px-2">
                <span class="relative w-full">
                    <input type="search" placeholder="Search" class="w-full bg-gray-500 text-sm text-black transition border border-transparent focus:outline-none focus:border-gray-700 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: .5rem; left: .8rem;">
                        <svg class="fill-current pointer-events-none text-black w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </span>
            </div>
            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
				<ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
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
                            
                            <?php
                            if (isset($_SESSION['nickname'])) // Si le membre est connecté
                            {
                            echo 'Bonjour  '.$_SESSION['nickname'];
                            }
                            ?>
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none">
                            <i class="fas fa-caret-square-down fa-fw mr-1"></i></button>
                            
                            <div id="myDropdown" class="dropdownlist absolute bg-gray-900 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                                <div class="border border-gray-800"></div>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex flex-col md:flex-row">
<?php include __DIR__ . '/../ProjetWeb/menu.php' ?>