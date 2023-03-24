<?php
include_once 'models/model.php';
// Récupère les données en base
$goat = getFromId('goat', 3);
$title = $goat['first_name'] . ' ' . $goat['last_name'];

$bg = "bg-red-600";

// Capture du html
ob_start();

include 'views/partials/_card.php';

// stock contenu
$content = ob_get_clean();
require 'views/layout.php';
