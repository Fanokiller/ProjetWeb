<?php include __DIR__ . '/../header.php' ?>

<div class="main-content flex-1 bg-gray-400 mt-12 md:mt-2 pb-24 md:pb-5">

    <?php
    function erreur($err='')
    {
    $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
    exit('<p>'.$mess.'</p>
    <p>Cliquez <a href="/../ProjetWeb/accueil/accueil.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
    }
    ?>
    <?php
    define('ERR_IS_CO','Vous ne pouvez pas accéder à cette page si vous n\'êtes pas connecté');
    ?>
    <?php
    session_unset();
    session_destroy();
    $titre="Déconnexion";


    echo '<p>Vous êtes à présent déconnecté <br />
    Cliquez <a href="/../ProjetWeb/accueil/accueil.php">ici</a> pour revenir à la page principale</p>';
    echo '</div></body></html>';

    ?>
</div>
<?php include __DIR__ . '/../foot.php' ?>