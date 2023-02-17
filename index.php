<?php 

include_once __DIR__ . './data/movies.php';
include_once __DIR__ . './models/movie.php';


$movies_library = [];
foreach ($movies as $movie) {
    $movie_object = new Movie ($movie['id'], $movie['title'], $movie['director'], $movie['weft'], $movie['published'], $movie['genre'], $movie['views'], $movie['resolution']);
    $movies_library[] = $movie_object;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Movie</title>
</head>
<body>
    <section id="movie" class="w-25 text-center m-auto mt-5">
        <?php foreach ($movies_library as $movie) : ?>
            <div class="col border border-primary my-3">
                <h1> <?= $movie->id ?> </h1>
                <p> <?= $movie->published ?> </p>
                <h4> <?= $movie->genre ?> </h4>
                <p> <?= $movie->views ?> </p>
                <h5> <?= $movie->popularity($movie->views) ?> </h5>
                <h6> <?= $movie->resolution ?> </h6>
                <h4> <?= $movie->director ?> </h4>
                <h4> <?= $movie->weft ?> </h4>
            </div>
        <?php endforeach; ?>    
    </section>
    
</body>
</html>