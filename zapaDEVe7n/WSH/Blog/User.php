<?php

namespace zapaDEVe7n\WSH\Blog;

class User
{

	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}

}