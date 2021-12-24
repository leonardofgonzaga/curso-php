<?php

$a = NULL;
$b = 8;
$c = 10;

var_dump($a > $b);
echo "<br>";

var_dump($a < $b);
echo "<br>";

var_dump($a == $b);
echo "<br>";

var_dump($a === $b);
echo "<br>";

var_dump($a != $b);
echo "<br>";

var_dump($a !== $b);
echo "<br>";

var_dump($a <=> $b);
echo "<br>";

echo $a ?? $b ?? $c;
?>