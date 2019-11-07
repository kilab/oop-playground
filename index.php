<?php

namespace OOP;

use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

require __DIR__ . '/vendor/autoload.php';

// some stuff to nice debug flow
Debug::enable();
ErrorHandler::register();
ExceptionHandler::register();

// specify whether display special info in class methods when are calling
define('DISPLAY_METHODS_INFO', true);

if (!isset($_SERVER['PATH_INFO'])) {
    $pathParts = [];
} else {
    $pathParts = explode('/', $_SERVER['PATH_INFO']);
    unset($pathParts[0]);
    $pathParts = array_values($pathParts);
}

if (isset($pathParts[0])) {
    $filePath = './src/Controller/' . ucfirst($pathParts[0]) . '.php';

    if (!file_exists($filePath)) {
        http_response_code(404);
        die("Request file: '$filePath' not found.");
    } else {
        include $filePath;
        die;
    }
}

$availableControllers = scandir(__DIR__ . '/src/Controller');

echo '<h1>Try one of the following entry points:</h1>';
echo '<ul>';

foreach ($availableControllers as $availableController) {
    if ($availableController === '.' || $availableController === '..') {
        continue;
    }

    $controllerName = basename($availableController, '.php');

    echo "<li><a href=\"/$controllerName\">$controllerName</a></li>";
}

echo '</ul>';
die;