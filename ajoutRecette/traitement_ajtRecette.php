<?php
try
{
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=recipedb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


// // upload de fichier image
// if (isset($_FILES['user_image'])) {

//     // Répertoire de destination

//     $uploadDir = __DIR__ . '/images/';

//     // extension du fichier envoyé
//     $extension = pathinfo($_FILES['user_image']['name'])['extension'];

//     // Nom du fichier à uploader
//     $nomFichier = ($_FILES['user_image']['name']);

//     // On procède à l'enregistrement du fichier
//     if (move_uploaded_file($_FILES['user_image']['tmp_name'], $uploadDir.$nomFichier)) {
//         // echo 'ok';
//     } else {
//         echo 'pb';
//     }} 

if (isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['user_image'])&& isset($_POST['duree']) && isset($_POST['persons']) && isset($_POST['recipe_type']) && isset($_POST['season'])) {

    if (strlen($_POST['title']) != 0 && strlen($_POST['content']) != 0 && strlen($_POST['duree']) !=0 && strlen($_POST['recipe_type']) && strlen($_POST['season'])) {
        $contenu_binaire=file_get_contents($_FILES['user_image']['tmp_name']);
        $image = base64_encode($contenu_binaire);
        $req = $bdd->prepare('INSERT INTO recipe (title,content,etapes,user_image,duree,persons,recipe_type,season) VALUES (:title,:content,:etapes,:user_image,:duree,:persons,:recipe_type,:season)');
        $req->execute(array(
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'etapes' => $_POST['etapes'],
            'duree' => $_POST['duree'],
            'persons' => $_POST['persons'],
            'user_image' => $image,
            'recipe_type' => $_POST['recipe_type'],
            'season' => $_POST['season']
        ));
            // var_dump($req);
        header('Location: /ProjetWeb/succes.php');
    } else {
        header('Location: /ProjetWeb/erreur.php');
    }

} else {
    header('Location: /ProjetWeb/erreur.php');
}



?>