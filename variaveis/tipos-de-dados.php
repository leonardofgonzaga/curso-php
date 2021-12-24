<?php 

// Atributos simples

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1998;
$salario = 5500.99;
$bloqueado = false;

/////////////////////////////////////////////////

// Atributos compostos

$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2]; 

$nascimento = new DateTime();

//var_dump($nascimento);

/////////////////////////////////////////////////

// Atributos especiais

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

$nulo = NULL;
$vazio = "";

?>