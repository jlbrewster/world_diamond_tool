<?php
require __DIR__.'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, array(
    // Uncomment the line below to cache compiled templates
    // 'cache' => __DIR__.'/../cache',
     'debug' => true // turns on debugging (!disable on production  - this enable trhe use of the dump() function  !)
));
$twig->addExtension(new Twig_Extension_Debug());

$siteName = 'World Diamond Tool';
$pageTitle = 'Diamond Tools for any industry | $siteName';
$thisPage = $_SERVER['REQUEST_URI'];  // example: '/index.html'

$product = ($_SERVER['QUERY_STRING']); // URL's must be "index.html?=[product name]", for example "compounds"

// When including a template, its name does not need to be a string. For instance, the name can depend on the value of a variable:
// {% include var ~ '_foo.html' %}


// ^ which means we should not need any this (below) anymore?

// $productContent = NULL;
// //TODO: $productContent can be a variable conditional, something like: the part of the url after the first "=" is equal to this variable.

// 	if ($thisPage == '/index.php?product=compounds'){
// 		$productContent = "compounds"; 
// 	}
// 	elseif ($thisPage == '/product_template.php'){
// 		$productContent = "copyright"; 
// 	}
// 	elseif  ($thisPage == '/drills.html'){
// 		$productContent = "drills"; 
// 	}
// 	else {
// 		$productConetent = NULL;
// 	}


echo $twig->render('product_template.twig', array(

    'pageTitle' => $pageTitle,
    'siteName' => $siteName,
    'thisPage' => $thisPage,
    'product' => $product 

));
