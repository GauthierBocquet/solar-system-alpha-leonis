<?php
/**
 * Created by PhpStorm.
 * User: frink
 * Date: 07/11/2018
 * Time: 11:46
 */
namespace  src\bdd;
include_once('ConnexionMySql.class.php');
class Utils
{
    private $connexion;

    function __construct()
    {
        $this->connexion = new ConnexionMySql();
    }

    public function recherche($saisie){
        $resultArray=array();
        $statement = $this->connexion->prepare("select nom,tags from PLANETE where tags like '%$saisie%' ");
        $statement->execute();
        $resultArray['planet']=$statement->fetchAll(\PDO::FETCH_ASSOC);

        $statement = $this->connexion->prepare("select nom,tags from CONSTELLATION where tags like '%$saisie%' ");
        $statement->execute();
        $resultArray['constellation']=$statement->fetchAll(\PDO::FETCH_ASSOC);

        return $resultArray;
    }
    public function getAllFavoris($user_id){

        $statement = $this->connexion->prepare("select nom,tags from PLANETE inner join favoris on planete.id=id_planete where favoris.id_utilisateur=:user_id");
        $statement->bindValue(':user_id', $user_id, \PDO::PARAM_INT);
        $statement->execute();
        $resultPlanet=$statement->fetchAll(\PDO::FETCH_ASSOC);

        $statement = $this->connexion->prepare("select abv,nom,tags from constellation inner join favoris on constellation.id=id_constellation where favoris.id_utilisateur=:user_id");
        $statement->bindValue(':user_id', $user_id, \PDO::PARAM_INT);
        $statement->execute();
        $resultConstellation=$statement->fetchAll(\PDO::FETCH_ASSOC);
        return array_merge($resultPlanet,$resultConstellation);
    }
    function close(){
        $this->connexion = null;
    }

}