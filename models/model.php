<?php
// récupère la connexion à la BDD
require_once 'database.php';
include_once 'helpers/functions.php';
// stocke la connexion dans $pdo
$pdo = pdo();
/**
 * Get all items in DB
 */
function getAll($table, $order = "")
{
    global $pdo;
    // 1 - Stock la requête qui sélectionne tout dans ma DB
    $sql = "SELECT * FROM $table";
    if ($order) {
        $sql .= " ORDER BY " . $order;
    }
    // 2 - Prépare la requête
    $query = $pdo->prepare($sql);
    // 3 - Éxécute la requête
    $query->execute();
    // 4 - Stocke le résultat dans une variable
    return $query->fetchAll();
}

/**
 * Get the id of item
 *
 * return int
 */
function getId()
{
    // 1- Récupère le bon id du goat
    if (!empty($_GET['id']) && isset($_GET['id']) && is_numeric($_GET['id'])) {
        // On nettoie l'id
        $id = cleanInput($_GET['id']);

    } else {
        // redirection quand l'id est invalide
        // debug_array($_GET);
        $_SESSION['error'] = 'ID invalide';
        header('Location: list-goat.php');
    }
    return $id;
}

/**
 * get a single item
 *
 * return array
 */
function get($table)
{
    global $pdo;
    $id = getId();
    // Faire la requête
    $sql = "SELECT * FROM $table WHERE id= :id";
    // Prépare la requête
    $query = $pdo->prepare($sql);
    // Associe la valeur à un paramêtre
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    // Execute ma requête
    $query->execute();
    // Stocke l'étudiant dans une variable
    $item = $query->fetch();

    // Pas de goat: redirection
    if (!$item) {
        $_SESSION['error'] = "Ce goat n'existe pas";
        header('Location: list-goat.php');
    }
    return $item;
}

function delete($table)
{
    global $pdo;
    $pdo = pdo();
    // On nettoie l'id
    $id = getId();
    // Faire la requête
    $sql = "DELETE FROM $table WHERE id= :id";
    // Prépare la requête
    $query = $pdo->prepare($sql);
    // Associe la valeur à un paramêtre
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    // Execute ma requête
    $query->execute();
    $_SESSION['success'] = 'Goat supprimé avec succès';
    header('Location: list-goat.php');

}

function add($table, $values)
{
    global $pdo;
    $pdo = pdo();
    debug_array($values);
    // Faire la requête
    $sql = "INSERT INTO $table (`id`, `first_name`, `last_name`, `year_of_birth`, `nationality`, `company_name`, `description`, `url_img`, `sexe`) VALUES (NULL, '$values[first_name]', '$values[last_name]', '$values[year_of_birth]', '$values[nationality]', '$values[company_name]', '$values[description]', '$values[url_img]', '$values[sexe]');";
    // Prépare la requête
    $query = $pdo->prepare($sql);
    // Execute ma requête
    $query->execute();
    $_SESSION['success'] = 'Goat ajouté avec succès';
    header('Location: list-goat.php');

}