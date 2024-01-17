<?php
require_once __DIR__ . '/Products.php';

class Bed extends Product
{
    private $size;
    public $type = 'Bed';

    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */
    public function setSize($_size)
    {
        $this->size = $_size;
    }
}
