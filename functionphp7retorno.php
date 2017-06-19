<?php

function soma(float ...$valores):float{
	return array_sum($valores);
}

echo var_dump(soma(2,2)).'<br>';
echo soma(20,30).'<br>';
echo soma(2.6,3.5).'<br>';
?>