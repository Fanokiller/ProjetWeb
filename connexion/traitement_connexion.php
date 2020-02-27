<?php include __DIR__ . './header.php' ?>
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
	$id_login = $bdd->prepare('SELECT id FROM user WHERE user_login = :nickname AND user_password = :password');
    $id_login->execute(array('user_login' => $_POST['user_name'],'user_password' => $_POST['user_password']));
    $test_login = $id_login->fetch();
    if (!$test_login){
        header('Location: ./ProjetWeb/erreur.php');
    }
    else{
        $_SESSION['user_login']=$_POST['user_name'];
        $_SESSION['user_password']=$_POST['user_password'];
		echo ('vous êtes connecté');
		header('Location: ./ProjetWeb/accueil/accueil.php');
    }
?>
<?php include __DIR__ . './footer.php' ?>