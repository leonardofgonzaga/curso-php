<?php

echo date("d/m/Y H:i:s");

echo "<br>";

echo time() . "<br>";

///////////////////////////////////////////////////

//$ts = strtotime("2001-09-011");
$ts = strtotime("+1 week");

echo date("l, d/m/Y", $ts);

?>