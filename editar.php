<?php
require './view/header.php';
require './config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    if($sql->rowCount() > 0){
        $info = $sql->fetch(pdo::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}



?>

<form action="editar_action.php" method="post">

    <input type="hidden" name="id" value="<?= $info['id']?>">
    <label>
        Nome: <br>
        <input type="text" name="name" value="<?= $info['name']?>">
    </label>
    <br>
    <label>
        Email: <br>
        <input type="email" name="email" value="<?= $info['email']?>">
    </label>
    <br><br>
    <input type="submit" value="Atualizar">

</form>