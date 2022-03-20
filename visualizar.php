<?php
require './view/header.php';
require './config.php';

$id = filter_input(INPUT_GET, 'id');
$usuario = [];
if($id){
    $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    if($sql->rowCount() > 0){
        $usuario = $sql->fetch(pdo::FETCH_ASSOC);
    }    
}else{
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="area">
        <h1>Perfil</h1>
        <p> <b>Nome: </b><?= $usuario['name'] ?> </p>

        <p> <b>E-mail:</b> <?= $usuario['email'] ?> </p>
    </div>

</body>
</html>
