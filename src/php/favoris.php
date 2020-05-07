<?php
/**
 * Created by PhpStorm.
 * User: keeedl
 * Date: 02/12/2018
 * Time: 20:40
 */
use src\bdd\Utils;

include_once '../php/barre_menu.php';
require '../../vendor/autoload.php';
include('../bdd/Utils.class.php');

$loader = new Twig_Loader_Filesystem('../templates/');
$twig = new Twig_Environment($loader,array(
    'cache' => '../compil/',
));

$data=array();
$utilsService = new Utils();

$data['favoris'] = $utilsService->getAllFavoris(1);
$data['connexionState'] = isUserConnected();

echo $twig->render('favoris.html.twig' , $data);
