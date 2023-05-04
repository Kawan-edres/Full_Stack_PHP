<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
//in case of error throw it 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




$id = $_POST['id'] ?? null;
if(!$id){
    header('Location:index.php');
    exit;
}

$statement=$pdo->prepare('DELETE FROM products WHERE id=:id');//undefind
$statement->bindValue(':id',$id);//$id product war agre 
$statement->execute();


header('Location:index.php');
