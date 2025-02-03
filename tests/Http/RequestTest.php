<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Http\Request;

class RequestTest extends TestCase
{
    public function test_get_uri()
    {
        $_SERVER['REQUEST_URI'] = "/test/path/";

        $this->assertSame("test/path", Request::uri());
    }
}
