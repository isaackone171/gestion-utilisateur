<?php
require_once(__DIR__ . '/database.php');

$sqlQuery = 'SELECT * FROM users';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();
$users = $usersStatement->fetchAll();

?>