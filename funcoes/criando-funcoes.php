<?php 

function ola() {
	return "Olá, Mundo!<br>";
}

echo ola();
$frase = ola();

echo strlen($frase);

echo "<br>";

function salario() {
	return 946.00;
}

echo "José recebeu 3 salários: " . (salario()*3);

?>