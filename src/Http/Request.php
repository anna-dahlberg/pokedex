<?php

declare(strict_types=1);

namespace App\Http;

class Request
{

    public static function uri(): string
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }
}
