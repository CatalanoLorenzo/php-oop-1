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
include __DIR__ . "/models/movie.php";
include __DIR__ . "/models/generis.php";
include __DIR__ . "/db.php";
/* var_dump($titanic);
var_dump($avatar); */
/* $titanic->title = 'titanic';
$titanic->descrition = 'lorem1';
$titanic->setViews(11);
$avatar->title = 'avatar';
$avatar->descrition = 'lorem2';
$avatar->setViews(4);
 */
/* echo ('title: ' . $avatar->title);
echo ('descrition: ' . $avatar->descrition);
echo ('year: ' . $avatar->year);
echo ('genre one : ' . $avatar->generis->primary_gen);
echo ('genre two : ' . $avatar->generis->secondary_gen);
echo ('title: ' . $titanic->title);
echo ('descrition: ' . $titanic->descrition);
echo ('year: ' . $titanic->year);
echo ('genre one : ' . $titanic->generis->primary_gen);
echo ('genre two : ' . $titanic->generis->secondary_gen); */
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <h1>Film</h1>
    </header>
    <main>
        <div class="container">
            <div class="row ">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-header p-0">
                                <h2 class="text-center "><?= $movie->title; ?></h2>
                            </div>
                            <div class="card-body">
                                <span class="text-center">Descrizione: </span>
                                <span><?= $movie->descrition; ?></span>
                                <br>
                                <br>
                                <span class="text-center">Anno: </span>
                                <span><?= $movie->year; ?></span>
                                <br>
                                <hp class="text-center">Genre: </hp>
                                <span><?= $movie->generis->primary_gen; ?></span>
                                <span>,</span>
                                <span><?= $movie->generis->secondary_gen; ?></span>
                                <br>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
    <footer>
        <!-- place foote r here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>