<div class="bg-gray-800 shadow-lg h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
    <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
        <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
            <li class="mr-3">
                <a href="../accueil/accueil.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-white">
                    <i class="fas fa-home fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Accueil</span>
                </a>
            </li>
            <li class="mr-3">
                <a href="../recette/recette.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                    <i class="fas fa-gamepad fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Recettes</span>
                </a>
            </li>
            <li class="mr-3">
                <a href="../saison/saison.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                    <i class="fas fa-search fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Saison</span>
                </a>
            </li>
            <?php
             if (isset($_SESSION['nickname'])):

                ?>
            <li class="mr-3">
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
                <a href="/../siteJeux/formulaire/formulaire.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                    <i class="far fa-plus-square fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block ml-2">Ajout d'un recette</span>
                </a>
            </li>
        </ul>
    </div>
</div>
