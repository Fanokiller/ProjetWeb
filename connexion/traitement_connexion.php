<?php include __DIR__ . '/header.php' ?>
<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=recipedb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
	$id_login = $bdd->prepare('SELECT user_id FROM user WHERE nickname = :nickname AND user_password = :user_password');
    $id_login->execute(array('nickname' => $_POST['nickname'],'user_password' => $_POST['user_password']));
    $test_login = $id_login->fetch();
    if (!$test_login){
        header('Location: /ProjetWeb/erreur.php');
    }
    else{
        $_SESSION['nickname']=$_POST['nickname'];
        $_SESSION['user_password']=$_POST['user_password'];
		echo ('vous êtes connecté');
		header('Location: /ProjetWeb/accueil/accueil.php');
    }
?>
<?php include __DIR__ . '/footer.php' ?>