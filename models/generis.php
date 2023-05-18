<?php
class Generis { 
    public $primary_gen;
    public $secondary_gen;
    function __construct(string $_primary_gen,string $_secondary_gen,)
    {
        $this->primary_gen = $_primary_gen;
        $this->secondary_gen = $_secondary_gen;
    }
}