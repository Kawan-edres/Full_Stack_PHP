<?php

/** @var $pdo \PDO */
require_once '../../database.php';
require_once "../../functions.php";


$title = $price = $description = "";
$errors = [];
$product = [
    'image' => ''
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  

    if (empty($errors)) {
       

       require_once '../../validate_product.php';
        $statement = $pdo->prepare("INSERT INTO products (title,image,description,price,create_date)
              VALUES(:title,:image,:description,:price,:date)
        ");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));

        $statement->execute();
        header('Location:index.php');
    }
}



?>

<?php include_once '../../views/partials/header.php' ?>

<h1>Creata New Product </h1>
<p>
    <a href="index.php" class="btn btn-secondary">Back to products</a>
</p>
<p>
    <a href="create.php" class="btn btn-success">Create New Product</a>
</p>


<?php include_once '../../views/products/form.php' ?>



</body>

</html>