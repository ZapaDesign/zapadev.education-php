<?php

namespace zapaDEVe7n\WSH\AbstractClass;

class EnglishHuman extends AbstractHuman
{

	public $greetings;
	public $my_name_is;

	public function getGreetings(): string
	{
		return 'Hello!';
	}

	public function getMyNameIs(): string
	{
		return 'My name is';
	}
}