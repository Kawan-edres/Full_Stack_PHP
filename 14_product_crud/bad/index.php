<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$search = $_GET['search'] ?? '';


if ($search) {
    $statment = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY  create_date DESC');
    $statment->bindValue(':title', "%$search%");
} else {

    $statment = $pdo->prepare('SELECT * FROM products ORDER BY  create_date DESC');
}

$statment->execute();
$products = $statment->fetchAll(PDO::FETCH_ASSOC); // how do you wanna get the data 




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
        <a href="create.php" class="btn btn-success">Create Product</a>
    </p>

    <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search for Products" name="search" value="<?php echo $search ?> ">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Create_Date</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($products as $i => $product) : ?>
                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td>
                        <img class="img" src="<?php echo $product['image'] ?>">
                    </td>
                    <td><?php echo $product["title"] ?></td>
                    <td><?php echo $product["price"] ?></td>
                    <td><?php echo $product["create_date"] ?></td>
                    <td>

                        <a href="update.php?id=<?php echo $product['id'] ?>" type="button" class="btn btn-sm btn-outline-primary">Edit</a>

                        <form style="display: inline-block;" method="post" action="delete.php">
                            <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>

                    </td>

                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>



</body>

</html>