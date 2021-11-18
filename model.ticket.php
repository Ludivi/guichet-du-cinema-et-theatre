<?php

abstract class Ticket
{

    protected $id;
    protected $date;
    protected $tarif;
    protected $place;


    public function __construct($date, $tarif, $place)
    {
        $this->date = $date;
        $this->place = $place;
        $this->tarif = $tarif;

        $this->id = date("mY") . rand(0, 9) . rand(0, 9);
    }

    // cette fonction devra être codée dans les classes filles, le but étant de produire le code html du ticket
    public abstract function render();

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }
}
