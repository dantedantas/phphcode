<?php
header('Content-Type: text/html; charset=utf-8 http-equiv=Content-Language content=pt-br');

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

function dataLonga(int $mytime): string 
{
	
	return utf8_encode(ucfirst(strftime("%A, %d", $mytime)))." de ".utf8_encode(ucfirst(strftime("%B", $mytime)))." de ".utf8_encode(ucfirst(strftime("%Y - %I:%M:%S %p", $mytime)));
	
}
echo "TimeStamp: ".time();

echo "<br><br>";

$ts = strtotime('now');

echo "<br><br> $ts - ".dataLonga($ts);

$ts = strtotime('+1 day');

echo "<br><br> $ts - ".dataLonga($ts);

$ts = strtotime('+1 week');

echo "<br><br> $ts - ".dataLonga($ts);

$ts = strtotime('+2 weeks');

echo "<br><br> $ts - ".dataLonga($ts);

$ts = strtotime('+1 month');

echo "<br><br> $ts - ".dataLonga($ts);

echo "<br><br>";

echo dataLonga(1497954795);

?>