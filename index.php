<?php
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Bed.php';

// Category
$dog = new Category('Cane', '<i class="fa-solid fa-dog"></i>');
$cat = new Category('Gatto', '<i class="fa-solid fa-cat"></i>');

// Product 
$collare = new Product('Collare', 5, $dog);

//Toy
$osso_smart = new Toy('Osso smart', 15, $dog);
$osso_smart->setMaterial('Plastica');

// Food
$cibo_cane = new Food('Crocchette', 10, $dog);
$cibo_cane->setWeight(5);
$cibo_cane->setExpiration_date('01/2025');
$cibo_gatto = new Food('Crocchette', 10, $cat);
$cibo_gatto->setWeight(2);
$cibo_gatto->setExpiration_date('10/2024');

//Bed
$cuccia = new Bed('Cuccia', 20, $cat);
$cuccia->setSize('S');

// Products
$products = [
    $collare,
    $osso_smart,
    $cibo_cane,
    $cibo_gatto,
    $cuccia
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Petshop</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <h1>PHP Petshop</h1>
        <ul>
            <?php foreach ($products as $product) : ?>
                <li class="card">
                    <div class="info">
                        <h3><?php echo $product->getName() ?></h3>
                        <div>
                            <?php echo $product->getCategory()->getName() . " " . $product->getCategory()->getIcon()  ?>
                        </div>
                        <div>
                            <?php echo $product->getPrice() ?>
                            <i class="fa-solid fa-euro-sign"></i>
                        </div>
                        <div>
                            <?php echo $product->type ?>
                        </div>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>