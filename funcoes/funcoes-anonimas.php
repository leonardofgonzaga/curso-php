<?php

function test($callback){
    $callback();
}

test(function(){
    echo "Terminou" . "<br>";
});

//////////////////////////////////////////////

$fn = function($a) {
    var_dump($a);
};

$fn("Oi");

?>