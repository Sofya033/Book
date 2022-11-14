<?php

class AuthorClass extends GenreClass {

	private $surname;

	private $name;

	private $patronymic;

	public function __construct(string $surname, string $name, string $patronymic)
	{
		$this->surname = $surname;
		$this->name = $name;
		$this->patronymic = $patronymic;
	}

	public function fullName()
	{
		return $this->surname . " " . $this->name . " " . $this->patronymic;
	}
}