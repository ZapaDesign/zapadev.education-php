<?php

namespace zapaDEVe7n\WSH\AbstractClass;

abstract class AbstractHuman
{
	private $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}

	abstract public function getGreetings(): string;

	abstract public function getMyNameIs(): string;

	public function introduceYourself(): string
	{
		return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' '
		       . $this->getName() . '.';
	}
}