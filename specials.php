<?php
require __DIR__.'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, array(
    // Uncomment the line below to cache compiled templates
    // 'cache' => __DIR__.'/../cache',
     'debug' => true // turns on debugging --disable on production 
));
$twig->addExtension(new Twig_Extension_Debug());

$siteName = 'World Diamond Tool';
$pageTitle = 'Diamond Tools for any industry | $siteName';
$thisPage = $_SERVER['REQUEST_URI'];  // example: '/index.html'

$product = ($_SERVER['QUERY_STRING']); // URL's must be "index.html?=[product name]", for example "compounds"


echo $twig->render('specials_template.twig', array(

    'pageTitle' => $pageTitle,
    'siteName' => $siteName,
    'thisPage' => $thisPage,
    'product' => $product 

));
