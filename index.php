<?php

class Movie
{     //Variabili di istanza
    public $title;
    public $genre;
    public $year;
    public $language;

    //Construct popolato
    function __construct(
        string $_title,
        string $_genre,
        int $_year,
        string $_language
    ) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->language = $_language;
    }

    //Funzioni
    function getTitle() //
    {
        return 'Il titolo è: ' . $this->title;
    }

    function getGenre()
    {
        return 'Genere: ' . $this->genre;
    }

    function getYear()
    {
        return 'Anno di uscita: ' . $this->year;
    }

    function getLanguage()
    {
        return 'Lingua: ' . $this->language;
    }
}

$minions = new Movie('Minions', 'Animazione', 2015, 'Italiano');

$avatar = new Movie('Avatar', 'Fantascienza', 2010, 'Inglese');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="container py-5">

        <h1 class="fw-bold text-center"> PHP OOP 1 </h1>

        <!--Funzioni-->
        <h2 class="fw-bold"> <?= $minions->getTitle(); ?> </h2>
        <ul class="fw-bold">
            <li><?= $minions->getGenre(); ?></li>
            <li><?= $minions->getYear(); ?></li>
            <li><?= $minions->getLanguage(); ?></li>
        </ul>

        <!--Senza funzioni-->
        <h2 class="fw-bold"> <?= $avatar->title; ?> </h2>
        <ul class="fw-bold">
            <li> Genere: <?= $avatar->genre; ?></li>
            <li> Anno: <?= $avatar->year; ?></li>
            <li> Lingua: <?= $avatar->language; ?></li>
        </ul>

    </main>

</body>

</html>