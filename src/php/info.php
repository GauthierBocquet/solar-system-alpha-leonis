<?php
/**
 * Created by PhpStorm.
 * User: frink
 * Date: 07/11/2018
 * Time: 08:39
 */

use src\bdd\Planete;
use src\bdd\Constellation;

include_once '../php/barre_menu.php';
require '../../vendor/autoload.php';
include_once('../bdd/Planete.class.php');
include_once('../bdd/Constellation.class.php');
include_once('../../TCPDF-master/tcpdf.php');

$loader = new Twig_Loader_Filesystem('../templates/');
$twig = new Twig_Environment($loader, array(
    'cache' => '../compil/',
));
$data = array();
/**
 *  PLANETES
 */
if (isset($_GET['planete']) && !empty($_GET['planete'])) {
    $planeteService = new Planete();

    $planete = $_GET['planete'];
    $id = $planeteService->getIdPlaneteByName($planete)['id'];
    if (!empty($id)) {
        $data['id'] = $id;
        $data['info_planete'] = $planeteService->getAllById($id);
        $data['is_favoris'] =  $planeteService->isFavoris($id,getSessionId());
    } else {
        $data['message_erreur'] = 'Planète inconnue';
    }
    $planeteService->close();
}
/**
 *  CONSTELLATIONS
 */
else if(isset($_GET['constellation']) && !empty($_GET['constellation'])) {
    $constellationService = new Constellation();

    $constellation = $_GET['constellation'];
    $id = $constellationService->getIdConstellationByAbv($constellation)['id'];
    if (!empty($id)) {
        $data['id'] = $id;
        $data['info_constellation'] = $constellationService->getAllById($id);
        $data['is_favoris'] =  $constellationService->isFavoris($id,getSessionId());

    } else {
        $data['message_erreur'] = 'Constellation inconnue';
    }
    $constellationService->close();
}
else{
    $data['message_erreur'] = 'Aucun Astre renseigné';
}
if( isset($_GET['pdf']) && !empty($_GET['pdf'])){
    if( !empty($data['info_constellation'] )) {
        $avant =array('Nom latin :','Ascension droite : ','Déclinaison :','Visibilité :','Méridien :','Nombre d\'étoile  :','Nombre d\'étoile brilliante:','Etoile la plus brilliante :','Etoile la plus proche:');
        $nom=array('nomLatin','ascensionDroite','declinaison','visibilite','meridien','nombreEtoile','nombreEtoileBrillante','etoileLaPlusBrillante','etoileLaPlusProche');

        $x=20;
        $y=70;
        $pdf = new TCPDF;                   // create TCPDF object with default constructor args
        $pdf->AddPage();                    // pretty self-explanatory
        $pdf->SetTitle($data['info_constellation']['nom']);
        $pdf->SetFont('dejavusans', '', 35);

        $pdf->Write(10,$data['info_constellation']['nom']);
        $pdf->SetFont('dejavusans', '', 10);
        for($i=0;$i<count($avant);$i++){
            $pdf -> MultiCell(45, 15 , $avant[$i].$data['info_constellation'][$nom[$i]], 1, 'L', 0, 0,$x,$y );
            $y+=15;
        }
        $pdf->SetAutoPageBreak(false, 0);

        if($dossier = opendir('../assets/img/'.$data['info_constellation']['nom'])){
            $y=20;
            while(false !== ($fichier = readdir($dossier))) {
                if($fichier != '.' && $fichier != '..' ) {
                    $pdf->Image('../assets/img/'.$data['info_constellation']['nom'].'/'.$fichier, 100, $y, 80, 80, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
                    $y+=85;
                }
            }
        }
        $pdf->Output($data['info_constellation']['nom'].'.pdf');
   // send the file
    } else if(!empty($data['info_planete'])){
        $avant =array('Masse :','Diamètre :','Densité :','Gravité :','Vitesse de libération :','Période de rotation :','Durée d\'une journée :','Distance du soleil :','Température moyenne :','Pression en surface :','Nombre de lunes :');
        $apres=array('10e24Kg','Km','Kg/m3','8.7 M/s2','Km/s','h','h','','C','','');
        $nom=array('mass','diameter','density','gravity','escapeVelocity','rotationPeriod','lengthDay','distanceFromSun','meanTemperature','surfacePressure','numberMoons');

        $x=20;
        $y=70;
        $pdf = new TCPDF;                   // create TCPDF object with default constructor args
        $pdf->AddPage();                    // pretty self-explanatory
        $pdf->SetTitle($data['info_planete']['nom']);
        $pdf->SetFont('dejavusans', '', 35);

        $pdf->Write(10,$data['info_planete']['nom']);
        $pdf->SetFont('dejavusans', '', 10);
        for($i=0;$i<count($avant);$i++){
            $pdf -> MultiCell(45, 15 , $avant[$i].$data['info_planete'][$nom[$i]].$apres[$i] , 1, 'L', 0, 0,$x,$y );
            $y+=15;
        }
        $pdf->SetAutoPageBreak(false, 0);

        if($dossier = opendir('../assets/img/'.$data['info_planete']['nom'])){
            $y=20;
            while(false !== ($fichier = readdir($dossier))) {
                if($fichier != '.' && $fichier != '..' ) {

                    $pdf->Image('../assets/img/'.$data['info_planete']['nom'].'/'.$fichier, 100, $y, 80, 80, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
                    $y+=85;
                }
            }
        }
        $pdf->Output($data['info_planete']['nom'].'.pdf');
    }
}
$data['connexionState'] = isUserConnected();
echo $twig->render('info.html.twig', $data);
