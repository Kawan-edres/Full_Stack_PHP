<?php


$br='<br>';
// Magic constants
echo __DIR__.$br;
echo __FILE__.$br;
echo __LINE__.$br;

// Create directory
// mkdir('test');

// Rename directory
// rename('test','test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
$files=scandir('../');   

echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt','This some content put by kawan'); //it works with '' not "" idk why :)

// file_get_contents from URL
$usersjson=file_get_contents("https://jsonplaceholder.typicode.com/posts");
// echo $usersjson; //not wraped 

$usersFormated=json_decode($usersjson,true); //true converts it to an assosiative array 

echo '<pre>';
var_dump($usersFormated);
echo '</pre>';

// file_exists
echo file_exists('sample.txt');
// is_dir
is_dir('test');//false  not exisit 


// https://www.php.net/manual/en/book.filesystem.php
// filemtime
// filesize
// disk_free_space
// file 