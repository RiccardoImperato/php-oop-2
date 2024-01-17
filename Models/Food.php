<?php
require_once __DIR__ . '/Products.php';

class Food extends Product
{
    private $weight;
    private $expiration_date;
    public $type = 'Food';

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */
    public function setWeight($_weight)
    {
        $this->weight = $_weight;
    }

    /**
     * Get the value of expiration_date
     */
    public function getExpiration_date()
    {
        return $this->expiration_date;
    }

    /**
     * Set the value of expiration_date
     *
     * @return  self
     */
    public function setExpiration_date($_expiration_date)
    {
        $this->expiration_date = $_expiration_date;
    }
}
