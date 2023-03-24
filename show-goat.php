<!-- header -->
<?php
session_start();
$title = "Liste des GOAT";
$bg = "bg-rose-500";

// 1 - demande à model de lui donner tous les étudiants
require_once 'models/model.php';
// query to get the goat by the id
$goat = get('goat');

// Capture html
ob_start();
include 'views/partials/_show-goat.php';

// Stock contenu
$content = ob_get_clean();
require 'views/layout.php';