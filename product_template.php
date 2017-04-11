<?php
require __DIR__.'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, array(
    // Uncomment the line below to cache compiled templates
    // 'cache' => __DIR__.'/../cache',
));

$siteName = 'World Diamond Tool';
$pageTitle = 'Diamond Tools for any industry | $siteName';


$name = 'Test!!!';
// $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
// if (!$name) {
//     $name = "Bartholomew Staxx";
// }

echo $twig->render('product_template.twig', array(
    'name' => $name,
    'pageTitle' => $pageTitle,
    'siteName' => $siteName
));
