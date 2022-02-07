<?php

namespace zapaDEVe7n\WSH\AbstractClass;

use zapaDEVe7n\WSH\AbstractClass\InFace\InFace;

class AbstractClassChild extends AbstractClass implements InFace
{

	private $value;

	public function __construct($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function sayGoogle()
	{
		echo 'Google';
	}

}