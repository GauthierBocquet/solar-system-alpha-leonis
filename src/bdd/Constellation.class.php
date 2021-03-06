<?php
/**
 * Created by PhpStorm.
 * User: frink
 * Date: 07/11/2018
 * Time: 11:46
 */
namespace  src\bdd;
include_once('ConnexionMySql.class.php');

class Constellation
{
    private $connexion;

    function __construct() {
        $this->connexion= new ConnexionMySql();
    }

    public function getIdConstellationByAbv($abv){
        $statement = $this->connexion->prepare('select id from CONSTELLATION where abv = :abv');
        $statement->bindValue(':abv',$abv,\PDO::PARAM_STR);
        $statement->execute();
        $result=$statement->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllById($id)
    {
        $statement = $this->connexion->prepare('select * from CONSTELLATION where id=:id');
        $statement->bindValue(':id',$id,\PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC)[0];
    }
    public function addToFav($user_id,$id){
        if(!$this->isFavoris($id,$user_id)) {
            $statement = $this->connexion->prepare('INSERT IGNORE INTO favoris(id_utilisateur,date_creation,id_constellation) values(:user_id,curdate(),:id) ');
            $statement->bindValue(':user_id', $user_id, \PDO::PARAM_INT);
            $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        } else{
            return true;
        }
        $ok=$statement->execute();
        return $ok;
    }

    public function isFavoris($id,$user_id)
    {
        $statement = $this->connexion->prepare('select id from favoris where id_constellation =:id and  id_utilisateur=:user_id');
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->bindValue(':user_id', $user_id, \PDO::PARAM_INT);
        $statement->execute();
        if ($statement->rowCount() >0) {
            return true;
        }
        return false;
    }
    public function close(){
        $this->connexion = null;
    }

}