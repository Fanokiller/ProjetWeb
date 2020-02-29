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
	$id_tags = $bdd->prepare('SELECT recipe_id FROM recipe WHERE tags = :tags');
    $id_tags->execute(array('tags' => $_POST['tags']));
    $test_tags = $id_tags->fetch();
    if (!$test_login){
        header('Location: /ProjetWeb/erreur.php');
    }
    else{
        $_SESSION['tags']=$_POST['tags'];
		header('Location: /ProjetWeb/accueil/accueil.php');
    }
?>
<?php include __DIR__ . '/footer.php' ?>