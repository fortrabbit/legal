<?php

include __DIR__ . '/../vendor/autoload.php';


// define a working directory
define('APP_PATH', dirname(__DIR__)); // PHP v5.3+
define('DEBUGGING', in_array($_SERVER['SERVER_NAME'], ['www-fortrabbit-com', 'www.fortrabbit.dev', 'localhost']));

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
$twigView->getEnvironment()->addFilter(new Twig_SimpleFilter('currency', function ($value) {

        if (isset($_COOKIE['currency']) || isset($_GET['currency'])) {
            if (isset($_GET['currency']) && strtoupper($_GET['currency']) === 'USD') {
                $_COOKIE['currency'] = 'USD';
                return str_replace('€', '$', $value);
            }
            if (isset($_COOKIE['currency']) && strtoupper($_COOKIE['currency']) === 'USD') {
                return str_replace('€', '$', $value);
            }
        }

        return $value;
}));
$twigView->getEnvironment()->addFunction(new Twig_SimpleFunction('gravatar', function($email, $size = 80) {
    return "//www.gravatar.com/avatar/" . md5($email) . ".jpg?s=$size&d=retro&r=pg";
}));

$twigView->getEnvironment()->addFunction(new Twig_SimpleFunction('getUrl', function($property = '') {
    switch($property) {
        case 'www':
            return (DEBUGGING) ? 'http://www.fortrabbit.dev' : 'http://www.fortrabbit.com';
        case 'dashboard':
            return (DEBUGGING) ? 'http://dashboard.fortrabbit.dev' : 'https://dashboard.fortrabbit.com';
        case 'help':
            return (DEBUGGING) ? 'http://help.fortrabbit.dev' : 'http://help.fortrabbit.com';
        case 'blog':
            return (DEBUGGING) ? 'http://blog.fortrabbit.dev' : 'http://blog.fortrabbit.com';
    }

}));


$twigView->getEnvironment()->addFunction(new Twig_SimpleFunction('getResource', function($name = '', $filterAttr = '', $filterVal = '') {

    $resourcesPath = realpath(__DIR__ . '/../resources');
    $resource = json_decode(file_get_contents($resourcesPath . "/{$name}.json"));

    if ($filterAttr && $filterVal) {
        $resource = array_filter($resource, function($item) use ($filterAttr, $filterVal) {
            return ($item->$filterAttr == $filterVal);
        });
    }

    return array_values($resource);

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
    '/country.js'        => 'Pages:country',
    '/pricing'           => 'Pages:pricingUni',
    '/pricing-pro'       => 'Pages:pricingPro',
    '/customers'         => 'Pages:customers',
    '/customers/:category'=> 'Pages:customersApps',
    '/company-plans'     => 'Pages:companyPlans',
    '/'                  => 'Pages:index',
    '/:topic'            => 'Pages:index',
    '/:topic/'           => 'Pages:index',
    '/:topic/:page'      => 'Pages:index',
    '/:topic/:page/'     => 'Pages:index',
    '/:topic/:page/:sub' => 'Pages:index',
));

$app->run();
