<?php

//data query needs to be first because the data needs to exist before inserted

use App\Database\Pokemon;

$pokemonData = $database->select()->from('pokemon')->get();

$pokemonData = array_map(function ($p) {
    return new Pokemon($p['name'], $p['id']);
}, $pokemonData);



require view('pokedex');
