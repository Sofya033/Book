<?php

class GenreClass{

	private $genres = [];

	private $genre;

	public function __construct(string $genre)
	{
		$this->genre = $genre;
		array_push($this->genres, $this->genre);
	}


	public function addGenre(string $genre)
	{
		array_push($this->genres, $genre);
	}

	public function getGenres()
	{
		return $this->genres;
	}
}  
