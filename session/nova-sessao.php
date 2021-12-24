<?php 

session_id('34o0f93ual9pu1tkf74fivg6bbarray');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);


?>