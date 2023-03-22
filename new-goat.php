<?php
include 'helpers/check-form.php';
$bg = "bg-rose-500";
$title = "Ajouter Goat";
include 'partials/_header.php';
?>

<main class="px-20 py-20">
    <h1 class="text-center text-3xl font-bold pb-10"> Ajouter un GOAT</h1>
    <form action="" method="post">
        <div class="flex justify-between items-center">
            <div class="w-1/2">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text" for="first_name">Prénom</span>
                    </label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="first_name" id="first_name" />
                    <?php errorMsg('first_name')?>
                </div>

                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text" for="last_name">Nom</span>
                    </label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="last_name" id="last_name" />
                    <?php errorMsg('last_name')?>

                </div>
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text" for="year_of_birth">Année de naissance</span>
                    </label>
                    <input type="numeric" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="year_of_birth" id="year_of_birth" />
                    <?php errorMsg('year_of_birth')?>

                </div>
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text" for="nationality">Nationalité</span>
                    </label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="nationality" id="nationality" />
                    <?php errorMsg('nationality')?>

                </div>
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text" for="company_name">Entreprise</span>
                    </label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="company_name" id="company_name" />
                    <?php errorMsg('company_name')?>

                </div>
            </div>
            <div class="w-1/2">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text" for="description">Description</span>
                    </label>
                    <textarea class="textarea textarea-bordered" placeholder="Bio" name="description"
                        id="description"></textarea>
                    <?php errorMsg('description')?>

                </div>
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text" for="url_img">URL de l'image</span>
                    </label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="url_img" id="url_img" />
                    <?php errorMsg('url_img')?>

                </div>
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text" for="sexe">Sexe</span>
                    </label>
                    <select class="select select-bordered" name="sexe" id="sexe">
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Féminin</option>
                    </select>
                </div>

                <div class="form-control w-full max-w-xs pt-6">
                    <input type="submit" value="Envoyer" class="btn btn-outline" name="submitted" />
                </div>
            </div>
        </div>
    </form>
</main>
<!-- footer -->
<?php
include 'partials/_footer.php'
?>