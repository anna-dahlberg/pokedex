<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Exceptions\NotFoundHttpException;
use App\Http\Router;


class RouterTest extends TestCase
{
    public function test_route_request()
    {
        $routes = [
            "home" => "HomeController@index",
            "about" => "AboutController@show"
        ];
        $router = new Router($routes);

        $this->assertSame("HomeController@index", $router->direct("home"));
        $this->assertSame("AboutController@show", $router->direct("about"));
    }

    public function test_route_not_found()
    {

        $routes = ["home" => "HomeController@index"];
        $router = new Router($routes);

        $this->expectException(NotFoundHttpException::class);
        $this->expectExceptionMessage("No route defined for this URI.");

        $router->direct("non-existing-route");
    }
}
