<?php

require_once 'vendor/autoload.php';

//Twig uses a loader (Twig_Loader_String) to locate templates,
// and an environment (Twig_Environment) to store the configuration.
        
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

//The render() method loads the template passed as a first argument 
//and renders it with the variables passed as a second argument.
echo $twig->render('index.html',array('name' => 'David'));
