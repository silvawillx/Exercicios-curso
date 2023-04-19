<?php
require_once "cabecalho.php";
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $texto = $_GET ['texto'];
}
?>

voce digitou: <?= $texto ?>

<form action="form.php" method="get">
    <label for="texto">Texto</label>
    <input type="text" name="texto" id="texto">

    <input type="submit" value="Enviar">
</form>


<?php 
require_once "rodape.php";
?>