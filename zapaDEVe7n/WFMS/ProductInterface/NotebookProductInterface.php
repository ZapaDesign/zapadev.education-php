<?php

namespace zapaDEVe7n\WFMS\ProductInterface;

use zapaDEVe7n\WFMS\ProductInterface\Interfaces\IGadget;

class NotebookProductInterface extends ProductInterface implements IGadget
{
    public $cpu;

    public function __construct(string $name, int $price, string $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "CPU: {$this->cpu}<br>";

        return $out;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getCase()
    {

    }
}