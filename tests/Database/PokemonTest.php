<?php

declare(strict_types=1);

namespace tests;

use App\Database\Pokemon;
use PHPUnit\Framework\TestCase;

class PokemonTest extends TestCase
{

    public function test_create_pokemon(): void
    {
        $pokemon = new Pokemon("Charizard", 1);

        $this->assertSame("Charizard", $pokemon->name);
        $this->assertSame(1, $pokemon->id);
        $this->assertSame(
            "https://img.pokemondb.net/sprites/bank/normal/charizard.png",
            $pokemon->getImageUrl()
        );
    }
}
