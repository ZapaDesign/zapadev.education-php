<?php

namespace zapaDEVe7n\WFMS\Product;

class Product
{
    public $name;
    public $price;


    public function __construct($name, $price)
    {
        $this->name  = $name;
        $this->price = $price;
    }


    public function getProduct()
    {
        $out = '<hr>';
        $out .= '<b>About Product</b><br>';
        $out .= "Name: {$this->name}<br>";
        $out .= "Price: {$this->price} <br>";

        return $out;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }


}