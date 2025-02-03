<?php

declare(strict_types=1);

function view(string $viewName): string

{
    return "./views/{$viewName}.views.php";
}
