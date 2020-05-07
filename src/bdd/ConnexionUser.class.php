<?php
/**
 * Created by PhpStorm.
 * User: keeedl
 * Date: 02/12/2018
 * Time: 00:42
 */


namespace  src\bdd;
include('../bdd/ConnexionMySql.class.php');

$username = $_POST['username'];
$password = $_POST['password'];

$connexionState = new ConnexionUser();
$connexionState->signIn($username, $password);

class ConnexionUser
{
    private $connexion;
    private $username;
    private $password;

    function __construct() {
        $this->connexion= new ConnexionMySql();
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
    }

    public function sessionStart($identifiant, $mdp) {
        echo $identifiant;
        echo'</br>';
        echo $mdp;
        $user = array(
            'identifiant' => $identifiant,
            'mdp' => $mdp,
        );
        session_start();
        $_SESSION["connected"] = $identifiant;
        $_SESSION["identifiant"] = $identifiant;

        $this->close();
        header('Location: ../php/index.php');

    }


//Connexion
    public function signIn($identifiant, $mdp)
    {
        $statement = $this->connexion->prepare('SELECT identifiant, mdp FROM `UTILISATEUR` WHERE identifiant= :identifiant AND mdp= :mdp');
        $statement->bindParam(':identifiant', $identifiant);
        $statement->bindParam(':mdp', $mdp);
        $statement->execute();
        echo $statement->rowCount();
        if($statement->rowCount() != 0) {
            $this->sessionStart($identifiant, $mdp);
        } else {
            // Afficher pop-up rouge "try again"
        }
    }

    function close(){
        $this->connexion = null;
    }


}