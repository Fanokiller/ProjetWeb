<?php
$Nom = $_POST['Nom_inscription'];
$Password = $_POST['password'];

try
{
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=recipedb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


if (isset($_POST['Nom_inscription']) && isset($_POST['password'])) {

    if (strlen($_POST['Nom_inscription']) != 0 && strlen($_POST['password']) != 0 ) {

        $req = $bdd->prepare('INSERT INTO user (user_login,user_password) VALUES (:user_login,:user_password)');
        $req->execute(array(
            'user_login' => $_POST['Nom_inscription'],
            'user_password' => $_POST['password']
            ));
            var_dump($req);
        header('Location: /../skeleton/formulaire/succes.php');
    } else {
        header('Location: /../skeleton/formulaire/erreur.php');
    }

} else {
    header('Location: /../skeleton/formulaire/erreur.php');
}