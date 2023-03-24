<?php
include_once 'helpers/functions.php';
?>

<form action="" method="post">
    <div class="flex justify-between items-center">
        <div class="w-1/2">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text" for="first_name">Prénom</span>
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                    name="first_name" id="first_name" value="<?php showUpdateInputValue('first_name', $goat)?>" />
                <?php errorMsg('first_name')?>
            </div>

            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text" for="last_name">Nom</span>
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="last_name"
                    id="last_name" value="<?php showUpdateInputValue('last_name', $goat)?>" />
                <?php errorMsg('last_name')?>

            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text" for="year_of_birth">Année de naissance</span>
                </label>
                <input type="numeric" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                    name="year_of_birth" id="year_of_birth"
                    value="<?php showUpdateInputValue('year_of_birth', $goat)?>" />
                <?php errorMsg('year_of_birth')?>

            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text" for="nationality">Nationalité</span>
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                    name="nationality" id="nationality" value="<?php showUpdateInputValue('nationality', $goat)?>" />
                <?php errorMsg('nationality')?>

            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text" for="company_name">Entreprise</span>
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                    name="company_name" id="company_name" value="<?php showUpdateInputValue('company_name', $goat)?>" />
                <?php errorMsg('company_name')?>

            </div>
        </div>
        <div class="w-1/2">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text" for="description">Description</span>
                </label>
                <textarea class="textarea textarea-bordered" placeholder="Bio" name="description"
                    id="description"><?php showUpdateInputValue('description', $goat)?></textarea>
                <?php errorMsg('description')?>

            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text" for="url_img">URL de l'image</span>
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="url_img"
                    id="url_img" value="<?php showUpdateInputValue('url_img', $goat)?>" />
                <?php errorMsg('url_img')?>

            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text" for="sexe">Sexe</span>
                </label>
                <select class="select select-bordered" name="sexe" id="sexe">
                    <option value="masculin" <?php showUpdateSelectValue('sexe', 'masculin', $goat)?>>Masculin</option>
                    <option value="feminin" <?php showUpdateSelectValue('sexe', 'feminin', $goat)?>>Féminin</option>
                </select>
            </div>

            <div class="form-control w-full max-w-xs pt-6">
                <input type="submit" value="Envoyer" class="btn btn-outline" name="submitted" />
            </div>
        </div>
    </div>
</form>