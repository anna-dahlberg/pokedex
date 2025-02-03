<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{

    public function test_view()
    {
        $this->assertStringEndsWith("./views/abc.views.php", view("abc"));
    }
}
