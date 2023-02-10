<?php

// $br = '<br>';
// // Create array
// $fruits = ['banana', 'Apple', 'orange'];

// // Print the whole array

// var_dump($fruits);
// // Get element by index
// echo $fruits[1] . $br;

// // Set element by index
// $fruits[0] = 'Peach';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Check if array has element at index 2
// isset($fruits[2]); //true
// isset($fruits[3]); //false

// // Append element
// $fruits[] = 'Mango';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Print the length of the array

// echo count($fruits) . $br;

// // Add element at the end of the array
// array_push($fruits, 'foo');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Remove element from the end of the array

// array_pop($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Add element at the beginning of the array
// array_unshift($fruits, 'bar');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Remove element from the beginning of the array
// array_shift($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Split the string into an array
// $string = "Kawan,Kawan,Kawan";
// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';


// // Combine array elements into string
// echo implode(" _ ", $fruits);

// // Check if element exist in the array
// echo '<pre>';
// var_dump(is_array($fruits));
// echo '</pre>';


// // Search element index in the array
// echo '<pre>';
// var_dump(array_search('kawan', $fruits));
// var_dump(array_search('apple', $fruits));
// echo '</pre>';


// // Merge two arrays
// $loser = ['loser', 'failiar', 'lost'];

// echo '<pre>';
// var_dump(array_merge($fruits, $loser));
// echo '</pre>';

// //spread operator

// echo '<pre>';
// echo 'spread'.$br;
// var_dump([...$fruits,...$loser]);
// echo '</pre>';


// // Sorting of array (Reverse order also)

// sort($fruits);
// echo'<pre>';
// var_dump($fruits);
// echo '</pre>';

// //reverse
// rsort($fruits);
// echo'<pre>';
// var_dump($fruits);
// echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$br='<br>';
$pesron=[
    'name'=>'Kawan',
    'surName'=>"Idrees",
     'age'=>30,
      'hobbies'=>['software','movie','pray','quran']

];
echo 'person array'.$br;
echo '<pre>';
print_r($pesron);
echo '</pre>';

// Get element by key
echo "***********$br";
echo $pesron['name'].$br;

// Set element by key
echo "***********$br";

$pesron['chanle']='Wsha Code';
echo '<pre>';
print_r($pesron);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4

// if(!isset($pesron['address'])){
//     $pesron['address']='Bnaslawa';
// }
// echo '<pre>';
// print_r($pesron);
// echo '</pre>';

//null safett
echo "***********$br";

echo 'nullsafety'.$br;
$pesron['address']=$pesron['address']??'unknown'; 
echo '<pre>';
print_r($pesron);
echo '</pre>';

// Check if array has specific key

// Print the keys of the array
echo "***********$br";

echo 'Printing Keys : '.$br;

echo '<pre>';
print_r(array_keys($pesron));
echo '</pre>';


// Print the values of the array
echo "***********$br";

echo 'Printing values : '.$br;

echo '<pre>';
print_r(array_values($pesron));
echo '</pre>';


// Sorting associative arrays by values, by keys
echo "***********$br";

echo 'sorting an array : '.$br;

ksort($pesron);
asort($pesron);

echo '<pre>';
print_r($pesron);
echo '</pre>';



// Two dimensional arrays
echo "***********$br";

echo 'two dimention  array : '.$br;

$todos =[
    ['title'=>'todo title 1','completed'],
    ['title'=>'todo title 2','completed'],

];
echo '<pre>';
print_r($todos);
echo '</pre>';