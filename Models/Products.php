<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Price.php';

class Product
{
    use PriceTrait;

    private $image;
    private $name;
    private $category;
    public $type = 'Merchandise';

    function __construct($_image, $_name, $_price, Category $_category)
    {
        $this->setImage($_image);
        $this->setName($_name);
        $this->setCategory($_category);

        try {
            $this->setPrice($_price);
        } catch (Exception $error) {
            echo "Errore durante la creazione del prodotto:  " . $error->getMessage();
        }
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($_image)
    {
        $this->image = $_image;
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

    public function getType()
    {
        return get_class();
    }
}
