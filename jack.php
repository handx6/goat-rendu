<?php
include_once 'models/model.php';
// Récupère les données en base
$goat = getFromId('goat', 2);
$title = $goat['first_name'] . ' ' . $goat['last_name'];
$bg = "bg-green-600";

// Capture html
ob_start();

include 'views/partials/_card.php';

// Stock contenu
$content = ob_get_clean();
require 'views/layout.php';
