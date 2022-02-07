<?php

namespace zapaDEVe7n\WFMS\ProductInterface;

class BookProductInterface extends ProductInterface
{
	public $numPages;

	public function __construct(string $name, int $price, string $numPages)
	{
		parent::__construct($name, $price);
		$this->numPages = $numPages;
	}

	public function getProduct()
	{
		$out = parent::getProduct();
		$out .= "Number of pages: {$this->numPages}<br>";

		return $out;
	}

	public function getCpu()
	{
		return $this->numPages;
	}
}