<?php include __DIR__ . '/../header.php' ?>  

<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

    <!-- Partie Css pour que le caroussel soit fonctionnel  -->
    <link rel="stylesheet" href="carousselcss.css" />

    <style>
    .snap-x {
        scroll-snap-type: x mandatory;
        
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    }
    .snap-start {
    scroll-snap-align: start;
    }

    </style>


    <!-- fin Css pour le caroussel (début code du caroussel) -->


    <!-- caroussel 1ère image -->




<div class="container">
    <div class="carousel pt-6">
        <div class="carousel-prev"></div>
        <div class="carousel-next"></div>
        <ul class="carousel-pagination">
            <li class="carousel-bullet"></li>
            <li class="carousel-bullet"></li>
            <li class="carousel-bullet"></li>
            <li class="carousel-bullet"></li>
            <li class="carousel-bullet"></li>
        </ul>
        <ul class="carousel-container">
            <li class="carousel-item">
                <div>
                <img src="picture\carentr.jpeg" class="w-full items-center h-full">
                </div>
            </li>
            <li class="carousel-item">
            <div>
                <img src="picture\carent.jpg" class="w-full">
                </div>
            </li>
            <li class="carousel-item">
            <div>
                <img src="picture\carplat.jpg" class="w-full">
                </div>
            </li>
            <li class="carousel-item">
            <div>
                <img src="picture\cardes.jpg" class="w-full">
                </div>
            </li>
            <li class="carousel-item">
            <div>
                <img src="picture\carap.jpg" class="w-full">
                </div>
            </li>
        </ul>
    </div>
</div>


                <!-- fin caroussel -->

                <!-- Début tableau  -->
                
                <!-- Premier tableau (image gauche texte droite) -->
        <table class="w-2 md:w-full h-2 bg-white text-right border-4 border-gray-800  ">       
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-800 text-blue-200 w-1/3"></th>
                    <th class="px-4 py-2 bg-gray-800 text-blue-200 w-2/3"></th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-4 border-gray-800">
                    <td class="flex-none px-4 py-2 w-1/3" > 
                        <img class=" inline w-full mr-4  flex-none" src="picture\sgec.jpg ">
                    </td>
                    <td class=" px-4 py-2 flex-none text-gray-800 w-2/3">
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
                    <td class="flex-none px-4 py-2 " > 
                        <p>teconsectetur aeos itaque, soluta voluptate quod illo ipsam.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe cupiditate maxime, eaque tenetur inventore quo fugit illo assumenda, amet adipisci laborum corporis, architecto nostrum minima reiciendis porro! Accusantium, id quae? lore </p>
                    </td>
                    <td class=" px-4 py-2 flex-none">
                        <img class=" inline w-full mr-4  flex-none" src="picture\sgec.jpg ">
                    </td>
                </tr>    
            </tbody>
        </table>
        <script type="text/javascript" src="carousseljs.js"></script>
</div>

<?php include __DIR__ . '/../footer.php' ?>

