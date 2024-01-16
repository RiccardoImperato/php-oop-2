<?php

class Product
{
    public $name;
    public $price;

    function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }
}

class Category extends Product
{
    public $category;

    function __construct($_name, $_price, $_category)
    {
        parent::__construct($_name, $_price);
        $this->category = $_category;
    }
}

class Type extends Category
{
    public $type;

    function __construct($_name, $_price, $_category, $_type)
    {
        parent::__construct($_name, $_price, $_category);
        $this->type = $_type;
    }
}

$osso_smart = new Type('Osso smart', 10, 'Cane', 'Gioco');
$crocchette = new Type('Crocchette', 5,  'Gatto', 'Cibo');
$lettino = new Type('Lettino', 20, 'Gatto', 'Cuccia');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>
            <figure>
                <img src="https://www.cuccia-per-cani.com/wp-content/uploads/2018/12/31uaaHXJYGL.jpg" alt="">
            </figure>
            <h3><?php echo $osso_smart->name; ?></h3>
            <p>
                Categoria: <?php echo $osso_smart->category; ?>
            </p>
            </p>
            <p>
                Tipo: <?php echo $osso_smart->type; ?>
            </p>
            <p>
                Prezzo: <?php echo $osso_smart->price; ?> £
            </p>
        </li>
        <li>
            <figure>
                <img src="https://www.my-personaltrainer.it/2021/04/13/cibo-secco-per-il-gatto-orig.jpeg" alt="">
            </figure>
            <h3><?php echo $crocchette->name; ?></h3>
            <p>
                Categoria: <?php echo $crocchette->category; ?>
            </p>
            <p>
                Tipo: <?php echo $crocchette->type; ?>
            </p>
            <p>
                Prezzo: <?php echo $crocchette->price; ?> £
            </p>
        </li>
        <li>
            <figure>
                <img src="https://img.kwcdn.com/product/1e23310c6c/44d3d2f9-fa82-454f-bd9e-b0da5cbf9c39_800x800.jpeg?imageView2/2/w/800/q/70" alt="">
            </figure>
            <h3><?php echo $lettino->name; ?></h3>
            <p>
                Categoria: <?php echo $lettino->category; ?>
            </p>
            <p>
                Tipo: <?php echo $lettino->type; ?>
            </p>
            <p>
                Prezzo: <?php echo $lettino->price; ?> £
            </p>
        </li>
    </ul>
</body>

</html>