<?php

class GenreClass{

	private $genres = [];

	private $genre;

	public function construct(string $genre, array $genres)
	{
		$this->genre = $genre;
		$this->genres = [];
	}

    public function genreSelection()
	{
		foreach ($genres as $key => $value) {
			array_push($value[1], $genre);
		}
		return $this->genre;
	}
}