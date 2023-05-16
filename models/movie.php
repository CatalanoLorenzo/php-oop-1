<?php
class Movie{
    #variabili d'istanza
    public $title;
    public $descrition;
    public $views;
    public $year;
    public $generis;
    #metodo
    public function setViews($view){
        if ($view > 10) {
             $this->views = 'more views';
        }else {
            $this->views = 'low views';
        }
    }
    #costrutto
    function __construct(int $year,string $_title,string $_descrition,int $_views, Generis $generis)
    {
        $this->generis = $generis;
        $this->year = $year;
        $this->title = $_title;
        $this->descrition = $_descrition;
        $this->views = $_views;
    }
}
