<?php

require_once './book/BookClass.php';

$book = new BookClass("Ромео и Джульетта", 12, "Трагедия о любви юноши и девушки из двух враждующих веронских родов — Монтекки и Капулетти.");

var_dump($book);

require_once './book/GenreClass.php';

$book = new GenreClass("Трагедия", "Драма", "Любовь");

var_dump($book);

require_once './book/AuthorClass.php';

$book = new AuthorClass("Шекспир", "Уильям", "_");

var_dump($book);