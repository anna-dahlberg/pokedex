<?php

use App\Database\Pokemon;

$id = $_GET['id'];
$pokemon = $database->select()->from('pokemon')->where('id', '=', $id)->first();

// $pokemon = new Pokemon($pokemon['name'], $pokemon['id']);

require view('pokemon');
