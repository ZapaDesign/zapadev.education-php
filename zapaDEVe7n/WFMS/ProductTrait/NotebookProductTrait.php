<?php

namespace zapaDEVe7n\WFMS\ProductTrait;

use zapaDEVe7n\WFMS\ProductTrait\Traits\TColor;

class NotebookProductTrait extends ProductTrait
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

    use TColor;
}