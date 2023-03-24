<div class="sm:flex justify-between space-x-12">
    <div class="w-2/4">
        <img src="<?=$goat['url_img']?>" alt="<?=$goat['first_name'] . ' ' . $goat['last_name'];?>" class="w-full" />
    </div>
    <div class="w-2/4">
        <p><span class="font-bold">Année de naissance: </span><?=$goat['year_of_birth']?></p>
        <p><span class="font-bold">Nationalité: </span><?=$goat['nationality']?></p>
        <p><span class="font-bold">Entreprise: </span><?=$goat['company_name']?></p>
        <p>
            <span class="font-bold">Description: </span>
            <?=$goat['description']?>
        </p>
    </div>
</div>