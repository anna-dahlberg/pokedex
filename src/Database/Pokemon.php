<?php

declare(strict_types=1);

namespace App\Database;

class Pokemon
{

    public function __construct(public string $name, public int $id) {}

    public function getImageUrl()
    {
        $imageUrl = "https://img.pokemondb.net/sprites/bank/normal/" . strtolower($this->name) . ".png";
        return $imageUrl;
    }
}
