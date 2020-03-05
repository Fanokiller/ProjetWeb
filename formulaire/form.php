<?php include __DIR__ . '/../header.php' ?>
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <form class="w-full max-w-lg mx-auto mt-12" action="mailto:w.daoud@laposte.net">
        <div class="flex flex-wrap mb-6">
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Prénom
                </label>
                <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="text" placeholder="Jean">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Nom
                </label>
                <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Dupont">
            </div>
        </div>
        <div class="flex flex-wrap mb-2">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    Ville
                </label>
                <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Nancy">
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                    Code postal
                </label>
                <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="54000">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0 p-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Région
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-gray-300 border border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>Grand-Est</option>
                        <option>Hauts-de-France</option>
                        <option>Normandie</option>
                        <option>Bretagne</option>
                        <option>Pays de la Loire</option>
                        <option>Centre-Val de Loire</option>
                        <option>Île de France</option>
                        <option>Bourgogne-Franche-Comté</option>
                        <option>Auverge-Rhône-Alpes</option>
                        <option>Nouvelle Aquitaine</option>
                        <option>Occitanie</option>
                        <option>Provence-Alpes-Côtes-d'Azur</option>
                        <option>Corse</option>
                        <option>Autre</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-question">
                Votre question
            </label>
            <textarea class="w-full bg-gray-300 focus:bg-white" placeholder="Décrivez votre question ici..."></textarea>
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