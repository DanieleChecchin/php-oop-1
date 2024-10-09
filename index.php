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
        return 'Il titolo è:' . $this->title;
    }

    function getGenre()
    {
        return 'Il titolo è:' . $this->genre;
    }

    function getYear()
    {
        return 'Il titolo è:' . $this->year;
    }

    function getLanguage()
    {
        return 'Il titolo è:' . $this->language;
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
    <!--create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->
    <main class="container py-5">

        <h1 class="fw-bold text-center"> PHP OOP 1 </h1>

    </main>
</body>

</html>