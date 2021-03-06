<?php include __DIR__ . '/../header.php' ?>  

<div class="main-content md:flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

<!-- Lecture de la bdd -->

<?php 
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=recipedb;charset=utf8', 'root', '');
    $req = $bdd->query("SELECT user_image FROM recipe");
    $articles = $req->fetchAll();
    ?>

                <!-- début code du caroussel -->


    <!-- caroussel 1ère image (unique si prise par bdd)-->


    <div class="md:pt-6">
    </div>

    <div class="container">
        <div class="carousel">
            <div class="carousel-prev">
            </div>
            <div class="carousel-next">
            </div>
            <ul class="carousel-pagination">
                <li class="carousel-bullet"></li>
                <li class="carousel-bullet"></li>
                <li class="carousel-bullet"></li>
                <li class="carousel-bullet"></li>
                <li class="carousel-bullet"></li>
            </ul>
            <ul class="carousel-container">
                <li class="carousel-item ">
                    <div class="">
                        <img src="/../Projetweb/img/apéro-dinatoire-1-859x550.jpg" class="w-full" >
                    </div>
                </li>
                <li class="carousel-item">
                    <div>
                        <img src="/../Projetweb/img/i65954-entrees-chaudes-pas-cheres.jpg" class="w-full ">
                    </div>
                </li>
                <li class="carousel-item ">
                    <div class="h-8">
                        <img src="/../Projetweb/img/choucroute-alsacienne.jpg" class="w-full ">
                    </div>
                </li>
                <li class="carousel-item">
                    <div>
                        <img src="/../Projetweb/img/Muffins-facile-au-Nutella-avec-thermomix.jpg" class="w-full ">
                    </div>
                </li>
                <li class="carousel-item">
                    <div>
                        <img src="/../Projetweb/img/fruit.jpg" class="w-full ">
                    </div>
                </li>
            </ul>
        </div>
    </div>
                <!-- fin caroussel -->



                <!-- Début tableau format < 640px -->
               <!-- Premier tableau (image gauche texte droite) -->
    <div id="testr">
        <table class="w-2 w-full h-2 bg-white text-right border-black px-2">       
            <thead>
                <tr>
                    <th class="px-4 py-2 text-blue-200 w-1/3"></th>
                    <th class="px-4 py-2 text-blue-200 w-2/3"></th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-2 border-black">
                    <td class="md:flex-none px-4 py-2 w-1/3" > 
                        <img class=" inline w-full mr-4  md:flex-none" src="/../Projetweb/img/saucisse-feuillete-apero.jpeg ">
                    </td>
                    <td class=" px-4 py-2 md:flex-none text-gray-800 w-2/3 text-left">
                        <p>Apéritifs</p>
                    </td>
                </tr>
            </tbody>
        </table> 
                <!-- 2nd tableau (image droite texte gauche) -->
        <table class="w-2 md:w-full h-2 bg-white text-left border-black">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-blue-200 w-2/3 "></th>
                    <th class="px-4 py-2 text-blue-200 w-1/3"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-2 border-black">
                    <td class="md:flex-none px-4 py-2 " > 
                        <p>Entrées</p>
                    </td>
                    <td class=" px-4 py-2 flex-none">
                        <img class=" inline w-full mr-4  flex-none" src="picture\carent.jpg ">
                    </td>
                </tr>    
            </tbody>
        </table>
                        <!-- 3rd tableau (image gauche texte droite) -->
                        <table class="w-2 w-full h-2 bg-white text-right border-black px-2">       
            <thead>
                <tr>
                    <th class="px-4 py-2 text-blue-200 w-1/3"></th>
                    <th class="px-4 py-2 text-blue-200 w-2/3"></th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-2 border-black">
                    <td class="md:flex-none px-4 py-2 w-1/3" > 
                        <img class=" inline w-full mr-4  md:flex-none" src="picture\carplat.jpg ">
                    </td>
                    <td class=" px-4 py-2 md:flex-none text-gray-800 w-2/3 text-left">
                        <p>Plats</p>
                    </td>
                </tr>
            </tbody>
        </table> 
                        <!-- 4th tableau (image droite texte gauche) -->
        <table class="w-2 md:w-full h-2 bg-white text-left border-black">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-blue-200 w-2/3 "></th>
                    <th class="px-4 py-2 text-blue-200 w-1/3"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-2 border-black">
                    <td class="md:flex-none px-4 py-2 " > 
                        <p>Desserts </p>
                    </td>
                    <td class=" px-4 py-2 flex-none">
                        <img class=" inline w-full mr-4  flex-none" src="picture\cardes.jpg ">
                    </td>
                </tr>    
            </tbody>
        </table>
    </div>

                            <!-- passage > 640 px -->

    <div id="testi">
        <table class="bg-white  border-2 border-gray-300  ">       
            <tbody>
                <tr>
                    <img class="border-4 border-gray-300" src="/../Projetweb/img/saucisse-feuillete-apero.jpeg ">
                    <td class=" flex-none text-center text-gray-300">
                        <p>teconsectetur aeos itaque, soluta voluptate quod illo ipsam.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe cupiditate maxime, eaque tenetur inventore quo fugit illo assumenda, amet adipisci laborum corporis, architecto nostrum minima reiciendis porro! Accusantium, id quae? lore </p>
                    </td>
                </tr>
            </tbody>
        </table>
                <!-- 2nd tableau (image droite texte gauche) -->
        <table class="bg-white  border-2 border-gray-300  ">       
            <tbody>
                <tr>
                    <img class="border-2 border-gray-300" src="picture\carent.jpg ">
                    <td class=" flex-none text-center text-gray-300">
                        <p>teconsectetur aeos itaque, soluta voluptate quod illo ipsam.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe cupiditate maxime, eaque tenetur inventore quo fugit illo assumenda, amet adipisci laborum corporis, architecto nostrum minima reiciendis porro! Accusantium, id quae? lore </p>
                    </td>
                </tr>
            </tbody>
        </table> 
                                        <!-- 3rd tableau -->
        <table class="bg-white  border-2 border-gray-300  ">       
            <tbody>
                <tr>
                    <img class="border-4 border-gray-300" src="picture\carplat.jpg ">
                    <td class=" flex-none text-center text-gray-300">
                        <p>teconsectetur aeos itaque, soluta voluptate quod illo ipsam.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe cupiditate maxime, eaque tenetur inventore quo fugit illo assumenda, amet adipisci laborum corporis, architecto nostrum minima reiciendis porro! Accusantium, id quae? lore </p>
                    </td>
                </tr>
            </tbody>
        </table>
                                     <!-- 4th tableau -->
        <table class="bg-white  border-2 border-gray-300  ">       
            <tbody>
                <tr>
                    <img class="border-2 border-gray-300" src="picture\cardes.jpg ">
                    <td class=" flex-none text-center text-gray-300">
                        <p>teconsectetur aeos itaque, soluta voluptate quod illo ipsam.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe cupiditate maxime, eaque tenetur inventore quo fugit illo assumenda, amet adipisci laborum corporis, architecto nostrum minima reiciendis porro! Accusantium, id quae? lore </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>


<?php include __DIR__ . '/../footer.php' ?>