<?php
$login = true;
$nome_usr = "Will";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="sobre.php">Sobre</a>
            <a href="produtos.php">Produtos</a>
            <a href="admin.php">Admin</a>
            <a href="form.php">Formulario</a>
            <a href="poo.php">POO</a>
            <a href="cachorro.php">cachorro</a>
            <?php if($login): ?> <!-- testa se o login é verdadeiro -->
            <a href="">Ola, <?php echo $nome_usr; ?><span class="material-symbols-outlined">
person
</span></a> <!--se sim exibe o nome do usuario eo icone person -->
<?php else: ?> <!-- senao -->
    <a href=""><span class="material-symbols-outlined">
login
</span></a> <!-- exibe o icone de login -->
<?php endif; ?> <!--encerra o if -->
        </nav>
    </header>