<?php include __DIR__ . '/../header.php' ?>
<?php $articles = $DB->query('SELECT * FROM recipe WHERE recipe_type = 1')?>
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <h2 class="text-center p-2 text-3xl text-gray-900 font-serif">- Apéritifs -</h2>
    <div class="inline-flex">
    <?php foreach ($articles as $article): ?>
    <div class="flex-row w-1/3">
        


                <!-- Images avec un lien de recette -->

        <?php $id_article = $article->id; ?>
        <div class="mx-auto bg-teal-500 rounded-lg p-2 m-2 w-4/6">
            <a href="/../ProjetWeb/article/article.php?id_article=<?= $id_article?>">
                <img id="taille-img-index" class="rounded-lg transform scale-100 hover:scale-110 transition duration-150" src="data:image/jpg;base64,<?= $article->user_image?>">
            </a>
        </div>
    


                <!-- Pavés de texte sous les images de recettes correspondantes -->



            <div class="w-4/6 mx-auto w-full rounded overflow-auto shadow-xl">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 hover:text-blue-500">
                        <a href="https://tailwindcss.com/docs/box-shadow/#app"><?= $article->title ?></a>
                    </div>
                    <p class="text-grey-darker text-base"><?= $article->content ?></p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
<?php $articles = $DB->query('SELECT * FROM recipe WHERE recipe_type = 2')?>
        <h2 class="text-center p-2 text-3xl text-gray-900 font-serif">- Entrées -</h2>
        <div class="inline-flex">
            <?php foreach ($articles as $article): ?>
                <div class="flex-row w-1/3">


                        <!-- Images avec un lien de recette -->
            
                    <?php $id_article = $article->id; ?>
                    <div class="mx-auto bg-teal-500 rounded-lg p-2 m-2 w-4/6">
                        <a href="/../ProjetWeb/article/article.php?id_article=<?= $id_article?>">
                            <img id="taille-img-index" class="rounded-lg transform scale-100 hover:scale-110 transition duration-150" src="data:image/jpg;base64,<?= $article->user_image?>">
                        </a>
                    </div>
    


                <!-- Pavés de texte sous les images de recettes correspondantes -->



                    <div class="w-4/6 mx-auto w-full rounded overflow-auto shadow-xl">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 hover:text-blue-500">
                                <a href="https://tailwindcss.com/docs/box-shadow/#app"><?= $article->title ?></a>
                            </div>
                            <p class="text-grey-darker text-base"><?= $article->content ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
        </div>
        <?php $articles = $DB->query('SELECT * FROM recipe WHERE recipe_type = 3')?>
        <h2 class="text-center p-2 text-3xl text-gray-900 font-serif">- Plats -</h2>
        <div class="inline-flex">
            <?php foreach ($articles as $article): ?>
                <div class="flex-row w-1/3">


                        <!-- Images avec un lien de recette -->
            
                    <?php $id_article = $article->id; ?>           
                    <div class="mx-auto bg-teal-500 rounded-lg p-2 m-2 w-4/6">
                        <a href="/../ProjetWeb/article/article.php?id_article=<?= $id_article?>">
                            <img id="taille-img-index" class="rounded-lg transform scale-100 hover:scale-110 transition duration-150" src="data:image/jpg;base64,<?= $article->user_image?>">
                        </a>
                    </div>
    


                <!-- Pavés de texte sous les images de recettes correspondantes -->



                    <div class="w-4/6 mx-auto w-full rounded overflow-auto shadow-xl">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 hover:text-blue-500">
                                <a href="https://tailwindcss.com/docs/box-shadow/#app"><?= $article->title ?></a>
                            </div>
                            <p class="text-grey-darker text-base"><?= $article->content ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
        </div>
        <?php $articles = $DB->query('SELECT * FROM recipe WHERE recipe_type = 4')?>
        <h2 class="text-center p-2 text-3xl text-gray-900 font-serif">- Desserts -</h2>
        <div class="inline-flex">
            <?php foreach ($articles as $article): ?>
                <div class="flex-row w-1/3">


                        <!-- Images avec un lien de recette -->
            
                    <?php $id_article = $article->id; ?>                
                    <div class="mx-auto bg-teal-500 rounded-lg p-2 m-2 w-4/6">
                        <a href="/../ProjetWeb/article/article.php?id_article=<?= $id_article?>">
                            <img id="taille-img-index" class="rounded-lg transform scale-100 hover:scale-110 transition duration-150" src="data:image/jpg;base64,<?= $article->user_image?>">
                        </a>
                    </div>
    


                <!-- Pavés de texte sous les images de recettes correspondantes -->



                    <div class="w-4/6 mx-auto w-full rounded overflow-auto shadow-xl">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 hover:text-blue-500">
                                <a href="https://tailwindcss.com/docs/box-shadow/#app"><?= $article->title ?></a>
                            </div>
                            <p class="text-grey-darker text-base"><?= $article->content ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
        </div>
</div>



<?php include __DIR__ . '/../footer.php' ?>
    