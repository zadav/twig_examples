<?php

namespace TwigTest\Examples;

require_once 'vendor/autoload.php';
require_once 'class/Article.php';
require_once 'class/Auteur.php';


use TwigTest\Classes\Article;
use TwigTest\Classes\Auteur;


/**
 * Construct test objects
 */
$date = \DateTime::createFromFormat('d/m/Y','12/03/1983');
$auteur1 = new Auteur(1, 'David' , 'ZAOUI',$date ,'Je suis un rédacteur!!' );
$auteur2 = new Auteur(1, 'Jean' , 'Dupond', $date,'Passionné d\'Histoire ' );

$article1 = new Article('1', 'Mon Article 1', 'La description de mon article', $auteur1, new \DateTime('now'));
$article2 = new Article('2', 'Mon Article 2', 'Bienvenue chez les gnous', $auteur1, new \DateTime('now'));
$article3 = new Article('3', 'Mon Article 3', 'La plongée sous marine', $auteur2, new \DateTime('now'));
$article4 = new Article('4', 'Mon Article 4', 'Yop yop!! tututut', $auteur2, new \DateTime('now'));
$article5 = new Article('5', 'Mon Article 5', 'La description de mon article 5', $auteur2, new \DateTime('now'));

$articles  = array($article1,$article2,$article3,$article4,$article5);

//Twig uses a loader (Twig_Loader_String) to locate templates,
// and an environment (Twig_Environment) to store the configuration.
        
$loader = new \Twig_Loader_Filesystem('templates');
$twig = new \Twig_Environment($loader);

//The render() method loads the template passed as a first argument 
//and renders it with the variables passed as a second argument.
echo $twig->render('twig_examples.html.twig',array('articles' => $articles));
