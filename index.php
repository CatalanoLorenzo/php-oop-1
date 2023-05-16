<!-- create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.
Tra le varie proprietá, la classe Movie 'ha un' genere (sfruttare il concetto di composizione).
Bonus 1:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice:
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
Bonus 2 (opzionale)
Modificare la classe Movie in modo che accetti piú di un genere. -->
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
             $this -> views = 'more views';
        }else {
            $this -> views = 'low views';
        }
    }
    #costrutto
    function __construct(int $year, Generis $generis)
    {
        $this -> generis = $generis;
        $this -> year = $year;
    }
}
class Generis {
    public $primary_gen;
    public $secondary_gen;
    function __construct(string $_primary_gen,string $_secondary_gen,)
    {
        $this -> primary_gen = $_primary_gen;
        $this -> secondary_gen = $_secondary_gen;
    }
}

$titanic = new Movie(2020,new Generis('romantic','action'));
$avatar = new Movie(2023,new Generis('action','sci-fi'));

var_dump($titanic);
var_dump($avatar);

$titanic ->title = 'titanic';
$titanic ->descrition = 'lorem1';
$titanic->setViews(11);






$avatar ->title = 'avatar';
$avatar ->descrition = 'lorem2';
$avatar->setViews(4);

var_dump($titanic);
var_dump($avatar);
