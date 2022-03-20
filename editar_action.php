<?php
require './config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');

if($id && $name && $email){

    $sql = $pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: index.php");
    exit;


}else{
    header("Location: editar.php");
    exit;
}
