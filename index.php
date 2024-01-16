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
