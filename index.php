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
$collare_cane = new Product('https://www.perilcane.it/3189-large_default/collare-in-pelle-con-borchie-per-cani-medio-grandi.jpg', 'Collare', 5, $dog);
$collare_gatto = new Product('https://croci.net/wp-content/uploads/2023/02/Collare_per_gatto_Bobby_Safe_Blu.jpg', 'Collare', 5, $cat);

//Toy
$osso_smart = new Toy('https://www.cuccia-per-cani.com/wp-content/uploads/2018/12/31uaaHXJYGL.jpg', 'Osso smart', 15, $dog);
$osso_smart->setMaterial('Plastica');

// Food
$cibo_cane = new Food('https://www.razzedicani.net/wp-content/uploads/2023/08/crocchette-cani.jpg', 'Crocchette', 10, $dog);
$cibo_cane->setWeight(5);
$cibo_cane->setExpiration_date('01/2025');
$cibo_gatto = new Food('https://www.my-personaltrainer.it/2021/04/13/cibo-secco-per-il-gatto-orig.jpeg', 'Crocchette', 10, $cat);
$cibo_gatto->setWeight(2);
$cibo_gatto->setExpiration_date('10/2024');

//Bed
$cuccia = new Bed('https://img.kwcdn.com/product/1e23310c6c/44d3d2f9-fa82-454f-bd9e-b0da5cbf9c39_800x800.jpeg?imageView2/2/w/800/q/70', 'Cuccia', 20, $cat);
$cuccia->setSize('S');

// Products
$products = [
    $collare_cane,
    $collare_gatto,
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
                    <figure>
                        <img src="<?php echo $product->getImage() ?>" alt="<?php echo $product->getName() ?>">
                    </figure>
                    <div class="info">
                        <h3><?php echo $product->getName() ?></h3>
                        <div>
                            Categoria: <?php echo $product->getCategory()->getName() . " " . $product->getCategory()->getIcon()  ?>
                        </div>
                        <div>
                            Prezzo: <?php echo $product->getPrice() ?>
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