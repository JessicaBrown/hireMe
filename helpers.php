<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @ return void
 * 
 */

function loadView($name)
{
    $viewPath = basePath("views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View " . $name . " not found!";
    }
}

/**
 * Load a partials
 * 
 * @param string $name
 * @ return void
 * 
 */

function loadPartials($name)
{
    $partialPath = basePath("views/partials/{$name}.php");
    // inspect($partialPath);
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial " . $name . " not found!";
    }
}

/**
 * Debugg - Inspect and Inspect and Die
 * 
 * @params mixed $value
 * @return void
 */

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function inspectAndDie($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
