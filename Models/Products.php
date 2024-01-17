<?php
require_once __DIR__ . '/Category.php';

class Product
{
    private $name;
    private $price;
    private $category;
    public $type = '';

    function __construct($_name, $_price, Category $_category)
    {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategory($_category);
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($_name)
    {
        $this->name = $_name;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */
    public function setCategory($_category)
    {
        $this->category = $_category;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($_price)
    {
        $this->price = $_price;
    }

    public function getType()
    {
        return get_class();
    }
}
