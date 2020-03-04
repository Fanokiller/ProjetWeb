<?php include __DIR__ . '/../header.php' ?>  

<div class="main-content md:flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">





    <!-- fin Css pour le caroussel (début code du caroussel) -->


    <!-- caroussel 1ère image -->


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
                    <div class="h-1/2">
                        <img src="picture\carentr.jpeg" class="w-full items-center ">
                    </div>
                </li>
                <li class="carousel-item">
                    <div>
                        <img src="picture\carent.jpg" class="w-full ">
                    </div>
                </li>
                <li class="carousel-item ">
                    <div class="h-8">
                        <img src="picture\carplat.jpg" class="w-full ">
                    </div>
                </li>
                <li class="carousel-item">
                    <div>
                        <img src="picture\cardes.jpg" class="w-full ">
                    </div>
                </li>
                <li class="carousel-item">
                    <div>
                        <img src="picture\carap.jpg" class="w-full ">
                    </div>
                </li>
            </ul>
        </div>
    </div>


                <!-- fin caroussel -->

                <!-- Début tableau format < 640px -->
                
               <!-- Premier tableau (image gauche texte droite) -->
            <div id="testr">
               <table class="w-2 w-full h-2 bg-white text-right border-4 border-gray-800  ">       
                <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-800 text-blue-200 w-1/3"></th>
                    <th class="px-4 py-2 bg-gray-800 text-blue-200 w-2/3"></th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-4 border-gray-800">
                    <td class="md:flex-none px-4 py-2 w-1/3" > 
                        <img class=" inline w-full mr-4  md:flex-none" src="picture\sgec.jpg ">
                    </td>
                    <td class=" px-4 py-2 md:flex-none text-gray-800 w-2/3">
                        <p>teconsectetur aeos itaque, soluta voluptate quod illo ipsam.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe cupiditate maxime, eaque tenetur inventore quo fugit illo assumenda, amet adipisci laborum corporis, architecto nostrum minima reiciendis porro! Accusantium, id quae? lore </p>
                    </td>
                </tr>
            </tbody>
        </table> 


                <!-- 2nd tableau (image droite texte gauche) -->



        <table class="w-2 md:w-full h-2 bg-white text-left border-4 border-gray-800 ">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-800 text-blue-200 w-2/3 "></th>
                    <th class="px-4 py-2 bg-gray-800 text-blue-200 w-1/3"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="md:flex-none px-4 py-2 " > 
                        <p>teconsectetur aeos itaque, soluta voluptate quod illo ipsam.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe cupiditate maxime, eaque tenetur inventore quo fugit illo assumenda, amet adipisci laborum corporis, architecto nostrum minima reiciendis porro! Accusantium, id quae? lore </p>
                    </td>
                    <td class=" px-4 py-2 flex-none">
                        <img class=" inline w-full mr-4  flex-none" src="picture\sgec.jpg ">
                    </td>
                </tr>    
            </tbody>
        </table>
</div>



<div id="testi">
                <table class="bg-white  border-4 border-gray-800  ">       
                    <tbody>
                        <tr>
                            <img class="border-4 border-gray-800" src="picture\sgec.jpg ">
                            <td class=" flex-none text-center text-gray-800">
                                <p>teconsectetur aeos itaque, soluta voluptate quod illo ipsam.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe cupiditate maxime, eaque tenetur inventore quo fugit illo assumenda, amet adipisci laborum corporis, architecto nostrum minima reiciendis porro! Accusantium, id quae? lore </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                 


                <!-- 2nd tableau (image droite texte gauche) -->

                <table class="bg-white  border-4 border-gray-800  ">       
                    <tbody>
                        <tr>
                            <img class="border-4 border-gray-800" src="picture\sgec.jpg ">
                            <td class=" flex-none text-center text-gray-800">
                                <p>teconsectetur aeos itaque, soluta voluptate quod illo ipsam.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe cupiditate maxime, eaque tenetur inventore quo fugit illo assumenda, amet adipisci laborum corporis, architecto nostrum minima reiciendis porro! Accusantium, id quae? lore </p>
                            </td>
                        </tr>
                    </tbody>
                </table> 
</div>

        <script type="text/javascript" src="carousseljs.js"></script>
</div>




<?php include __DIR__ . '/../footer.php' ?>

