<?php

// Function which prints "Hello I am Zura"
// function greet(){
//     $br='<br>';
//     echo "Hello I am Kawan $br ";
// }

// greet();
// greet();
// greet();

// Function with argument

// function greet($name){
//     $br='<br>';
//     return  "Hello I am $name $br ";
// }

// echo greet('kawan');
// echo greet('kawan');
// echo greet('kawan');



// Create sum of two functions
// function sum($a,$b){
//     return $a+$b;
// }

// echo sum(1,1);
// Create function to sum all numbers using ...$nums

// function sum(...$nums){
//     $s=0;
//     foreach($nums as $num){

//         $s+=$num;
//     }
//     return $s;
    
// }
//  echo sum(1,2,3,4,5,6);

// Arrow functions


function sum(...$nums){
    return array_reduce($nums,fn($carry,$n)=>  $carry+$n );
}
 echo sum(1,2,3,4,5,6);
