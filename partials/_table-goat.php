<div class="overflow-x-auto pt-12 ">
    <table class="table table-zebra w-full ">
        <!-- head -->
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Nationalité</th>
                <th>Entreprise</th>
                <th>Voir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($goats as $item): ?>
            <!-- row -->
            <tr>
                <th><?=$item['id']?></th>
                <td><?=$item['first_name'] . ' ' . $item['last_name']?></td>
                <td><?=$item['nationality']?></td>
                <td><?=$item['company_name']?></td>
                <td>
                    <a href="show-goat.php?id=<?=$item[
    'id'
]?>">
                        <i class="fa-solid fa-eye text-green-500"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>