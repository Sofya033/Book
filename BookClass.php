<?php

class BookClass {

	private $title;

	private $annotation;

	private $ageCategory;

	public function __construct(string $title, int $ageCategory, string $annotation)
	{
		$this->title = $title;
		$this->ageCategory = $ageCategory;
		$this->annotation = $annotation;
	}

	public function aboutBook()
	{
		return $this->title . '<br/>' . $this->ageCategory . '<br/>' . $this->annotation;
	}
}