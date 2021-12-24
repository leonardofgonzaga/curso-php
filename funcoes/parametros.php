<?php 

function ola($texto = "Mundo", $periodo = "Bom dia") {
	return "Olá, $texto! $periodo! <br>";
}

echo ola("Mundo", "Bom dia");
echo ola("", "Boa noite");
echo ola("Leonardo", "Boa tarde");
echo ola("Miguelly", "Boa noite");

function ola2() {

	$argumentos = func_get_args();
	return $argumentos;

}

var_dump(ola2("Bom dia", 10));

?>