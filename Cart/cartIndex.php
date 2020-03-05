<?php include __DIR__ . '/../header.php' ?>
<div class="main-content md:flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

<?php
    var_dump($DB->query('SELECT * FROM ingredient'));
    if(isset($_GET['id'])){

    }else{
        die('Vous n\'avez pas séléctionné de produit à ajouter dans votre panier');
    }
?>
</div>
<?php include __DIR__ . '/../footer.php' ?>