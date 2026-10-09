<?php
require_once(__DIR__ . '/database.php');


$postData = $_POST;

if (!isset($postData['id'])) {
    echo 'Il faut un identifiant valide pour supprimer un utilisateur.';
    return;
}

$id = $postData['id'];

$deleteUserStatement = $mysqlClient->prepare('DELETE FROM users WHERE id = :id');

$deleteUserStatement->execute([
    'id' => $id,
]);

header("Location: index.php");

?>