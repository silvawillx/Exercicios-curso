<?php
require_once "cabecalho.php";
require_once "carro.php";
require_once "cachorro.php";


$carro = new Carro(); // instanciando um objeto dessa classe
echo $carro->cor; // acessando uma proriedade do objeto
echo "<br>";
var_dump($carro->cor); // mais detalhes sobre a variavel
echo "<br>";
$carro->buzinar(); // chamando metodo do objeto
echo "<br>";
$carro->cor = "preto"; // atribuindo um valor para a propriedade 
echo $carro->cor; // acessando novamente para ver o valor atualizado
echo "<br>";
echo "-------";
echo "<br>";
$carro2 = new Carro('vermelho', 2); // instanciando um novo objeto carro dessa vez atraves do construtor
echo $carro2->cor;
echo "<br>";
echo $carro2->qtd_portas;
echo "-------";
echo "<br>";
/* $carro->modelo = 'bmw'; // tentando definir uma propriedade privada
echo $carro->modelo; // tentando acessar uma propriedade privada */
echo $carro->getModelo(); // acessando propriedade via getter
echo "<br>";
$carro->setModelo("bmw"); // definindo valor via setter
echo $carro->getModelo();
echo "<br>";

$cachorro = new cachorro();
$cachorro->fazBarulho(); 


?>
<?php 
require_once "rodape.php";
?>