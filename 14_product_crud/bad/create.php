<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
//in case of error throw it 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';



require_once './functions.php';



$title = $price = $description = "";
$errors = [];
if (isset($_POST['submit'])) {


    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    if (!$title) {
        $errors[] = "title is required";
    }
    if (!$price) {
        $errors[] = "price is required";
    }


    if (!is_dir('images')) {
        mkdir('images');
    }

    if (empty($errors)) {
        $image = $_FILES['image'] ?? null;
        $imagePath='';
        if ($image && $image['tmp_name']) {
            $imagePath = 'images/'. randomString(8) . '/'. $image['name'];
            mkdir(dirname($imagePath));
            
            move_uploaded_file($image['tmp_name'], $imagePath);
        }
        // exit;


        $statement = $pdo->prepare("INSERT INTO products (title,image,description,price,create_date)
              VALUES(:title,:image,:description,:price,:date)
        ");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);

        $statement->execute();
        header('Location:index.php');
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Product Crud</title>
</head>

<body>
    <h1>Product Crud</h1>

    <p>
        <a href="index.php" class="btn btn-success">Back to Home</a>
    </p>

    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) :  ?>
                <div><?php echo $error ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="create.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Product Image</label>
            <input type="file" class="form-control" name="image">
        </div><br>

        <div class="form-group">
            <label>Product title</label>
            <input type="text" class="form-control" value="<?php echo $title ?>" name="title"  placeholder="Ente Prodcut title">
        </div><br>

        <div class="form-group">
            <label>Product description</label>
            <textarea class="form-control" name="description" value="<?php echo $description ?>" placeholder="Ente Prodcut description"></textarea>
        </div><br>

        <div class="form-group">
            <label>Product Price</label>
            <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>" placeholder="Ente Prodcut price">
        </div><br>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>



</body>

</html>