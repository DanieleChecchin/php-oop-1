<?php

class FilmGenre
{
    public $name;
    public $setting;

    function __construct($_name, $_setting)
    {
        $this->name = $_name;
        $this->setting = $_setting;
    }
}