<?php

namespace zapaDEVe7n\WFMS\Product;

class ProductFull
{
    public $name;
    public $price;

    public $cpu;
    public $numPages;

    public function __construct($name, $price, $cpu = null, $numPages = null)
    {
        $this->name     = $name;
        $this->price    = $price;
        $this->cpu      = $cpu;
        $this->numPages = $numPages;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProduct( $type = 'notebook' )
    {
        $out = '<hr>';
        $out .= '<b>About ProductFull</b><br>';
        $out .= 'Name: ' .  $this->name . '<br>';
        $out .= 'Price: ' .  $this->price . '<br>';

        if($type == 'notebook') {
            $out .= 'CPU: ' . $this->cpu . '<br';
        } else {
            $out .= 'Number Pages: ' . $this->numPages . '<br';
        }

        return $out;
    }
}