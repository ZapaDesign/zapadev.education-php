<?php

namespace zapaDEVe7n\WSH\Figure;

class Rectangle {
	private $x;
	private $y;

	public function __construct(float $x, float $y)
	{
		$this->x = $x;
		$this->y = $y;
	}

	public function calculateSquare(): float
	{
		return $this->x * $this->y;
	}
}