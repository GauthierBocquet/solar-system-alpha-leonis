<?php
/**
 * Created by PhpStorm.
 * User: frink
 * Date: 02/12/2018
 * Time: 22:22
 */


if(isset($_GET['astre']) && !empty($_GET['astre'])){
    $astre=strtolower($_GET['astre']);

    $urls = array();
    if($dossier = opendir('../assets/img/'.$astre)){
        while(false !== ($fichier = readdir($dossier))) {
            if($fichier != '.' && $fichier != '..' ) {
                $urls[]=$fichier;
            }
        }
    }
    echo json_encode($urls);
}