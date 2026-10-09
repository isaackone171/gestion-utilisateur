<?php

require_once(__DIR__ . '/database.php');

$getData = $_GET;

if (!isset($getData['id']) || !is_numeric($getData['id'])) {
    echo('L\'utilisateur n\'existe pas');
    return;
}

// On récupère les informations d'un utilisateur
$userStatement=$mysqlClient->prepare('SELECT * FROM users WHERE id = :id ');
$userStatement->execute([
    'id' => (int)$getData['id'],
]);
$user=$userStatement->fetch();

if (!$user) {
    echo('L\'utlisateur\'existe pas');
    return;
}
?>