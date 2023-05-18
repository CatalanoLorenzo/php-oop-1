
<?php
include __DIR__ . "/models/movie.php";
include __DIR__ . "/models/generis.php";
include __DIR__ . "/db.php";

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>