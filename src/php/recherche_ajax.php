<?php
/**
 * Created by PhpStorm.
 * User: frink
 * Date: 15/11/2018
 * Time: 16:14
 */

use src\bdd\Utils;

require '../../vendor/autoload.php';
include('../bdd/Utils.class.php');


if( isset($_GET['saisie']) && !empty($_GET['saisie']) ){
    $saisie = $_GET['saisie'];

    $utilsService = new Utils();

    $resultat=$utilsService->recherche($saisie);

    echo json_encode($resultat);

    $utilsService->close();
}