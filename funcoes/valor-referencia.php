<?php 

$a = 10; 

function trocaValor($b) {

	$b += 50;
	return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";

////////////////////////////////////////////////////////////

$pessoa = array (
	'nome' => 'João',
	'idade' => 20
);

foreach ($pessoa as $value) {
	
	if (gettype($value) === 'integer') $value += 10;

	echo $value . "<br>";
}

print_r($pessoa);

?>