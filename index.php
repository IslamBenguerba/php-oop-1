<?php
require_once('./classi/Movie.php');
require_once('./Lista.php');
// $nomeFilm = $_GET['nomeFilm'];
// $annoFilm = $_GET['AnnoFilm'];
// $genere = $_GET['GenereFilm'];
session_start();

// $film1 = new Movie('Attacco al potere', 2021, 'Azione');
$arrayFilmCLass = [];
foreach ($arrayFilm as $film) {
    $filmClass = new Movie($film['nomeFilm'], $film['annoFilm'], $film['genere'], $film['immagine']);
    $arrayFilmCLass[] = $filmClass;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex flex-column align-items-center justify-content-center h-100" style="
    margin-top: 4rem;">


        <div class="container ">
            <form action="addFilm.php">
                <label for="">Nome del film:</label>
                <input class="form-control type="text" name="nomeFilm">
                <label for=""> Anno del film</label>
                <input class="form-control type="number" name="AnnoFilm">
                <label for="">Genere del film</label>
                <input class="form-control type="text" name="GenereFilm">
                <label for=""> inserisci un immagine</label>
                <input class="form-control  type="text" name="ImmagineFilm">
                <button class="btn btn-success" type="submit"> Carica</button>
            </form>
        </div>
        <div class="container d-flex flex-wrap mt-3">
            <?php foreach ($arrayFilmCLass as $film) {
            ?>
                <div class="card" style="flex-basis: calc(100% /4);">
                    <img class="card-img-top" src="<?php echo $film->cover ?>" alt="">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $film->nome;   ?>
                        </h5>
                        <p>
                        <h6>Anno: <?php echo $film->anno   ?> </h6>
                        <h6>Genere: <?php $film->print_generi() ?>
                        </h6>
                        </p>
                    </div>
                </div>
            <?php
            } ?>
        </div>
    </div>
</body>

</html>