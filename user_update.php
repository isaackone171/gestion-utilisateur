<?php

require_once(__DIR__ . '/database.php');

$postData = $_POST;

if (
    empty($postData['id'])
    || empty($postData['last_name'])
    || empty($postData['first_name'])
    || empty($postData['department']) 
    || empty($postData['phone_number'])
    || empty($postData['email'])
    || trim(strip_tags($postData['last_name'])) === ''
    || trim(strip_tags($postData['first_name'])) === ''
    || trim(strip_tags($postData['department'])) === ''
    || trim(strip_tags($postData['phone_number'])) === ''
    || trim(strip_tags($postData['email'])) === ''
) {
    echo 'il faut remplir tous les champs du formulaire.';
    return;
}

$id = trim(strip_tags($postData['id']));
$nom = trim(strip_tags($postData['last_name']));
$prenom = trim(strip_tags($postData['first_name']));
$departement = trim(strip_tags($postData['department']));
$contact = trim(strip_tags($postData['phone_number']));
$email = trim(strip_tags($postData['email']));

$insertUser= $mysqlClient->prepare('UPDATE users 
SET last_name = :last_name, first_name = :first_name, department = :department, phone_number = :phone_number,email = :email WHERE id = :id');

$insertUser->execute([
    'id'=>$id,
    'last_name' => $nom,
    'first_name' => $prenom,
    'department' =>$departement,
    'phone_number' => $contact,
    'email'=>$email,
    ]);

header("Location: index.php");
exit;
?>    
