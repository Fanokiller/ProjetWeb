<?php include __DIR__ . '/../header.php' ?>

<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mx-auto">
                <h1 class="border-bottom w-100">Ajout d'une recette</h1>
                <form action="/../ProjetWeb/ajoutRecette/traitement_ajtRecette.php" method="post" enctype="multipart/form-data" class="col-md-4">
                    <div class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        <label for="title">Titre :</label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="title" name="title" type="text">

                        <label for="content">Etapes :</label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="content" name="content" type="text">
                        
                        <label for="user_image">Image :</label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="user_image" name="user_image" type="file">
                        <div class="inline-block">
                        <label for="duree">Durée en minute :</label>
                        <input class="appearance-none inline-block w-32 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="duree" name="duree" type="time">
                        </div>
                        <div class="inline-block">
                        <label for="persons">Personne :</label>
                        <input class="appearance-none inline-block w-32 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="persons" name="persons" type="number">
                        </div><br>
                        <div class="inline-block">
                        <label for="recipe_type">Type de recette :</label> <br>
                            <input type="radio" name="recipe_type" value="1">Apéros <br>
                            <input type="radio" name="recipe_type" value="2">Entrées <br>
                            <input type="radio" name="recipe_type" value="3">Plats <br>
                            <input type="radio" name="recipe_type" value="4">Desserts <br>
                        </div>
                        <div class="inline-block mx-6">
                        <label for="season">Pour quelle saison :</label> <br>
                            <input type="radio" name="season" value="1">Hiver <br>
                            <input type="radio" name="season" value="2">Printemps <br>
                            <input type="radio" name="season" value="3">Eté <br>
                            <input type="radio" name="season" value="4">Autonme <br>
                        </div>
                    </div>
                    <div class="flex items-center justify-between my-10 mx-16   ">
                        <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" type="submit">Ajout</button>
                    </div>
                </form>
            </div>
        </div>
</div>

<?php include __DIR__ . '/../footer.php' ?>