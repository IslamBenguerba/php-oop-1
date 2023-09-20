<?php 
session_start();
$FilmName = $_GET['nomeFilm'];
$AnnoFilm = $_GET['AnnoFilm'];
$generiFilms = explode(' ',$_GET['GenereFilm']);
$GenereFilm =[];
$GenereFilm = $generiFilms;
var_dump($GenereFilm);
// $GenereFilm[] = $_GET['GenereFilm'];
$ImmagineFilm = $_GET['ImmagineFilm'] ?? null;

if(($FilmName && $AnnoFilm && $GenereFilm)!= null){
    $AnnoFilm =intval($AnnoFilm);
    if(strlen($AnnoFilm) === 4 && $AnnoFilm< 2026){
        echo ('');
    }else{
        echo ('i dati non sono corretti');
        die;
    }
}
echo $AnnoFilm;
$nuovoFilm=[
    "nomeFilm" => $FilmName,
    "annoFilm" => $AnnoFilm,
    "genere" => $GenereFilm,
    "immagine" => $ImmagineFilm

];

var_dump($nuovoFilm);
//prendo il DB
$response = file_get_contents("./listaFilm.json");
//codifico il db in array associativo
$arrayFilm = json_decode($response,true);
//aggiungo il film
$arrayFilm[] = $nuovoFilm;
//converto in stringa l'array
$newstrFilm = json_encode($arrayFilm,JSON_PRETTY_PRINT);
//lo pusho di nuovo nel json
$newrespone = file_put_contents("./listaFilm.json",$newstrFilm);
session_destroy();
header('location: ./index.php')

?>