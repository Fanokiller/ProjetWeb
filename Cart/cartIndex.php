<?php include __DIR__ . '/../header.php' ?>
<?php
    var_dump($DB->query('SELECT * FROM test'));
    if(isset($_GET['id'])){

    }else{
        die('Vous n\'avez pas séléctionné de produit à ajouter dans votre panier');
    }
?>
<?php include __DIR__ . '/../footer.php' ?>