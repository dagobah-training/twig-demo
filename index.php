<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once __DIR__ . '/vendor/autoload.php';

//caricamento engine
$loader = new FilesystemLoader(__DIR__ . '/templates/');
$twig = new Environment($loader, [
    'cache' => __DIR__ . '/templates_c', //cache template compilati
]);

//caricamento template
$template = $twig->load('index.html.twig');

//variabili template
$vars = [
    'page_title' => 'Demo Twig - Stage Netsons'
];

echo $template->render($vars);

