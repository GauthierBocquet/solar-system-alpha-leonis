<?php
/**
 * Created by PhpStorm.
 * User: frink
 * Date: 07/11/2018
 * Time: 11:46
 */

namespace src\bdd;


class ConnexionMySql extends \PDO
{
    public function __construct()
    {
        try {
            parent::__construct('mysql:dbname=alpha_leonis;host=localhost;port=3306;charset=utf8', 'root');
            //parent::__construct('mysql:dbname=alpha_leonis;host=localhost;port=8889', 'root', 'root');
        } catch (\PDOException $e){
            echo 'Connexion échouée :'.$e->getMessage();
        }
    }
}