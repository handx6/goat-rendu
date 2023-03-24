<?php
session_start();
$title = "Liste des GOAT";
$bg = "bg-rose-500";

require_once 'models/model.php';
// query to get all students
$goats = getAll('goat', 'last_name');

// Capture html
ob_start();
//Affiche alert si error ou succes
include 'views/partials/_alert.php';
// Affiche le tableau des Goats
include 'views/partials/_table-goat.php';

// Stock contenu
$content = ob_get_clean();
require 'views/layout.php';
