<?php 
$response = file_get_contents("./listaFilm.json");

$arrayFilm = json_decode($response,true);


