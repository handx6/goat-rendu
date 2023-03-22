<?php
session_start();

// Connexion avec pdo
require_once 'models/database.php';
include_once 'models/model.php';

include_once 'helpers/functions.php';

//ajoute l'élément en base
add('goat', $values);