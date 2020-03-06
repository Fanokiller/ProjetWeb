<?php include __DIR__ . '/../header.php' ?>
    <!-- Header -->
    <?php $id_article = $_GET['id_article'];?>
    <?php $articles = $DB->query("SELECT * FROM recipe WHERE id = '$id_article'")?>
    <?php foreach ($articles as $article): ?>
    <div class="main-content flex-1 bg-white mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="flex flex-wrap mt-6">
            <div class="w-full md:w-1/2 p-3 mx-auto">
                <div class="bg-red-100 rounded shadow p-2 text-center">
                    <div class="container bg-light border rounded border-light">
                        <span class="text-center font-bold text-5xl mx-auto">
                            <p class=" bg-red-500"style="color:white"> <?= $article->title; ?><!-- Afficher le titre qui est contenu dans la BDD --></p><br>
                        </span>              
                        <div class="flex justify-between pb-4">
                            <span class="inline-block mx-auto text-lg "><i class="fas fa-stopwatch h-10 w-10 fa-2x" style="color:gray"></i><br>
                                <?= $article->duree; ?> minutes</span> <!-- Afficher la durée inscrite dans la BDD -->
                            <span class="inline-block mx-auto text-lg"> 
                                <i class="fas fa-circle h-10 w-10 fa-2x" style="color:green"></i>
                                <i class="fas fa-circle h-10 w-10 fa-2x" style="color:gray"></i>
                                <i class="fas fa-circle h-10 w-10 fa-2x" style="color:gray"></i><br>Facile</span>                        
                            <span class="inline-block mx-auto text-lg "><i class="fas fa-euro-sign mr-1 h-10 w-10 fa-2x"style="color:gray"></i><br>
                            Bon marché</span>
                            <span class="inline-block mx-auto text-lg">
                            <i class="fas fa-user-alt h-10 w-10 fa-2x" style="color:gray"></i><br><?= $article->persons; ?></span>
                    </div>
                    <img class="w-full" src="data:image/jpg;base64,<?= $article->user_image ?>"></span>
                    </div>
                <div class="w-full p-3 border border-grey-300 rounded shadow p-2">
                    <div class="mx-auto self-start pb-5"><i class="far fa-heart fa-5x"></i></div>
                    <div class="flex justify-between">
                        <form method="post" action="/../ProjetWeb/pdf.php?id_article=<?=$id_article?>" enctype="multipart/form-data">
                        <button value="pdf"><span class="mx-auto"><i class="far fa-file-pdf fa-2x"></i></span></button></form>
                        <form method="post" action="/../ProjetWeb/mail.php" enctype="multipart/form-data"><button value="mail"><span class="mx-auto"><i class="far fa-share-square fa-2x"></i></span></button></form>
                        <button value="print" onclick="window.print()"><span class="mx-auto"><i class="fas fa-print fa-2x"></i></span></button>
                        <button><span class="mx-auto"><i class="far fa-star fa-2x"></i></span></button>
                    </div>
                    <div class="border-2 border-gray-400 mt-4"></div>
                    <div class="flex flew-row bg-white rounded-lg">
                        <div class="flex-shrink-0 bg-gray-600 rounded-lg h-full">
                            <div class="flex text-center text-white font-bold text-xl mb-2 block mr-4 mt-4"><img class="w-10 h-10 rounded-full mr-4 inline-block" src="https://specials-images.forbesimg.com/imageserve/1005962360/960x0.jpg?fit=scale">Ingrédient</div>
                            <ul>
                                <li class="flex px-4 py-2">
                                    <p class="m-2 -ml-3 text-white"><img class="w-10 h-10 rounded-full mr-4 bg-gray-200 inline-block" src="https://images.anaca3.com/wp-content/uploads/2018/07/les-knackis-autorise-pendant-la-grossesse-702x336.jpg">1 paquet de knackis</p>
                                </li>
                                <li class="flex px-4 py-2">
                                    <p class="m-2 -ml-3 text-white"><img class="w-10 h-10 rounded-full mr-4 bg-gray-200 inline-block" src="https://www.herta.fr/sites/default/files/images/product/principal/864b443e-88de-4573-bcb7-87e5b86d2e9d.png">1 pâte feuilletée</p>
                                </li>
                                <li class="flex px-4 py-2">
                                    <p class="m-2 -ml-3 text-white"><img class="w-10 h-10 rounded-full mr-4 bg-gray-200 inline-block" src="https://www.entremont.com/sites/entremont.com/files/upload/images/rapes_fromages.png">Gruyère rapé</p>
                                </li>
                                <li class="flex px-4 py-2">
                                    <p class="m-2 -ml-3 text-white"><img class="w-10 h-10 rounded-full mr-4 bg-gray-200 inline-block" src="https://www.monoprix.fr/assets/images/grocery/637/580x580.jpg?impolicy=High_Grocery">Moutarde ancienne</p>
                                </li>
                                <li class="flex px-4 py-2">
                                    <p class="m-2 -ml-3 text-white"><img class="w-10 h-10 rounded-full mr-4 bg-gray-200 inline-block" src="https://i.f1g.fr/media/madame/orig/sites/default/files/img/2014/11/les-graines-atouts-sante.jpg">Grains de sésames</p>
                                </li>

                            </ul>

                        </div>
                        <div class="mb-6 flex-shrink-1">
                            <div class="text-gray-900 text-center font-bold text-xl mb-2 block mt-4"><img class="w-10 h-10 rounded-full mr-4 inline-block" src="https://img2.freepng.fr/20180705/xzf/kisspng-whisk-drawing-kitchen-utensil-tool-wisk-5b3de1a20366c5.4073021715307821140139.jpg">Etape de Préparation</div>
                            <ol class="list-decimal list-outside pl-8">
                                <li class="text-gray-700 text-base text-left ">Préchauffez votre four à 180°C</li>
                                <br>

                                <li class="text-gray-700 text-base text-left ">Déroulez la pâte feuilletée sur le plan de travail. Coupez des bandes de 5 cm de long et de 2 cm de large.</li>
                                <br>

                                <li class="text-gray-700 text-base text-left">Déposez un morceau de saucisse à l'extrémité de chaque morceau de pâte. Parsemez de gruyère râpé et roulez le tout.</li>
                                <br>

                                <li class="text-gray-700 text-base text-left">Tartinez les bandes d'un peu de moutarde.</li>
                                <br>

                                <li class="text-gray-700 text-base text-left">Déposez sur une plaque allant au four. Mouillez légèrement au doigt le dessus de chaque feuilleté et parsemez de grains de sésame.</li>
                                <br>
                            </ol>
                        
                    </div>
                    </div>
                
                </div>
            </div>
        </div>
<?php endforeach ?>
<?php include __DIR__ . '/../footer.php' ?>
