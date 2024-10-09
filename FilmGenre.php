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

    public $action;
    public $comedy;
    public $fantasy;
    public $horror;
    public $documentary;
}