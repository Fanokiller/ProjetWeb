<?php
try
{
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=recipedb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

if (isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['user_image'])&& isset($_POST['duree']) && isset($_POST['persons'])) {

    if (strlen($_POST['title']) != 0 && strlen($_POST['content']) != 0 && strlen($_POST['duree']) !=0) {
        $contenu_binaire=file_get_contents($_FILES['user_image']['tmp_name']);
        $image = base64_encode($contenu_binaire);
        $req = $bdd->prepare('INSERT INTO recipe (title,content,user_image,duree,persons) VALUES (:title,:content,:user_image,:duree,:persons)');
        $req->execute(array(
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'duree' => $_POST['duree'],
            'persons' => $_POST['persons'],
            'user_image' => $image
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