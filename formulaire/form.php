<?php include __DIR__ . '/../header.php' ?>
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <form class="w-full max-w-lg mx-auto mt-12" action="/../ProjetWeb/mail.php" enctype="multipart/form-data"method="POST">
        <div class="flex flex-wrap mb-6">
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prenom">
                    Prénom
                </label>
                <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="prenom" type="text" placeholder="Jean" name="prenom">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nom">
                    Nom
                </label>
                <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nom" type="text" placeholder="Dupont" name="nom">
            </div>
        </div>
        <div class="flex flex-wrap mb-2">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email
            </label>
            <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="mail" placeholder="exemple@test.fr" name="email">
        </div>
        <div class="flex flex-wrap mb-2">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="subject">
                    Sujet
            </label>
            <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="subject" type="text" name="subject">
        </div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="msg">
                Votre question
            </label>
            <textarea class="w-full bg-gray-300 focus:bg-white" name="msg" placeholder="Décrivez votre question ici..."></textarea>
        </div>
        <div class="px-5 text-center p-4">
            <button class="w-40 shadow bg-gray-700 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-gray-300 font-bold py-2 px-4 rounded" type="submit"><i class="mr-1 fas fa-envelope-open-text"></i>
                Envoyer
            </button>
        </div>
</div>
</form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script>
    $(document).ready(function() {
        $("#grid-last-name").on("input", verifChamps)
        $("#grid-first-name").on("input", verifChamps);
        $("#grid-city").on("input", verifChamps);
    })
</script>
<script>
    $(document).ready(function() {
        $("#grid-zip").on("input", verifChamps2)
    })
</script>

<?php include __DIR__ . '/../footer.php' ?>