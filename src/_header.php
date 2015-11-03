<?php

session_start();

/** @var \Doctrine\ORM\EntityManager $em */
$em = require '../bootstrap.php';

/** TWIG */
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem([
    '../views',
]);


$twig = new Twig_Environment($loader,[
//'cache' => null,
]);


