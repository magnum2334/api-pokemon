<?php

use Illuminate\Support\Facades\Http;


Class Consult
{
    Static function ConsultPokemon($name){

        $linkpokemon='https://pokeapi.co/api/v2/pokemon/';        
        $pokemon = Http::get($linkpokemon.$name);
        $pokemon = $pokemon->json();
        return $pokemon; 
    }
}
?>