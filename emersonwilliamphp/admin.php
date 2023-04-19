<?php
require_once "cabecalho.php";

$logado = true;
if(!$logado){ // verifica se esta logado
    header("Location: index.php"); // usamos a funcao header para redireciona
}
?>
se vc esta aqui vc esta logado
<?php
require_once "rodape.php";
?>