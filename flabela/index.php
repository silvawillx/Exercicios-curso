<?php 

// criando e testando conexao
try {
    $conn = new PDO("mysql:host=localhost;dbname=flabela", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexao feita com sucesso";
} catch (PDOException $e) {
    echo $e->getMessage();
}

// criando uma tabela
try {
    $conn = new PDO("mysql:host=localhost;dbname=flabela", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "create table if not exists pessoas (
        id_pessoa int primary key auto_increment, 
        nome varchar(255) not null, 
        idade int
    )";

    $conn->exec($sql);
    echo "Tabela criada com sucesso";
} catch (PDOException $e) {
    echo $e->getMessage();
}

//inserindo via php
/*try {
    $conn = new PDO("mysql:host=localhost;dbname=flabela", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into pessoas (nome, idade) values ('Will', 21)";
    $conn->exec($sql);
    echo "inserido com sucesso";
} catch (PDOException $e) {
    echo $e->getMessage();
}*/

// buscando dados via php 

try {
    $conn = new PDO("mysql:host=localhost;dbname=flabela", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from pessoas";
    $resultado = $conn->query($sql);
    //var_dump($resultado);
    $lista = $resultado->fetchAll();
    //var_dump($lista);

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <th>id</th>
        <th>nome</th>
        <th>idade</th>
        <th colspan="2">
            <a id="add" href="adicionar.php">adicionar</a>
        </th>
        <tr>
            <?php foreach($lista as $p): ?>
                <tr>
                    <td><?= $p['id_pessoa']?></td>
                    <td><?= $p['nome']?></td>
                    <td><?= $p['idade']?></td>
                    <td><a id="editar" href="editar.php?id=<?= $p['id_pessoa']?>">Editar</a></td>
                    <td><a id="deletar" href="deletar.php?id=<?= $p['id_pessoa']?>">Deletar</a></td>
                </tr>
                <?php endforeach; ?>
    </table>
</body>
</html>
