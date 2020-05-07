<?php
/**
 * Created by PhpStorm.
 * User: frink
 * Date: 03/12/2018
 * Time: 20:43
 */
use src\bdd\Planete;
use src\bdd\Constellation;

include_once '../php/barre_menu.php';
include_once '../php/barre_menu.php';
require '../../vendor/autoload.php';
include_once('../bdd/Planete.class.php');
include_once('../bdd/Constellation.class.php');

$id=$_GET['id'];
$astre=$_GET['astre'];
$data=array();
if(isset($id) and !empty($id) and isset($astre) and !empty($astre)){
     if($astre =="planete" && isUserConnected()){
         $planeteService= new Planete();
         $ok=$planeteService->addToFav(getSessionId(),$id);
         $planeteService= new Planete();
         $data['ok'] = true;
     } else if ($astre =="constellation" && isUserConnected()){
         $constellationService= new Constellation();
         $ok=$constellationService->addToFav(getSessionId(),$id);
         $constellationService= new Planete();
         $data['ok'] = true;
     }
}
echo json_encode($data);
