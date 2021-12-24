<?php 

$nome = "Galucio";

function teste() {
	global $nome;
	echo $nome;
}

function teste2() {
	$nome = "João";
	echo $nome;
}

teste();
teste2();

?>