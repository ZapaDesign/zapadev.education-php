<?php

namespace zapaDEVe7n\WFMS\ProductAbstract;

abstract class ProductAbstract
{
    public $name;
    public $price;


    public function __construct(string $name, int $price)
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


    public function getName(): string
    {
        return $this->name;
    }


    public function getPrice(): int
    {
        return $this->price;
    }


}