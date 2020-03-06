<?php include __DIR__ . '/../header.php' ?>
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <?php $id_user = $_GET['id_user'];?>
<?php $users = $DB->query("SELECT * FROM user WHERE nickname ='$id_user'")?>
<?php foreach ($users as $user): ?>
    <div class="mx-auto bg-gray-400 rounded-lg mt-12 mb-12">
        <div class="flex w-full items-center">
            <div class="w-1/3 h-full mx-2"><img class="h-32 w-32 object-cover mx-auto md:h-32 m-8 rounded-full" src="data:image/jpg;base64,<?= $user->user_avatar?>"></div>
            <div class="flex flex-1 flex-wrap">
                <div class="w-1/2 px-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Pseudo
                    </label>
                    <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="<?= $user->nickname?>">
                </div>
                <div class="w-1/2 px-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Email
                    </label>
                    <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="<?= $user->email?>">
                </div>
                <div class="text-right w-1/2 px-4 ml-auto">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left m-2">Description</label>
                    <textarea class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 resize-none" placeholder="Ecrivez quelque chose ici..."></textarea>
                </div>
            </div>
        </div>
        <div class="text-right p-2"><button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded">
                Enregistrer
            </button></div>
    </div> <?php endforeach ?>
   
    <?php include __DIR__ . '/../footer.php' ?>