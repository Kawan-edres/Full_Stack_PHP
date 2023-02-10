<?php

$br='<br>';
$counter=0;
// while Loop with $counter
//  $counter=0;
// while($counter<10){
//     echo $counter.$br;
//     $counter++;

// }

// do - while

// do{
//     echo $counter.$br;  
//     $counter++;
// }while($counter<10);

// for

// for($i=0 ; $i<10 ; $i++){
//     echo $i.$br;
// }


// foreach
// $foods=["Banna","Applae","mango"];
// foreach($foods as $i=> $food ){
//     echo $i."-".$food .$br;
// }


// Iterate Over associative array.
$pesron=[
    'name'=>'Kawan',
    'surName'=>"Idrees",
     'age'=>30,
      'hobbies'=>['software','movie','pray','quran']

];
foreach ($pesron as $key => $value){
    if(is_array($value)){
        echo $key . ' '.implode(',',$value) .$br;

        
    }
    else{

        echo $key . ' '. $value .$br;   
    }
}