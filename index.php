<?php

require __DIR__ . '/vendor/autoload.php';

use App\Http\Router;
use App\Http\Request;

use App\Database\Connection;
use App\Database\QueryBuilder;
use App\Exceptions\NotFoundHttpException;

$database = new QueryBuilder(
    Connection::make('mysql', '127.0.0.1', 'pokemon', 'root', '')
);

require 'Routes.php';

$router = new Router($routes);

try {
    require($router->direct(Request::uri())); //Direct the traffic
} catch (NotFoundHttpException $nfhe) {
    $error = $nfhe->getMessage();
    require view('404');
}
