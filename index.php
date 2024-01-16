<?php
require_once __DIR__ . '/Models/Products.php';
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
            <li class="card">
                <figure>
                    <img src="https://www.cuccia-per-cani.com/wp-content/uploads/2018/12/31uaaHXJYGL.jpg" alt="Osso Smart">
                </figure>
                <div class="info">
                    <h3><?php echo $osso_smart->name; ?></h3>
                    <div>
                        Categoria: <?php echo $osso_smart->get_icon() ?>
                    </div>
                    <div>
                        Tipo: <?php echo $osso_smart->type; ?>
                    </div>
                    <div>
                        Prezzo: <?php echo $osso_smart->price; ?>
                        <i class="fa-solid fa-euro-sign"></i>
                    </div>
                </div>
            </li>
            <li class="card">
                <figure>
                    <img src="https://www.my-personaltrainer.it/2021/04/13/cibo-secco-per-il-gatto-orig.jpeg" alt="Crocchette">
                </figure>
                <div class="info">
                    <h3><?php echo $crocchette->name; ?></h3>
                    <div>
                        Categoria: <?php echo $crocchette->get_icon() ?>
                    </div>
                    <div>
                        Tipo: <?php echo $crocchette->type; ?>
                    </div>
                    <div>
                        Prezzo: <?php echo $crocchette->price; ?>
                        <i class="fa-solid fa-euro-sign"></i>
                    </div>
                </div>
            </li>
            <li class="card">
                <figure>
                    <img src="https://img.kwcdn.com/product/1e23310c6c/44d3d2f9-fa82-454f-bd9e-b0da5cbf9c39_800x800.jpeg?imageView2/2/w/800/q/70" alt="Lettino">
                </figure>
                <div class="info">
                    <h3><?php echo $lettino->name; ?></h3>
                    <div>
                        Categoria: <?php echo $lettino->get_icon() ?>
                    </div>
                    <div>
                        Tipo: <?php echo $lettino->type; ?>
                    </div>
                    <div>
                        Prezzo: <?php echo $lettino->price; ?>
                        <i class="fa-solid fa-euro-sign"></i>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</body>

</html>