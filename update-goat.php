<?php
session_start();
include 'helpers/check-form-update.php';
include_once 'models/model.php';
$bg = "bg-rose-500";
$title = "Ajouter Goat";

$goat = get('goat');
// Capture html
ob_start();

include 'views/partials/_form-update.php';

// Stock contenu
$content = ob_get_clean();
require 'views/layout.php';
