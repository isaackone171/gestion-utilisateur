<?php

try {
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=ges_users;charset=utf8',
        'root',
        ''
    );

    $mysqlClient->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
    die( "Erreur : " . $e->getMessage());
}
?>