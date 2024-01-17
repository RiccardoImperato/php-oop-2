<?php
require_once __DIR__ . '/Products.php';

class Toy extends Product
{
    private $material;
    private $age;
    public $type = 'Toy';


    /**
     * Get the value of material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */
    public function setMaterial($_material)
    {
        $this->material = $_material;
    }

    /**
     * Get the value of size
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */
    public function setAge($_age)
    {
        $this->age = $_age;
    }
}
