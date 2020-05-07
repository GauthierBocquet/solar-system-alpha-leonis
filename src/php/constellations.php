<?php
/**
 * Created by PhpStorm.
 * User: frink
 * Date: 07/11/2018
 * Time: 08:39
 */

require '../../vendor/autoload.php';
include_once '../php/barre_menu.php';

$loader = new Twig_Loader_Filesystem('../templates/');
$twig = new Twig_Environment($loader,array(
    'cache' => '../compil/',
));

$data=array();
$data['connexionState'] = isUserConnected();
echo $twig->render('constellations.html.twig' ,$data);
