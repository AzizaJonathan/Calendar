<?php 
require '../vendor/autoload.php';


function e404 () {
    require '../public/404.php';
    exit();
}

function dd(...$vars) {
    foreach($vars as $var) {
        echo '<pres>';
        print_r($var);
        echo '</pres>';
    }
}

function get_pdo (): PDO {
    return new \PDO('mysql:host=localhost;dbname=tutocalendar', 'explorateur', 'Ereul9Aeng', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}

function h(?string $value): string {
    if ($value === null) {
        return '';
    }
    return htmlentities($value);
}
function render(string $view, $parameters = []) {
    extract($parameters);
    include "../views/{$view}.php";
}