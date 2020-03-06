<?php include __DIR__ . '/../header.php' ?>
<?php $users = $DB->query('SELECT * FROM user')?>
<div class="main-content md:flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
<?php foreach ($users as $user): ?>
        <table class="mx-auto w-64 bg-white border-black px-2">       
            <thead>
                <tr>
                    <th class="px-4 py-2 text-blue-600 w-1/4">Id</th>
                    <th class="px-4 py-2 text-blue-600 w-1/4">Nickname</th>
                    <th class="px-4 py-2 text-blue-600 w-1/4">Email</th>
                    <th class="px-4 py-2 text-blue-600 w-1/4">isAdmin</th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-2 border-black">
                    <td class="md:flex-none px-4 py-2 w-1/4" > 
                        <?= $user->user_id?>
                    </td>
                    <td class=" px-4 py-2 md:flex-none text-gray-800 w-1/4">
                        <?= $user->nickname?>
                    </td>
                    <td class=" px-4 py-2 md:flex-none text-gray-800 w-1/4">
                        <?= $user->email?>
                    </td>
                    <td class=" px-4 py-2 md:flex-none text-gray-800 w-1/4">
                        <?= $user->isAdmin?>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php endforeach ?>
</div>
<?php include __DIR__ . '/../footer.php' ?>