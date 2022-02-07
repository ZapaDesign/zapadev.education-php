<?php

namespace zapaDEVe7n\WSH\Stc;

class UserStatic
{
	private $role;

	private $name;

	public function __construct(string $role, string $name)
	{
		$this->role = $role;
		$this->name = $name;
	}

	public static function createAdmin(string $name)
	{
		return new self('admin', $name);
	}
}