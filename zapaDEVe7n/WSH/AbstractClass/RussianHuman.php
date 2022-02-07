<?php

namespace zapaDEVe7n\WSH\AbstractClass;

class RussianHuman extends AbstractHuman
{
	public $greetings;
	public $my_name_is;

	public function getGreetings(): string
	{
		return 'Привет';
	}

	public function getMyNameIs(): string
	{
		return 'Меня зовут';
	}
}