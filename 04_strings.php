<?php

// Create simple string

$string="    hello World  ";

$br="<br>"; 



// String concatenation
 //Asana

// String functions
echo "1- ". strlen($string) .$br. PHP_EOL;
echo "2- ". trim($string) .$br;
echo "3- ". ltrim($string) .$br;
echo "4- ". rtrim($string) .$br;
echo "5- ". str_word_count($string) .$br;
echo "6- ". str_word_count($string) .$br;
echo "7- ". strrev($string) .$br;
echo "8- ". strtoupper($string) .$br;
echo "9- ". strtolower($string) .$br;
echo "10- ". ucfirst('hello') .$br;
echo "11- ". lcfirst('hello') .$br;
echo "12- ". ucwords($string) .$br;
echo "13- ". strpos($string,'world') .$br;
echo "14- ". stripos($string,'world') .$br;
echo "15- ". substr($string,1,8) .$br;
echo "16- ". str_replace('World',"PHP",$string) .$br;
echo "17- ". str_ireplace('world',"PHP",$string) .$br;

// Multiline text and line breaks
$longText="
Hello, my name is Kawan
I am 22 years  old,
I love my God
";
echo $longText.$br;

echo nl2br($longText).$br;


// Multiline text and reserve html tags

$longText="
Hello, my name is <b>Kawan</b>
I am <b>22</b> years  old,
I love my God
";

echo $longText.$br;
echo nl2br($longText).$br;
echo htmlentities($longText).$br;

// https://www.php.net/manual/en/ref.strings.php