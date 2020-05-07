<?php
/**
 * Created by PhpStorm.
 * User: keeedl
 * Date: 02/12/2018
 * Time: 02:49
 */

namespace src\bdd;
include('../bdd/ConnexionMySql.class.php');


$username = $_POST['username'];
$password = $_POST['password'];

$connexionState = new InscriptionUser();
$connexionState->register($username, $password);

class InscriptionUser
{
    private $connexion;
    private $username;
    private $password;

    function __construct() {
        $this->connexion= new ConnexionMySql();
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
    }

    public function insertUser() {
        echo '<br>';
        echo 'inserting...';
    }

//Inscription
    public function register($identifiant, $mdp)
    {

        echo $identifiant;
        echo '<br>';
        echo $mdp;
        if($this->checkIdAvailability($identifiant)) {
            $statement = $this->connexion->prepare('INSERT INTO `UTILISATEUR`(`identifiant`, `mdp`) VALUES (:identifiant,:mdp)');
            $statement->bindParam(':identifiant', $identifiant);
            $statement->bindParam(':mdp', $mdp);
            $statement->execute();
            $this->insertUser();
        } else {
// "id not available"
// sinon ne rien faire ?
        }
    }

//Check if Id's available to register
    public function checkIdAvailability($identifiant) {

        $statement = $this->connexion->prepare('SELECT identifiant FROM `UTILISATEUR` WHERE identifiant= :identifiant');
        $statement->bindParam(':identifiant', $identifiant);
        $statement->bindParam(':mdp', $mdp);
        $statement->execute();
        if($statement->rowCount() == 0) {
            return true;
        } else {
            return false;
        }
    }
}