<?php
// $Nom = $_POST['Nom_inscription'];
// $Password = $_POST['user_password'];

try
{
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=recipedb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


if (isset($_POST['nickname']) && isset($_POST['user_password']) && isset($_POST['email'])) {

    if (strlen($_POST['nickname']) != 0 && strlen($_POST['user_password']) != 0 && strlen($_POST['email'])) {

        $req = $bdd->prepare('INSERT INTO user (nickname,user_password,email) VALUES (:nickname,:user_password,:email)');
        $req->execute(array(
            'nickname' => $_POST['nickname'],
            'user_password' => $_POST['user_password'],
            'email' => $_POST['email']
            ));
            echo var_dump($req);
        header('Location: /ProjetWeb/succes.php');
    } else {
        header('Location: /ProjetWeb/erreur.php');
    }

} else {
    header('Location: /ProjetWeb/erreur.php');
}