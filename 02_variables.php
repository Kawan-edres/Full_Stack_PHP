<?php

// What is a variable

// Variable types
/*String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

// Declare variables
$name='kawan';
$age=22;
$isMale=true;
$height=1.85;
$salary=null;
$br='<br>';


// Print the variables. Explain what is concatenation

echo $name.$br;
echo $age.$br;
echo $isMale.$br;
echo $height.$br;
echo $salary.$br;

// Print types of the variables

echo gettype($name).$br;
echo gettype($age).$br;
echo gettype($isMale).$br;
echo gettype($height).$br;
echo gettype($salary).$br;

// Print the whole variable

var_dump($name,$age,$isMale,$height,$salary);

// Change the value of the variable
echo $br;
$name=false;

// Print type of the variable
echo gettype($name).$br;


// Variable checking functions
is_string($name);
is_int($age);
is_bool($isMale);
is_double($height);


// Check if variable is defined

isset($name);
isset($address);//false

// Constants
define('Pi',3.14);
echo Pi;

// Using PHP built-in constants
echo SORT_ASC.$br;
echo PHP_INT_MAX.$br;
