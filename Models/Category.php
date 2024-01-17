<?php
require_once __DIR__ . '/Products.php';

class Category
{
    private $name;
    private $icon;


    function __construct($_name, $_icon)
    {
        $this->setName($_name);
        $this->setIcon($_icon);
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
     * Get the value of icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set the value of icon
     *
     * @return  self
     */
    public function setIcon($_icon)
    {
        $this->icon = $_icon;
    }
}
