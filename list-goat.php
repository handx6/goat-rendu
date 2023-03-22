<!-- header -->
<?php
session_start();
$title = "Liste des GOAT";
$bg = "bg-rose-500";
include 'partials/_header.php';

// 1 - demande à model de lui donner tous les étudiants
require_once 'models/model.php';
// query to get all students
$goats = getAll('goat', 'last_name');
?>
<main class="px-20 py-20">
    <h1 class="text-center text-3xl font-bold">Liste des GOAT</h1>
    <?php
//Affiche alert si error ou succes
include 'partials/_alert.php';
// Affiche le tableau des Goats
include 'partials/_table-goat.php';
?>
</main>
<!-- footer -->
<?php
include 'partials/_footer.php'
?>