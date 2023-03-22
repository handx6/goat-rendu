<!-- header -->
<?php
session_start();
$title = "Liste des GOAT";
$bg = "bg-rose-500";
include 'partials/_header.php';

// 1 - demande à model de lui donner tous les étudiants
require_once 'models/model.php';
// query to get the goat by the id
$goat = get('goat');
?>
<main class="px-20 py-20">
    <h1 class="text-center text-3xl font-bold pb-20">Information du Goat</h1>
    <?php
include 'partials/_show-goat.php';
?>
</main>
<!-- footer -->
<?php
include 'partials/_footer.php'
?>