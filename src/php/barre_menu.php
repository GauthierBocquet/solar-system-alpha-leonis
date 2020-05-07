<?php
/**
 * Created by PhpStorm.
 * User: keeedl
 * Date: 02/12/2018
 * Time: 20:36
 */


function isUserConnected() {
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!empty($_SESSION["connected"]) ) {
        return true;
    } else {
        return null;
    }
}

function getSessionId() {
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!empty($_SESSION["connected"]) ) {
        return $_SESSION["id"];
    } else {
        return null;
    }
}