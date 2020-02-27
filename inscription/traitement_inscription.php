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


if (isset($_POST['Nom_inscription']) && isset($_POST['password']) && isset($_POST['email'])) {

    if (strlen($_POST['Nom_inscription']) != 0 && strlen($_POST['password']) != 0 && strlen($_POST['email'])) {

        $req = $bdd->prepare('INSERT INTO user (Nom_inscription,passeword,email) VALUES (:nickname,:password,:email)');
        $req->execute(array(
            'nickname' => $_POST['Nom_inscription'],
            'password' => $_POST['password'],
            'email' => $_POST['email']
            ));
            var_dump($req);
        header('Location: ./ProjetWeb/succes.php');
    } else {
        header('Location: ./ProjetWeb/erreur.php');
    }

} else {
    header('Location: ./ProjetWeb/erreur.php');
}