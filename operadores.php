<?php
  $a = 10;

  $b = 3;

  $c = 10;

  $d = NULL;

  $e = NULL;

  $f = 5.0;

  $g = 5;

  echo "$a/$b<br>";
  var_dump($a/$b);

echo "<br>Spaceship $a<=>$b<br>";
var_dump($a<=>$b);

echo "<br>Spaceship $a<=>$c<br>";
var_dump($a<=>$c);

echo "<br>Spaceship $b<=>$c<br>";
var_dump($b<=>$c);

echo "<br> $d ?? $b ?? $a<br>";
var_dump($d ?? $b ?? $a);

echo "<br> $a == $b<br>";
var_dump($a == $b);

echo "<br> $a === $b<br>";
var_dump($a === $b);

echo "<br> $g == $f<br>";
var_dump($g == $f);

echo "<br> $g === $f<br>";
var_dump($g === $f);

$a = 2;
echo "<br>" . ($a == 1 ? 'one' :
                       ($a == 2 ? 'two' :
                                          ($a == 3 ? 'three' :
                                                               ($a == 4 ? 'four' : 'other') ) ) );
echo "\n";

/*
of course this should be clear, but i think it has to be mentioned espacially:

AND is not the same like &&

for example:

<?php $a && $b || $c; ?>
is not the same like
<?php $a AND $b || $c; ?>

the first thing is
(a and b) or c

the second
a and (b or c)

'cause || has got a higher priority than and, but less than &&

of course, using always [ && and || ] or [ AND and OR ] would be okay, but than you should at least respect the following:

<?php $a = $b && $c; ?>
<?php $a = $b AND $c; ?>

the first code will set $a to the result of the comparison $b with $c, both have to be true, while the second code line will set $a like $b and THAN - after that - compare the success of this with the value of $c

--

Note that in php the ternary operator ?: has a left associativity unlike in C and C++ where it has right associativity.

You cannot write code like this (as you may have accustomed to in C/C++):

<?php
$a = 2;
echo (
    $a == 1 ? 'one' :
    $a == 2 ? 'two' :
    $a == 3 ? 'three' :
    $a == 4 ? 'four' : 'other');
echo "\n";
// prints 'four'
?>

You need to add brackets to get the results you want:

<?php
$a = 2;

echo ($a == 1 ? 'one' :
        ($a == 2 ? 'two' :
        ($a == 3 ? 'three' :
        ($a == 4 ? 'four' : 'other') ) ) );
echo "\n";
//prints 'two'


*/
?>