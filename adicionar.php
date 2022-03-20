<?php
require './view/header.php';

?>

<form action="adicionar_action.php" method="post">
    <label>
        Nome: <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Email: <br>
        <input type="email" name="email">
    </label>
    <br><br>
    <input type="submit" value="Adicionar">

</form>