<?php

require_once __DIR__ . '/FilmGenre.php';
class Movie
{     //Variabili di istanza
    public $title;
    public $year;
    public $language;
    public $genre;

    //Construct popolato
    function __construct(
        string $_title,
        int $_year,
        string $_language,
        FilmGenre $_genre
    ) {
        $this->title = $_title;
        $this->year = $_year;
        $this->language = $_language;
        $this->genre = $_genre;
    }

    //Funzioni
    function getTitle() //
    {
        return 'Il titolo è: ' . $this->title;
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

//Generi
$comedy = new FilmGenre('Commedia', 'Le ambientazioni variano da luoghi iconici come il palazzo reale in Inghilterra, a città americane, e altre ambientazioni colorate e vivaci che riflettono il tono comico e avventuroso del film.');
$fantasy = new FilmGenre('Fantascienza', 'L\'ambientazione è il pianeta Pandora, un mondo alieno caratterizzato da una vegetazione lussureggiante, paesaggi mozzafiato e una fauna e flora uniche.');

//Film
$minions = new Movie('Minions', 2015, 'Italiano', $comedy);
$avatar = new Movie('Avatar', 2010, 'Inglese', $fantasy);

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
            <li><?= $minions->getYear(); ?></li>
            <li><?= $minions->getLanguage(); ?></li>
            <li><?= $minions->genre->name; ?></li>
            <li><?= $minions->genre->setting; ?></li>

        </ul>

        <!--Senza funzioni-->
        <h2 class="fw-bold"> <?= $avatar->title; ?> </h2>
        <ul class="fw-bold">
            <li> Anno: <?= $avatar->year; ?></li>
            <li> Lingua: <?= $avatar->language; ?></li>
            <li> Genere: <?= $avatar->genre->name; ?></li>
            <li> Genere: <?= $avatar->genre->setting; ?></li>
        </ul>

    </main>

</body>

</html>