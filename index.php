<?php
include_once 'models/model.php';
// Récupère les données en base
$goat = getFromId('goat', 1);
$title = $goat['first_name'] . ' ' . $goat['last_name'];
$bg = "bg-indigo-600";

// Capture du html
ob_start();

include 'views/partials/_card.php';

// stop la capture et stocke le contenu
$content = ob_get_clean();
require 'views/layout.php';
