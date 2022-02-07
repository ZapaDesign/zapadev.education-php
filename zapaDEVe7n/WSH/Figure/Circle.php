<?php

namespace zapaDEVe7n\WSH\Figure;

use zapaDEVe7n\WSH\Figure\InFace\ICalculateSquare;

class Circle implements ICalculateSquare
{
	const PI = 3.1416;

	private $r;

	public function __construct(float $r)
	{
		$this->r = $r;
	}

	public function calculateSquare(): float
	{
		return self::PI * ($this->r ** 2);
	}
}