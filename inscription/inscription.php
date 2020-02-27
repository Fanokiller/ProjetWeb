<?php include __DIR__ . '/../header.php' ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div>
            <div>
                <h1 class="border-bottom w-100">Inscription</h1>
                <form action="/../ProjetWeb/inscription/traitement_inscription.php" method="post" enctype="multipart/form-data" class="col-md-4">
                    <div class="form-group">
                        <label for="Nom_inscription">Nom</label>
                        <input class="form-control" id="Nom_inscription" name="Nom_inscription" type="text">

                        <label for="password">Mot de passe</label>
                        <input class="form-control" id="password" name="password" type="password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Inscription</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php include __DIR__ . '/../footer.php' ?>