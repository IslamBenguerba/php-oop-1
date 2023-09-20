<?php

class Movie
{
    public $nome;
    public $anno;
    public $listaGeneri = [];
    public $cover;

    public $linguaOriginale;
    public function __construct($nome, $anno, $generi,$cover)
    {
        $this->set_genere($generi);
        $this->set_cover($cover);
        $this->anno = $anno;
        $this->nome = $nome;
    }
    public function set_cover($cover){
        if($cover === null || $cover === ""){
            $cover = "https://upload.wikimedia.org/wikipedia/commons/c/cc/Video-film.svg";
            $this->cover = $cover;
        }else{
            $this->cover = $cover;
        }
    }
    public function set_genere($generi){
        $this->listaGeneri[] = $generi;
    }
    public function print_generi(){
        foreach($this->listaGeneri as $genere){
            foreach($genere as $element){
                echo($element).' ';
            }
            
        }
    }
}
