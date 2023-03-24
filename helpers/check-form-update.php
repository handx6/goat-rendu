<?php
include_once "helpers/functions.php";
// validation du formulaire
// 1-creation de mes variables
$error = [];
$errMsgRequire = "<span class='text-red-500'>Ce champs est obligatoire</>";
$success = false;
if (!empty($_POST['submitted'])) {
    // 3- protege contre faille xss
    ///////////////////////////////
    $first_name = trim(htmlspecialchars($_POST['first_name']));
    $last_name = trim(htmlspecialchars($_POST['last_name']));
    $year = trim(htmlspecialchars($_POST['year_of_birth']));
    $nationality = trim(htmlspecialchars($_POST['nationality']));
    $company_name = trim(htmlspecialchars($_POST['company_name']));
    $description = trim(htmlspecialchars($_POST['description']));
    $url = !empty($_POST['url_img']) ? trim(htmlspecialchars($_POST['url_img'])) : "";
    $sexe = trim(htmlspecialchars($_POST['sexe']));

    // Validation des champs
    // first_name
    if (empty($first_name)) {
        $error['first_name'] = $errMsgRequire;
    } elseif (strlen($first_name) < 3 || strlen($first_name) > 50) {
        $error['first_name'] = "<span class='text-red-500'>Le prénom doit contenir entre 3 et 50 caractères</>";
    }
    // last_name
    if (empty($last_name)) {
        $error['last_name'] = $errMsgRequire;
    } elseif (strlen($last_name) < 2 || strlen($last_name) > 50) {
        $error['last_name'] = "<span class='text-red-500'>Le nom doit contenir entre 2 et 50 caractères</>";
    }
    // company_name
    if (empty($company_name)) {
        $error['company_name'] = $errMsgRequire;
    } elseif (strlen($company_name) < 3 || strlen($company_name) > 50) {
        $error['company_name'] = "<span class='text-red-500'>Le nom de l'entreprise doit contenir entre 3 et 50 caractères</>";
    }

    // year_of_birth
    // verifie que user a bien rempli le champs
    if (!empty($year)) {
        // verifie que l'age est un nombre entier positif
        if (!is_numeric($year)) {
            $error['age'] =
                "<span class='text-red-500'>Merci de rentrer une année de naissance correcte</span>";
        } elseif ($year <= 0) {
            $error['year_of_birth'] =
                "<span class='text-red-500'>Merci de rentrer une année supérieure à 0</span>";
        }
    } else {
        $error['year_of_birth'] = $errMsgRequire;
    }

    // description
    if (empty($description)) {
        $error['description'] = $errMsgRequire;
    } elseif (strlen($description) < 10 || strlen($description) > 300) {
        $error['description'] = "<span class='text-red-500'>La description doit contenir entre 10 et 300 caractères</>";
    }
    echo (count($error));

    // Si pas d'erreur, j'ajoute l'element en base
    if (count($error) == 0) {
        $values = array(
            "first_name" => $first_name,
            "last_name" => $last_name,
            "year_of_birth" => $year,
            "nationality" => $nationality,
            "company_name" => $company_name,
            "description" => $description,
            "url_img" => $url,
            "sexe" => $sexe,
        );
        include 'update.php';
    }
}
