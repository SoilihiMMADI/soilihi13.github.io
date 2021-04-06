<?php
require_once './Include/Constantes.inc.php';

if (!isset($_REQUEST['action'])){
    require_once './Controleurs/C_Accueil.php';
}
else{
    switch ($_REQUEST['action']) {
        case ACCUEIL:
            require_once './Controleurs/C_Accueil.php';
            break;
        case PPE:
            require_once './Controleurs/C_PPE.php';
            break;
        case STAGE:
            require_once './Controleurs/C_Stage.php';
            break;
        case CONTACT:
            require_once './Controleurs/C_Contact.php';
            break;
        default:
            echo 'ERREUR. Cette page n\'existe pas';
            break;
    }
}
