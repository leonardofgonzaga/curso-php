<?php

$nome = "joao rangel";

// Tudo maiúscula 
$nome = strtoupper($nome);

echo $nome;

// Tudo minúscula
$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";

// Primeira letra maiúscula
echo ucfirst($nome);

echo "<br>";

// Primeira letra de cada palavra maiúscula
echo ucwords($nome);

$empresa = "Hcode";

// Substituir
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo "<br>";

echo $empresa;

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

echo "<br>";

var_dump($texto);

$texto2= substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);
?>