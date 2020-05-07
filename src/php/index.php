<?php
/**
 * Created by PhpStorm.
 * User: frink
 * Date: 07/11/2018
 * Time: 08:39
 */

include_once '../php/barre_menu.php';
require '../../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../templates/');
$twig = new Twig_Environment($loader,array(
    'cache' => '../compil/',
));

$data=array();
$data['connexionState'] = isUserConnected();

echo $twig->render('index.html.twig' , $data);
