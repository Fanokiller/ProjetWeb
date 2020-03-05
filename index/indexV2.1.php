<?php include __DIR__ . '/../header.php' ?>
<?php $articles = $DB->query('SELECT * FROM recipe WHERE recipe_type = 1')?>
    
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <h2 class="text-center p-2 text-3xl text-gray-900 font-serif">- Apéritifs -</h2>
    <?php foreach ($articles as $article): ?>
    <div class="inline-flex">


                <!-- Images avec un lien de recette -->


        <div class="inline-flex bg-gray-700 rounded-lg p-2 m-2 w-1/6">
            <a href="/../ProjetWeb/article/article.php">
                <img class="h-full w-full rounded-lg transform scale-100 hover:scale-110 transition duration-150" src="data:image/jpg;base64,<?= $article->user_image ?>">
            </a>
        </div>
    


                <!-- Pavés de texte sous les images de recettes correspondantes -->



            <div class="w-1/3 rounded overflow-auto shadow-xl my-2 -my-4 p-2 m-8 mb-4">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 hover:text-blue-500">
                        <a href="https://tailwindcss.com/docs/box-shadow/#app"><?= $article->title ?></a>
                    </div>
                    <p class="text-grey-darker text-base"><?= $article->content ?></p>
                </div>
            </div> 

    </div>
    <?php endforeach ?>
    <h2 class="text-center p-2 text-3xl text-gray-900 font-serif">- Entrées -</h2>


                                        <!-- Images avec un lien de recette -->


    <div class="inline-flex">                 
        <div class="flex flex-row mx-auto bg-gray-700 rounded-lg p-6 m-6 w-1/3 md:w-1/5">
            <a href="https://tailwindcss.com/docs/box-shadow/#app">
                <img class="h-full w-full rounded-lg transform scale-100 hover:scale-110 transition duration-150" src=img/saucisse.jpg>
            </a>
        </div>
        <div class="flex flex-row mx-auto bg-gray-700 rounded-lg p-6 m-6 w-1/3 md:w-1/5">
            <a href="https://tailwindcss.com/docs/box-shadow/#app">
                <img class="h-full w-full rounded-lg transform scale-100 hover:scale-110 transition duration-150" src=img/tiramitsu.jpg>
            </a>
        </div>
        <div class="flex flex-row mx-auto bg-gray-700 rounded-lg p-6 m-6 w-1/3 md:w-1/5">
            <a href="https://tailwindcss.com/docs/box-shadow/#app">
                <img class="h-full w-full rounded-lg transform scale-100 hover:scale-110 transition duration-150" src=img/macaron.jpg>
            </a>
        </div>
    </div>


            <!-- Pavés de texte sous les images de recettes correspondantes -->


    <div class="inline-flex">
        <div class="w-1/3 rounded overflow-auto shadow-xl my-2 -my-4 p-2 m-8 mb-4">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 hover:text-blue-500">
                    <a href="https://tailwindcss.com/docs/box-shadow/#app">Saucisses du Mordore</a>
                </div>
                    <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
            </div>
            <div class="w-1/3 rounded overflow-hidden shadow-xl my-2 -my-4 p-2 m-8 mb-4">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 hover:text-blue-500">
                        <a href="https://tailwindcss.com/docs/box-shadow/#app">Gâteaux des Elfes</a>
                    </div>
                    <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
            </div>
            <div class="w-1/3 rounded overflow-hidden shadow-xl my-2 -my-4 p-2 m-8 mb-4">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 hover:text-blue-500">
                        <a href="https://tailwindcss.com/docs/box-shadow/#app">Sauron la Souillon</a>
                    </div>
                    <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
            </div> 
        </div>
        <h2 class="text-center p-2 text-3xl text-gray-900 font-serif">- Plats -</h2>


                        <!-- Images avec un lien de recette -->
            
                                
        <div class="inline-flex">   
            <div class="flex flex-row mx-auto bg-gray-700 rounded-lg p-6 m-6 w-1/3 md:w-1/5">
                <a href="https://tailwindcss.com/docs/box-shadow/#app">
                    <img class="h-full w-full rounded-lg transform scale-100 hover:scale-110 transition duration-150" src=img/saucisse.jpg>
                </a>
            </div>
            <div class="flex flex-row mx-auto bg-gray-700 rounded-lg p-6 m-6 w-1/3 md:w-1/5">
                <a href="https://tailwindcss.com/docs/box-shadow/#app">
                    <img class="h-full w-full rounded-lg transform scale-100 hover:scale-110 transition duration-150" src=img/tiramitsu.jpg>
                </a>
            </div>
            <div class="flex flex-row mx-auto bg-gray-700 rounded-lg p-6 m-6 w-1/3 md:w-1/5">
                <a href="https://tailwindcss.com/docs/box-shadow/#app">
                    <img class="h-full w-full rounded-lg transform scale-100 hover:scale-110 transition duration-150" src=img/macaron.jpg>
                </a>
            </div>
        </div>


        <!-- Pavés de texte sous les images de recettes correspondantes -->


        <div class="inline-flex">
            <div class="w-1/3 rounded overflow-auto shadow-xl my-2 -my-4 p-2 m-8 mb-4">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 hover:text-blue-500">
                        <a href="https://tailwindcss.com/docs/box-shadow/#app">Saucisses du Mordore</a>
                    </div>
                    <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>   
                </div>
            </div>
            <div class="w-1/3 rounded overflow-hidden shadow-xl my-2 -my-4 p-2 m-8 mb-4">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 hover:text-blue-500">
                        <a href="https://tailwindcss.com/docs/box-shadow/#app">Gâteaux des Elfes</a>
                    </div>
                    <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
            </div>
            <div class="w-1/3 rounded overflow-hidden shadow-xl my-2 -my-4 p-2 m-8 mb-4">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 hover:text-blue-500">
                        <a href="https://tailwindcss.com/docs/box-shadow/#app">Sauron la Souillon</a>
                    </div>
                    <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
            </div> 
        </div>
        <h2 class="text-center p-2 text-3xl text-gray-900 font-serif">- Desserts -</h2>


                        <!-- Images avec un lien de recette -->


        <div class="inline-flex">
            <div class="flex flex-row mx-auto bg-gray-700 rounded-lg p-6 m-6 w-1/3 md:w-1/5">
                <a href="https://tailwindcss.com/docs/box-shadow/#app">
                    <img class="h-full w-full rounded-lg transform scale-100 hover:scale-110 transition duration-150" src=img/muffin.jpg>
                </a>
            </div>
            <div class="flex flex-row mx-auto bg-gray-700 rounded-lg p-6 m-6 w-1/3 md:w-1/5">
                <a href="https://tailwindcss.com/docs/box-shadow/#app">
                    <img class="h-full w-full rounded-lg transform scale-100 hover:scale-110 transition duration-150" src=img/tiramitsu.jpg>
                </a>
            </div>
        <div class="flex flex-row mx-auto bg-gray-700 rounded-lg p-6 m-6 w-1/3 md:w-1/5">
            <a href="https://tailwindcss.com/docs/box-shadow/#app">
                <img class="h-full w-full rounded-lg transform scale-100 hover:scale-110 transition duration-150" src=img/macaron.jpg>
            </a>
        </div>
    </div>


            <!-- Pavés de texte sous les images de recettes correspondantes -->
    <div class="inline-flex">
        <div class="w-1/3 rounded overflow-auto shadow-xl my-2 -my-4 p-2 m-8 mb-4">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 hover:text-blue-500">
                    <a href="https://tailwindcss.com/docs/box-shadow/#app">Saucisses du Mordore</a>
                </div>
                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
            </div>
        </div>
        <div class="w-1/3 rounded overflow-hidden shadow-xl my-2 -my-4 p-2 m-8 mb-4">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 hover:text-blue-500">
                    <a href="https://tailwindcss.com/docs/box-shadow/#app">Gâteaux des Elfes</a>
                </div>
                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
            </div>
        </div>
        <div class="w-1/3 rounded overflow-hidden shadow-xl my-2 -my-4 p-2 m-8 mb-4">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 hover:text-blue-500">
                    <a href="https://tailwindcss.com/docs/box-shadow/#app">Sauron la Souillon</a>
                </div>
                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>  
            </div>
        </div> 
    </div>
</div>



<?php include __DIR__ . '/../footer.php' ?>
    