<?php

function soma(int ...$valores){
	return array_sum($valores);
}

echo soma(2,2).'<br>';
echo soma(20,30).'<br>';
echo soma(2.6,3.4).'<br>';
?>