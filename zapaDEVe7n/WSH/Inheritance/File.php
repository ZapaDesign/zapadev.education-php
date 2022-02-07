<?php

namespace zapaDEVe7n\WSH\Inheritance;

class File
{
	private $title;

	public function __construct(string $title)
	{
		$this->title = $title;
	}

	private function toUpperTitle()
	{
		return strtoupper($this->title);
	}

	public function getUpperTitle()
	{
		return $this->toUpperTitle();
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function printTitle()
	{
		print_r($this->title);
	}

	public function __destruct()
	{

	}
}