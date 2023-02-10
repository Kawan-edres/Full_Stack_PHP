<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;
$br = '<br>';
// Arithmetic operations
echo $a + $b * $c . $br;
echo $a - $b . $br;
echo $a / $b . $br;
echo $a * $b . $br;
echo $a % $b . $br;
// Assignment with math operators
$a += $b;
echo $a . $br;
$a *= $b;
echo $a . $br;
$a /= $b;
echo $a . $br;
$a %= $b;
echo $a . $br;
// Increment operator
$k = 1;
echo $k++ . $br; //not
echo $k . $br;
echo ++$k . $br; //yes

// Decrement operator
$d = 1;
echo $d-- . $br; //not
echo $d . $br;
echo --$d . $br; //yes


// Number checking functions
is_float(1.24);
is_int(10);
is_double(1.1);
is_numeric("3.4");//true
is_numeric("3g.4");//false


// Conversion

$strNumber='12.24';
$number=floatval($strNumber);
var_dump($number);
$number=intval($strNumber);
// or we can say 

var_dump($number);

// Number functions
echo(pi()).$br; // returns 3.1415926535898
echo(min(0, 150, 30, 20, -8, -200)).$br;  // returns -200
echo(max(0, 150, 30, 20, -8, -200)).$br;  // returns 150
echo(pow(2,3)).$br;
echo(abs(-6.7)).$br;  // returns 6.7
echo(sqrt(64)).$br;  // returns 8
echo(round(0.60)).$br;  // returns 1
echo(round(0.49)).$br;  // returns 0
echo(floor(0.49)).$br;  // returns 0
echo(ceil(0.49)).$br;  // returns 0

// Formatting numbers
$formatedNumber=123456789.12345;
echo number_format($formatedNumber,2,',',' ').$br;

// https://www.php.net/manual/en/ref.math.php
