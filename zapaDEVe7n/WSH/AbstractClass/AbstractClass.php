<?php

namespace zapaDEVe7n\WSH\AbstractClass;

abstract class AbstractClass
{
	abstract public function getValue();

	public function printValue()
	{
		echo 'Занчение: ' . $this->getValue();
	}
}