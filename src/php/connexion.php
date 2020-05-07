<?php
/**
 * Created by PhpStorm.
 * User: keeedl
 * Date: 21/11/2018
 * Time: 11:27
 */

include_once '../php/barre_menu.php';
require '../../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../templates/');
$twig = new Twig_Environment($loader,array(
    'cache' => '../compil/',
));


$connexionState = isUserConnected();

echo $twig->render('connexion.html.twig', $connexionState);
