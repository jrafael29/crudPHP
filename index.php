<?php
require './view/header.php';
require './config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM users");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll( pdo::FETCH_ASSOC );
}

?>

<h1>Usuarios cadastrados</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <table class="table table-sm table-bordered  table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
        </tr>
        <?php foreach($lista as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td> <a href="./visualizar.php?id=<?=$user['id']?>"><?= $user['name'] ?></a></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="./editar.php?id=<?=$user['id']?>">Editar</a>
                    <a href="./excluir.php?id=<?=$user['id']?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>