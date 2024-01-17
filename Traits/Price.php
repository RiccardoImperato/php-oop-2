<?php

trait PriceTrait
{
    protected $price;

    public function setPrice($_price)
    {
        if (!is_int($_price)) {
            throw new Exception("Il prezzo deve essere un numero");
        }
        $this->price = $_price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
