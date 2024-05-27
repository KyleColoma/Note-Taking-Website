<?php

use Core\Session;
use Core\ValidationException;

session_start();

// Base Path of the Directory
const BASE_PATH = __DIR__ . "/../";

// Include Function File
require BASE_PATH . "Core/functions.php";

// Register an autoloader for classes
spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

// Include the Bootstrap File for allowing access to classes
require base_path("bootstrap.php");

// Create a new router instance from Router namespace
$router =  new \Core\Router();

// Include the file responsible for configuring the routes of the application
$routes = require base_path("routes.php");

// Obtain the current URI to get the path 
$uri = parse_url($_SERVER['REQUEST_URI'])["path"];
// Obtain the method and override if method exist
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try 
{
    // Route the request using the URI and METHOD
    $router->route($uri, $method);
}
catch (ValidationException $exception)
{
    Session::flash("errors", $exception->errors);
    Session::flash("old", $exception->old);

    return redirect($router->previousUrl());
}

Session::unflash();