<?php

function test($callback){	
	
	// Rotina lenta
	
	$callback();
	
}

test(function(){
   echo "Terminou!";
	});

echo '<br><br>';

$fn = function($vl){
   var_dump($vl);	
};

$fn('Oi');
?>