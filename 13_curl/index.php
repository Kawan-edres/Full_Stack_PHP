<?php


$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

$resource = curl_init($url);
curl_setopt($resource,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($resource);

curl_close($resource);
$statusCode=curl_getinfo($resource,CURLINFO_HTTP_CODE);//get status
echo "status code: ".$statusCode;

echo '<pre>';
var_dump($result);
echo '</pre>';
// Get response status code

// set_opt_array

// Post request

$user=[
    'name'=>"kawan idress",
    'user'=>'kawan',
    'email'=>'kawanedres@211@gmail.com',
];

curl_setopt_array($resource,[

    CURLOPT_URL=>$url,
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_POST=>true,
    CURLOPT_HTTPHEADER=>['content-type:application/json'],
    CURLOPT_POSTFIELDS=>json_encode($user)


]);

$result =curl_exec( $resource);
curl_close($resource);
echo $result;