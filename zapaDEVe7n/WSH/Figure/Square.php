<?php

namespace zapaDEVe7n\WSH\Figure;

use zapaDEVe7n\WSH\Figure\InFace\ICalculateSquare;

class Square implements ICalculateSquare {
	private $x;

	public function __construct(float $x)
	{
		$this->x = $x;
	}

	public function calculateSquare(): float
	{
		return $this->x ** 2;
	}
}