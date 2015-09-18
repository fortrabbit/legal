<?php

include __DIR__ . '/../vendor/autoload.php';


// define a working directory
define('APP_PATH', dirname(__DIR__)); // PHP v5.3+
define('DEBUGGING', in_array($_SERVER['SERVER_NAME'], ['www-fortrabbit-com', 'localhost']));

// load
require APP_PATH . '/vendor/autoload.php';

// setup custom Twig view
$twigView                   = new \Slim\Views\Twig();
$twigView->parserExtensions = DEBUGGING
    ? ['Twig_Extension_Debug', 'Twig_Extension_StringLoader']
    : ['Twig_Extension_StringLoader'];
$twigView->parserOptions    = [
    'debug'      => DEBUGGING,
    'cache'      => false,     //'./templates/cache',
    'autoescape' => false
];
$twigView->twigTemplateDirs = [APP_PATH . '/templates'];
$twigView->getEnvironment()->addFilter(new Twig_SimpleFilter('markdown', function ($value) {
    return Michelf\MarkdownExtra::defaultTransform($value);
}));
$twigView->getEnvironment()->addFilter(new Twig_SimpleFilter('json', function ($value) {
    return json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}));
$twigView->getEnvironment()->addFilter(new Twig_SimpleFilter('dd', function ($value) {
    return '<pre><code>'. json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE). '</code></pre>';
}));
$twigView->getEnvironment()->addFilter(new Twig_SimpleFilter('decimal', function ($value) {
    return number_format($value, 2);
}));
$twigView->getEnvironment()->addFilter(new Twig_SimpleFilter('nice_number', function ($value) {
    return rtrim(preg_replace('/0+$/', '', number_format($value, 2)), '.');
}));
$twigView->getEnvironment()->addFilter(new Twig_SimpleFilter('shuffle', function ($value) {
    shuffle($value);
    return $value;
}));

// $twigView->parserExtensions = array(
//     new Twig_SimpleFunction('file_get_contents', function ($file) {
//         return file_get_contents($file);
//     })
// );

$twigView->getEnvironment()->addFunction(new Twig_SimpleFunction('file_get_contents', function ($file) {
    return file_get_contents($file);
}));


// init app
$app = New \SlimController\Slim(array(
    'templates.path'             => APP_PATH . '/templates',
    'controller.class_prefix'    => '\Frbit\WwwApp\Controllers',
    'controller.class_suffix'    => 'Controller',
    'controller.method_suffix'   => 'Action',
    'controller.template_suffix' => 'twig',
    'controller.param_prefix'    => null,
    'debug'                      => DEBUGGING,
    'view'                       => $twigView
));

$app->addRoutes(array(
    '/pricing'           => 'Pages:pricing',
    '/pricing/:template' => 'Pages:pricing',

    '/support'           => 'Pages:support',
    '/'                  => 'Pages:index',
    '/:topic'            => 'Pages:index',
    '/:topic/'           => 'Pages:index',
    '/:topic/:page'      => 'Pages:index',
    '/:topic/:page/'     => 'Pages:index',
    '/:topic/:page/:sub' => 'Pages:index',
));

$app->run();
