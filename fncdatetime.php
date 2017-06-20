<?php
// Instantiate a DateTime with microseconds.
$d = new DateTime('2011-01-01T15:03:01.012345Z');

// Output the microseconds.
echo $d->format('u'); // 012345
echo "<hr>";
// Output the date with microseconds.
echo $d->format('Y-m-d \TH:i:s.u'); // 2011-01-01T15:03:01.012345

echo "<hr>";


$d = new DateTime();
$periodo = new DateInterval("P15D");
echo $d->format('Y-m-d \TH:i:s.u');

echo "<hr>";

$d->add($periodo);

echo $d->format('Y-m-d \TH:i:s.u');

?>