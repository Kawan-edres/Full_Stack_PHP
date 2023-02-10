<?php
 $br='<br>';
 echo '<b>Conditionals<b>'.$br;

$age = 20;
$salary = 300000;

// Sample if
if($age===20){
    echo '1'.$br;
    
}

// Without circle braces
echo "***********$br";
if($age===21)echo '1'.$br;


// Sample if-else
echo "***********$br";
if($age===21)echo '1'.$br;
else echo  '0'.$br;


// Difference between == and ===
//== dont care about tyeps 
//=== cares about types at all

// if AND
echo "***********$br";

if($age===20 && $salary===300000){
    echo "Do somthing$br";
}
else{
    echo "stay in your place $br";


}

// if OR
echo "***********$br";

if($age===20 || $salary===300000){
    echo "Do somthing$br";
}
else{
    echo "stay in your place $br";


}

// Ternary if
echo "***********$br";

    echo $age < 22 ? "young" : "old";
    echo $br;

// Short ternary
$myage=$age?:18;
var_dump($myage);
echo $br;


// Null coalescing operator

$myName=isset($name) ? $name :"Kawan";
$myName =$name ?? 'Jhon';

// switch
$userRole='admin';//editor,user,admin

switch($userRole){
    case 'admin':
        echo 'admin';
        break;
    case 'user':
        echo 'user';
        break;
    case 'editor':
        echo 'editor';
        break;
        default :
        echo 'Invalid role';
        break;

}
