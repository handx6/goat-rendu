<?php
session_start();
include 'helpers/check-form.php';
require_once 'models/model.php';
$bg = "bg-rose-500";
$title = "Ajouter Goat";

// récupère le goat
$goat = get('goat');
// Capture html
ob_start();

include 'views/partials/_form-new.php';

// Stock contenu
$content = ob_get_clean();
require 'views/layout.php';
