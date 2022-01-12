<?php
namespace App\Http\Controllers\helpers;

use Illuminate\Support\Facades\Http;

Class Consult
{
    Static function ConsultPokemon($name){

        $linkpokemon='https://pokeapi.co/api/v2/pokemon/';        
        $pokemon = Http::get($linkpokemon.$name);
        $pokemon = $pokemon->json();
        return $pokemon; 
    }
    Static function ConsultType($type){

        $pokemon = Http::get('https://pokeapi.co/api/v2/type/'.$type);
        $pokedex = $pokemon->json();
        $pokemon = json_decode(json_encode($pokedex))->pokemon;
        return $pokemon; 
    }
}
?>